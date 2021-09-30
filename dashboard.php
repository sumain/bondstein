<?php 
include_once("classes/ControllerErp.php");
	$obj = new ControllerErp();
	//$obj->printr($_SESSION);
	if(!$obj->getAuthontication()){
		$obj->redirect('index.php');
		//echo $obj->getAuthontication();
	}
	$query = "Select * from user ";
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
				<div class="col-md-12">
					<div class="table-responsive">
						<?php if($_SESSION['category'] =='Admin'){?>
						<a href="user.php" class="btn green">Add New User</a>
						<?php }?>
						<table class="table table-striped table-bordered table-hover table-checkable order-column data_grid" id="sample_1">
							<thead>
								<tr>
									<th width="3%"> SL </th> 
									<th>Name </th>                             
									<th>Username </th>                             
									<th>Category </th> 
									<?php if($_SESSION['category'] =='Admin'){?>
									<th width="10%"> Actions </th>
									<?php }?>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach($result as $k =>$val){
							
							?>
							<tr>
								<td><?=($k+1)?></td>
								<td><?=$val['name']?></td>
								<td><?=$val['username']?></td>
								<td><?=$val['category']?></td>
								 <?php if($_SESSION['category'] =='Admin'){?>
								<td>
								<a href="delete.php?id=<?=$val['id']?>" onclick="return confirm('Are you sure?')" class="btn btn-xs red  btn-outline" title="del"><i class="fa fa-trash"></i></a>
					
								</td>
								 <?php }?>
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
