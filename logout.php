<?php 
include_once("classes/ControllerErp.php");
	$obj = new ControllerErp();
	if($obj->getAuthontication()){		
		unset($_SESSION['userid']);
		unset($_SESSION['username']);
		unset($_SESSION['category']);
		$obj->redirect('index.php');
	}else{
		$obj->redirect('index.php');
	}
	
?>
