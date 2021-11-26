<?php
if ($_POST["wyslij"]){
    session_start();
    $_SESSION['nazwisko']=$_POST['nazwisko'];
  
    echo($_SESSION['nazwisko']); 

  header("Refresh: 1; URL= " . $_SERVER['HTTP_REFERER']);

}
?>