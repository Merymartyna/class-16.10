<?php
$linia="</br>";
if ($_POST["wyslij1"]){

  setcookie(
    $cookie_value=$_POST['imieciastka']
  );
  
  echo("Ciastko o imieniu: " . $cookie_value. " zostało ustawione". $linia );

  header("Refresh: 1; URL= " . $_SERVER['HTTP_REFERER']);

}
?>