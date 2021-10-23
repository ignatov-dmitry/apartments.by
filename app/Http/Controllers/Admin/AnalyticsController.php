<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\History;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AnalyticsController extends Controller{
    public function getCarts(){
        return view('admin.analytics.charts', [
            'head_text' => 'Аналитика',
            'apartment_count' => Apartment::all()->count()
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
            $apartmentsHistorySale[(explode('_', $key))[0]][(explode('_', $key))[1]] = round($sumSale / count($apartmentsHistorySale[(explode('_', $key))[0]][(explode('_', $key))[1]]), 2) ;
            $apartmentsHistoryRent[(explode('_', $key))[0]][(explode('_', $key))[1]] = round($sumRent / count($apartmentsHistoryRent[(explode('_', $key))[0]][(explode('_', $key))[1]]), 2) ;

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
