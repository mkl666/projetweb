<?php
    include "InfosC.php";
    include "./../Entities/Infos.php";

    $InfosC=new InfosC ();
    $InfosC->Supprimer_InfosC($_POST['id=']);

    echo "<script type='text/javascript'> document.location = './../admin/examples/tables.php'; </script>";
   



?>