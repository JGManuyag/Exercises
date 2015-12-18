<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Show Table</title>
	
	</head>

<?php

function __autoload($class) //confirmation after update / insert / update process
	{
	 	include_once($class.".php");
	}
	 	$obj=new oopCrud;

if(isset($_REQUEST['status']))
	{
		 echo"Your Data Successfully Updated";
	}

if(isset($_REQUEST['status_insert']))
	{
		 echo"Your Data Successfully Inserted";
	}

if(isset($_REQUEST['del_id']))
{
	if($obj->deleteData($_REQUEST['del_id'],"students"))
		{
		 echo"Your Data Successfully Deleted";
		}
}
?>
<body>

<div id="div_bod">

	<div id="div_btn">
		<button><a href="show.php">Home</a></button>
		<button><a href="insert.php">Insert</a></button>
	</div>

	<table width="800" border="1">

		<tr>
			<th>Students Name</th>
			<th>Email Address</th>
			<th>Mobile Number</th>
			<th>Address</th>
			<th>Action</th>
		</tr>

<?php
//fetch records from database
foreach($obj->showData("students") as $value)
	{
extract($value);

echo <<<show
	 
	<tr class="success">
		<td>$name</td>
		<td>$email</td>
		<td>$mobile</td>
		<td>$address</td>
		<td align="center"><button><a href="update.php?id=$id">Edit</a>
		</button>&nbsp;&nbsp;<button><a href="show.php?del_id=$id">Delete</a></button></td>
	</tr>

show;
	 }
?>

		<tr>
			<th colspan="5" align="right">
			<button class="btn"><a href="insert.php">Insert New Data</a></button>
			</th>
		</tr>
	
	</table>

</div>

</body>

</html>