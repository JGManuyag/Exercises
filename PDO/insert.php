<!DOCTYPE html>

<html>
	
	<head>

 		<title>Insert Data</title>
 	
 	</head>

<body>

<?php
	function __autoload($class)
	{
 		include_once($class.".php");

	}
 		$obj=new oopCrud;

if(isset($_REQUEST['insert']))
	{
 		extract($_REQUEST);
 
if($obj->insertData($name,$email,$mobile,$address,"students"))
	{
 		header("location:show.php?status_insert=success");
 	}
}
echo @<<<show

<div id="div_bod">

 	<div id="div_btn">
 		<button><a href="show.php">Home</a></button>
 	</div>

	<form action="insert.php" method="post">

		<table width="400" class="table-borderd">

			<tr>
				<th>Id</th>
				<td><input type="text" name="id" value="$id" readonly="readonly"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value="$name"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" value="$email"></td>
			</tr>
			<tr>
				<th>Mobile</th>
				<td><input type="text" name="mobile" value="$mobile"></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><textarea rows="5" cols="20" name="address">$address</textarea></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td><input type="submit" name="insert" value="Insert"></td>
			</tr>

		</table>

	</form>

</div>

show;
?>

</body>

</html>
