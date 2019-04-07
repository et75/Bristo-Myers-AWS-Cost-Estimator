<!doctype html>
<html lang="en">
  <head>
    <?php include("../assets/php/meta.php"); ?>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="../assets/ui/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="../assets/ui/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="../assets/ui/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="../assets/ui/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="../assets/ui/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="../assets/ui/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
      var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'dark';
    </script>


    <title>Sign In</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Please sign in using your credentials
          </p>

          <!-- Form -->
          <form id="login" name="login" method="POST" class="form-signin">

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="email" name="email" id="email" class="form-control" placeholder="name@address.com">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">

                  <!-- Help text -->
                  <!-- <a href="password-reset.html" class="form-text small text-muted">
                    Forgot password?
                  </a> -->

                </div>
              </div> <!-- / .row -->

              <!-- Input -->
              <input type="password" name="password" id="password" class="form-control form-control-appended" placeholder="Enter your password">

            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3" name="submit" value="submit" type="submit">
              Sign in
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="sign-up.php">Sign up</a>.
              </small>
            </div>

          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="../assets/ui/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/ui/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/ui/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/ui/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="../assets/ui/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../assets/ui/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="../assets/ui/assets/libs/list.js/dist/list.min.js"></script>
    <script src="../assets/ui/assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/ui/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../assets/ui/assets/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/ui/assets/js/theme.min.js"></script>

  </body>
</html>

<?php
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
        // Include the processor
        include("../assets/php/process.php");

        // Get the details
        $output = doLogin($_POST['email'], $_POST['password']);

        // var_dump($output); //Un-comment to help debug

        if (strpos($output, "good") === 0) {

          $arrout = explode(";", $output);
          $fname = $arrout[1];
          $lname = $arrout[2];
          $email = $arrout[3];
          $t = $arrout[4];

          // Start the session
          session_start();
          $_SESSION['first'] = $fname;
          $_SESSION['last'] = $lname;
          $_SESSION['email'] = $email;
          $_SESSION['time'] = $t;

          // Take us to the home page!
          echo '<script type="text/javascript">';
          echo 'window.location = "home/index.php";';
          echo '</script>';
        } elseif (strpos($output, "wrong_password") === 0) {
          echo '<script type="text/javascript">';
          echo 'alert("The password you have entered is incorrect");';
          echo '</script>';
        } elseif (strpos($output, "wrong_email") === 0) {
          echo '<script type="text/javascript">';
          echo 'alert("We could not find an email with that address");';
          echo '</script>';
        }

    }
?>
