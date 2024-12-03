<?php 
include "../conndb.php";
// include "delete_data.php";
error_reporting(0);
session_start();
if (!isset($_SESSION["adminid"])) {
  header("location:includes/adminlogin.php");
}
$query = $sql = "SELECT *FROM users";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0){
  $no_data = $_SESSION['nodata'] = "No recored yet";
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
            <a href="dashboard.php">
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a href="#">
              <p>Users</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">

            <a class="navbar-brand" href="javascript:;"><?php echo $_SESSION["adminid"]; ?></a>
          </div>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <a href="#"><Button clas="">search</Button></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!--Main content -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">users data</h4>                     
                <h4 class="card-title"> <?php echo $no_data; ?></h4>                     
                <p><?php echo $deleted; ?></p>                   
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        user_id
                      </th>
                      <th>
                        name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Mobile
                      </th>
                      <th>
                        control
                      </th>
                    </thead>
                    <tbody>
                      <?php     
                      $s_num=1;              
                      while($row = mysqli_fetch_assoc($result)){  ?>
                      <tr>
                        <td>
                        <?php echo $s_num++;?>
                        </td>
                        <td>
                        <?php echo $row['name'];?>
                        </td>
                        <td>
                        <?php echo $row['email'];?>
                        </td>
                        <td >
                        <?php echo $row['mobile']; ?>
                        </td>
                        <td >
                  
                        
                    <a href="#" class="btn btn-primary p-2">update</a>
                    <a href="delete_data.php?id=<?php echo $row['id'];?>"class="btn btn-danger p-2">delete</a>
                       
                        </td>
                      </tr>
                      <?php 
                   
                    }?>
                      
                    
                    </tbody>
                  </table>
                </div>
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