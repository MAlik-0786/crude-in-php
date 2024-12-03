<?php
error_reporting(0);
include "../conndb.php";
include "includes/adminlogin_src.php";
// include "read_user.php";
session_start();
if (!isset($_SESSION["adminid"])) {
  header("location:includes/adminlogin.php");
}
if(isset($_POST["logout"])){
  session_destroy();
  header("location:includes/adminlogin.php");
}



?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="bootstrap.min.css" rel="stylesheet" />
  <link href="paper-dashboard.css?v=2.0.1" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
        </a>
        <a href="#" class="simple-text logo-normal">
          !groupchat
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="#">
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="usersdata.php">
              <p>Users</p>
            </a>
          </li>

          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">

            <a class="navbar-brand" href="javascript:;">Admin</a>
          </div>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="POST" action="#">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <a href="#"><Button class=" rounded btn-outline-secondary">search</Button></a>
                    <button name="logout" class="mx-1 btn btn-primary p-1">logout</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!--Main content -->
      <div class="content ">
        <div class="row ">
          <div class="col-md-12">
            <div class="content">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                  <div class="card card-stats text-white bg-primary ">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-5 col-md-4">

                        </div>
                        <?php
                                                          
                        $sql = "SELECT *FROM users";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)==0){
                          ?>
                             <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category text-white">Users</p>
                              <p class="card-title">0<p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-footer ">
                        <hr>
                        <a href="usersdata.php" class="text-white font-weight-bold ">see more -></a>
                      </div>
                    </div>
                  </div>
                          <?php
                          
                        }else{
                        if ($row = mysqli_num_rows($result)) {
                          ?>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category text-white">Users</p>
                              <p class="card-title"><?php echo $row; ?>
                              <p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-footer ">
                        <hr>
                        <a href="usersdata.php" class="text-white font-weight-bold ">see more -></a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <?php } ?>
               
              </div>

            </div>
          </div>
        </div>
        <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
          <div class="container-fluid">
            <div class="row">
              <nav class="footer-nav">
                <ul>
                  <li><a href="#">dashboard</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">about</a></li>
                </ul>
              </nav>
              <div class="credits ml-auto">
                <span class="copyright">
                  © 2024, made <i class="fa fa-heart heart"></i> by Ashiph Ali
                </span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

   
</body>

</html>