<?php
    include "UsersC.php";
    include "./../Entities/Users.php";

    $UsersC=new UsersC ();
    $UsersC->Supprimer_UsersC($_POST['id=']);

    echo "<script type='text/javascript'> document.location = './../admin/examples/tables.php'; </script>";



?>