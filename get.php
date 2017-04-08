<?php
$db=new mysqli('127.0.0.1','root','','lost_base');
$id=addslashes($_GET["id"]);
//$image=$db->query("SELECT * FROM lost1 WHERE id=$id");
//$id=13;
$images=$db->query("SELECT * FROM lost1 WHERE id=$id");
$images=$images->fetch_all(MYSQLI_ASSOC);
foreach($images as $pic){}
//$images=$images['image'];
header("Content-type:image/jpeg");
echo $pic['image'].$pic['name'];
?>