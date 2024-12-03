<?php
session_start();
include "../conndb.php";

if (isset($_POST["register"])) {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
    $cpass = mysqli_real_escape_string($conn, $_POST["cpass"]);

    if ($name == '' || $email == '' || $mobile == '' || $pass == '' || $cpass == '') {
        $message1 = $_SESSION["allfields"] = "All fields are mendetroy";
        // echo "all field are mendetory";
// }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//     $message2 =  $_SESSION["email"]= "envalid email";
// }
    } elseif (strlen($mobile) < 9) {
        $message3 = $_SESSION["mobile errr"] = "number should be 10 digit";
    } elseif ($pass !== $cpass) {
        $message5 = $_SESSION["pass_error"] = "password not matched ";

    } else {
        $sql = "SELECT *FROM users where email = '$email' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $message4 = $_SESSION["password"] = "email already exist ";
        } else {
            $query = "INSERT INTO users (name,email,mobile,password,cpassword) value ('$name','$email','$mobile','$pass','$cpass')";
            $stmt = mysqli_query($conn, $query);
            if ($stmt) {
                        
                        $message6 = $_SESSION["register"] = "you are registerd";
            }
        }
    }


}


