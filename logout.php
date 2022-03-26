<?php
  session_start();
  $_SESSION["authenticated"] = null;
  echo "<script> location.href='index.php'; </script>";
?>