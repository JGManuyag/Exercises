<?php

class oopCrud
{
	private $host="localhost";
	private $user="root";
	private $db="yambao_db";
	private $pass="";
	private $conn;

public function __construct()
	{
	$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
 	}

public function showData($table) //fetch all records in database
	{
	$sql="SELECT * FROM $table";
	$q = $this->conn->query($sql) or die("failed!");

	while($r = $q->fetch(PDO::FETCH_ASSOC))
		{
		$data[]=$r;
		}

 		return $data;
 	}

public function getById($id,$table) //fetch data by id --update form--
	{
	$sql="SELECT * FROM $table WHERE id = :id";
	$q = $this->conn->prepare($sql);
	$q->execute(array(':id'=>$id));
	$data = $q->fetch(PDO::FETCH_ASSOC);

 	return $data;
	}

public function update($id,$name,$email,$mobile,$address,$table) //update process
	{
 	 $sql = "UPDATE $table
	 SET name=:name,email=:email,mobile=:mobile,address=:address
	 WHERE id=:id";
	 $q = $this->conn->prepare($sql);
	 $q->execute(array(':id'=>$id,':name'=>$name,
	':email'=>$email,':mobile'=>$mobile,':address'=>$address));

	 return true;
	 }

public function insertData($name,$email,$mobile,$address,$table) //adding records
	{
	 $sql = "INSERT INTO $table SET name=:name,email=:email,mobile=:mobile,address=:address";
	 $q = $this->conn->prepare($sql);
	 $q->execute(array(':name'=>$name,':email'=>$email,
	':mobile'=>$mobile,':address'=>$address));

	 return true;
	 }

public function deleteData($id,$table) //delete specific data by id
	{
	 $sql="DELETE FROM $table WHERE id=:id";
	 $q = $this->conn->prepare($sql);
	 $q->execute(array(':id'=>$id));

	 return true;
	 }
}
?>
