<?php 
include "../conndb.php";
include "mesg.php";
// session_start();
error_reporting(0);
if(isset($_POST['send'])){
 
$msg = $_POST['msg'];

$query = "INSERT INTO messages (sms) values ('$msg')";
$result = mysqli_query($conn,$query);
if($result==true){
    header("location:../chatroom/mesg.php");
}
}