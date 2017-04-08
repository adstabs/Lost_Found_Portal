<?php
session_start();
if($_SESSION['login_user']==0){
    header('Location: home.php'); // Redirecting To Home Page
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$db=new mysqli('127.0.0.1','root','','lost_base');
echo "I am in here".$_POST["namef"];
$name1=$_POST["namef"];
$item1=$_POST["itemf"];
$date1=$_POST["datef"];
$contact1=$_POST["contactf"];
$comment1=$_POST["commentf"];
$email=$_SESSION['username'];
echo $name1;
if(!empty($item1)){
if(!empty($_FILES['picf']['name'])){
$file=$_FILES['picf']['tmp_name'];
$image="";
if(isset($file)){
	$image=addslashes(file_get_contents($_FILES['picf']['tmp_name']));
	$image_size=getimagesize($_FILES['picf']['tmp_name']);
}
if($image_size==true){
$db->query("INSERT INTO found1(item,name,date,contact,comment,image,email) VALUES('$item1','$name1','$date1','$contact1','$comment1','$image','$email')");
}}
else{
$db->query("INSERT INTO found1(item,name,date,contact,comment,email) VALUES('$item1','$name1','$date1','$contact1','$comment1','$email')");
	
}
$db->close();
}
}
?>
<script>
      window.location.href = 'entry.php';
    </script>