<?php
require 'database/connect.php';
$result = $dbh->prepare("SELECT * FROM sample_tbl WHERE ID = :ID");
$result->execute();
$row = $result->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO Edit Form</title>
</head>
<body>
<form name="edit_form" method="post">
	<div id="div_edit">
		<table>
			<tbody>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="txt_fname" value="<?php echo $row['firstname']?>" required></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="txt_lname" value="<?php echo $row['lastname']?>"required></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="txt_email" value="<?php echo $row['email']?>"required></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_edit" value="Sumbit">
					<input type="reset" value="Cancel" formnovalidate></td>
				</tr>
			</tfoot>
		</table>
	</div>
</form>
</body>
</html>