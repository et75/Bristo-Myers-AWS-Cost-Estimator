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
                  Profile
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  <?php echo $_SESSION['first'] . " " . $_SESSION['last']; ?>
                </h1>

                <div class="row align-items-center">
                  <div class="col">

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="profile.php" class="nav-link active">
                          Settings
                        </a>
                      </li>

                      <!-- IF ADMIN -->
                      <?php
                        include_once('../../assets/php/process.php');

                        $isAdmin = isAdmin($_SESSION['email']);
                        if ($isAdmin == True) {
                          echo "<li class='nav-item'>";
                          echo "<a href='users.php' class='nav-link'>Administration</a>";
                          echo "</li>";
                        }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <!-- Form -->
          <form class="mb-4" method="post">

            <div class="row">
              <div class="col-12 col-md-6">

                <!-- First name -->
                <div class="form-group">

                  <!-- Label -->
                  <label>
                    First name
                  </label>

                  <!-- Input -->
                  <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['first']; ?>">

                </div>

              </div>
              <div class="col-12 col-md-6">

                <!-- Last name -->
                <div class="form-group">

                  <!-- Label -->
                  <label>
                    Last name
                  </label>

                  <!-- Input -->
                  <input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['last']; ?>">

                </div>

              </div>
              <div class="col-12">

                <!-- Email address -->
                <div class="form-group">

                  <!-- Label -->
                  <label class="mb-1">
                    Email address
                  </label>

                  <!-- Form text -->
                  <small class="form-text text-muted">
                    This address could be the destination for reports made by the user?
                  </small>

                  <!-- Input -->
                  <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>">

                </div>

                <button type="submit" name="updateInfo" value="updateInfo" class="btn btn-primary">
                  Update Information
                </button>

              </div>
            </div> <!-- / .row -->
          </form>

          <!-- Divider -->
          <hr class="mt-4 mb-5">

          <form class="mb-4" method="post">
            <div class="row">
              <div class="col-12 col-md-6 order-md-2">

                <!-- Card -->
                <div class="card bg-light border ml-md-4">
                  <div class="card-body">

                    <p class="mb-2">
                      Password requirements
                    </p>

                    <p class="small text-white mb-2">
                      Your new password must meet all of the following requirements:
                    </p>

                    <ul class="small text-muted pl-4 mb-0">
                      <li class="text-white text-muted" id="min">
                        Minimum 8 character
                      </li>
                      <li class="text-white text-muted" id="spec">
                        At least one special character
                      </li>
                      <li class="text-white text-muted" id="num">
                        At least one number
                      </li>
                      <li class="text-white text-muted" id="let">
                        At least one letter
                      </li>
                      <li class="text-white text-muted" id="same">
                      Can’t be the same as a previous password
                      </li>
                    </ul>

                  </div>
                </div>

              </div>
              <div class="col-12 col-md-6">

                <!-- Password -->
                <div class="form-group">

                  <!-- Label -->
                  <label>
                    Password
                  </label>

                  <!-- Input -->
                  <input type="password" id="oldPW" name="oldPW" class="form-control">

                </div>

                <!-- New password -->
                <div class="form-group">

                  <!-- Label -->
                  <label>
                    New password
                  </label>

                  <!-- Input -->
                  <input type="password" id="pw1" name="pw1" class="form-control" onkeyup="checkStrength()">

                </div>

                <!-- Confirm new password -->
                <div class="form-group">

                  <!-- Label -->
                  <label id="samecheck">
                    Confirm new password
                  </label>

                  <!-- Input -->
                  <input type="password" id="pw2" name="pw2" class="form-control" onkeyup="checkMatch()">

                </div>

                <!-- Submit -->
                <button type="submit" id="updatePWButton" name="updatePassword" value="updatePassword" class="btn btn-primary" style="display: none;">
                  Update Password
                </button>

              </div>
            </div> <!-- / .row -->


            <!-- Divider -->
            <hr class="mt-4 mb-5">

            <!-- Submit -->
            <button type="submit" id="deleteAll" name="deleteAll" value="deleteAll" class="btn btn-danger">
              Delete All Reports
            </button>

          </form>


<?php
        #  if ($isAdmin == True) {

        #   echo <<< EOD
        #   <!-- Divider -->
        #   <hr class="mt-4 mb-5">
        #
        #     <div class="row">
        #       <div class="col-12 col-md-6 order-md-2">
        #         <!-- Form -->
        #         <form class="mb-4">
        #
        #           <!-- Discount -->
        #           <div class="form-group">
        #
        #             <!-- Label -->
        #             <label>
        #               Discount
        #             </label>
        #
        #             <!-- Input -->
        #             <input type="number" min="0" max="100" class="form-control">
        #
        #           </div>
        #
        #           <!-- Submit -->
        #           <button type="submit" name="updateDiscount" value="updateDiscount" class="btn btn-primary">
        #             Update
        #           </button>
        #         </form>
        #       </div>
        #     </div>
        # EOD;
?>

          </div>
        </div>
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

    <script type="text/javascript">
      var go = 0;
      // document.getElementById('updatePWButton').disabled = false;
      function checkStrength() {
        var password = $("#pw1").val();
        var ppassword = $("#oldPW").val();
        var number = /[0-9]/;
        var letter = /[a-zA-Z]/;
        var spec = /[\W]/;

        if (password != ppassword) {
          $("#same").removeClass("text-muted");
          go = 1;
        } else {
          $("#same").addClass("text-muted");
          go = 0;
        };

        if (number.test(password)) {
          $("#num").removeClass("text-muted");
          go = 1;
        } else {
          $("#num").addClass("text-muted");
          go = 0;
        };

        if (letter.test(password)) {
          $("#let").removeClass("text-muted");
          go = 1;
        } else {
          $("#let").addClass("text-muted");
          go = 0;
        };

        if (spec.test(password)) {
          $("#spec").removeClass("text-muted");
          go = 1;
        } else {
          $("#spec").addClass("text-muted");
          go = 0;
        };

        if (password.length >= 8) {
          $("#min").removeClass("text-muted");
          go = 1;
        } else {
          $("#min").addClass("text-muted");
          go = 0;
        };

      }

      function checkMatch() {
        var password = $("#pw1").val();
        var cpassword = $("#pw2").val();
        if (go == 1) {
          if (password != cpassword) {
            $("#samecheck").html("Confirm new password");
            if(!$("#updatePWButton").is(":hidden")){
              $("#updatePWButton").toggle();
            }
          } else {
            $("#samecheck").html("Confirm new password &#10003");
            // $("#updatePWButton").toggle();
            if($("#updatePWButton").is(":hidden")){
              $("#updatePWButton").toggle();
            }
          }
        }
      }
    </script>

  </body>
</html>

<?php

if (isset($_POST["updateInfo"])) {

  // Turn it into a query
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $oldEmail = $_SESSION['email'];
  $t = time();
  $infoQuery = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email', last_modified='$t' WHERE email = '$oldEmail'";

  $infoResult = doSQLQuery($infoQuery);
  if (strpos($infoResult, "good") >= 0) {
    // Update the session variables
    unset($_SESSION['saved']);
    $_SESSION['first'] = $_POST['fname'];
    $_SESSION['last'] = $_POST['lname'];
    $_SESSION['email'] = $_POST['email'];

    // Reload
    echo '<script type="text/javascript">';
    echo 'alert("Your information has been updated successfully");';
    echo 'window.location=document.location.href';
    echo '</script>';
  }
} else if (isset($_POST["updatePassword"])) {
    // Attempt the change if both pw1 and pw2 are the same
    $pwActual = password_hash($_POST['pw1'], PASSWORD_DEFAULT);

    $output = changePassword($_SESSION['email'], $_POST['oldPW'], $pwActual);
    // var_dump($output);
    // Depending on the output, throw an alert
    if (strpos($output, "good") === 0) {
      echo '<script type="text/javascript">';
      echo 'alert("Password update successful");';
      echo '</script>';
    } else if (strpos($output, "wrong_password") === 0) {
      echo '<script type="text/javascript">';
      echo 'alert("Password update failed: The old password you have entered is incorrect");';
      echo '</script>';
    }
  } else if (isset($_POST["deleteAll"])) {
    // Send the order
    $output = deleteAllReports($_SESSION['email']);
    // var_dump($output);
    // Depending on the output, throw an alert
    if (strpos($output, "good") === 0) {
      echo '<script type="text/javascript">';
      echo 'alert("Reports successfully deleted");';
      echo 'window.location = "index.php";';
      echo '</script>';
    }
  }
?>
