<?php
$db=new mysqli('127.0.0.1','root','','lost_base');
$rows=$db->query("SELECT * FROM found1");
$input=$rows->fetch_all(MYSQLI_ASSOC);
$rows = array_reverse($input);
$itemarrf=array();
$idarrf=array();
$datearrf=array();
$contactf=array();
$describearrf=array();
$namef=array();
foreach($rows as $row)
{
	array_push($itemarrf,$row['item']);
	array_push($datearrf,$row['date']);
	array_push($contactf,$row['contact']);
	array_push($idarrf,$row['id']);
	array_push($namef,$row['name']);
	array_push($describearrf,$row['comment']);
}

header("Content-type:image/jpeg");
$db->close();
?>