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
				?>
				<div class="col-md-12">
					<div class="table-responsive">
						
						<table class="table table-striped table-bordered table-hover table-checkable order-column data_grid" id="sample_1">
						
								<tr>
									<td > Q 2: <br>We can not modify the value of a constant</td> 
								</tr>
								<tr>
									<td > Q 3:<br> 2 Ways to pass the variable through the navigation between the page:<br>
										1. session 2. cookie
										</td> 
								</tr>
								<tr>
									<td > Q 4: <br>$b = 7; echo "<`script> var a = ".$b." alert(a);<`/script> ";
									<p>Reference file: php3.php</p>
									</td> 
								</tr>
								<tr>
									<td > Q 5: <br>Received values by GET Or POST method from http request </td> 
								</tr>
								<tr>
									<td > Q 6: <br>We can submit a form by click submit button.
										6.1: If the button type is submit then it goes to server.<br>
										6.2: If the button type is button then it submit by javascript code.<br>
									</td> 
								</tr>direction
								<tr>
									<td > Q 7:<br> 
									<p>a) Session:Session is a bit of information which store in server side.</p>
									<p>b) AJAX: If the button type is submit then it goes to server and display on the page </p>
									<p>c) SQL injection: SQL injection is a common attack bearing that uses malicious SQL code for backend database manipulation to access information.</p>
									<p>d) Dynamic websites: Dynamit website has 2 part 1 admin side and user/client side. admin can add/modify/remove a content any time.</p>
									</td> 
								</tr>
								<tr>
									<td > Q 8: We can read file 2 way<br> 
									<p>a) Open file in read mode then using loop.</p>
									<p>b) useing file_get_contents function. </p>
									<p>Reference file: php4.php</p>
									</td> 
								</tr>
							
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
