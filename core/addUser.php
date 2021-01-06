<?php

include 'UsersC.PHP';
include '../Entities/Users.php';
session_start();
var_dump($_POST['username'],$_POST['password']);
if ( !empty($_POST['username'] )&& !empty($_POST['email']) && !empty($_POST['password'] ) && !empty($_POST['UserType'] ) && !empty($_POST['phone'] )  )
{ 
    $create_datetime = date("Y-m-d H:i:s");


    $Users=new Users (0,$_POST['username'],$_POST['email'],$_POST['password'],$create_datetime,$_POST['UserType'],$_POST['phone']);
    
    $UsersC=new UsersC();
    $UsersC->Ajouter_UsersC($Users);
   
    if($_POST['UserType']=="user"){
   }else
    echo "<script type='text/javascript'> document.location = './../admin/examples/tables.php'; </script>";
   
  
} else echo "wrong password";
 

?>