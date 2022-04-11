<?php
  session_start();
  $_SESSION["authenticated"] = null;
  $_SESSION["user"] = null;
  echo "<script> location.href='index.php'; </script>";
?>
