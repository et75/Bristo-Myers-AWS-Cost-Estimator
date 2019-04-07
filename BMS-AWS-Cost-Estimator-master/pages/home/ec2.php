ec2_<!doctype html>
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
            $ec2_query = "SELECT * FROM ec2 WHERE email="."'".$_SESSION['email']."'". "AND title="."'".$_SESSION['saved']."'";

            // Include the processor
            include_once("../../assets/php/process.php");

            // Get the details
            $ec2_values = doSQLQuery($ec2_query);
            var_dump($ec2_values); //Un-comment to help debug

            $ec2_rows = json_decode($ec2_values, TRUE);
        }
      ?>
      <!-- Form -->
      <form method="POST" id="ec2">

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
                      Amazon EC2 <?php if (isset($_SESSION['saved'])) { echo " - " . $ec2_rows[1]['title']; } ?>
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
                    <button form="ec2" name="submit" value="submit" type="submit" class="btn btn-primary">
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
                      Compute: Amazon EC2 Instances
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
                  							Instances
                  						</th>
                  						<th class="text-center">
                  							Usage
                  						</th>
                              <th class="text-center">
                  							Type
                  						</th>
                              <th class="text-center">
                  							Billing Option
                  						</th>
                              <th class="text-center">
                  							Monthly Cost
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
                      						        <input type='number' name='instances00' class='form-control'/>
                                  </td>
                      						<td>
                                        <div class='input-group'>
                      						        <input type='number' min='0' max='100' name='usage00' class='form-control'/>
                                        <div class='input-group-append'>
                                          <span class='input-group-text'>% Utilized/Month</span>
                                        </div>
                                      </div>
                      						</td>
                                  <td>
                      						        <input type='text' name='type00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='billing00' class='form-control'/>
                      						</td>
                                  <td>
                      						        <input type='text' name='cost00' class='form-control'/>
                      						</td>
                      					</tr>
                                <tr id='row01'></tr>";
                              } else {
                                $ec20 = json_decode($ec2_rows[1]['table0'], TRUE);
                                $x = 0;
                                foreach ($ec20 as $row) {
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
                                            <input type='number' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                                    </td>
                                    <td>
                                          <div class='input-group'>
                                            <input type='number' min='0' max='100' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                                          <div class='input-group-append'>
                                            <span class='input-group-text'>% Utilized/Month</span>
                                            </div>
                                          </div>
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

                                echo "<tr id='row0" .$rowIdx1. "'></tr>";
                                // var_dump($ec20);
                              }
                            ?>



                  				</tbody>
                  			</table>
                    </div> <!-- / .col -->
                </div>
              </div> <!-- / .cardbody -->
            </div> <!-- / .card -->
          </div> <!-- / .container -->
        </div>

        <!-- CARDS -->
        <div class="container-fluid">
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Compute: Amazon EC2 Dedicated Hosts
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
                							Number of Hosts
                						</th>
                						<th class="text-center">
                							Usage
                						</th>
                            <th class="text-center">
                							Type
                						</th>
                            <th class="text-center">
                							Billing Option
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
                    						        <input type='number' name='hosts10' class='form-control'/>
                    						</td>
                                <td>
                                      <div class='input-group'>
                                          <input type='number' min='0' max='100' name='usage10' class='form-control'/>
                                        <div class='input-group-append'>
                                          <span class='input-group-text'>% Utilized/Month</span>
                                        </div>
                                      </div>
                                </td>
                                <td>
                    						        <select name='type10' class='form-control'>
                                            <option value='a1'>a1</option>
                                            <option value='c3'>c3</option>
                                            <option value='c4'>c4</option>
                                            <option value='c5'>c5</option>
                                            <option value='c5d'>c5d</option>
                                            <option value='c5n'>c5n</option>
                                            <option value='d2'>d2</option>
                                            <option value='f1'>f1</option>
                                            <option value='g3'>g3</option>
                                            <option value='h1'>h1</option>
                                            <option value='i3'>i3</option>
                                            <option value='m4'>m4</option>
                                            <option value='m3'>m3</option>
                                            <option value='m5'>m5</option>
                                            <option value='m5d'>m5d</option>
                                            <option value='p2'>p2</option>
                                            <option value='p3'>p3</option>
                                            <option value='r3'>r3</option>
                                            <option value='r4'>r4</option>
                                            <option value='r5'>r5</option>
                                            <option value='r5d'>r5d</option>
                                            <option value='U-6tb1'>U-6tb1</option>
                                            <option value='U-9tb1'>U-9tb1</option>
                                            <option value='U-12tb1'>U-12tb1</option>
                                            <option value='x1'>x1</option>
                                            <option value='x1e'>x1e</option>
                                            <option value='z1d'>z1d</option>
                                        </select>
                    						</td>
                                <td>
                    						        <select name='billing10' class='form-control'>
                                          <option value='ondemand'>On-Demand</option>
                                          <option value='1yno'>1 Yr No Upfront Reservation</option>
                                          <option value='1ypartial'>1 Yr Partial Upfront Reservation</option>
                                          <option value='1yall'>1 Yr All Upfront Reservation</option>
                                          <option value='3yno'>3 Yr No Upfront Reservation</option>
                                          <option value='3ypartial'>3 Yr Partial Upfront Reservation</option>
                                          <option value='3yall'>3 Yr All Upfront Reservation</option>
                                        </select>
                    						</td>
                    					</tr>
                              <tr id='row11'></tr>";
                            } else {
                              $ec21 = json_decode($ec2_rows[1]['table1'], TRUE);
                              $x = 0;
                              foreach ($ec21 as $row) {
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
                                          <div class='input-group'>
                                            <input type='number' min='0' max='100' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                                          <div class='input-group-append'>
                                            <span class='input-group-text'>% Utilized/Month</span>
                                            </div>
                                          </div>
                                  </td>
                                  <td>
                                          <select name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'>
                                            <option value='a1'>a1</option>
                                            <option value='c3'>c3</option>
                                            <option value='c4'>c4</option>
                                            <option value='c5'>c5</option>
                                            <option value='c5d'>c5d</option>
                                            <option value='c5n'>c5n</option>
                                            <option value='d2'>d2</option>
                                            <option value='f1'>f1</option>
                                            <option value='g3'>g3</option>
                                            <option value='h1'>h1</option>
                                            <option value='i3'>i3</option>
                                            <option value='m4'>m4</option>
                                            <option value='m3'>m3</option>
                                            <option value='m5'>m5</option>
                                            <option value='m5d'>m5d</option>
                                            <option value='p2'>p2</option>
                                            <option value='p3'>p3</option>
                                            <option value='r3'>r3</option>
                                            <option value='r4'>r4</option>
                                            <option value='r5'>r5</option>
                                            <option value='r5d'>r5d</option>
                                            <option value='U-6tb1'>U-6tb1</option>
                                            <option value='U-9tb1'>U-9tb1</option>
                                            <option value='U-12tb1'>U-12tb1</option>
                                            <option value='x1'>x1</option>
                                            <option value='x1e'>x1e</option>
                                            <option value='z1d'>z1d</option>
                                          </select>
                                  </td>
                                  <td>
                                          <select name='".$rowKeys[4]."' class='form-control' value='".$row[$rowKeys[4]][0]."'>
                                            <option value='ondemand'>On-Demand</option>
                                            <option value='1yno'>1 Yr No Upfront Reservation</option>
                                            <option value='1ypartial'>1 Yr Partial Upfront Reservation</option>
                                            <option value='1yall'>1 Yr All Upfront Reservation</option>
                                            <option value='3yno'>3 Yr No Upfront Reservation</option>
                                            <option value='3ypartial'>3 Yr Partial Upfront Reservation</option>
                                            <option value='3yall'>3 Yr All Upfront Reservation</option>
                                          </select>
                                  </td>
                                </tr>";
                              }

                              echo "<tr id='row" .$rowIdx1. "'></tr>";
                              // var_dump($ec21);
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
                    Compute: Amazon EBS Volumes
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
                							Description
                						</th>
                						<th class="text-center">
                							Volumes
                						</th>
                						<th class="text-center">
                							Volume Type
                						</th>
                            <th class="text-center">
                							Storage
                						</th>
                            <th class="text-center">
                							IOPS
                						</th>
                            <th class="text-center">
                							Baseline Throughput
                						</th>
                            <th class="text-center">
                							Snapshot Storage
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
                    						        <input type='text' name='description20'  class='form-control'/>
                    						</td>
                    						<td>
                    						        <input type='number' name='volumes20' class='form-control'/>
                    						</td>
                    						<td>
                    						        <select name='type20' class='form-control'>
                                          <option value='ssd0'>General Purpose SSD (gp2)</option>
                                          <option value='ssd1'>Provisioned IOPS SSD (io1)</option>
                                          <option value='hdd0'>Throughput Optimized HDD (st1)</option>
                                          <option value='hdd1'>Cold HDD (sc1)</option>
                                          <option value='mag0'>Magnetic (Previous Generation)</option>
                                        </select>
                    						</td>
                                <td>
                                        <div class='input-group'>
                    						          <input type='number' name='storage20' class='form-control'/>
                                          <div class='input-group-append'>
                                            <span class='input-group-text'>GB</span>
                                          </div>
                                        </div>
                    						</td>
                                <td>
                    						        <input type='number' name='iops20' class='form-control'/>
                    						</td>
                                <td>
                                      <div class='input-group'>
                    						        <input type='number' name='baseline20' class='form-control'/>
                                        <div class='input-group-append'>
                                          <span class='input-group-text'>MBs/sec</span>
                                        </div>
                                      </div>
                                </td>
                                <td>
                                      <div class='input-group'>
                    						        <input type='number' name='snapshot20' class='form-control'/>
                                        <div class='input-group-append'>
                                          <span class='input-group-text'>GB-month of Storage</span>
                                        </div>
                                      </div>
                    						</td>
                    					</tr>
                              <tr id='row21'></tr>";
                            } else {
                              $ec22 = json_decode($ec2_rows[1]['table2'], TRUE);
                              $x = 0;
                              foreach ($ec22 as $row) {
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
                                          <input type='number' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                                  </td>
                                  <td>
                                          <select name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'>
                                            <option value='ssd0'>General Purpose SSD (gp2)</option>
                                            <option value='ssd1'>Provisioned IOPS SSD (io1)</option>
                                            <option value='hdd0'>Throughput Optimized HDD (st1)</option>
                                            <option value='hdd1'>Cold HDD (sc1)</option>
                                            <option value='mag0'>Magnetic (Previous Generation)</option>
                                          </select>
                                  </td>
                                  <td>
                                        <div class='input-group'>
                                            <input type='number' name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'/>
                                          <div class='input-group-append'>
                                            <span class='input-group-text'>GB</span>
                                          </div>
                                        </div>
                                  </td>
                                  <td>
                                          <input type='number' name='".$rowKeys[4]."' class='form-control' value='".$row[$rowKeys[4]][0]."'/>
                                  </td>
                                  <td>
                                        <div class='input-group'>
                                          <input type='number' name='".$rowKeys[5]."' class='form-control' value='".$row[$rowKeys[5]][0]."'/>
                                          <div class='input-group-append'>
                                            <span class='input-group-text'>MBs/sec</span>
                                          </div>
                                        </div>
                                  </td>
                                  <td>
                                          <input type='text' name='".$rowKeys[6]."' class='form-control' value='".$row[$rowKeys[6]][0]."'/>
                                  </td>
                                </tr>";
                              }

                              echo "<tr id='row" .$rowIdx1. "'></tr>";
                              // var_dump($ec22);
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
                    Compute: Amazon EC2 Elastic GPUs
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
                              Number of Elastic GPUs
                            </th>
                            <th class="text-center">
                              Usage
                            </th>
                            <th class="text-center">
                              Elastic GPUs Size and Memory
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
                                        <input type='number' name='number30' class='form-control'/>
                                </td>
                                <td>
                                      <div class='input-group'>
                                        <input type='number' min='0' max='100' name='usage30' class='form-control'/>
                                      <div class='input-group-append'>
                                        <span class='input-group-text'>% Utilized/Month</span>
                                        </div>
                                      </div>
                                </td>
                                <td>
                                        <select name='elastic30' class='form-control'>
                                          <option value='eg1m'>eg1.medium(1GB)</option>
                                          <option value='eg1l'>eg1.large(2GB)</option>
                                          <option value='eg1xl'>eg1.xlarge(4GB)</option>
                                          <option value='eg12xl'>eg1.2xlarge(8GB)</option>
                                        </select>
                                </td>
                              </tr>
                              <tr id='row31'></tr>";
                            } else {
                              $ec23 = json_decode($ec2_rows[1]['table3'], TRUE);
                              $x = 0;
                              foreach ($ec23 as $row) {
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
                                          <input type='number' name='".$rowKeys[1]."' class='form-control' value='".$row[$rowKeys[1]][0]."'/>
                                  </td>
                                  <td>
                                        <div class='input-group'>
                                          <input type='number' min='0' max='100' name='".$rowKeys[2]."' class='form-control' value='".$row[$rowKeys[2]][0]."'/>
                                        <div class='input-group-append'>
                                          <span class='input-group-text'>% Utilized/Month</span>
                                          </div>
                                        </div>
                                  </td>
                                  <td>
                                          <select name='".$rowKeys[3]."' class='form-control' value='".$row[$rowKeys[3]][0]."'>
                                            <option value='eg1m'>eg1.medium(1GB)</option>
                                            <option value='eg1l'>eg1.large(2GB)</option>
                                            <option value='eg1xl'>eg1.xlarge(4GB)</option>
                                            <option value='eg12xl'>eg1.2xlarge(8GB)</option>
                                          </select>
                                  </td>
                                </tr>";
                              }

                              echo "<tr id='row" .$rowIdx1. "'></tr>";
                              // var_dump($ec23);
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
                    Addtional T2/T3 Unlimited vCPU Hours Per Month
                  </h6>

                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>
                          For Linux, RHEL, and SLES
                        </label>
                        <div class="input-group">
                          <input name="linux40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['linux40']; } ?>">
                          <div class="input-group-append">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">Hours</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>
                          For Windows and Windows with SQL Web
                        </label>
                        <div class="input-group">
                          <input name="windows40" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['windows40']; } ?>">
                          <div class="input-group-append">
                            <span class="input-group-text" id="data-type">Hours</span>
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

        <!-- CARDS -->
        <div class="container-fluid">
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Elastic IP
                  </h6>

                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>
                          Number of Addtional Elastic IPs
                        </label>
                        <div class="input-group">
                          <input name="ips50" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['ips50']; } ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>
                          For Windows and Windows with SQL Web
                        </label>
                        <div class="input-group">
                          <input name="nonatt50" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['nonatt50']; } ?>">
                          <div class="input-group-append">
                            <span class="input-group-text" id="data-type">Hours/Month</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>
                          Number of Elastic IP Remaps
                        </label>
                        <div class="input-group">
                          <input name="remap50" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['remap50']; } ?>">
                          <div class="input-group-append">
                            <span class="input-group-text" id="data-type">Hours</span>
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
                            <input name="inter60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['inter60']; } ?>">
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
                            <input name="dtout60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['dtout60']; } ?>">
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
                            <input name="dtin60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['dtin60']; } ?>">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">GB/Month</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            VPC Peering Data Transfer
                          </label>
                          <div class="input-group">
                            <input name="peer60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['peer60']; } ?>">
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
                            <input name="intra60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['intra60']; } ?>">
                            <div class="input-group-append">
                              <span class="input-group-text" id="data-type">GB/Month</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Public IP/Elastic IP Data Transfer
                          </label>
                          <div class="input-group">
                            <input name="public60" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $ec2_rows[1]['public60']; } ?>">
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
    $('#row0'+i).html("<td>"+ (i+1) +"</td><td><input name='description0"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='instance0"+i+"' type='number' class='form-control input-md'></td><td><div class='input-group'><input  name='usage0"+i+"' type='number' min='0' max='100' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>% Utilized/Month</span></div></div></td><td><input  name='type0"+i+"' type='text' class='form-control input-md'></td><td><input  name='billing0"+i+"' type='text' class='form-control input-md'></td><td><input name='cost0"+i+"' type='text' class='form-control input-md'></td>");
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
    $('#row1'+i).html("<td>"+ (i+1) +"</td><td><input name='description1"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='hosts1"+i+"' type='text' class='form-control input-md'></td><td><div class='input-group'><input  name='usage1"+i+"' type='number' min='0' max='100' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>% Utilized/Month</span></div></div></td><td><select name='type1"+i+"' class='form-control'><option value='a1'>a1</option><option value='c3'>c3</option><option value='c4'>c4</option><option value='c5'>c5</option><option value='c5d'>c5d</option><option value='c5n'>c5n</option><option value='d2'>d2</option><option value='f1'>f1</option><option value='g3'>g3</option><option value='h1'>h1</option><option value='i3'>i3</option><option value='m4'>m4</option><option value='m3'>m3</option><option value='m5'>m5</option><option value='m5d'>m5d</option><option value='p2'>p2</option><option value='p3'>p3</option><option value='r3'>r3</option><option value='r4'>r4</option><option value='r5'>r5</option><option value='r5d'>r5d</option><option value='U-6tb1'>U-6tb1</option><option value='U-9tb1'>U-9tb1</option><option value='U-12tb1'>U-12tb1</option><option value='x1'>x1</option><option value='x1e'>x1e</option><option value='z1d'>z1d</option></select></td><td><select name='billing1"+i+"' class='form-control input-md'><option value='ondemand'>On-Demand</option><option value='1yno'>1 Yr No Upfront Reservation</option><option value='1ypartial'>1 Yr Partial Upfront Reservation</option><option value='1yall'>1 Yr All Upfront Reservation</option><option value='3yno'>3 Yr No Upfront Reservation</option><option value='3ypartial'>3 Yr Partial Upfront Reservation</option><option value='3yall'>3 Yr All Upfront Reservation</option></select></td>");
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
    $('#row2'+i).html("<td>"+ (i+1) +"</td><td><input name='description2"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='volumes2"+i+"' type='number' class='form-control input-md'></td><td><select name='type2"+i+"' class='form-control input-md'><option value='ssd0'>General Purpose SSD (gp2)</option><option value='ssd1'>Provisioned IOPS SSD (io1)</option><option value='hdd0'>Throughput Optimized HDD (st1)</option><option value='hdd1'>Cold HDD (sc1)</option><option value='mag0'>Magnetic (Previous Generation)</option></select></td><td><div class='input-group'><input name='storage2"+i+"' type='number' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>GB</span></div></div></td><td><input  name='iops2"+i+"' type='text' class='form-control input-md'></td><td><div class='input-group'><input name='baseline2"+i+"' type='text' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>MBs/sec</span></div></div></td><td><div class='input-group'><input name='snapshot2"+i+"' type='text' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>GB-month of Storage</span></div></div></td>");
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
    $('#row3'+i).html("<td>"+ (i+1) +"</td><td><input name='description3"+i+"' type='text' class='form-control input-md'  /> </td><td><input  name='number3"+i+"' type='number' class='form-control input-md'></td><td><<div class='input-group'>input name='usage3"+i+"' type='number' class='form-control input-md'><div class='input-group-append'><span class='input-group-text'>% Utilized/Month</span></div></div></td><td><select name='elastic3"+i+"' class='form-control input-md'><option value='eg1m'>eg1.medium(1GB)</option><option value='eg1l'>eg1.large(2GB)</option><option value='eg1xl'>eg1.xlarge(4GB)</option><option value='eg12xl'>eg1.2xlarge(8GB)</option></select></td>");
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

              // Skip the values that aren't tables (last card on the EC2 page)
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

            $msg['linux40'] = $_POST['linux40'];
            $msg['windows40'] = $_POST['windows40'];
            $msg['ips50'] = $_POST['ips50'];
            $msg['nonatt50'] = $_POST['nonatt50'];
            $msg['remap50'] = $_POST['remap50'];
            $msg['inter60'] = $_POST['inter60'];
            $msg['dtout60'] = $_POST['dtout60'];
            $msg['dtin60'] = $_POST['dtin60'];
            $msg['peer60'] = $_POST['peer60'];
            $msg['intra60'] = $_POST['intra60'];
            $msg['public60'] = $_POST['public60'];
            $msg['email'] = $_SESSION['email'];

            // Pass the msg along
            // Include the processor
            include_once("../../assets/php/process.php");

            // Determine if it's a new entry or an update
            if (isset($_SESSION['saved'])) {
              $msg['title'] = $ec2_rows[1]['title'];
              $output = updateEC2($msg);
            } else {
              $msg['email'] = $_SESSION['email'];
              $output = addEC2($msg);
            }

        var_dump($output); //Un-comment to help debug

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
        $ec2_del_query1 = "DELETE FROM ec2 WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $ec2_rows[1]['title'] . "'";
        $ec2_del_query2 = "DELETE FROM saved WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $ec2_rows[1]['title'] . "'";
        $ec2_del1 = doSQLQuery($ec2_del_query1);
        $ec2_del2 = doSQLQuery($ec2_del_query2);
        if (strpos($ec2_del1, "good") >= 0 && strpos($ec2_del2, "good") >= 0) {
            echo '<script type="text/javascript">';
            echo 'alert("Report Deleted");';
            echo 'window.location = "index.php";';
            echo '</script>';
            unset($_SESSION['saved']);
        }
    } else if (isset($_POST["new"])) {
      unset($_SESSION['saved']);
      echo '<script type="text/javascript">';
      echo 'window.location = "ec2.php";';
      echo '</script>';
    }
?>
