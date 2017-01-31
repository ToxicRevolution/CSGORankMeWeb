<?php
class Server {
	public $IP;
	public $port;
	public $name;
	
	/**
	 * Class Constructor
	 * @param 	 $IP
	 * @param    $port
	 * @param    $name     
	 */
	 public function __construct($id, $dbh) {
    //Make DB Call
	    $stmt = "SELECT * FROM servers WHERE id = :id";
	    $query = $dbh->prepare($stmt);
	    $query->bindValue(":id", $id);
	    $query->execute();
	    $item = $query->fetch(PDO::FETCH_ASSOC);
	    
	    $this->IP = $item['serverIP'];
	    $this->port = $item['serverPort'];
	    $this->name = $item['serverName'];
		
	}

	public function get($name) {
    	return $this->$name;
	}

}
?>