<?php
  $linia="</br>";
  if ($_POST["wyslij"]){
    echo("Imie: " . $_POST['imie']. $linia);
    echo("Nazwisko: " . $_POST['nazwisko']. $linia);
    echo("Email: " . $_REQUEST['email']. $linia);

    session_start();
    $_SESSION['nazwisko']=$_POST['nazwisko'];

    //header("Location: " . "https://www.google.com");
    //header("Location: " . $_SERVER['HTTP_REFERER']);
  }


?>