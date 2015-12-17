<!DOCTYPE html>
<html>
<head>
	<title>PDO View Form</title>
</head>
<body>
<form>
	<div>
		<table>
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</thead>
<?php
require 'database/connect.php';
$query="SELECT * from sample_tbl";
$step = $dbh->prepare($query);
$step->execute();
$step = $step->fetchAll();
foreach ($step as $row)
{
?>
			<tbody>
				<tr>
					<td><?php echo $row['firstname']?></td>
					<td><?php echo $row['lastname']?></td>
					<td><?php echo $row['email']?></td>
					<td><input type="submit" name="btn_edit" value="Edit" formaction="edit.php?id=<?php echo $row['ID'];?>">
					<input type="submit" name="btn_del" value="Delete" formaction="delete.php?id=<?php echo $row['ID'];?>"></td>
				</tr>
			</tbody>
<?php }?>
			<tfoot>
				<tr>
					<td colspan="3"></td>
					<td><input type="submit" name="add_btn" value="Add Record" formaction="add.php"></td>
				</tr>
			</tfoot>
		</table>
	</div>
</form>
</body>
</html>