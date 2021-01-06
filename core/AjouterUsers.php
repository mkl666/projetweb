<?php

include 'UsersC.PHP';
include '../Entities/Users.php';
session_start();
 if(!empty($_POST['UserName'] )&& !empty($_POST['Password'] ) ){
    $username=$_POST['UserName'];
    $db=config::getConnexion();

    $query    = "SELECT * FROM `users` WHERE username='$username'";
    
    $liste=$db->query($query);
    $password=$_POST['Password'];
foreach($liste as $i )
{
$hashed_password = $i['password'];
if(password_verify($password, $hashed_password)) {
         $_SESSION['username'] = $username;
         $_SESSION['id'] = $i['id'];
         $_SESSION['email'] = $i['email'];
         $_SESSION['usertype'] = $i['usertype'];
         $_SESSION['phone'] = $i['phone'];
       
         if($i['usertype']=='user')
            header("Location: ./../admin/examples/tables.php");
            else
                        header("Location: ./../index.php");

        
}

 
}}
           

?>