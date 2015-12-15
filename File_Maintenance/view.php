<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
	<link rel="stylesheet" type="text/css" href="css/view_style.css">
</head>
<body>
<form name="view_form" method="post">
	<div id="div_view">
		<table width="100%" height="auto" cellspacing="15">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Birthdate</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Action</th>
			</thead>
<?php 
include("database/db.php");
	
	$queryRecord = mysql_query ("select * from records_tbl");
	while($fetchRecord = mysql_fetch_array($queryRecord))
	{
?>
			<tbody>
				<tr>
					<td align="center"><?php echo $fetchRecord[0];?></td>
					<td align="center"><?php echo $fetchRecord[1]." ".$fetchRecord[2].", ".$fetchRecord[3];?></td>
					<td align="center"><?php echo $fetchRecord[4];?></td>
					<td align="center"><?php echo $fetchRecord[5];?></td>
					<td align="center"><?php echo $fetchRecord[6];?></td>
					<td align="center"><?php echo $fetchRecord[7];?></td>
					<td align="center"><?php echo $fetchRecord[8];?></td>
					<td align="center">
					<input type="submit" name="view_edit" value="Edit" formaction="edit.php?id=<?php print $fetchRecord[0];?>" class="btn">
					<input type="submit" name="view_delete" value="Delete" formaction="delete.php?id=<?php print $fetchRecord[0];?>" class="btn1">
					</td>
				</tr>
			</tbody>
<?php }?>
			<tfoot>
			<tr>
				<td colspan="7"></td>
				<td><input type="submit" name="add_rec" value="Add New Record" formaction="add.php" class="btn2"></td>
			</tr>
		</tfoot>
		</table>
	</div>
</form>
</body>
</html>