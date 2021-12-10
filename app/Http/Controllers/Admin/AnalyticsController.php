<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\History;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AnalyticsController extends Controller{
    public function getCarts(){
        $countApartments = Apartment::all()->count();
        $saleApartments = Apartment::whereTypeId(1)->get();
        $saleApartmentsAnalytics = array();

        foreach ($saleApartments as $saleApartment) {
            $saleApartmentsAnalytics[] = $saleApartment->price / $saleApartment->area;
        }

        $apartmentSaleCount = count($saleApartmentsAnalytics);
        $apartmentAverageSum = array_sum($saleApartmentsAnalytics) / $apartmentSaleCount;

        return view('admin.analytics.charts', [
            'head_text'                        => 'Аналитика',
            'apartment_count'                  => $countApartments,
            'apartment_sale_count'             => $apartmentSaleCount,
            'apartment_average_sum_per_square' => round($apartmentAverageSum),
            'apartment_average_sum'            => round(array_sum(array_column($saleApartments->toArray(), 'price')) / $countApartments)
        ]);
    }

    public function getPricesHistory(){
        $histories_groups = History::select(array('histories.*', 'histories.id as history_id', 'ap.id as apartment_id', 'ap.area', 'ap.type_id'))
            ->join('apartments as ap', 'histories.apartment_id', 'ap.id')
            ->orderBy('created_at')
            ->get()
            ->groupBy(function ($history){
                return Carbon::parse($history->created_at)->format('Y_m');
            });

        //dd($histories_groups);
        $rent_sale = Apartment::all('type_id')->groupBy('type_id');
        $sumSale = 0;
        $sumRent = 0;

        $apartmentsHistorySale = array();
        $apartmentsHistoryRent = array();
        foreach ($histories_groups as $key => $histories_group) {
            foreach ($histories_group as $history){
                if ($history->type_id == 1){
                    //dd($history);
                    $sumSale += $history->price / $history->area;
                    $apartmentsHistorySale[(explode('_', $key))[0]][(explode('_', $key))[1]][] = $history->price / $history->area;
                }
                elseif ($history->type_id == 2){
                    $sumRent += $history->price / $history->area;
                    $apartmentsHistoryRent[(explode('_', $key))[0]][(explode('_', $key))[1]][] = $history->price / $history->area;
                }
            }

            $year = (explode('_', $key))[0];
            $month = (explode('_', $key))[1];

            if (array_key_exists($month, $apartmentsHistorySale[$year]))
                $apartmentsHistorySale[$year][$month] = round($sumSale / count($apartmentsHistorySale[$year][$month]), 2);

            if (array_key_exists($month, $apartmentsHistoryRent[$year]))
                $apartmentsHistoryRent[$year][$month] = round($sumRent / count($apartmentsHistoryRent[$year][$month]), 2);

            $sumSale = 0;
            $sumRent = 0;
        }

        return response()->json([
            'rent_sale'     => array(isset($rent_sale[1]) ? count($rent_sale[1]) : 0, isset($rent_sale[2]) ? count($rent_sale[2]) : 0),
            'price_history_sale' => $apartmentsHistorySale,
            'price_history_rent' => $apartmentsHistoryRent
        ]);
    }
}
