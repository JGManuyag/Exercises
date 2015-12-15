<!DOCTYPE html>
<?php
include('database/db.php');

if(isset($_POST['btn_add']))
{
	$fn = mysql_real_escape_string(htmlspecialchars($_POST['txt_fname']));
	$mn = mysql_real_escape_string(htmlspecialchars($_POST['txt_mname']));
	$ln = mysql_real_escape_string(htmlspecialchars($_POST['txt_lname']));
	$em = mysql_real_escape_string(htmlspecialchars($_POST['txt_email']));
	$co = mysql_real_escape_string(htmlspecialchars($_POST['txt_cont']));
	$bd = mysql_real_escape_string(htmlspecialchars($_POST['bday']));
	$ag = mysql_real_escape_string(htmlspecialchars($_POST['txt_age']));
	$ge = mysql_real_escape_string(htmlspecialchars($_POST['sel_gen']));

	$add = "INSERT INTO `records_tbl`(`ID`,`firstname`,`middlename`,`lastname`,`email`,`contact`,`birthdate`,`age`,`gender`)
	VALUES (NULL, '" . $fn ."','" . $mn ."','" . $ln ."','" . $em ."','" . $co ."','" . $bd ."','" . $ag ."','" . $ge ."');";
	mysql_query($add) or die(mysql_error());
	header("location:view.php");
}
?>
<html>
<head>
	<title>Add Form</title>
	<link rel="stylesheet" type="text/css" href="css/add_style.css">
</head>
<body>
<form name="add_form" method="post">
	<div id="div_add">
		<table cellspacing="15" align="center">
			<tbody>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="txt_fname" placeholder="firstname" maxlength="40" required></td>
				</tr>
				<tr>
					<td>Middle Name: </td>
					<td><input type="text" name="txt_mname" placeholder="middlename" maxlength="30" required></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="txt_lname" placeholder="lastname" maxlength="30" required></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="txt_email" placeholder="email address" maxlength="60" required></td>
				</tr>
				<tr>
					<td>Contact: </td>
					<td><input type="text" name="txt_cont" placeholder="mobile number" maxlength="11" required></td>
				</tr>
				<tr>
					<td>Birthdate: </td>
					<td><input type="date" name="bday" min="1955-12-31" max="2035-01-01" required></td>
				</tr>
				<tr>
					<td>Age: </td>
					<td><input type="number" name="txt_age" min="18" max="55" required></td>
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
					<td><input type="submit" name="btn_add" value="Save" class="btn">
					<input type="submit" name="btn_can" value="Cancel" class="btn1" formnovalidate formaction="view.php"></td>
				</tr>
			</tfoot>
		</table>
	</div>
</form>
</body>
</html>