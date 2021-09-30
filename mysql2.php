<?php 
include_once("classes/ControllerErp.php");
	$obj = new ControllerErp();
	//$obj->printr($_SESSION);
	if(!$obj->getAuthontication()){
		//$obj->redirect('index.php');
		//echo $obj->getAuthontication();
	}
	$name ='';
	if(isset($_GET['name'])){
		$name = trim($_GET['name']);
		$query = "Select city,count(*) as total from person1 where city LIKE '".$name."%' group by city";
		$result = $obj->selectQuery($query);
	}else{
		$query = "Select city,count(*) as total from person1 group by city";
		$result = $obj->selectQuery($query);
	}
	
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
				?>
				
			
			
				<div class="col-md-12 row">
				<form class="login-form" action="mysql2.php" method="get">			
					<div class="form-group ">
						<div class="col-md-3">
						  <input type="text" name="name" value="<?=$name?>" id="name" placeholder="City Name" autocomplete="off" class="form-control placeholder-no-fix" />
						</div>
						<div class="col-md-2">
							<input type="submit" class="btn green" name="Search" value="Search"/>
						</div>
					</div>
					</form>
				</div>
			
				
				<div class="col-md-12">
					<div class="table-responsive">
						
						<table class="table table-striped table-bordered table-hover table-checkable order-column data_grid" id="sample_1">
							<thead>
								<tr>
									<th width="3%"> SL </th> 
									                           
									<th>City </th>                             
									<th>No of Person </th> 
									
								</tr>
							</thead>
							<tbody>
							<?php
							foreach($result as $k =>$val){
							
							?>
							<tr>
								<td><?=($k+1)?></td>
								<td><?=$val['city']?></td>
								<td><?=$val['total']?></td>
								
							</tr>
							<?php }?>
							
							
							
							</tbody>
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
