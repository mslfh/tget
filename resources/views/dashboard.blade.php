@extends('layouts.app')

@section('content')


{{--    <link href={{asset("static/css/simplebar.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/perfect-scrollbar.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/metisMenu.min.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/pace.min.css")}} rel="stylesheet">--}}
{{--    <link rel="stylesheet" href={{asset("static/css/bootstrap.min.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/icons.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/app.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/dark-style.css")}}>--}}

    <div class="container page-wrapper page-content">
        <section class="content-header">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="title">Dashboard</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-body">
            <div class="page-content">
                <div class="container-fluid">
                    {{--Market Summary--}}
                    <div class="row" id="market-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">Market Summary</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">Energy Type</th>
                                                <th class="border-top-0">Volume</th>
                                                <th class="border-top-0">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            {{--                                        @foreach( $data as $item)--}}
                                            {{--                                            <tr>--}}
                                            {{--                                                <td style="width:50px;"><span class="round">{{$item['title']}}</span></td>--}}
                                            {{--                                                <td class="align-middle">--}}
                                            {{--                                                    <h6>{{$item['type']}}</h6>--}}
                                            {{--                                                </td>--}}
                                            {{--                                                <td class="align-middle">{{$item['total_volume']}}</td>--}}
                                            {{--                                                <td class="align-middle">{{$item['avg_price']}}</td>--}}
                                            {{--                                            </tr>--}}
                                            {{--                                        @endforeach--}}



                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg"
                                                                             alt="user" width="50"></span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--All Charts--}}
                    <div class="row" id="charts">
                        {{--                        Trading Price Chart--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 align-content-center">--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header">--}}
{{--                                                    <h6 class="title">Trading Price Over Time</h6>--}}
{{--                                                    <i class="fas fa-minus"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <div id="pricehistory-chart" class="chart-placeholder"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
{{--                                <div class="card-body" style="position: relative;">--}}
                                    <div id="chart1" style="min-height: 265px;"><div id="apexchartsg7zbaz90i" class="apexcharts-canvas apexchartsg7zbaz90i apexcharts-theme-light" style="width: 505px; height: 250px;"><svg id="SvgjsSvg2690" width="505" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="505" height="250"><div class="apexcharts-legend apexcharts-align-left position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: -5px; top: 0px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(38, 94, 215); color: rgb(38, 94, 215); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Consultations" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Consultations</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(254, 101, 85); color: rgb(254, 101, 85); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Patients" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Patients</span></div></div><style type="text/css">

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }
                                                        .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                            flex-wrap: wrap
                                                        }
                                                        .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }
                                                        .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                            justify-content: flex-start;
                                                        }
                                                        .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }
                                                        .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }
                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                        }
                                                        .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                                            display: flex;
                                                            align-items: center;
                                                        }
                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }
                                                        .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }
                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: inline-block;
                                                            cursor: pointer;
                                                            margin-right: 3px;
                                                            border-style: solid;
                                                        }

                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                                                            display: inline-block;
                                                        }
                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }
                                                        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }
                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }</style></foreignObject><g id="SvgjsG2692" class="apexcharts-inner apexcharts-graphical" transform="translate(51.875, 47)"><defs id="SvgjsDefs2691"><clipPath id="gridRectMaskg7zbaz90i"><rect id="SvgjsRect2698" width="438.3046875" height="168.348" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskg7zbaz90i"><rect id="SvgjsRect2699" width="451.3046875" height="185.348" x="-10" y="-10" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2729" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2730" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2730Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2731" in="SvgjsFeFlood2730Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2731Out"></feComposite><feOffset id="SvgjsFeOffset2732" dx="14" dy="3" result="SvgjsFeOffset2732Out" in="SvgjsFeComposite2731Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2733" stdDeviation="4 " result="SvgjsFeGaussianBlur2733Out" in="SvgjsFeOffset2732Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2734" result="SvgjsFeMerge2734Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2735" in="SvgjsFeGaussianBlur2733Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2736" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2737" in="SourceGraphic" in2="SvgjsFeMerge2734Out" mode="normal" result="SvgjsFeBlend2737Out"></feBlend></filter><filter id="SvgjsFilter2765" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2766" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2766Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2767" in="SvgjsFeFlood2766Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2767Out"></feComposite><feOffset id="SvgjsFeOffset2768" dx="14" dy="3" result="SvgjsFeOffset2768Out" in="SvgjsFeComposite2767Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2769" stdDeviation="4 " result="SvgjsFeGaussianBlur2769Out" in="SvgjsFeOffset2768Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2770" result="SvgjsFeMerge2770Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2771" in="SvgjsFeGaussianBlur2769Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2772" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2773" in="SourceGraphic" in2="SvgjsFeMerge2770Out" mode="normal" result="SvgjsFeBlend2773Out"></feBlend></filter></defs><line id="SvgjsLine2697" x1="0" y1="0" x2="0" y2="165.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="165.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2774" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2775" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2777" font-family="Helvetica, Arial, sans-serif" x="0" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2778">Jan</tspan><title>Jan</title></text><text id="SvgjsText2780" font-family="Helvetica, Arial, sans-serif" x="39.20951704545455" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2781">Feb</tspan><title>Feb</title></text><text id="SvgjsText2783" font-family="Helvetica, Arial, sans-serif" x="78.4190340909091" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2784">Mar</tspan><title>Mar</title></text><text id="SvgjsText2786" font-family="Helvetica, Arial, sans-serif" x="117.62855113636365" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2787">Apr</tspan><title>Apr</title></text><text id="SvgjsText2789" font-family="Helvetica, Arial, sans-serif" x="156.83806818181822" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2790">May</tspan><title>May</title></text><text id="SvgjsText2792" font-family="Helvetica, Arial, sans-serif" x="196.04758522727278" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2793">Jun</tspan><title>Jun</title></text><text id="SvgjsText2795" font-family="Helvetica, Arial, sans-serif" x="235.25710227272734" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2796">Jul</tspan><title>Jul</title></text><text id="SvgjsText2798" font-family="Helvetica, Arial, sans-serif" x="274.4666193181819" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2799">Aug</tspan><title>Aug</title></text><text id="SvgjsText2801" font-family="Helvetica, Arial, sans-serif" x="313.6761363636365" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2802">Sep</tspan><title>Sep</title></text><text id="SvgjsText2804" font-family="Helvetica, Arial, sans-serif" x="352.88565340909105" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2805">Oct</tspan><title>Oct</title></text><text id="SvgjsText2807" font-family="Helvetica, Arial, sans-serif" x="392.0951704545456" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2808">Nov</tspan><title>Nov</title></text><text id="SvgjsText2810" font-family="Helvetica, Arial, sans-serif" x="431.30468750000017" y="194.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2811">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine2812" x1="0" y1="166.348" x2="431.3046875" y2="166.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2827" class="apexcharts-grid"><g id="SvgjsG2828" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2842" x1="0" y1="0" x2="431.3046875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2843" x1="0" y1="33.0696" x2="431.3046875" y2="33.0696" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2844" x1="0" y1="66.1392" x2="431.3046875" y2="66.1392" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2845" x1="0" y1="99.2088" x2="431.3046875" y2="99.2088" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2846" x1="0" y1="132.2784" x2="431.3046875" y2="132.2784" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2847" x1="0" y1="165.348" x2="431.3046875" y2="165.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2829" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2830" x1="0" y1="166.348" x2="0" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2831" x1="39.20951704545455" y1="166.348" x2="39.20951704545455" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2832" x1="78.4190340909091" y1="166.348" x2="78.4190340909091" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2833" x1="117.62855113636364" y1="166.348" x2="117.62855113636364" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2834" x1="156.8380681818182" y1="166.348" x2="156.8380681818182" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2835" x1="196.04758522727275" y1="166.348" x2="196.04758522727275" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2836" x1="235.2571022727273" y1="166.348" x2="235.2571022727273" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2837" x1="274.46661931818187" y1="166.348" x2="274.46661931818187" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2838" x1="313.67613636363643" y1="166.348" x2="313.67613636363643" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2839" x1="352.885653409091" y1="166.348" x2="352.885653409091" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2840" x1="392.09517045454555" y1="166.348" x2="392.09517045454555" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2841" x1="431.3046875000001" y1="166.348" x2="431.3046875000001" y2="172.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2849" x1="0" y1="165.348" x2="431.3046875" y2="165.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2848" x1="0" y1="1" x2="0" y2="165.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2701" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2738" class="apexcharts-series" seriesName="Patients" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2764" d="M 0 127.31796C 13.72333096590909 127.31796 25.486186079545455 95.90184 39.20951704545455 95.90184C 52.93284801136364 95.90184 64.69570312500001 107.4762 78.4190340909091 107.4762C 92.14236505681818 107.4762 103.90522017045456 120.70404 117.62855113636364 120.70404C 131.35188210227273 120.70404 143.1147372159091 94.24836 156.8380681818182 94.24836C 170.5613991477273 94.24836 182.32425426136365 112.43664000000001 196.04758522727275 112.43664000000001C 209.77091619318185 112.43664000000001 221.5337713068182 71.09964000000001 235.25710227272728 71.09964000000001C 248.98043323863635 71.09964000000001 260.7432883522727 114.09012000000001 274.4666193181818 114.09012000000001C 288.1899502840909 114.09012000000001 299.9528053977273 128.97144 313.6761363636364 128.97144C 327.3994673295455 128.97144 339.16232244318184 128.97144 352.88565340909093 128.97144C 366.60898437500003 128.97144 378.3718394886364 145.50624000000002 392.0951704545455 145.50624000000002C 405.8185014204546 145.50624000000002 417.5813565340909 148.81320000000002 431.3046875 148.81320000000002" fill="none" fill-opacity="1" stroke="rgba(254,101,85,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskg7zbaz90i)" filter="url(#SvgjsFilter2765)" pathTo="M 0 127.31796C 13.72333096590909 127.31796 25.486186079545455 95.90184 39.20951704545455 95.90184C 52.93284801136364 95.90184 64.69570312500001 107.4762 78.4190340909091 107.4762C 92.14236505681818 107.4762 103.90522017045456 120.70404 117.62855113636364 120.70404C 131.35188210227273 120.70404 143.1147372159091 94.24836 156.8380681818182 94.24836C 170.5613991477273 94.24836 182.32425426136365 112.43664000000001 196.04758522727275 112.43664000000001C 209.77091619318185 112.43664000000001 221.5337713068182 71.09964000000001 235.25710227272728 71.09964000000001C 248.98043323863635 71.09964000000001 260.7432883522727 114.09012000000001 274.4666193181818 114.09012000000001C 288.1899502840909 114.09012000000001 299.9528053977273 128.97144 313.6761363636364 128.97144C 327.3994673295455 128.97144 339.16232244318184 128.97144 352.88565340909093 128.97144C 366.60898437500003 128.97144 378.3718394886364 145.50624000000002 392.0951704545455 145.50624000000002C 405.8185014204546 145.50624000000002 417.5813565340909 148.81320000000002 431.3046875 148.81320000000002" pathFrom="M -1 165.348L -1 165.348L 39.20951704545455 165.348L 78.4190340909091 165.348L 117.62855113636364 165.348L 156.8380681818182 165.348L 196.04758522727275 165.348L 235.25710227272728 165.348L 274.4666193181818 165.348L 313.6761363636364 165.348L 352.88565340909093 165.348L 392.0951704545455 165.348L 431.3046875 165.348"></path><g id="SvgjsG2739" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG2741" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2742" r="4" cx="0" cy="127.31796" class="apexcharts-marker no-pointer-events w0kol6ac3" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle2743" r="4" cx="39.20951704545455" cy="95.90184" class="apexcharts-marker no-pointer-events wwo2twbhoj" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2744" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2745" r="4" cx="78.4190340909091" cy="107.4762" class="apexcharts-marker no-pointer-events wuwvckj5n" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2746" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2747" r="4" cx="117.62855113636364" cy="120.70404" class="apexcharts-marker no-pointer-events wr69vvdebl" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2748" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2749" r="4" cx="156.8380681818182" cy="94.24836" class="apexcharts-marker no-pointer-events wl5a88ou5" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2750" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2751" r="4" cx="196.04758522727275" cy="112.43664000000001" class="apexcharts-marker no-pointer-events win3fat0n" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2752" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2753" r="4" cx="235.25710227272728" cy="71.09964000000001" class="apexcharts-marker no-pointer-events wy923q0iz" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2754" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2755" r="4" cx="274.4666193181818" cy="114.09012000000001" class="apexcharts-marker no-pointer-events wtjy60qjhf" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2756" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2757" r="4" cx="313.6761363636364" cy="128.97144" class="apexcharts-marker no-pointer-events wwx6diycr" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2758" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2759" r="4" cx="352.88565340909093" cy="128.97144" class="apexcharts-marker no-pointer-events wzazddezn" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2760" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2761" r="4" cx="392.0951704545455" cy="145.50624000000002" class="apexcharts-marker no-pointer-events wdnzyo138" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="1" default-marker-size="4"></circle></g><g id="SvgjsG2762" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2763" r="4" cx="431.3046875" cy="148.81320000000002" class="apexcharts-marker no-pointer-events wqi7y6266" stroke="#ffffff" fill="#fe6555" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG2702" class="apexcharts-series" seriesName="Consultations" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2728" d="M 0 92.59488C 13.72333096590909 92.59488 25.486186079545455 81.84726 39.20951704545455 81.84726C 52.93284801136364 81.84726 64.69570312500001 96.893928 78.4190340909091 96.893928C 92.14236505681818 96.893928 103.90522017045456 54.39949200000001 117.62855113636364 54.39949200000001C 131.35188210227273 54.39949200000001 143.1147372159091 127.81400400000001 156.8380681818182 127.81400400000001C 170.5613991477273 127.81400400000001 182.32425426136365 63.989676 196.04758522727275 63.989676C 209.77091619318185 63.989676 221.5337713068182 16.369451999999995 235.25710227272728 16.369451999999995C 248.98043323863635 16.369451999999995 260.7432883522727 107.14550400000002 274.4666193181818 107.14550400000002C 288.1899502840909 107.14550400000002 299.9528053977273 41.006304 313.6761363636364 41.006304C 327.3994673295455 41.006304 339.16232244318184 112.43664000000001 352.88565340909093 112.43664000000001C 366.60898437500003 112.43664000000001 378.3718394886364 122.853564 392.0951704545455 122.853564C 405.8185014204546 122.853564 417.5813565340909 138.89232 431.3046875 138.89232" fill="none" fill-opacity="1" stroke="rgba(38,94,215,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskg7zbaz90i)" filter="url(#SvgjsFilter2729)" pathTo="M 0 92.59488C 13.72333096590909 92.59488 25.486186079545455 81.84726 39.20951704545455 81.84726C 52.93284801136364 81.84726 64.69570312500001 96.893928 78.4190340909091 96.893928C 92.14236505681818 96.893928 103.90522017045456 54.39949200000001 117.62855113636364 54.39949200000001C 131.35188210227273 54.39949200000001 143.1147372159091 127.81400400000001 156.8380681818182 127.81400400000001C 170.5613991477273 127.81400400000001 182.32425426136365 63.989676 196.04758522727275 63.989676C 209.77091619318185 63.989676 221.5337713068182 16.369451999999995 235.25710227272728 16.369451999999995C 248.98043323863635 16.369451999999995 260.7432883522727 107.14550400000002 274.4666193181818 107.14550400000002C 288.1899502840909 107.14550400000002 299.9528053977273 41.006304 313.6761363636364 41.006304C 327.3994673295455 41.006304 339.16232244318184 112.43664000000001 352.88565340909093 112.43664000000001C 366.60898437500003 112.43664000000001 378.3718394886364 122.853564 392.0951704545455 122.853564C 405.8185014204546 122.853564 417.5813565340909 138.89232 431.3046875 138.89232" pathFrom="M -1 165.348L -1 165.348L 39.20951704545455 165.348L 78.4190340909091 165.348L 117.62855113636364 165.348L 156.8380681818182 165.348L 196.04758522727275 165.348L 235.25710227272728 165.348L 274.4666193181818 165.348L 313.6761363636364 165.348L 352.88565340909093 165.348L 392.0951704545455 165.348L 431.3046875 165.348"></path><g id="SvgjsG2703" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2705" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2706" r="4" cx="0" cy="92.59488" class="apexcharts-marker no-pointer-events wn0u7bot2" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle2707" r="4" cx="39.20951704545455" cy="81.84726" class="apexcharts-marker no-pointer-events w0xyp8bdb" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2708" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2709" r="4" cx="78.4190340909091" cy="96.893928" class="apexcharts-marker no-pointer-events wnxzdjjtm" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2710" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2711" r="4" cx="117.62855113636364" cy="54.39949200000001" class="apexcharts-marker no-pointer-events w147jfvw5" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2712" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2713" r="4" cx="156.8380681818182" cy="127.81400400000001" class="apexcharts-marker no-pointer-events wqagutjx1f" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2714" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2715" r="4" cx="196.04758522727275" cy="63.989676" class="apexcharts-marker no-pointer-events wizlr0gx5" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2716" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2717" r="4" cx="235.25710227272728" cy="16.369451999999995" class="apexcharts-marker no-pointer-events wt8v1f7nq" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2718" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2719" r="4" cx="274.4666193181818" cy="107.14550400000002" class="apexcharts-marker no-pointer-events wuct9gfgi" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2720" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2721" r="4" cx="313.6761363636364" cy="41.006304" class="apexcharts-marker no-pointer-events w90ov37ul" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2722" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2723" r="4" cx="352.88565340909093" cy="112.43664000000001" class="apexcharts-marker no-pointer-events wq11mqjsl" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2724" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2725" r="4" cx="392.0951704545455" cy="122.853564" class="apexcharts-marker no-pointer-events waoiq5kpx" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="0" default-marker-size="4"></circle></g><g id="SvgjsG2726" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskg7zbaz90i)"><circle id="SvgjsCircle2727" r="4" cx="431.3046875" cy="138.89232" class="apexcharts-marker no-pointer-events w7ul0vjoki" stroke="#ffffff" fill="#265ed7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="0" default-marker-size="4"></circle></g></g><g id="SvgjsG2704" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2740" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2850" x1="0" y1="0" x2="431.3046875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2851" x1="0" y1="0" x2="431.3046875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2852" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2853" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2854" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2696" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2813" class="apexcharts-yaxis" rel="0" transform="translate(21.875, 0)"><g id="SvgjsG2814" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2815" font-family="Helvetica, Arial, sans-serif" x="20" y="48.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2816">1000</tspan></text><text id="SvgjsText2817" font-family="Helvetica, Arial, sans-serif" x="20" y="81.56960000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2818">800</tspan></text><text id="SvgjsText2819" font-family="Helvetica, Arial, sans-serif" x="20" y="114.63920000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2820">600</tspan></text><text id="SvgjsText2821" font-family="Helvetica, Arial, sans-serif" x="20" y="147.70880000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2822">400</tspan></text><text id="SvgjsText2823" font-family="Helvetica, Arial, sans-serif" x="20" y="180.77840000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2824">200</tspan></text><text id="SvgjsText2825" font-family="Helvetica, Arial, sans-serif" x="20" y="213.84800000000004" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2826">0</tspan></text></g></g><g id="SvgjsG2693" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(38, 94, 215);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(254, 101, 85);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 546px; height: 306px;"></div></div><div class="contract-trigger"></div></div></div>


                        {{--                        Traded Energy Chart--}}
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="title">Traded Energy Chart</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="tradinghistory-chart" class="chart-placeholder"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Manager only view--}}
                    {{--User Summary per zone--}}
                    <div class="row" id="user-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">User Summary per Zone</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Zone</th>
                                                <th class="border-top-0">Number of Buyer</th>
                                                <th class="border-top-0">Number of Seller</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>25</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>29</td>
                                                <td>33</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>C</td>
                                                <td>40</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>D</td>
                                                <td>12</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>E</td>
                                                <td>21</td>
                                                <td>10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="content">

        <p id="click"></p>

    </div>




@endsection
