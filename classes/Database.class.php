<?php

abstract class Database
{	
	//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
	
	
	
	
	
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
