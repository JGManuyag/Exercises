<?php
include("database/db.php");

$id = $_GET['id'];

mysql_query("delete from records_tbl where id = '$id'");
header("location:view.php");

?>