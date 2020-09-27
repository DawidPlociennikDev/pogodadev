    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-bar-chart"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Statystyki</h2>
                                        <p>Witaj w panelu <span class="bread-ntd">PWSZ Legnica</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION['flashdata'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['flashdata']; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Breadcomb area End-->
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Wszystkie parametry</h2>
                        </div>
                        <div class="line-chart-wp chart-display-nn">
                            <canvas height="140vh" width="180vw" id="basiclinechart"></canvas>
                        </div>
                    </div>
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Najwyższe i najniższe odnotowane wartości</h2>
                        </div>
                        <div class="bar-chart-wp">
                            <canvas height="140vh" width="180vw" id="barchartMax"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
<?php
// render lineChart
$labels = '';
foreach ($rows as $k => $v) {
    $labels .= '"' . date('d/m/Y', strtotime($v->created)). '", ';
}
$labels = rtrim($labels, ", ");

$datasets = '';
foreach ($avaliable_parametrs as $p_k => $p_v) { 
    if($p_k > 0) {
        $color[$p_k] = $p_v->color;
        $param = $p_v->code;
        $datasets .= '{' . "\n";
        $datasets .= 'label: "'.$p_v->title.'",' . "\n";
        $datasets .= 'fill: false,' . "\n";
        $datasets .= 'backgroundColor: "'.$color[$p_k].'",' . "\n";
        $datasets .= 'borderColor: "'.$color[$p_k].'",' . "\n";
        $paramsData = '';
        foreach ($rows as $r_k => $r_v) {
            $paramsData .= $r_v->$param . ', ';
        }
        $paramsData = rtrim($paramsData, ", ");
        $datasets .= 'data: ['.$paramsData.']' . "\n";
        $datasets .= '},' . "\n";
    }
}

// render barChart
$labelsBar = '';
$datasetsBarMax = '';
$datasetsBarMin = '';
$datasetsBarColor = '';
foreach ($avaliable_parametrs as $p_k => $p_v) {
    if($p_k > 0) {
        $labelsBar .= '"' . $p_v->title . '", ';
        $datasetsBarColor .= '"' . $p_v->color . '", ';
        $param = $p_v->code;
        foreach ($max_parametrs as $max_k => $max_v) {
            $datasetsBarMax .= '"' . $max_v->$param . '", ';
        }
        foreach ($min_parametrs as $min_k => $min_v) {
            $datasetsBarMin .= '"' . $min_v->$param . '", ';
        }
    }
}
$labelsBar = rtrim($labelsBar, ", ");
$datasetsBarMax = rtrim($datasetsBarMax, ", ");
$datasetsBarMin = rtrim($datasetsBarMin, ", ");
$datasetsBarColor = rtrim($datasetsBarColor, ", ");
?>
<script type="text/javascript">
    function loadChart() {
        var ctx = document.getElementById("basiclinechart");
        var basiclinechart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?= $labels; ?>],
                datasets: [
                <?= $datasets; ?>
            ]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Kliknij na wybrany parametr aby go ukryć'
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
                            labelString: 'Data'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Wartość'
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("barchartMax");
        var barchart1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?= $labelsBar; ?>],
                datasets: [
                {
                    label: 'Wartości maksymalne',
                    data: [<?= $datasetsBarMax; ?>],
                    backgroundColor: [<?= $datasetsBarColor; ?>],
                    borderColor: [<?= $datasetsBarColor; ?>],
                    borderWidth: 1
                },
                {
                    label: 'Wartości minimalne',
                    data: [<?= $datasetsBarMin; ?>],
                    backgroundColor: [<?= $datasetsBarColor; ?>],
                    borderColor: [<?= $datasetsBarColor; ?>],
                    borderWidth: 1
                }
                ]
            },
            options: {
                title:{
                    display:true,
                    text:'Kliknij na wybraną wartośc aby ją ukryć'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }
</script>