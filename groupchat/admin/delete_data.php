<?php
include "../conndb.php";
session_start();
$id = $_GET['id'];

$delquery ="DELETE FROM users Where id =$id";
$result= mysqli_query($conn,$delquery);
if($result){
    // $deleted = $_SESSION['data_delete'] = "deleted successfuly";
    header("location:usersdata.php");
}