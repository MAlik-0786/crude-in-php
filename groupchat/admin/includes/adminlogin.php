<?php include "adminlogin_src.php"  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<p>(usarname = testadminadmin, password = test@12345)</p> 
<div class="w-50 m-auto my-5">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2 ">Admin </h1> 
                    
                </div>
                
                <div class="modal-body p-5 pt-0">
                    <form action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control rounded-3" id="floatingInput"
                                placeholder="" name="admin">
                            <label for="floatingInput">Admin</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password" name="pass">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">login</button>
                      <p class="mt-3"><a href="../../index.php">Back to home page</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>