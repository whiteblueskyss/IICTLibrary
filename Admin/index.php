<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		SUST library
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header style="background-color: gray;">
		<div class="logo">
			<img style="width: 90px; padding-left:15px" src="images/sustlogo.png">
			<h1 style="color: white;">IICT LIBRARY</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
								<li><a href="admin_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div style="background-image: url(images/library.jpg); height: 1200px;" class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">IICT Library Schedule</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 20:00 </h1><br>
			</div>
		</div>
		</section>	
	</div>
	
	<div style="padding-top: 500px;">
	<?php  

		include "footer.php";
	?>
	</div>
</body>
</html>