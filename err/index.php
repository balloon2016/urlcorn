<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<?php
		include './function.php';
		echo "<title>URLCORN - ".read_file('./title')."</title>";
	?>
	<link href="../main.css" rel="stylesheet" type="text/css" media="all"/>
	<style type="text/css">
		#menu li {
			padding: 0 0 0 0;
		}
		#menu li a {
			font-size: 130%;
		}
	</style>
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a>URLCORN</a></h1>
				<h2><span>링크줄이기 서비스 <a>URLCORN</a></span></h2>
			</div>
			<div id="triangle"></div>
		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li>
					<a href="#">
						<?php echo read_file('./title'); ?>
					</a>	
				</li>
			</ul>
		</div>
	</div>
	<div id="wrapper">
		<div id="middle-wrapper">

			<div id="middle" class="container">
				<h2>
					<?php echo read_file('./title'); ?>
				</h2>
				<p>
					<?php echo read_file('./code'); ?>
				</p>
			</div>

		</div>
	</div>

	<div id="wrapper">
		<div id="down-wrapper">
				<div id="down" class="container">
				</div>

		</div>

	</div>

	<script type="text/javascript" src="main.js"></script>
</body>
</html>

