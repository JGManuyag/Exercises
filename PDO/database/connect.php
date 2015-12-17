<?php
$hostname='localhost';
$username='root';
$password='';

try 
{
$dbh = new PDO("mysql:host=$hostname;dbname=yambao_db",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>