<?php
$db=new mysqli('127.0.0.1','root','','lost_base');
$rows=$db->query("SELECT * FROM lost1");
$input=$rows->fetch_all(MYSQLI_ASSOC);
$rows = array_reverse($input);
$itemarrl=array();
$idarrl=array();
$datearrl=array();
$contactl=array();
$describearrl=array();
$namel=array();
foreach($rows as $row)
{
	array_push($itemarrl,$row['item']);
	array_push($datearrl,$row['date']);
	array_push($contactl,$row['contact']);
	array_push($idarrl,$row['id']);
	array_push($namel,$row['name']);
	array_push($describearrl,$row['comment']);
}
$db->close();
?>