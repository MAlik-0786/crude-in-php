<?php  
session_start();
error_reporting(0);
include "register_src.php";
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>register</title>
</head>

<body>
    <div class="w-50  m-auto my-5">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-3 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2 ">Register</h1>  
                </div>
                <div class=" m-auto mb-2 py-2 rounded text-center text-success ">
                        <?php echo $message6; ?>
               </div>
                <div class="modal-body p-5 pt-0">
                    <form action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingInput"
                                placeholder="Name" name="name">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingInput"
                                placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="my-1 text-danger">
                        <?php echo $message4; ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control rounded-3" id="floatingInput"
                                placeholder="name@example.com" name="mobile">
                            <label for="floatingInput">Mobile</label>
                            </div>
                        <div class="my-1 text-danger">
                        <?php echo $message3; ?>
                        </div>

                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password" name="pass">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password" name="cpass">
                            <label for="floatingPassword">Conform Password</label>
                        </div>
                        <div class="my-1 text-danger">
                        <?php echo $message5; ?>
                        </div>
                        <div class="my-1 text-danger">
                        <?php echo $message1; ?>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="register">Register</button>
                        <p class="mt-3"><a href="../index.php">Back to home page</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>