<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/map.css') }}" rel="stylesheet"> --}}

    <livewire:styles />
</head>

<head>

<body class="antialiased" onsvgload="load()" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1022.0"
    data-gr-ext-installed="">
    <div class="wrapper" id="app">
        <x-tabler.navbar />
        <div class="container-xl">
            <!-- Page title -->
            <x-slot name="header">
                <div class="container-xl">
                    <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="page-title">
                                    European Election in Germany
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container-xl">

            <div class="row justify-content-center">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">
                                <div id="map" class="card-footer">
                                    @include('svg_map2')
                                </div>
                            </div>
                            <div class="col-4">
                                <table class="table table-sm" id="wkrresults">
                                    <!-- "AKT" = Aktuelle Wahl; "VORP" = VorPeriode	 -->
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td id="CDUkopf" style="width: 18%;">CSU</td>
                                            <td style="width: 18%;">Soc.Dem.</td>
                                            <td style="width: 18%;">Green</td>
                                            <td style="width: 18%;">Left</td>
                                            <td style="width: 18%;">Lib</td>
                                        </tr>
                                        <tr class="importnt">
                                            <td>2009</td>
                                            <td id="cduAKTproz" style="background-color: #f2f2f2;">57%</td>
                                            <td id="spdAKTproz" style="background-color: #f2f2f2;">8.7%</td>
                                            <td id="grueneAKTproz" style="background-color: #f2f2f2;">10.8%</td>
                                            <td id="linkeAKTproz" style="background-color: #f2f2f2;">1.8%</td>
                                            <td id="fdpAKTproz" style="background-color: #f2f2f2;">7.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2004</td>
                                            <td id="cduVORPproz" style="background-color: #f2f2f2;">63.9%</td>
                                            <td id="spdVORPproz" style="background-color: #f2f2f2;">10.8%</td>
                                            <td id="grueneVORPproz" style="background-color: #f2f2f2;">9.5%</td>
                                            <td id="linkeVORPproz" style="background-color: #f2f2f2;">0.6%</td>
                                            <td id="fdpVORPproz" style="background-color: #f2f2f2;">3.3%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p id="wkr-id" style="color: rgb(49, 63, 125);">Mouseover Value: 63.9</p>
                                <p id="wkr-name" class="importnt">9172 Berchtesgadener Land</p>
                                <!-- <p id="wahlbetAkt">Wahlbeteiligung 2009</p> -->

                                <div id="dropDown1">
                                    <form id="form1">
                                        <select name="types" onchange="fillItems(0)">
                                            <option value="1">Election 2009</option>
                                            <option value="2">Election 2004</option>
                                            <option value="3">Statistics</option>
                                        </select>
                                        <select name="items" onchange="statistics(this.value)">
                                            <option value="99">Votes for ...</option>
                                            <option value="99">---------------</option>
                                            <option value="4">Voter Participation</option>
                                            <option value="6.1">Conservative (CDU/CSU)</option>
                                            <option value="8.2">Social Democrats (SPD)</option>
                                            <option value="10.3">Green Party</option>
                                            <option value="12.4">Die Linke.</option>
                                            <option value="14.5">Liberals (FDP)</option>
                                            <option value="16.6">REP</option>
                                            <option value="18">ÖDP</option>
                                            <option value="20">DKP</option>
                                        </select>
                                    </form>
                                </div>
                                <div id="legende">
                                    <h3 id="keyHead">Conservative (CDU/CSU) 2004</h3>
                                    <form name="classification">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <tbody>
                                                    <tr class="keyTableRow">
                                                        <td>Key</td>
                                                        <td colspan="2" style="text-align: center;">from ... <b>to</b>
                                                        </td>
                                                        {{-- <td>arbitrary</td> --}}
                                                        <td>Frequencies</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="color0" style="background-color: rgb(211, 233, 254);">
                                                            &nbsp;</td>
                                                        <td id="min">15.2</td>
                                                        <td id="percClass0" class="importnt">38</td>
                                                        {{-- <td style="padding-top: 0; padding-bottom: 0;"><input class="form-control" name="limit1" type="text"
                                                                size="4" maxlength="4" value=""></td> --}}
                                                        <td id="freq0">87</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="color1" style="background-color: rgb(141, 176, 254);">
                                                            &nbsp;</td>
                                                        <td id="limit1a">38</td>
                                                        <td id="percClass1" class="importnt">44</td>
                                                        {{-- <td style="padding-top: 0; padding-bottom: 0;"><input class="form-control" name="limit2" type="text"
                                                                size="4" maxlength="4" value=""></td> --}}
                                                        <td id="freq1">97</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="color2" style="background-color: rgb(64, 93, 255);">
                                                            &nbsp;</td>
                                                        <td id="limit2a">44</td>
                                                        <td id="percClass2" class="importnt">50</td>
                                                        {{-- <td style="padding-top: 0; padding-bottom: 0;"><input class="form-control" name="limit3" type="text"
                                                                size="4" maxlength="4" value=""></td> --}}
                                                        <td id="freq2">81</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="color3" style="background-color: rgb(0, 43, 165);">
                                                            &nbsp;</td>
                                                        <td id="limit3a">50</td>
                                                        <td id="percClass3" class="importnt">56</td>
                                                        {{-- <td style="padding-top: 0; padding-bottom: 0;"><input class="form-control" name="limit4" type="text"
                                                                size="4" maxlength="4" value=""></td> --}}
                                                        <td id="freq3">52</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="color4" style="background-color: rgb(0, 22, 84);">&nbsp;
                                                        </td>
                                                        <td id="limit4a">56</td>
                                                        <td id="max" class="importnt">73.3</td>
                                                        {{-- <td style="padding: 1px;"><button class="btn btn-sm" type="button" name="ok"
                                                                onclick="newClassInput()">change</button></td> --}}
                                                        <td id="freq4">96</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                    {{-- <div class="card-footer">
                                    </div> --}}

                                </div>

                                <div class="card-footer">
                                    <!-- onmouseover="magnify()" -->
                                    <div id="histogram" title="Results of all 413 electoral districts, ascending order">

                                        <p style="margin-left:6px; margin-top: 6px; position: absolute;">Value
                                            Distribution</p>
                                        <p style="margin-left:308px; margin-top:  5px; position: absolute; font-size:9px"
                                            id="maxTick">73.3
                                        </p>
                                        <p style="margin-left:308px; margin-top: 95px; position: absolute; font-size:9px"
                                            id="minTick">0</p>
                                        <div id="map">@include('svg_map')</div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <form id="check2maps">
                                        <input id="2maps" type="hidden"
                                            onclick="if (this.checked) {cloneMap()} else {uncloneMap()}">
                                    </form>

                                    {{-- <form id="LayoutControl">Controls
                                        <input type="radio" name="position" onclick="layoutControls(this.value)" value="left">left
                                        <input type="radio" name="position" onclick="layoutControls(this.value)" value="right">right
                                        <input type="radio" name="position" onclick="layoutControls(this.value)" value="hide">hide
                                    </form> --}}

                                    <form name="classMethodControl" style="float: right; margin-right: 50px;">
                                        <select name="selectedMethod" onchange="colorMap(this.value)">
                                            <option value="none" id="option1">Classify</option>
                                            <option value="quantiles">Quantiles</option>
                                            <option value="equaldistance">Equal Distance</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </form>

                                    <div id="zoomControls">
                                        <form name="ZoomControl" action="/">
                                            {{-- <input type="button" value="ZOOM" onclick="zoomHelp()"> --}}
                                            <input type="button" value="RESET" onclick="resetZoom()">
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div id="copyright">
                                        © <a href="http://tr.im/BKG_VG2500"
                                            title="www.geodatenzentrum.de || Produkt VG2500 || Vervielfältigung, Verbreitung und öffentliche Zugänglichmachung, auch auszugsweise, mit Quellenangabe gestattet."
                                            target="_blank">Karte: BKG, Frankfurt/M 2009</a><br>
                                        © <a href="http://www.bundeswahlleiter.de/de/europawahlen/EU_BUND_09/veroeffentlichungen/"
                                            target="_blank">
                                            Daten: Bundeswahlleiter, 2009</a><br>
                                        © <a href="http://vis.uell.net/" target="_blank">
                                            Programm: vis.uell.net, 2009</a><br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>

        </div>

        <livewire:scripts />

        <!-- Scripts -->

        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="{{ asset('js/svg.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/euw09data.js')}}" charset="utf-8"></script>
        <script type="text/javascript" src="{{asset('js/magic_eu09new.js')}}" charset="utf-8"></script>

        @stack('page-scripts')

</body>

</html>
