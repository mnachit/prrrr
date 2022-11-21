
<?php
  include('script.php');
  session_unset();
  session_destroy();
  header('location: log_in.php');
?>