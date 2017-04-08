<?php
session_start();
if($_SESSION['login_user']==0){
    header('Location: home.php'); // Redirecting To Home Page
}
$db=new mysqli('127.0.0.1','root','','lost_base');
$id=addslashes($_GET["id"]);
//$sitename=addslashes($_GET["sitename"]);
//echo $sitename.'hello';
$input=$db->query("SELECT email FROM lost1 WHERE id='$id'");
$rows=$input->fetch_all(MYSQLI_ASSOC);
foreach($rows as $input){}
echo $input['email'];
if($_SESSION['username']==$input['email']){
	$db->query("DELETE FROM lost1 WHERE id='$id'");
	header('Location:archive.php');
	$_SESSION['error']=0;
}
else{
	$_SESSION['error']=1;
	header('Location:archive.php');
}
$db->close();
?>