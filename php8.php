<?php 
include_once("classes/ControllerErp.php");
	
?>
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
				
				$array = [
							['Joe', 'joe@hmail.com', 24],
							['Doe', 'doe@hmail.com', 25],
							['Dane', 'dane@hmail.com', 20]
						];
				?>
				<div class="col-md-12">
					<div class="table-responsive">
						
						<table class="table table-striped table-bordered table-hover table-checkable order-column data_grid" id="sample_1">
						        <tr>
									<td>Name</td>
									<td>Email</td>
									<td>Age</td>
								</tr>
								
								<?php foreach($array as $k => $val){?>
								<tr>
									<?php foreach($val as $col){?>
									<td > <?=$col?></td> 
									<?php }?>
								</tr>
								<?php }?>
								
							
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="js/login.min.js"></script>
