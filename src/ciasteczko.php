<?php
    $nazwaciasteczka= "imie";
    if (isset($_COOKIE[$nazwaciasteczka])){
      echo "Ciasteczko o nazwie " . $nazwaciasteczka . " jest ustawione";
    }
?>