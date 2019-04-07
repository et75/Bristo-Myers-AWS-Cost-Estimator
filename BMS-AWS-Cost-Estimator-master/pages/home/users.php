<?php
  #session_start();
  #include('../../assets/php/process.php');

  #$isAdmin = isAdmin($_SESSION['email']);
  #if ($isAdmin != True) {
  #  header('Location: ../sign-in.php');
  #  exit();
  #}
?>

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
    <?php include('../../assets/php/theme.php') ?>

    <!-- NAVIGATION
    ================================================== -->
    <?php include('../../assets/php/navbar.php') ?>

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
                        <a href="profile.php" class="nav-link">
                          Settings
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="users.php" class="nav-link active">
                          Administration
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <div class="row justify-content-center">
        <div class="col-12 col-lg-11 col-xl-10">
          <div class="table-responsive" data-toggle="lists" data-lists-values='["tables-row", "tables-first", "tables-last", "tables-handle"]'>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">
                    <a class="text-muted">Status</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-first">First</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-last">Last</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-email">Email</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-login">Last Modified</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-access">Access Level</a>
                  </th>
                  <th scope="col">
                    <a href="#" class="text-muted sort" data-sort="tables-access">Delete Account</a>
                  </th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  $query = "SELECT * FROM users";

                  // Include the processor
                  include_once("../../assets/php/process.php");

                  // Get the details
                  $output = doSQLQuery($query);
                  // var_dump($output); //Un-comment to help debug

                  $rows = json_decode($output, TRUE);

                  foreach ($rows as $row) {
                    if (!empty($row)) {

                      echo "<tr>";

                      # Status
                      echo "<th scope='row' class='tables-status'>";
                        if ($row['active'] == "1")
                        {
                          echo "<small>";
                          echo "<span class='text-success'>●</span>";
                          echo "</small>";
                        } else {
                          echo "<small>";
                          echo "<span class='text-danger'>●</span>";
                          echo "</small>";
                        }
                      echo "</th>";

                      # First Name
                      echo "<td class='tables-first'>".
                        $row['first_name']
                      ."</td>";

                      # Last Name
                      echo "<td class='tables-last'>".
                        $row['last_name']
                      ."</td>";

                      # Email
                      echo "<td class='tables-email'>".
                        $row['email']
                      ."</td>";

                      # Last Modified
                      echo "<td class='tables-login'>".
                        date("Y-m-d H:i:s", substr($row['last_modified'], 0, 10))
                      ."</td>";

                      # Change access
                      echo "<td class='tables-access'>";
                      if ($row['access'] == "1")
                      {
                        echo "<form action='' method='POST'>";
                        echo "<input type='hidden' name='email' value=" . $row['email'] . ">";
                        echo "<button type='submit' name='change' value='2' class='btn btn-primary btn-block'>Administrator</button>";
                        echo "</form>";
                      } else {
                        echo "<form action='' method='POST'>";
                        echo "<input type='hidden' name='email' value=" . $row['email'] . ">";
                        echo "<button type='submit' name='change' value='1' class='btn btn-secondary btn-block'>User</button>";
                        echo "</form>";
                      }
                      echo "</td>";

                      # Delete Account
                      echo "<td class='tables-access'>";
                      echo "<form action='' method='POST'>";
                      echo "<input type='hidden' name='email' value=" . $row['email'] . ">";
                      echo "<button type='submit' name='delete' value='delete' class='btn btn-danger btn-block'>Delete</button>";
                      echo "</form>";
                      echo "</td>";

                      echo "</tr>";
                    }
                  }

                ?>
              </tbody>
            </table>
          </div>
          <?php
            $get = "SELECT pcnt FROM discount";

            // Include the processor
            include_once("../../assets/php/process.php");

            // Get the details
            $discount_value = doSQLQuery($get);
            //var_dump($output); //Un-comment to help debug

            $current = json_decode($discount_value, TRUE);
          ?>
          <form method="post">
            <div class="form-group">
              <label>
                Discount
              </label>
              <div class="input-group">
                <input name="discount" type="number" class="form-control" min="0" max="100" value="<? if (isset($current)) { echo $current[1]['pcnt']; }?>">
                <div class="input-group-append">
                  <button type="submit" name="updateDiscount" class="btn btn-secondary">Update</button>
                </div>
              </div>
            </div>
          </form>
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

  </body>
</html>

<?php
    if (isset($_POST["change"]) && !empty($_POST["change"])) {
      // Get the details
      $switch = changeAccess($_POST['email'], $_POST['change']);

      // var_dump($switch); //Un-comment to help debug

      if (strpos($switch, "good") === 0) {
        echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";
      }
    } else if (isset($_POST["delete"]) && !empty($_POST["delete"])) {
      $delete = deleteAccount($_POST['email']);

      // var_dump($delete); //Un-comment to help debug
      if (strpos($delete, "good") === 0) {
        echo "<script type='text/javascript'>
        alert('Account deleted successfully');
        window.location=document.location.href;
        </script>";
      }
    } else if (isset($_POST["updateDiscount"])) {
      // Attempt the change if both pw1 and pw2 are the same
      $set = $_POST['discount'];

      $output = setDiscount($set);
      // var_dump($output);
      // Depending on the output, throw an alert
      if (strpos($output, "good") === 0) {
        echo "<script type='text/javascript'>
        alert('Discount updated successfully');
        window.location=document.location.href;
        </script>";
      }
    }
?>
