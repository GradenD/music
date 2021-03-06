<!doctype html>
<html lang="en">
<head>
    <?php require_once 'library/main.php'; ?>
	<?php require_once 'library/check.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Music</title>
	<script type="text/javascript" src='js/jQuery.js'></script>
	<script type="text/javascript" src='js/jquery.jplayer.min.js'></script>
	<script type="text/javascript" src='js/fontawesome.js'></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/bsnav.min.css">
	<link rel="stylesheet" type="text/css" href="css/playlist.css">
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet/less" type="text/css" href="css/main.less">
    <link rel="shortcut icon" href="">
  </head>
<body>	
	<div class="wrapper d-flex">
		<div id="devise" class="devise"></div>
		<div class="preloader">Loading</div>
		<header id="header">
			<div class="container">
				<div class="header navbar navbar-expand-lg bsnav">
					<div class="logo">
					<a href="/?page=index"><img src="img/logo.png"></a>
					</div>
					<button class="navbar-toggler toggler-spring" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="main-menu collapse navbar-collapse">
						<ul class="navbar-nav nav-margin d-flex">
							<li class="active">
								<a href="/?page=index">HOME</a>
							</li>
							<li>
								<a href="/?page=news">NEWS</a>
							</li>
							<li>
								<a href="/?page=gallery">GALLERY</a>
							</li>
							<li>
								<a href="/?page=music">MUSIC</a>
							</li>
							<?php if($admin):?>
								<li>
									<a href="/?page=admin">ADMIN</a>
								</li>
							<?php endif;?>
						</ul>
						<div class="social d-flex">
							<?php if($auth):?>
							<a class="user" href="/?page=profile">
								<span class="icon icon-user">
									<i class="far fa-user"></i>
									<?=$usrName?>
								</span>
							</a>
							<?php else:?>
							<a class="user" href="/?page=log">
								<span class="icon icon-user">
									<i class="far fa-user"></i>
									User
								</span>
							</a>
							<?php endif;?>
							<div class="search">
                             	<form role="form">
                            	 	<input type="text" class="search-form" autocomplete="off" placeholder="Track, album, artist, podcast">
									<i class="fas fa-search text-grey" aria-hidden="true"></i>
                            	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="content">

	    