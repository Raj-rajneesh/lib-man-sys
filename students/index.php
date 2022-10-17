<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" href="../admin/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		nav {
			float: right;
			word-spacing: 20px;
            padding:20px;
			margin-right: 110px;
		}

		nav li {
			display: inline-block;
			line-height: 80px;
		}

		nav li a {
			padding:  15px 21px 15px 21px;
			border-radius: 5px;
		}

		nav li a:hover {
			color: red;
			background-color:#f9f9f9;
			box-shadow: 4px 4px 8px cornflowerblue;
			
		}
	</style>
</head>


<body style="width:100wh; overflow-x:hidden">
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="images/3.jpg" style="width:130px; margin-left: 80px">
				<h1 style="color:white; margin-left:80px"><span style="font-weight: bold">
						LIBRARY &nbsp  MANAGEMENT &nbsp  SYSTEM</span> </h1>
			</div>
			<?php
			if (isset($_SESSION['login_user'])) {
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
			} else { ?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="student_login.php">STUDENT-LOGIN</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>

			<?php

			}
			?>


		</header>
		<section>
			<div class="sec_img">
				<br><br><br>
				<div class="box"   style="display: flex; justify-content:center;align-items:center;flex-direction:column">
					<br><br><br><br>
					<h1 style="font-size:2.5rem">Welcom to library</h1><br><br>
					<h1 style="font-size:1.5rem">Opens at: 10:00 AM </h1><br>
					<h1 style="font-size:1.5rem">Closes at: 05:00 PM </h1><br>
				</div>
			</div>
		</section>
		<!-- <footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email:&nbsp; Online.library@gmail.com <br>
				Mobile: &nbsp; 7070561580
			</p>
		</footer> -->
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>