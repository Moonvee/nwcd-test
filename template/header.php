<!-- a document by gengmengwei -->
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PhotoShare-一个图片分享网站</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 最新版本的 Bootstrap 核心文件 -->
	<link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/font-awesome/5.8.1/css/all.css" rel="stylesheet">
	<link href="./css/app.css" rel="stylesheet">

	<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img alt="Brand" width="24px" height="24px" src="./images/logo.png">
				</a>
				<a class="navbar-brand" href="#">PhotoS</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="index"><a href="./index.php">Community</a></li>
					<li id="my"><a href="./my.php">My</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<ul class="nav navbar-nav">


					<li id="index">
						<a href="./index.php">Upload Photo</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a href="javascript:;" id="change">中文/English</a></li> -->
					<li class="dropdown">
						<!-- login and logout -->
						<?php
						include_once('user.php');
						$name = getUserName();
						if ($name) {
							?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $name; ?>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#" data-target="#myModal" data-toggle="modal">ChangeInfo</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>

						<?php } else { ?>

							<a href="#" class="dropdown-toggle" data-target="#login" data-toggle="modal" role="button" aria-haspopup="true" aria-expanded="false">
								Please Login
							</a>

						<?php } ?>

					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<!-- Modal -->
	<?php
	include_once('changeinfo.php');
	include_once('login.html');
	include_once('reg.html');
	?>


