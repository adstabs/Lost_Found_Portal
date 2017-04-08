<?php
session_start();
$_SESSION['login_user']=0;;
if(session_destroy()) // Destroying All Sessions
{
header("Location: home.php"); // Redirecting To Home Page
}
?>