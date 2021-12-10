@extends('layouts.others')

@section('content')
    <section class="blog_grid_section ">
        <div class="container-fluid layout_margin-top">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Аренда/Продажа</h2>
                    <canvas id="sale-rent"></canvas>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Cтатистика</h2>
                    <p><strong>Количество квартир на сайте: </strong>{{ $apartment_count }}</p>
                    <p><strong>Количество квартир на продажу: </strong>{{ $apartment_sale_count }}</p>
                    <p><strong>Средняя стоимость квартир: </strong>{{ $apartment_average_sum }} руб.</p>
                    <p><strong>Средняя цена за квадрат: </strong>{{ $apartment_average_sum_per_square }} руб.</p>

                </div>
            </div>
            <div class="row">
                <div class="offset-1 col-md-9">
                    <h2 class="text-center">Динамика цен продажи жилья (цена за м. кв.)</h2>
                    <canvas id="history"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="offset-1 col-md-9">
                    <h2 class="text-center">Динамика цен аренды жилья (цена за м. кв.)</h2>
                    <canvas id="history_rent"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('assets/js/chartjs.js') }}"></script>
    <script src="{{ asset('assets/js/utils.js') }}"></script>
    <script>
        let analytics_data;
        $.ajax({
            url: '/json/analytics',
            success: function (data) {
                analytics_data = data;
                window.dispatchEvent(new CustomEvent('load_ajax'));
            }
        });

        window.addEventListener('load_ajax', function (event) {
            var MONTHS = ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Ноя', 'Дек'];

            let history_data = analytics_data['price_history_sale'];
            let history_data_rent = analytics_data['price_history_rent'];
            let history_items = [];
            let history_items_rent = [];


            for (let item in history_data){
                history_items.push({
                    label: item,
                    backgroundColor: window.chartColorsLine[item],
                    borderColor: window.chartColorsLine[item],
                    data: Object.values(history_data[item]),
                    fill: false,
                });
            }

            for (let item in history_data_rent){
                console.log(history_data_rent)
                history_items_rent.push({
                    label: item,
                    backgroundColor: window.chartColorsLine[item],
                    borderColor: window.chartColorsLine[item],
                    data: Object.values(history_data_rent[item]),
                    fill: false,
                });
            }

            // Sale/Rent
            let sale_rent_config = {
                type: 'pie',
                data: {
                    datasets: [{
                        data: analytics_data['rent_sale'],
                        backgroundColor: [
                            window.chartColorsBar.blue,
                            window.chartColorsBar.orange,
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        'Продажа',
                        'Аренда',
                    ]
                },
                options: {
                    responsive: true
                }
            };

            let history_config = {
                type: 'line',
                data: {
                    labels: MONTHS,
                    datasets: history_items
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Динамика цен продажи жилья (цена за м. кв.)'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    }
                }
            };

            let history_rent_config = {
                type: 'line',
                data: {
                    labels: MONTHS,
                    datasets: history_items_rent
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Динамика цен аренды жилья (цена за м. кв.)'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    }
                }
            };

            let sale_rent = document.getElementById('sale-rent').getContext('2d');
            let history = document.getElementById('history').getContext('2d');
            let history_rent = document.getElementById('history_rent').getContext('2d');

            window.myPie = new Chart(sale_rent, sale_rent_config);
            window.myPie = new Chart(history, history_config);
            window.myPie = new Chart(history_rent, history_rent_config);
        });
    </script>
@endsection
