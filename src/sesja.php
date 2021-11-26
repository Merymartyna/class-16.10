<?php
  session_start();
  if ($_SESSION['nazwisko']){
    echo $_SESSION['nazwisko'];
  }
?>