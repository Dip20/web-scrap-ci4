<?= $this->extend(THEME . 'template') ?>

<?= $this->section('content') ?>
<?php
function rand_color()
{
    return sprintf('#%04X', mt_rand(0, 0xFFFFFF));
}

?>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">View Data</h1>

            <!-- <div class="app-card app-card-settings shadow-sm p-4"> -->
            <p class="text-muted">Note: All the stat are display based on data stored on database, we have only store first 2 pages data. later we can scrape entire pages using cron job.</p>
            <div class="app-card-body">
                <div class="row">

                    <div class="col-12 col-lg-6 mb-4">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Tags</h4>
                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="#">View report</a>
                                        </div><!--//card-header-actions-->
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">Tags</th>
                                                <th class="meta stat-cell">Total Questions</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            /**
                                             * This block of core will help me to print table data &
                                             * also i will use this to prepare data whic required in chart js
                                             * It will save addtional loop and efficiency
                                             */
                                            if (!empty($data)) {
                                                $count = count($data);
                                                for ($i = 0; $i < $count; $i++) {
                                                    $lables[] = '"' .  ucfirst($data[$i]['link_name']) . '"';
                                                    $rand_color[] = '"' .   rand_color() . '"';
                                                    $stat_data[] = $data[$i]['total_questions'];

                                            ?>
                                                    <tr>
                                                        <td><a href="#"><?= ucfirst($data[$i]['link_name']) ?></a></td>
                                                        <td class="stat-cell"><?= $data[$i]['total_questions'] ?></td>
                                                    </tr>


                                            <?php   }
                                            }

                                            ?>


                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>

                    <div class="col-12 col-lg-6 mb-4">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Top 5 Viewed</h4>
                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="#">View report</a>
                                        </div><!--//card-header-actions-->
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">Questions</th>
                                                <th class="meta stat-cell">Tag</th>
                                                <th class="meta stat-cell">Views</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            /**
                                             * This block of core will help me to print table data &
                                             * also i will use this to prepare data whic required in chart js
                                             * It will save addtional loop and efficiency
                                             */
                                            if (!empty($top_viewed)) {
                                                $_count = count($top_viewed);
                                                for ($i = 0; $i < $_count; $i++) {


                                            ?>
                                                    <tr>
                                                        <td><a href="#"><?= $top_viewed[$i]['title'] ?></a></td>
                                                        <td class="stat-cell"><?= $top_viewed[$i]['link_name'] ?></td>
                                                        <td class="stat-cell"><?= $top_viewed[$i]['views'] ?></td>
                                                    </tr>

                                            <?php   }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>


                    <div class="col-12 col-lg-6 mb-4">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Top 5 Voted</h4>
                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="#">View report</a>
                                        </div><!--//card-header-actions-->
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">Questions</th>
                                                <th class="meta stat-cell">Tag</th>
                                                <th class="meta stat-cell">Votes</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            /**
                                             * This block of core will help me to print table data &
                                             * also i will use this to prepare data whic required in chart js
                                             * It will save addtional loop and efficiency
                                             */
                                            if (!empty($top_voted)) {
                                                $counts = count($top_voted);
                                                for ($i = 0; $i < $counts; $i++) {
                                            ?>
                                                    <tr>
                                                        <td><a href="#"><?= $top_voted[$i]['title'] ?></a></td>
                                                        <td class="stat-cell"><?= $top_voted[$i]['link_name'] ?></td>
                                                        <td class="stat-cell"><?= $top_voted[$i]['views'] ?></td>
                                                    </tr>

                                            <?php   }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>

                    <div class="col-12 col-lg-6 mb-4">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Questions Stats</h4>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="chart-container">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="chart-pie-stats" width="673" height="336" style="display: block; height: 269px; width: 539px;" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>
                </div>


            </div><!--//app-card-body-->

            <!-- </div> -->


        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <!--//app-footer-->

</div>


<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    var oilCanvas = document.getElementById("chart-pie-stats");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var oilData = {
        labels: [
            <?= implode(",", $lables) ?>
        ],
        datasets: [{
            data: [<?= implode(",", $stat_data) ?>],
            backgroundColor: [
                <?= implode(",", $rand_color) ?>

            ]
        }]
    };

    var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
    });
</script>
<?= $this->endSection() ?>