<?php
include "../conndb.php";
session_start();
error_reporting(0);
if (!isset($_SESSION['email_id'])) {
  header("location:../users/userlogin.php");
}
$u_name =$_GET['id'];

$query = "SELECT *FROM messages";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="style.cs"> -->
  <title>Chatroom</title>
</head>

<body>

  <section style="background-color: #eee;
height:100vh;">
    <div class="container py-5 " >

      <div class="row d-flex justify-content-center" >
        <div class="col-md-8 col-lg-6 col-xl-4" >

          <div class="card" id="chat1" style="border-radius: 15px; height:85vh; max-width:450px;">
            <div
              class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <i class="fas fa-angle-left"></i>
              <p class="mb-0 fw-bold"><?php echo $u_name; ?></p>
              <i class="fas fa-times"></i>
            </div>
            <div class="card-body">

              <div class=" flex-row justify-content-start">
<?php while($row=mysqli_fetch_assoc($result)){  ?>
                <div class="p-3 ms-3 mb-2" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                  <p class="small mb-0"><?php echo $row['sms'];  ?></p>
                </div>
                <?php }?>
              </div>
              <div class="d-flex flex-row justify-content-end mb-4">

                <!-- <div class="p-3 ms-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                  <p class="small mb-0">Thank you, I really like your product.</p>
                </div> -->

              </div>
            </div>
              <form action="msg_src.php" method="POST">
                <div class="form-outline d-flex m-2 ">
                  <input class="form-control rounded-3 mx-2" type="text" name="msg" id="">
                  <input class="btn btn-primary" type="submit" name="send" value="Sent">
                </div>
              </form>

          </div>

        </div>
      </div>

    </div>
  </section>
</body>

</html>