<?php 
include_once("classes/ControllerErp.php");
$obj = new ControllerErp();
if($obj->getAuthontication()){
	$obj->redirect('dashboard.php');
}
$flag=false;
$mgs ='';
	if(isset($_POST['login'])){
		
		$user = $_POST['user_name'];
		$pass = $_POST['password'];
		$query = "Select * from user where username='".$user."' and '".md5($pass)."'";
		$rows = $obj->selectQuery($query);
		if(!empty($rows)){
			$_SESSION['userid'] = $rows[0]['id']; 
			$_SESSION['username'] = $rows[0]['username']; 
			$_SESSION['category'] = $rows[0]['category']; 
			//$obj->printr($rows);
			$obj->redirect('dashboard.php');
		}else{
			$mgs ='Incorrect username or password';
			$flag=true;
		}
		
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
				
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<form class="login-form" action="index.php" method="post">
					<h3 class="form-title">Login to your account</h3>
					<?php if($flag){?>
					<div class="alert alert-danger display-hide">
						<button class="close" data-close="alert"></button>
						<span><?=$mgs?>  </span>
					</div>
					<?php }?>
					
					
					<div class="form-group">
						<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
						<label class="control-label visible-ie8 visible-ie9">Login ID</label>
						<div class="input-icon">
							
							<input type="text" name="user_name" value=""  id="user_name" placeholder="Login ID" autocomplete="off" class="form-control placeholder-no-fix" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Password</label>
						<div class="input-icon">
							<input type="password" name="password" value="123"  id="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix" />
						</div>
					</div>
					<div class="form-actions">
						
						<button type="submit" name="login" class="btn green pull-right"> Login </button>
					</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="js/login.min.js"></script>
