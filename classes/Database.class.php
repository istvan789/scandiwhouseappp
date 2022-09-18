<?php

abstract class Database
{	
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db = 'scandiwhouseappp';
	private $table = 'productlist';
	
	protected $connection;

	//$mysqli = mysqli_connect("localhost", "root", "", "scandiwhouseappp");
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
			
			if (!$this->connection) {
				echo 'Not connected tot he Database';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}

   

   








?>
