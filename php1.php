
<html>
	<title>Bondstein: Sr. Software Engineer</title>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style>
		.container{
			width:960px;
		}
	</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php 
				include_once('nav.php');
				
				?>
				<div class="col-md-3">
				<?php 
				$replace_string =['),'=>');'];
				$fruits = "('apple','orange','banana'),";
				echo $fruits;
				echo '<br>Output:-<br>';
				echo strtr($fruits, $replace_string);
				?>
				</div>
				</div>
				
				
			</div>
		</div>
	</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="js/login.min.js"></script>
