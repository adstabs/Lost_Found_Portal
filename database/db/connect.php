<?php
$db=new mysqli('127.0.0.1','root','','lost_base');

$db->query("INSERT INTO mail1 (name,mail_id,mail_pwd) VALUES ('bhalu','bhalu@bhalu','bhalubhalu')");
$result=$db->query("SELECT * FROM mail1");
$rows=$result->fetch_all(MYSQLI_ASSOC);
echo '<pre>',print_r($rows),'</pre>';

foreach($rows as $row){
	echo $row['name']." ".$row['mail_id']."<br>";
}
if($result->num_rows){
	echo "inform";
}
$db->close();