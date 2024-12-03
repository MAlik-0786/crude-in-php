<?php
session_start();
// connecting database
include "../../conndb.php";  

if(isset($_POST["submit"])){

    $admin = mysqli_real_escape_string($conn,$_POST["admin"]);
    $pass = mysqli_real_escape_string($conn,$_POST["pass"]);
   
    $sql ="SELECT *FROM admin where adminID = '$admin' AND password = '$pass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION["adminid"] = $admin ;
        header("location:../dashboard.php");
    }
}

?>