<?php
class ControllerBase  {

    private $username = '';
    private $password = '';
    private $dbname = '';
	private $hostname ='localhost';
	public $conn ='';
	
	function __construct($user=null,$password=null,$db=null) {
        @session_start();
		$this->username=($user ==null)?'root':$user;
		$this->password=($password ==null)?'':$password;
		$this->dbname=($db ==null)?'test':$db;
		
		
		$this->databaseConnection();
		//return $conn;
    }
	
	private function databaseConnection()
	{
		// Create connection
		$this->conn = new mysqli($this->hostname, $this->username, $this->password,$this->dbname);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}
}
