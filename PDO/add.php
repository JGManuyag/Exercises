<?php
if(isset($_POST["btn_add"]))
{
require ('database/connect.php'); 
$sql = "INSERT INTO sample_tbl (firstname, lastname, email)
VALUES ('".strip_tags($_POST["txt_fname"])."','".strip_tags($_POST["txt_lname"])."','".strip_tags($_POST["txt_email"])."')";
if ($dbh->query($sql)) 
{
echo "<script type= 'text/javascript'>alert('Successfully saved!');</script>";
header('location:view.php');
}
else
{
echo "<script type= 'text/javascript'>alert('Data was not saved!');</script>";
}
$dbh = null;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO Add Form</title>
</head>
<body>
<form name="add_form" method="post">
	<div id="div_add">
		<table>
			<tbody>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="txt_fname" required></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="txt_lname" required></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="txt_email" required></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_add" value="Sumbit">
					<input type="reset" value="Cancel" formnovalidate></td>
				</tr>
			</tfoot>
		</table>
	</div>
</form>
</body>
</html>