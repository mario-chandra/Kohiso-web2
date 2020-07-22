<?php
error_reporting(0);
session_start();
require 'functions.php';
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Kohiso Web Admin</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php
					$menu = mysqli_query($conn, "SELECT * FROM menu ORDER BY menu_id ASC");
					while($dataMenu = mysqli_fetch_assoc($menu)){
						$menu_id = $dataMenu['menu_id'];
						$submenu = mysqli_query($conn, "SELECT * FROM submenu WHERE menu_id='$menu_id' ORDER BY submenu_id ASC");
						if(mysqli_num_rows($submenu) == 0){
							echo '<li><a href="'.$dataMenu['menu_link'].'">'.$dataMenu['menu'].'</a></li>';
						}else{
							echo '
							<li class="dropdown">
								<a href="'.$dataMenu['menu_link'].'" class="dropdown-toggle" data-toggle="dropdown">'.$dataMenu['menu'].' <b class="caret"></b></a>
								<ul class="dropdown-menu">';
								while($dataSubmenu = mysqli_fetch_assoc($submenu)){
									echo '<li><a href="'.$dataSubmenu['submenu_link'].'">'.$dataSubmenu['submenu'].'</a></li>';
								}
							echo '
								</ul>
							</li>
							';
						}
					}
					?>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>