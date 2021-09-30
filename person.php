<?php 
include_once('classes/ControllerBase.php');
  $obj = new ControllerBase();
  //$query ="select * from  person1 where 1";
  //$result = $obj->selectQuery($query);
  //$obj->printr($result);
  
  //$data['name'] = 'Belal Hosan';
  //$data['city'] = 'Naogaon';
  //$conn['dob'] = '1983-12-22';
  //$id = $obj->insertQuery($data,'person1');
  
  //$data['name'] = 'Belal HosanSSSS';
  //$data['city'] = 'Naogaon';
  //$conn['id'] = '5';
  //
  //$id = $obj->updateQuery($data,'person1',$conn);
  //$obj->printr($id);
  
  $conn['id'] = '5';
  
  $id = $obj->deleteQuery('person1',$conn);
  $obj->printr($id);
  
?>