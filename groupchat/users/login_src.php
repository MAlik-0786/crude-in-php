<?php
session_start(); 
include "../conndb.php";

if(isset($_POST["login"])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    
    $query = "SELECT *From users where email = '$email' AND password ='$pass'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $_SESSION['email_id'] = $email;
        header("location:../chatroom/masg.php");
    }else{
        $errorlogin =$_SESSION['login_error'] = "invalid information";
    }
}
// ?id=$email