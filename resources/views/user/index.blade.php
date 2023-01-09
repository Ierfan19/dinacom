@extends('user.layout.main')
@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        .component {
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            width: 750px;
            margin: 0 auto;
            padding: 3rem;
        }

        .component blockquote.quote {
            position: relative;
            text-align: center;
            padding: 1rem 1.2rem;
            width: 80%;
            /* create space for the quotes */
            color: #484748;
            margin: 1rem auto 2rem;
        }

        .component blockquote.EN {
            background:
                linear-gradient(to right, #039be5 4px, transparent 4px) 0 100%,
                linear-gradient(to left, #039be5 4px, transparent 4px) 100% 0,
                linear-gradient(to bottom, #039be5 4px, transparent 4px) 100% 0,
                linear-gradient(to top, #039be5 4px, transparent 4px) 0 100%;
            background-repeat: no-repeat;
            background-size: 20px 20px;
        }

        .component blockquote.DE {
            background:
                linear-gradient(to right, #039be5 4px, transparent 4px) 0% 0%,
                linear-gradient(to bottom, #039be5 4px, transparent 4px) 0% 0%,
                linear-gradient(to left, #039be5 4px, transparent 4px) 100% 100%,
                linear-gradient(to top, #039be5 4px, transparent 4px) 100% 100%;
            background-repeat: no-repeat;
            background-size: 20px 20px;
        }


        /* -- create the quotation marks -- */
        .component blockquote.quote:before,
        .component blockquote.quote:after {
            font-family: FontAwesome;
            position: absolute;
            color: #039be5;
            font-size: 34px;
        }

        .component blockquote.EN:before {
            content: "\f10d";
            top: -12px;
            margin-right: -20px;
            right: 100%;
        }

        .component blockquote.EN:after {
            content: "\f10e";
            margin-left: -20px;
            left: 100%;
            top: auto;
            bottom: -20px;
        }

        .component blockquote.DE:before {
            content: "\f10e";
            margin-right: -20px;
            bottom: -20px;
            right: 100%;
        }

        .component blockquote.DE:after {
            content: "\f10d";
            margin-left: -20px;
            left: 100%;
            top: -20px;
            bottom: auto;
        }

        .zitat1 {
            position: relative;
            font-family: 'Verdana', serif;
            font-size: 2.4em;
            line-height: 1.5em;
        }

        .zitat1 cite {
            font-family: 'Verdana', sans-serif;
            font-size: 0.6em;
            font-weight: 700;
            color: #bdbec0;
            float: right;
        }

        .zitat1 cite:before {
            content: '\2015'' ';
        }

        .zitat1:after {
            content: '\201d';
            position: absolute;
            top: 0.28em;
            right: 0px;
            font-size: 6em;
            font-style: italic;
            color: #bdbec0;
            z-index: -1;
        }

        .sidekick {
            position: relative;
            padding-left: 1em;
            border-left: 0.2em solid #039be5;
            font-family: 'Roboto', serif;
            font-size: 2.4em;
            line-height: 1.5em;
            font-weight: 100;
        }

        .sidekick:before,
        .sidekick:after {
            font-family: Calibri;
            color: #039be5;
            font-size: 34px;
        }

        .sidekick:before {
            content: '\201e'
        }

        .sidekick:after {
            content: '\201c';
        }

        .sidekick cite {
            font-size: 50%;
            text-align: center;
            top: 50%
        }

        .sidekick cite:before {
            content: ' \2015 '
        }
    </style>
@endpush
@section('content')
    <div class="page-content">
        <!--end row-->

        <div class="card radius-10">
            <div class="card-header border-bottom-0 bg-transparent">
                <div class="d-lg-flex align-items-center">
                    {{-- <div>
                    <h6 class="font-weight-bold mb-2 mb-lg-0">Monthly Revenue</h6>
                </div> --}}
                    <div class="ms-lg-auto mb-2 mb-lg-0">

                    </div>
                    <div>
                        <button type="button" class="btn btn-primary radius-10 ms-lg-3">Download CSV</button>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <section class="component">
                    <blockquote class="callout quote EN">
                        Selamat Datang {{ Auth()->User()->name }}
                        {{-- <cite> - Tony Stark</cite> --}}
                    </blockquote>

                </section>
            </div>
        </div>
    @endsection

    @push('js')
        <script>
            $(document).ready(function() {
                viewerchart()
            })

            function viewerchart() {

                $.ajax({
                    type: "get",
                    url: "{{ url('chart-viewer-user') }}",
                    data: {},
                    success: function(data) {


                        var options = {
                            series: [{
                                name: 'Viewer',
                                data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5]
                            }],
                            chart: {
                                foreColor: '#9a9797',
                                type: 'area',
                                height: 380,
                                zoom: {
                                    enabled: false
                                },
                                toolbar: {
                                    show: false
                                },
                                dropShadow: {
                                    enabled: false,
                                    top: 3,
                                    left: 14,
                                    blur: 4,
                                    opacity: 0.10,
                                }
                            },
                            stroke: {
                                width: 4,
                                curve: 'smooth'
                            },
                            xaxis: {
                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                    'Oct', 'Nov', 'Dec'
                                ],
                            },
                            dataLabels: {
                                enabled: false
                            },
                            fill: {
                                type: 'gradient',
                                gradient: {
                                    shade: 'light',
                                    gradientToColors: ['#8833ff'],
                                    shadeIntensity: 1,
                                    type: 'vertical',
                                    opacityFrom: 0.8,
                                    opacityTo: 0.3,
                                    //stops: [0, 100, 100, 100]
                                },
                            },
                            colors: ["#8833ff"],
                            yaxis: {
                                labels: {
                                    formatter: function(value) {
                                        return value + "$";
                                    }
                                },
                            },
                            markers: {
                                size: 4,
                                colors: ["#8833ff"],
                                strokeColors: "#fff",
                                strokeWidth: 2,
                                hover: {
                                    size: 7,
                                }
                            },
                            grid: {
                                show: true,
                                borderColor: '#ededed',
                                strokeDashArray: 4,
                            }
                        };
                        var chart = new ApexCharts(document.querySelector("#chart1"), options);
                        chart.render();

                    }
                })
            }
        </script>
    @endpush
