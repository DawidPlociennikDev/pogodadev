    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= count($visitors); ?></span></h2>
                            <p>Liczba odwiedzających</p>
                        </div>
                        <div class="sparkline-bar-stats1">
                            <?php $stats = ''; $i=0;
                            foreach (array_reverse($unique_visitors) as $v){
                                $stats .= $v->uniq . ',';
                                $i++;
                                if($i > 10) {break;}
                            } 
                            echo substr($stats, 0, -1); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php $stats = ''; $count=0;
                            foreach (array_reverse($uniq_mobile) as $v){
                                $count += $v->uniq;
                                $stats .= $v->uniq . ',';
                            } ?>
                            <h2><span class="counter"><?= $count; ?></span></h2>
                            <p>Odwiedzeń na telefonach</p>
                        </div>
                        <div class="sparkline-bar-stats2">
                            <?php echo substr($stats, 0, -1); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php $stats = ''; $count=0;
                            foreach (array_reverse($uniq_computer) as $v){
                                $count += $v->uniq;
                                $stats .= $v->uniq . ',';
                            } ?>
                            <h2><span class="counter"><?= $count; ?></span></h2>
                            <p>Odwiedzeń na komputerach</p>
                        </div>
                        <div class="sparkline-bar-stats2">
                            <?php echo substr($stats, 0, -1); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-t-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Liczba wejść na stronę</h2>
                                <p>Wykres wszystkich wejść na strone i z podziałem na telefony i komputery</p>
                            </div>
                        </div>
                        <div id="placeholder" class="flot-chart-sts flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Synchronize button -->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Synchronizacja bazy danych</h2>
                                <p>Synchronizacja ręczna danych pogodowych pobieranych z czujnika</p>
                            </div>
                        </div>
                            <button class="btn btn-default btn-block btn-lg notika-btn-default">Synchronizuj</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Synchronize button -->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Jakość powietrza <small class="float-right">25/03/2020</small></h2>
                                </div>
                            </div>
                            <div class="recent-items-ctn">
                                <div class="recent-items-title text-center">
                                    <h1>Bardzo dobra</h1>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Jakość</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>25/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>24/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>23/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>22/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>21/03/2020</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Temperatura <small class="float-right">25/03/2020</small></h2>
                                </div>
                            </div>
                            <div class="recent-items-ctn">
                                <div class="recent-items-title text-center">
                                    <h1>13&deg;C</h1>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Jakość</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>25/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>24/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>23/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>22/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>21/03/2020</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Wilgotność <small class="float-right">25/03/2020</small></h2>
                                </div>
                            </div>
                            <div class="recent-items-ctn">
                                <div class="recent-items-title text-center">
                                    <h1>82%</h1>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Jakość</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>25/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>24/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>23/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Bardzo dobra</td>
                                            <td>22/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">Dobra</td>
                                            <td>21/03/2020</td>
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
    <!-- End Email Statistic area-->

    <script language = "JavaScript">
        function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', 'Wszystkie');
            data.addColumn('number', 'Telefony');
            data.addColumn('number', 'Komputery');
            data.addRows([
                <?php echo chartVisitors($unique_visitors, $uniq_mobile, $uniq_computer); ?>
            ]);
            
            var options = {
               hAxis: {
                  title: 'Data'
               },
               vAxis: {
                  title: 'Liczba wejść'
               },   
               'width':'100%',
               curveType: 'function'
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.LineChart(document.getElementById('placeholder'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(drawChart);
    </script>