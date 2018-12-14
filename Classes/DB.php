<?php
class DB{
	
	private static $instance;
	private $conn;
	
	public function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "raidfinder";
		$conn;
		
		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 
		//echo "Connected successfully";

	}
	public static function getInstance()
    {
        // Check is $_instance has been set
        if(!isset(self::$instance)) 
        {
            // Creates sets object to instance
            self::$instance = new DB();
        }

        // Returns the instance
        return self::$instance;
    }
	public function DoSQL($sql){
		//$result = $this->conn->query($sql);
		$result = $this->conn->query($sql);
		if($result === false)
		{
		   user_error("Query failed: ".$this->conn->error."<br />\n$query");
		   return false;
		}
		if(strpos($sql,"SELECT")!==false){
			if($result->num_rows == 0)
			{
			   return null;
			}
			else
			{
			   return $result->fetch_array();
			}
		}
		$this->conn->commit();
	}
}
?>