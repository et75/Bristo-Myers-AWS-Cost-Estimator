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


    <title>Sign Up</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign up
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Access your Amazon AWS estimates
          </p>

          <!-- Form -->
          <form id="register" name="reg" method="POST">

            <!-- first Name -->
            <div class="form-group">

              <!-- Label -->
              <label>
                First Name
              </label>

              <!-- Input -->
              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First" onchange="validate()" required>

            </div>

            <!-- Last Name -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Last Name
              </label>

              <!-- Input -->
              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last" onchange="validate()" required>

            </div>

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Email Address
              </label>

              <!-- Input -->
              <input type="email" name="email" id="email" class="form-control" placeholder="name@address.com" onchange="validate()" required>

            </div>

            <!-- Password -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Password
              </label>

              <!-- Input -->
              <input type="password" name="password" id="password" class="form-control form-control-appended" placeholder="Enter your password" onkeyup="validate()">
              <div class="card-body">

                <p class="mb-2">
                  Password requirements
                </p>

                <p class="small text-white mb-2">
                  Your password must meet all of the following requirements:
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
                </ul>

              </div>
            </div>

            <!-- Submit -->
            <button id="submit" class="btn btn-lg btn-block btn-primary mb-3" type="submit" name="submit" value="submit" disabled>
              Sign up
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Already have an account? <a href="sign-in.php">Log in</a>.
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

    <script type="text/javascript">
      function validate() {
        var password = $("#password").val();
        var number = /[0-9]/;
        var letter = /[a-zA-Z]/;
        var spec = /[\W]/;

        if (number.test(password)) {
          $("#num").removeClass("text-muted");
        } else {
          $("#num").addClass("text-muted");
        };

        if (letter.test(password)) {
          $("#let").removeClass("text-muted");
        } else {
          $("#let").addClass("text-muted");
        };

        if (spec.test(password)) {
          $("#spec").removeClass("text-muted");
        } else {
          $("#spec").addClass("text-muted");
        };

        if (password.length >= 8) {
          $("#min").removeClass("text-muted");
        } else {
          $("#min").addClass("text-muted");
        };

        if ((document.getElementById("first_name").value != "") && (document.getElementById("last_name").value != "") && (document.getElementById("email").value != "") && (number.test(password)) && (letter.test(password)) && (spec.test(password)) && (password.length >= 8)) {
          document.getElementById("submit").disabled = false;
        } else {
          document.getElementById("submit").disabled = true;
        }
      }
    </script>

  </body>
</html>


<?php
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
      // Gather information
      $msg = array();
      $msg['last_name'] = $_POST['last_name'];
      $msg['first_name'] = $_POST['first_name'];
      $msg['email'] = $_POST['email'];
      $msg['access'] = "2";

      // Passwordify the password
      $word = $_POST['password'];
      $msg['password'] = password_hash($word, PASSWORD_DEFAULT);

      // Pass the stuff
      // Include the processor
      require("../assets/php/process.php");

      // Get the details
      $output = doRegister($msg);

      // var_dump($output); //Un-comment to help debug

      if (strpos($output, "good") >= 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Registration successful, redirecting to sign in page.");';
        echo 'window.location = "sign-in.php";';
        echo '</script>';
      } elseif (strpos($output, "Duplicate") >= 0) {
        echo '<script type="text/javascript">';
        echo 'alert("An account with this address already exists. Please sign in to continue.");';
        echo '</script>';
      } else {
        echo '<script type="text/javascript">';
        echo 'alert("An unexpected error has occurred. Please contact the site administrator.");';
        echo '</script>';
      }
    }
?>
