<?php
$conn = mysqli_connect("localhost","root","","chatgroup");
if(!$conn){
 die("Not connected".mysqli_connect_errno($conn));
}