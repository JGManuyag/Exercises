<!DOCTYPE html>
<?php
include('database/db.php');

$id = $_GET['id'];

$queryRecord = mysql_query("select * from records_tbl WHERE ID ='$id'");
$fetchRow = mysql_fetch_row($queryRecord);

if(isset($_POST['btn_edit']))
{
	$fn = mysql_real_escape_string(htmlspecialchars($_POST['txt_fname']));
	$mn = mysql_real_escape_string(htmlspecialchars($_POST['txt_mname']));
	$ln = mysql_real_escape_string(htmlspecialchars($_POST['txt_lname']));
	$em = mysql_real_escape_string(htmlspecialchars($_POST['txt_email']));
	$co = mysql_real_escape_string(htmlspecialchars($_POST['txt_cont']));
	$bd = mysql_real_escape_string(htmlspecialchars($_POST['bday']));
	$ag = mysql_real_escape_string(htmlspecialchars($_POST['txt_age']));
	$ge = mysql_real_escape_string(htmlspecialchars($_POST['sel_gen']));

	$update = "UPDATE records_tbl SET firstname='$fn', middlename='$mn', lastname='$ln', email='$em', contact='$co', birthdate='$bd', age='$ag', gender='$ge' WHERE ID ='$id'";

	mysql_query($update) or die(mysql_error());
	header("location:#");
}
?>
<html>
<head>
	<title>Add Form</title>
	<link rel="stylesheet" type="text/css" href="css/edit_style.css">
</head>
<body>
<form name="edit_form" method="post">
	<div id="div_edit">
		<table cellspacing="15" align="center">
			<tbody>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="txt_fname" value="<?php echo $fetchRow[1];?>" placeholder="firstname" maxlength="40" required></td>
				</tr>
				<tr>
					<td>Middle Name: </td>
					<td><input type="text" name="txt_mname" value="<?php echo $fetchRow[2];?>" placeholder="middlename" maxlength="30" required></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="txt_lname" value="<?php echo $fetchRow[3];?>" placeholder="lastname" maxlength="30" required></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="txt_email" value="<?php echo $fetchRow[4];?>" placeholder="email address" maxlength="60" required></td>
				</tr>
				<tr>
					<td>Contact: </td>
					<td><input type="text" name="txt_cont" value="<?php echo $fetchRow[5];?>" placeholder="mobile number" maxlength="11" required></td>
				</tr>
				<tr>
					<td>Birthdate: </td>
					<td><input type="date" name="bday" value="<?php echo $fetchRow[6];?>" min="1955-12-31" max="2035-01-01" required></td>
				</tr>
				<tr>
					<td>Age: </td>
					<td><input type="number" name="txt_age" value="<?php echo $fetchRow[7];?>" min="18" max="55" required></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td><select name="sel_gen" required>
						<option value="">Select Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_edit" value="Update" class="btn">
					<input type="submit" name="btn_can" value="Cancel" class="btn1" formnovalidate formaction="view.php"></td>
				</tr>
			</tfoot>
		</table>
	</div>
</form>
</body>
</html>