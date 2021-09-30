<?php 
include_once("classes/ControllerErp.php");
	$obj = new ControllerErp();
	//$obj->printr($_SESSION);
	if(!$obj->getAuthontication()){
		//$obj->redirect('index.php');
		//echo $obj->getAuthontication();
	}
	$salary ='40000';
	if(isset($_GET['salary'])){
		$salary = trim($_GET['salary']);
	}
	
	
	$query = "Select * from person left join ";
	$query .= "person_address on person_address.person_id = person.id ";
	$query .= " where person_address.city='Manhattan' and person.salary >=$salary";
	$result = $obj->selectQuery($query);
	
	
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
				<form class="login-form" action="mysql3.php" method="get">			
					<div class="form-group ">
						<div class="col-md-3">
						  <input type="text" name="salary" value="<?=$salary?>" id="salary" placeholder="Salary" autocomplete="off" class="form-control placeholder-no-fix" />
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
									<th>Name </th>                             
									<th>Address Line </th>                             
									<th>City </th>                             
									<th>DOB </th>   
									<th>Salary </th>   
									
								</tr>
							</thead>
							<tbody>
							<?php
							foreach($result as $k =>$val){
							
							?>
							<tr>
								<td><?=($k+1)?></td>
								<td><?=$val['name']?></td>
								<td><?=$val['address_line']?></td>
								<td><?=$val['city']?></td>
								<td><?=$obj->dateDecode($val['dob'])?></td>
								<td><?=$val['salary']?></td>
								
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
