<!doctype html>
<html lang="en">
  <head>
    <?php include("../../assets/php/meta.php"); ?>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="../../assets/ui/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="../../assets/ui/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="../../assets/ui/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
      var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'dark';
    </script>

    <title>AWS Price Estimator</title>
  </head>
  <body>
    <!-- MODALS
    ================================================== -->
    <?php include('../../assets/php/theme.php'); ?>

    <!-- NAVIGATION
    ================================================== -->
    <?php include('../../assets/php/navbar.php'); ?>

    <!-- MAIN CONTENT
    ================================================== -->

    <div class="main-content">

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- <?php
              // $query = "SELECT access FROM users WHERE email='$email'";
              $query = "SELECT * FROM saved WHERE email="."'".$_SESSION['email']."'"."ORDER BY id DESC LIMIT 1";

              // Include the processor
              include_once("../../assets/php/process.php");

              // Get the details
              $output = doSQLQuery($query);
              //var_dump($output); //Un-comment to help debug

              $rows = json_decode($output, TRUE);
              $totals = array();
              foreach ($rows as $row) {
                if (!empty($row)) {
                  array_push($totals, $row['total']);
                  echo "<!-- Card -->
                  <div class='card'>
                    <div class='card-body'>
                      <div class='row align-items-center'>
                        <div class='col'>

                          <!-- Title -->
                          <h6 class='card-title text-uppercase text-muted mb-2'>
                            ".date("Y-m-d H:i:s", substr($row['last_modified'], 0, 10))."

                          </h6>

                          <!-- Heading -->
                          <span class='h2 mb-0'>
                            ".$row['total']."
                          </span>
                        </div>
                        <div class='col-auto'>

                          <!-- Icon -->
                          <span class='h2 fe fe-dollar-sign text-muted mb-0'></span>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>";
                }
              }
            ?> -->

            <div class="chart">
              <canvas id="performanceChart" class="chart-canvas"></canvas>
            </div>

            <script>
            new Chart('performanceChart'), {
              type: 'line',
              data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                  label: 'Performance',
                  data: [0,10,5,15,10,20,15,25,20,10,5,40]
                }]
              }
            };
            </script>
            <h6>*Sample Data</h6>


          </div>
        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="../../assets/ui/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/ui/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/ui/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="../../assets/ui/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="../../assets/ui/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="../../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/ui/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="../../assets/ui/assets/libs/list.js/dist/list.min.js"></script>
    <script src="../../assets/ui/assets/libs/quill/dist/quill.min.js"></script>
    <script src="../../assets/ui/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/ui/assets/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="../../assets/ui/assets/js/theme.min.js"></script>

  </body>
</html>
