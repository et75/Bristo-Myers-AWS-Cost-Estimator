<?php
  // Include the processor
  include_once("../../assets/php/process.php");

  session_start();

  // Get the details
  $output = getSavedRpt($_GET['title'], $_SESSION['email']);
  // var_dump($output); //Un-comment to help debug

  header('Location: ' . $output);
  exit();
?>
