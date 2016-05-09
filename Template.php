<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="banner">
			
			</div>
			
			<div id="navigation">
				<ul id="nav">
					<li><a href="test.php">Home</a></li>
					<li><a href="#">Coffee</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
				</ul>
			
			</div>
			
			<div id="content_area">
				<?php echo $content; ?>
			</div>
			
			<div id="sidebar">
				
			</div>
			
			<footer>
				<p>All rights reserved</p>
			</footer>
		</div>
	</body>
</html>