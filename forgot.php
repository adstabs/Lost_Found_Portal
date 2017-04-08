<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recovery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style type="text/css">
html {
	min-height: 100%;
}
body {
	height: 100%;
	position: relative;
	font-family: Arial, Helvetica, sans-serif;
	color: #888;
	font-size: 13px;
	line-height: 20px;
	min-width: 998px;
	border-top:3px solid #919191;
	background:url(images/BG.jpg) repeat;
}
.navbar {
    margin-bottom:0;
  }
  .error{
	  color:red;
	  font-size:20px;
	  font-weight:bold;
	  font-family: Arial, Helvetica, sans-serif;
  }
 
 .col-md-4{
	 float:left;
 }
</style>
<?php
error_reporting(0);
$flag=0;
$name1=$recovery="";
$err="";
$mess="Submit your username and recovery mail you submitted.";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["names"])) {
	   $err="error in data entered";
   } else {
	 $flag=1;
     $name1=$_POST["names"];
     }
   
   if (empty($_POST["recovery_mails"])) {
	   $recovery="";
	   $err="error in data entered";
   } else {
	   $recovery=$_POST["recovery_mails"];
   }
	if($flag==1)
	{
		$db=new mysqli('127.0.0.1','root','','lost_base');
		//echo $name1;
		$result=$db->query("SELECT rec_mail_id,mail_pwd FROM mail1 WHERE name='$name1'");
		$rows=$result->fetch_all(MYSQLI_ASSOC);
		foreach($rows as $row){
			}
		//echo print_r($rows);
			if($row['rec_mail_id']==$recovery){
				$to      = $recovery;
				$subject = 'Forgotten password';
				$message = "This is the password you asked for.\n$row[mail_pwd]\n Next time be careful.:)";
				$headers = 'From: sukhmaninderportal@gmail.com' . "\r\n" .
				'Reply-To: sukhmaninderportal@gmail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			$mess="mail sent";
		}
		else{
			$err="error in data entered";
		}
		$db->close();
	}
 }
?>

</head>
<body>


 <nav class="navbar navbar-inverse navi">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitrpr.ac.in">IIT Ropar</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
		<li><a href="archive.php">Archive</a></li>
		<li ><a href="entry.php">Sumbit Queries</a></li>
		<li ><a href="aboutus.php">about us</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php" class="active"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="jumbotron" id="jumbo">
    <h2>Password recovery</h2>          
  </div>
  
<div class="container">
  <div class="row">
  <div class="col-md-8">
    <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    	 <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-4">
            <input type="name" class="form-control" id="name" name="names" placeholder="Name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">RecoveryMail:</label>
          <div class="col-sm-4">          
            <input type="email" class="form-control" id="email" name="recovery_mails" placeholder="Enter Email">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-default">Send mail</button>
          </div>
        </div>
      </form>
    </div>
	<div class="col-md-4">
	<span class="error"><?php echo $mess;?></span><br>
	<span class="error"></span><br>
	<span class="error"><?php echo $err;?></span><br>
   </div>
   </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

</body>

</html>






?>