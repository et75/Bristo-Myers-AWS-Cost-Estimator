<?php
  session_start();

  // Sanitize
  $msg = array();
  $msg['email'] = $_SESSION['email'];

  // Pass the stuff
  // Include the processor
  include("../assets/php/process.php");

  // Get the details
  $output = doLogout($msg['email']);

  //var_dump($output); //Un-comment to help debug

  if (strpos($output, "good") === 0) {
    // Kill the session
    session_unset();
    session_destroy();
    header('Location: sign-in.php');
    exit();
  } elseif (strpos($output, "bad") === 0) {
    // Grab the SQL error
    $arrout = explode(";", $output);
    echo '<script type="text/javascript">';
    echo 'alert('.$arrout[1].');';
    echo '</script>';
  }
?>
