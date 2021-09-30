<?php 
include_once("classes/ControllerErp.php");
	$obj = new ControllerErp();
	if($obj->getAuthontication()){
		if($_SESSION['category'] =='Admin'){
			$id = $_GET['id'];
			$obj->deleteQuery('user',['id'=>$id]);
		}
		$obj->redirect('dashboard.php');
	}else{
		$obj->redirect('index.php');
	}
	
?>