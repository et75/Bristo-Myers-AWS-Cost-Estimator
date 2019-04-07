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
          $s3_query = "SELECT * FROM s3 WHERE email="."'".$_SESSION['email']."'". "AND title="."'".$_SESSION['saved']."'";

          // Include the processor
          include_once("../../assets/php/process.php");

          // Get the details
          $s3_values = doSQLQuery($s3_query);
          //var_dump($output); //Un-comment to help debug

          $s3_rows = json_decode($s3_values, TRUE);
        }
      ?>
      <!-- Form -->
      <form method="POST">

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
                      Amazon S3 <?php if (isset($_SESSION['saved'])) { echo " - " . $s3_rows[1]['title']; } ?>
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
                    <!-- Button -->
                    <button name="submit" value="submit" type="submit" class="btn btn-primary">
                      Save
                    </button>

                    <?php
                      if (isset($_SESSION['saved'])) {
                        echo '<button name="delete" value="delete" type="submit" class="btn btn-danger">Delete</button>';
                        echo '<button name="new" value="new" type="submit" class="btn btn-primary">New</button>';
                      }
                    ?>

                  </div> <!-- / .col -->
                </div> <!-- / .row -->
              </div> <!-- / .header-body -->
            </div> <!-- / .container -->
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
                      S3 Standard Storage & Requests
                    </h6>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Storage
                            </label>
                            <div class="input-group" onchange="adjustValue('storage01')">
                              <input name="storage01" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['storage01']; } ?>">
                              <div class="input-group-append">
                                <!-- <select id="storage01-type" class="btn btn-secondary dropdown-toggle">
                                  <option value="0">GB</option>
                                  <option value="1">TB</option>
                                  <option value="2">PB</option>
                                </select> -->
                                <span class="input-group-text" id="data-type">GB</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              PUT/COPY/POST/LIST Requests
                            </label>
                            <div class="input-group">
                              <input name="requests01" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['requests01']; } ?>">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">Requests</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              GET/SELECT and Other Requests
                            </label>
                            <div class="input-group">
                              <input name="other01" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['other01']; } ?>">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">Requests</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Data Returned by S3 Select
                            </label>
                            <div class="input-group">
                              <input name="returned01" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['returned01']; } ?>">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Data Scanned by S3 Select
                            </label>
                            <div class="input-group">
                              <input name="scanned01" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['scanned01']; } ?>">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB</span>
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
                        S3 Standard - Infrequent Access (S3 Standard-IA) Storage & Requests
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Storage
                              </label>
                              <div class="input-group">
                                <input name="storage02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['storage02']; } ?>">
                                <div class="input-group-append">
                                  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">GB</a>
                                    <a class="dropdown-item" href="#">TB</a>
                                    <a class="dropdown-item" href="#">PB</a>
                                  </div> -->
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">GB</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                PUT/COPY/POST/LIST Requests
                              </label>
                              <div class="input-group">
                                <input name="requests02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['requests02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                GET/SELECT and Other Requests
                              </label>
                              <div class="input-group">
                                <input name="other02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['other02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Lifecycle Transitions
                              </label>
                              <div class="input-group">
                                <input name="lifecycle02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['lifecycle02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Retrieval
                              </label>
                              <div class="input-group">
                                <input name="retrieval02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['retrieval02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Returned by S3 Select
                              </label>
                              <div class="input-group">
                                <input name="returned02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['returned02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Scanned by S3 Select
                              </label>
                              <div class="input-group">
                                <input name="scanned02" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['scanned02']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
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
                        S3 One Zone - Infrequent Access (S3 One Zone-IA) Storage & Requests
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Storage
                              </label>
                              <div class="input-group">
                                <input name="storage03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['storage03']; } ?>">
                                <div class="input-group-append">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">GB</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                PUT/COPY/POST/LIST Requests
                              </label>
                              <div class="input-group">
                                <input name="requests03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['requests03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                GET/SELECT and Other Requests
                              </label>
                              <div class="input-group">
                                <input name="other03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['other03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Lifecycle Transitions
                              </label>
                              <div class="input-group">
                                <input name="lifecycle03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['lifecycle03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Requests</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Retrieval
                              </label>
                              <div class="input-group">
                                <input name="retrieval03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['retrieval03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Returned by S3 Select
                              </label>
                              <div class="input-group">
                                <input name="returned03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['returned03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Data Scanned by S3 Select
                              </label>
                              <div class="input-group">
                                <input name="scanned03" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['scanned03']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB</span>
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
                        Storage Management
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Inventory
                              </label>
                              <div class="input-group">
                                <input name="inventory04" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['inventory04']; } ?>">
                                <div class="input-group-append">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">Per Month</span>
                                    <span class="input-group-text" id="data-type">Million Objects</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Analytics
                              </label>
                              <div class="input-group">
                                <input name="analytics04" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['analytics04']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Per Month</span>
                                  <span class="input-group-text" id="data-type">Million Objects</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Object Tagging
                              </label>
                              <div class="input-group">
                                <input name="tagging04" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['tagging04']; } ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">Per Month</span>
                                  <span class="input-group-text" id="data-type">10,000 Tags</span>
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
                        Glacier Requests
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Lifecycle Transition Requests into Glacier
                              </label>
                              <div class="input-group">
                                <input name="glacier05" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['glacier05']; } ?>">
                                <div class="input-group-append">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">Requests</span>
                                  </div>
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
                        Glacier Requests
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Lifecycle Transition Requests into Glacier
                              </label>
                              <div class="input-group">
                                <input name="glacier05" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['glacier05']; } ?>">
                                <div class="input-group-append">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">Requests</span>
                                  </div>
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
                        Transfer Acceleration
                      </h6>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label>
                                Inter-Region Acceleration Data Transfer Out
                              </label>
                              <div class="input-group">
                                <input name="inter06" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['inter06']; } ?>">
                                <div class="input-group-append">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="data-type">GB/Month</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Acceleration Data Transfer Out
                            </label>
                            <div class="input-group">
                              <input name="dtout06" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtout06']; } ?>">
                              <div class="input-group-append">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB/Month</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Acceleration Data Transfer In - over US/EU/JP locations
                          </label>
                          <div class="input-group">
                            <input name="dtinsome06" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtinsome06']; } ?>">
                            <div class="input-group-append">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB/Month</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                        <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Acceleration Data Transfer In - over all other locations
                          </label>
                          <div class="input-group">
                            <input name="dtinall06" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtinall06']; } ?>">
                            <div class="input-group-append">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB/Month</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    </div> <!-- / .col -->
                  </div> <!-- / .row -->
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
                              <input name="inter07" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['inter07']; } ?>">
                              <div class="input-group-append">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB/Month</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Data Transfer Out
                            </label>
                            <div class="input-group">
                              <input name="dtout08" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtout08']; } ?>">
                              <div class="input-group-append">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB/Month</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                            <label>
                              Data Transfer In
                            </label>
                            <div class="input-group">
                              <input name="dtin08" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtin08']; } ?>">
                              <div class="input-group-append">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="data-type">GB/Month</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>
                            Data Transfer Out to CloudFront
                          </label>
                          <div class="input-group">
                            <input name="dtcf08" type="number" class="form-control" aria-describedby="data-type" value="<?php if (isset($_SESSION['saved'])) { echo $s3_rows[1]['dtcf08']; } ?>">
                            <div class="input-group-append">
                              <div class="input-group-append">
                                <span class="input-group-text" id="data-type">GB/Month</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> <!-- / .col -->
                </div> <!-- / .row -->
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


<?php
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
      // Gather information
      $msg = array();
      $msg['storage01'] = $_POST['storage01'];
      $msg['requests01'] = $_POST['requests01'];
      $msg['other01'] = $_POST['other01'];
      $msg['returned01'] = $_POST['returned01'];
      $msg['scanned01'] = $_POST['scanned01'];
      $msg['storage02'] = $_POST['storage02'];
      $msg['requests02'] = $_POST['requests02'];
      $msg['other02'] = $_POST['other02'];
      $msg['lifecycle02'] = $_POST['lifecycle02'];
      $msg['retrieval02'] = $_POST['retrieval02'];
      $msg['returned02'] = $_POST['returned02'];
      $msg['scanned02'] = $_POST['scanned02'];
      $msg['storage03'] = $_POST['storage03'];
      $msg['requests03'] = $_POST['requests03'];
      $msg['other03'] = $_POST['other03'];
      $msg['lifecycle03'] = $_POST['lifecycle03'];
      $msg['retrieval03'] = $_POST['retrieval03'];
      $msg['returned03'] = $_POST['returned03'];
      $msg['scanned03'] = $_POST['scanned03'];
      $msg['inventory04'] = $_POST['inventory04'];
      $msg['analytics04'] = $_POST['analytics04'];
      $msg['tagging04'] = $_POST['tagging04'];
      $msg['glacier05'] = $_POST['glacier05'];
      $msg['inter06'] = $_POST['inter06'];
      $msg['dtout06'] = $_POST['dtout06'];
      $msg['dtinsome06'] = $_POST['dtinsome06'];
      $msg['dtinall06'] = $_POST['dtinall06'];
      $msg['inter07'] = $_POST['inter07'];
      $msg['dtout08'] = $_POST['dtout08'];
      $msg['dtin08'] = $_POST['dtin08'];
      $msg['dtcf08'] = $_POST['dtcf08'];

      // Include the processor
      include_once("../../assets/php/process.php");

      // Determine if it's a new entry or an update
      if (isset($_SESSION['saved'])) {
        $msg['title'] = $s3_rows[1]['title'];
        $output = updateS3($msg);
      } else {
        $msg['email'] = $_SESSION['email'];
        $output = addS3($msg);
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
    } else if (isset($_POST["delete"])) {
      $s3_del_query1 = "DELETE FROM s3 WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $s3_rows[1]['title'] . "'";
      $s3_del_query2 = "DELETE FROM saved WHERE `email`=" . "'" . $_SESSION['email'] . "'" . " AND `title`=" . "'" . $s3_rows[1]['title'] . "'";
      $s3_del1 = doSQLQuery($s3_del_query1);
      $s3_del2 = doSQLQuery($s3_del_query2);
      if (strpos($s3_del1, "good") >= 0 && strpos($s3_del2, "good") >= 0) {
        unset($_SESSION['saved']);
        echo '<script type="text/javascript">';
        echo 'alert("Report Deleted");';
        echo 'window.location = "index.php";';
        echo '</script>';
      }
    } else if (isset($_POST["new"])) {
      unset($_SESSION['saved']);
      echo '<script type="text/javascript">';
      echo 'window.location = "s3.php";';
      echo '</script>';
    }
?>
