<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>

<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    section {
      margin-top: -20px;
      
    }
    .log_img{
      /* background: url('../admin/images/login2.webp') no-repeat !important; */
      background-size: cover;
      background-origin: right;
      
    }
    .box1{
      margin:12px!important;
    }
    section img{
      width: 100%;
      height: calc(100% - 73px);
      position: absolute;
     
    }
  </style>
</head>

<body>
  <!-- </div>
  </nav> -->

  <section style="width:100%; height:88vh;">
  <img src="../admin/images/login2.webp" alt="login">
    <div class="log_img"  style="height:88vh;" >
      <br>
      <div class="box1" style=" border-radius:20px;color:blueviolet;">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
        <form name="login" action="" method="post">

          <div class="login">
            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
          </div>

          <p style="color: white; padding-left: 15px;">
            <br><br>
            <a style="color:blue;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <span style="color:violet">New to this website?</span><a style="color:blue;" href="registration.php">Sign Up</a>
          </p>
        </form>
      </div>
    </div>
  </section>
  <?php
  if (isset($_POST['submit'])) {
    $res = mysqli_query($db, "select * from `students` WHERE username='$_POST[username]'&& password='$_POST[password]';");

    $row = mysqli_fetch_assoc($res);

    $count = mysqli_num_rows($res);
    if ($count == 0) {
  ?>
      <script type="text/javascript">
        alert("The user name or password doesn't match.");
      </script>

      <!-- <div class="alert alert-danger" style="width: 600px;margin-left:
        370px;background-color:#de1313;color:white"> 
          <strong>The username and password doesn't match</strong>
        </div> -->
    <?php
    } else {
      $_SESSION['login_user'] = $_POST['username'];
      $_SESSION['pic'] = $row['pic'];
    ?>
      <script type="text/javascript">
        window.location = "index.php";
      </script>
  <?php
    }
  }
  ?>
</body>

</html>