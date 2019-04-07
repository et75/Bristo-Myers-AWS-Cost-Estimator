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
    <script>
      var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'dark';
    </script>


    <title>AWS Price Estimator</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    <?php include('../../assets/php/theme.php') ?>

    <!-- NAVIGATION
    ================================================== -->
    <?php include('../../assets/php/navbar.php') ?>

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      <?php
        if (isset($_SESSION['saved'])) {
            $rds_query = "SELECT * FROM rds WHERE email="."'".$_SESSION['email']."'". "AND title="."'".$_SESSION['saved']."'";

            // Include the processor
            include_once("../../assets/php/process.php");

            // Get the details
            $rds_values = doSQLQuery($rds_query);
            //var_dump($rds_values); //Un-comment to help debug

            $rds_rows = json_decode($rds_values, TRUE);
        }
      ?>
      <!-- Form -->
      <form method="POST" id="rds">

        <!-- HEADER -->
        <div class="header">
          <div class="container-fluid">

              <!-- Body -->
              <div class="header-body">
                <div class="row align-items-end">
                  <div class="col">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Services
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Amazon RDS <?php if (isset($_SESSION['saved'])) { echo " - " . $rds_rows[1]['title']; } ?>
                    </h1>

                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-overflow header-tabs">
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              Input
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              Output
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  <div class="col-auto">

                    <?php
                      if (isset($_SESSION['saved'])) {
                        echo '<button name="delete" value="delete" type="submit" class="btn btn-danger">Delete</button>';
                        echo '<button name="new" value="new" type="submit" class="btn btn-primary">New</button>';
                      }
                    ?>

                    <!-- Button -->
                    <button form="rds" name="submit" value="submit" type="submit" class="btn btn-primary">
                      Save
                    </button>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .header-body -->

          </div>
          </div> <!-- / .header -->

          <!-- CARDS -->
          <div class="container-fluid">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Amazon RDS On-Demand DB Instances
                    </h6>

                    <br>
                    <div class="btn-group">
                        <a id="add_row0" class="btn btn-outline-primary btn-sm">Add Row</a>
                        <a id='delete_row0' class="btn btn-outline-danger btn-sm">Delete Row</a>
                    </div>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table0">
                  				<thead>
                  					<tr >
                  						<th class="text-center">
                  							#
                  						</th>
                  						<th class="text-center">
                  							Description
                  						</th>
                  						<th class="text-center">
                  							DB Instances
                  						</th>
                  						<th class="text-center">
                  							Usage
                  						</th>
                              <th class="text-center">
                  							DB Engine and License
                  						</th>
                              <th class="text-center">
                  							Class and Deployment
                  						</th>
                              <th class="text-center">
                  							Storage
                  						</th>
                              <th class="text-center">
                  							I/O
                  						</th>
                              <th class="text-center">
                  							Backtrack
                  						</th>
                  					</tr>
                  				</thead>
                  				<tbody>
                            <?php
                              if (!isset($_SESSION['saved'])) {
                                echo "<tr id='row00'>
                      						<td>
                      						1
                      						</td>
                      						<td>
                      						        <input type='text' name='description00'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='instances00' class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='usage00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='engine00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='class00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='storage00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='io00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='backtrack00' class='form-control'/>
                      						</td>
                      					</tr>
                                <tr id='row01'></tr>";
                              } else {
                                $rds0 = json_decode($rds_rows[1]['table0'], TRUE);
                                $x = 0;
                                foreach ($rds0 as $row) {
                                  $rowKeys = array_keys($row);
                                  $rowIdx = substr($rowKeys[0], -2);
                                  $rowIdx1 = $rowIdx+1;
                                  echo "<tr id='row".$rowIdx."'>
                        						<td>
                        						1
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[0]."'  class='form-control' value='".$row[$rowKeys[0]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[4]."' class='form-control' value='".$row[$rowKeys[4]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[5]."' class='form-control' value='".$row[$rowKeys[5]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[6]."' class='form-control' value='".$row[$rowKeys[6]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[7]."' class='form-control' value='".$row[$rowKeys[7]][0]."'/>
                        						</td>
                        					</tr>";
                                }

                                echo "<tr id='row0" .$rowIdx1. "'></tr>";
                                // var_dump($rds0);
                              }
                            ?>

                  				</tbody>
                  			</table>
                    </div>
                  </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->

          <!-- CARDS -->
          <div class="container-fluid">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Amazon RDS Aurora Serverless
                    </h6>

                    <br>
                    <div class="btn-group">
                        <a id="add_row1" class="btn btn-outline-primary btn-sm">Add Row</a>
                        <a id='delete_row1' class="btn btn-outline-danger btn-sm">Delete Row</a>
                    </div>
                    <br>
                    <br>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="table1">
                  				<thead>
                  					<tr >
                  						<th class="text-center">
                  							#
                  						</th>
                  						<th class="text-center">
                  							Description
                  						</th>
                              <th class="text-center">
                  							Usage
                  						</th>
                              <th class="text-center">
                  							DB Engine
                  						</th>
                              <th class="text-center">
                  							Number of Aurora Capacity Units (ACU)
                  						</th>
                              <th class="text-center">
                  							Storage
                  						</th>
                              <th class="text-center">
                  							I/O
                  						</th>
                  					</tr>
                  				</thead>
                  				<tbody>
                            <?php
                              if (!isset($_SESSION['saved'])) {
                                echo "<tr id='row10'>
                      						<td>
                      						1
                      						</td>
                      						<td>
                      						        <input type='text' name='description10'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='usage10' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='engine10' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='acu10' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='storage10' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='io10' class='form-control'/>
                      						</td>
                      					</tr>
                                <tr id='row11'></tr>";
                              } else {
                                $rds1 = json_decode($rds_rows[1]['table1'], TRUE);
                                $x = 0;
                                foreach ($rds1 as $row) {
                                  $rowKeys = array_keys($row);
                                  $rowIdx = substr($rowKeys[0], -2);
                                  $rowIdx1 = $rowIdx+1;
                                  echo "<tr id='row".$rowIdx."'>
                        						<td>
                        						1
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[0]."'  class='form-control' value='".$row[$rowKeys[0]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[4]."' class='form-control' value='".$row[$rowKeys[4]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[5]."' class='form-control' value='".$row[$rowKeys[5]][0]."'/>
                        						</td>
                        					</tr>";
                                }

                                echo "<tr id='row" .$rowIdx1. "'></tr>";
                                // var_dump($rds1);
                              }
                            ?>
                  				</tbody>
                  			</table>
                      </div>
                    </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->

          <!-- CARDS -->
          <div class="container-fluid">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Additional Backup Storage (Free backup storage up to 100% of provisioned storage)
                    </h6>

                    <br>
                    <div class="btn-group">
                        <a id="add_row2" class="btn btn-outline-primary btn-sm">Add Row</a>
                        <a id='delete_row2' class="btn btn-outline-danger btn-sm">Delete Row</a>
                    </div>
                    <br>
                    <br>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="table2">
                  				<thead>
                  					<tr >
                  						<th class="text-center">
                  							#
                  						</th>
                  						<th class="text-center">
                  							Backup Type
                  						</th>
                              <th class="text-center">
                  							Backup Storage
                  						</th>
                  					</tr>
                  				</thead>
                  				<tbody>
                            <?php
                              if (!isset($_SESSION['saved'])) {
                                echo "<tr id='row20'>
                      						<td>
                      						1
                      						</td>
                      						<td>
                      						        <input type='text' name='type20'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='storage20' class='form-control'/>
                      						</td>
                      					</tr>
                                <tr id='row21'></tr>";
                              } else {
                                $rds2 = json_decode($rds_rows[1]['table2'], TRUE);
                                $x = 0;
                                foreach ($rds2 as $row) {
                                  $rowKeys = array_keys($row);
                                  $rowIdx = substr($rowKeys[0], -2);
                                  $rowIdx1 = $rowIdx+1;
                                  echo "<tr id='row".$rowIdx."'>
                        						<td>
                        						1
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[0]."'  class='form-control' value='".$row[$rowKeys[0]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                        						</td>
                        					</tr>";
                                }

                                echo "<tr id='row" .$rowIdx1. "'></tr>";
                                // var_dump($rds2);
                              }
                            ?>
                  				</tbody>
                  			</table>
                      </div>
                    </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->

          <!-- CARDS -->
          <div class="container-fluid">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Amazon RDS Reserved DB Instances
                    </h6>

                    <br>
                    <div class="btn-group">
                        <a id="add_row3" class="btn btn-outline-primary btn-sm">Add Row</a>
                        <a id='delete_row3' class="btn btn-outline-danger btn-sm">Delete Row</a>
                    </div>
                    <br>
                    <br>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="table3">
                  				<thead>
                  					<tr >
                  						<th class="text-center">
                  							#
                  						</th>
                  						<th class="text-center">
                  							Description
                  						</th>
                              <th class="text-center">
                  							DB Instances
                  						</th>
                              <th class="text-center">
                  							DB Engine and License
                  						</th>
                              <th class="text-center">
                  							Class and Deployment
                  						</th>
                              <th class="text-center">
                  							Offering and Term
                  						</th>
                              <th class="text-center">
                  							Storage
                  						</th>
                              <th class="text-center">
                  							I/O
                  						</th>
                              <th class="text-center">
                  							Backtrack
                  						</th>
                  					</tr>
                  				</thead>
                  				<tbody>
                            <?php
                              if (!isset($_SESSION['saved'])) {
                                echo "<tr id='row30'>
                      						<td>
                      						1
                      						</td>
                      						<td>
                      						        <input type='text' name='description30'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='instance30' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='engine30'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='class30' class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='offering30' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='storage30'  class='form-control'/>
                      						</td>
                      						<td>
                      						        <input type='text' name='io30' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='backtrack30'  class='form-control'/>
                      						</td>
                      					</tr>
                                <tr id='row31'></tr>";
                              } else {
                                $rds3 = json_decode($rds_rows[1]['table3'], TRUE);
                                $x = 0;
                                foreach ($rds3 as $row) {
                                  $rowKeys = array_keys($row);
                                  $rowIdx = substr($rowKeys[0], -2);
                                  $rowIdx1 = $rowIdx+1;
                                  echo "<tr id='row".$rowIdx."'>
                        						<td>
                        						1
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[0]."'  class='form-control' value='".$row[$rowKeys[0]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                        						</td>
                        						<td>
                        						        <input type='text' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[4]."' class='form-control' value='".$row[$rowKeys[4]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[5]."' class='form-control' value='".$row[$rowKeys[5]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[6]."' class='form-control' value='".$row[$rowKeys[6]][0]."'/>
                        						</td>
                                    <td>
                        						        <input type='text' name='".$rowKeys[7]."' class='form-control' value='".$row[$rowKeys[7]][0]."'/>
                        						</td>
                        					</tr>";
                                }

                                echo "<tr id='row" .$rowIdx1. "'></tr>";
                                // var_dump($rds3);
                              }
                            ?>
                  				</tbody>
                  			</table>
                      </div>
                    </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->

          <!-- CARDS -->
          <div class="container-fluid">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Data Transfer
                    </h6>

                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Inter-Region Data Transfer Out
                          </label>
                          <div class="input-group">
                            <input name="inter40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $rds_rows[1]['inter40']; } ?>">
                            <div class="input-group-append">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB/Month</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Data Transfer Out
                          </label>
                          <div class="input-group">
                            <input name="dtout40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $rds_rows[1]['dtout40']; } ?>">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">GB/Month</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Data Transfer In
                          </label>
                          <div class="input-group">
                            <input name="dtin40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $rds_rows[1]['dtin40']; } ?>">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">GB/Month</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Intra-Region Data Transfer
                          </label>
                          <div class="input-group">
                            <input name="intra40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $rds_rows[1]['intra40']; } ?>">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">GB/Month</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->


        </form>
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

    <script type="text/javascript">
      function adjustValue(input) {
        var value = document.getElementsByName(input)[0].value;
        console.log(value);
        console.log(document.getElementById(input + "-type").value);
      }
    </script>

  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
  var i=(document.getElementById('table0').rows.length)-2;
  $("#add_row0").click(function(){
    $('#row0'+i).html("<td>"+ (i+1) +"</td><td><input name='description0"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='instance0"+i+"' type='text' class='form-control input-md'></td><td><input  name='usage0"+i+"' type='text' class='form-control input-md'></td><td><input  name='engine0"+i+"' type='text' class='form-control input-md'></td><td><input  name='class0"+i+"' type='text' class='form-control input-md'></td><td><input  name='storage0"+i+"' type='text' class='form-control input-md'></td><td><input  name='io0"+i+"' type='text' class='form-control input-md'></td><td><input  name='backtrack0"+i+"' type='text' class='form-control input-md'></td>");
    $('#table0').append('<tr id="row0'+(i+1)+'"></tr>');
    i++;
    });
    $("#delete_row0").click(function(){
    if(i>1){
    $("#row0"+(i-1)).html('');
    i--;
    }
    });
  });

  $(document).ready(function(){
  var i=(document.getElementById('table1').rows.length)-2;
  $("#add_row1").click(function(){
    $('#row1'+i).html("<td>"+ (i+1) +"</td><td><input name='description1"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='usage1"+i+"' type='text' class='form-control input-md'></td><td><input  name='engine1"+i+"' type='text' class='form-control input-md'></td><td><input  name='aurora1"+i+"' type='text' class='form-control input-md'></td><td><input  name='storage1"+i+"' type='text' class='form-control input-md'></td><td><input  name='io1"+i+"' type='text' class='form-control input-md'></td>");
    $('#table1').append('<tr id="row1'+(i+1)+'"></tr>');
    i++;
    });
    $("#delete_row1").click(function(){
    if(i>1){
    $("#row1"+(i-1)).html('');
    i--;
    }
    });
  });

  $(document).ready(function(){
  var i=(document.getElementById('table2').rows.length)-2;
  $("#add_row2").click(function(){
    $('#row2'+i).html("<td>"+ (i+1) +"</td><td><input name='type2"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='storage2"+i+"' type='text' class='form-control input-md'></td>");
    $('#table2').append('<tr id="row2'+(i+1)+'"></tr>');
    i++;
    });
    $("#delete_row2").click(function(){
    if(i>1){
    $("#row2"+(i-1)).html('');
    i--;
    }
    });
  });

  $(document).ready(function(){
  var i=(document.getElementById('table3').rows.length)-2;
  $("#add_row3").click(function(){
    $('#row3'+i).html("<td>"+ (i+1) +"</td><td><input name='description3"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='instance3"+i+"' type='text' class='form-control input-md'></td><td><input  name='engine3"+i+"' type='text' class='form-control input-md'></td><td><input  name='class3"+i+"' type='text' class='form-control input-md'></td><td><input  name='offering3"+i+"' type='text' class='form-control input-md'></td><td><input  name='storage3"+i+"' type='text' class='form-control input-md'></td><td><input  name='io3"+i+"' type='text' class='form-control input-md'></td><td><input  name='backtrack3"+i+"' type='text' class='form-control input-md'></td>");
    $('#table3').append('<tr id="row3'+(i+1)+'"></tr>');
    i++;
    });
    $("#delete_row3").click(function(){
    if(i>1){
    $("#row3"+(i-1)).html('');
    i--;
    }
    });
  });

</script>
<?php
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {

      // Evaluate the table rows; basically, you set the keys aside and evaluate each one
      $keys = array_keys($_POST);
      foreach ($keys as $key) {
        // Skip it if the submit value is present (if the submit button was pressed, it probably is :) )
        if ($key == "submit") {
          continue;
        }

        // Get the numbers at the end of all the keys; evaluate the index number
        $thisNumber = substr($key, -2);
        $idx1 = $thisNumber[0];
        $idx2 = $thisNumber[1];

        // Skip the values that aren't tables (last card on the RDS page)
        if ($idx1 == 4) {
          continue;
        }

        if (isset($tables[$idx1][$idx2][$key])) {
          array_push($tables[$idx1][$idx2][$key], $_POST[$key]);
        } else {
          $tables[$idx1][$idx2][$key] = array();
          array_push($tables[$idx1][$idx2][$key], $_POST[$key]);
        }
      }
      // var_dump($tables); // Uncomment to debug

      // Gather information
      $msg = array();

      // Add $msg variables for table0 to 3
      $x = 0;
      foreach ($tables as $table) {
        $customIndex = "table" . $x;
        $msg[$customIndex] = json_encode($table);
        $x++;
      }
      // var_dump($msg); // Uncomment to debug

      $msg['inter40'] = $_POST['inter40'];
      $msg['dtout40'] = $_POST['dtout40'];
      $msg['dtin40'] = $_POST['dtin40'];
      $msg['intra40'] = $_POST['intra40'];
      $msg['email'] = $_SESSION['email'];

      // Pass the msg along
      // Include the processor
      include_once("../../assets/php/process.php");

      // Determine if it's a new entry or an update
      if (isset($_SESSION['saved'])) {
        $msg['title'] = $rds_rows[1]['title'];
        $output = updateRDS($msg);
      } else {
        $msg['email'] = $_SESSION['email'];
        $output = addRDS($msg);
      }

      // var_dump($output); //Un-comment to help debug

      if (strpos($output, "good") >= 0) {
          echo '<script type="text/javascript">';
          echo 'alert("Report Saved");';
          echo 'window.location = "index.php";';
          echo '</script>';
      } else {
          echo '<script type="text/javascript">';
          echo 'alert("ERROR");';
          echo '</script>';
      }
    } elseif (isset($_POST["delete"])) {
      $rds_del_query1 = "DELETE FROM rds WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $rds_rows[1]['title'] . "'";
      $rds_del_query2 = "DELETE FROM saved WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $rds_rows[1]['title'] . "'";
      $rds_del1 = doSQLQuery($rds_del_query1);
      $rds_del2 = doSQLQuery($rds_del_query2);
      if (strpos($rds_del1, "good") >= 0 && strpos($rds_del2, "good") >= 0) {
          echo '<script type="text/javascript">';
          echo 'alert("Report Deleted");';
          echo 'window.location = "index.php";';
          echo '</script>';
          unset($_SESSION['saved']);
      }
    } else if (isset($_POST["new"])) {
      unset($_SESSION['saved']);
      echo '<script type="text/javascript">';
      echo 'window.location = "rds.php";';
      echo '</script>';
    }
?>
