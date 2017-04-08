<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
</head>
<body>

<?php
error_reporting(0);
/*$name1=$_POST["names"];
$email=$_POST["emails"];
$pass=$_POST["passwords"];
$rec=$_POST["recovery_mails"];
$contact1=$_POST["contacts"];
*/
$flag=0;
$name1="";
$email="";
$pass="";
$rec="";
$contact1="";
//echo $name1.$email.$pass.$rec.$contact1;

$emailerr=$passerr=$nameerr=$emailerr2=$contacterr="";


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function validate($email) {
    $validDomains ="iitrpr.ac.in";
    $parts = explode('@',$email);
    $domain = $parts[1];
    if($domain==$validDomains) return true;
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["recovery_mails"])) {
     $emailerr2 = "Recovery-Email is required";
	 $flag-=1;
   } else {
     $rec = test_input($_POST["recovery_mails"]);
     if (!filter_var($rec, FILTER_VALIDATE_EMAIL)) {
       $emailerr2 = 'Invalid Email Format'; 
	   $flag-=1;
     }
   }
   
   if (empty($_POST["emails"])) {
     $emailerr = "Email is required";
	 $flag-=1;
   } else {
	       $email = test_input($_POST["emails"]);
		   $email=stripslashes($email);
			$db= new mysqli("127.0.0.1","root","","lost_base");
			$quer=$db->query("SELECT * FROM mail1 WHERE mail_id='$email'");
			if ($quer->num_rows==0) {
				 if (!validate($email)) {
					$emailerr = "Domain Must Be iitrpr.ac.in"; 
					$flag-=1;
				}
				}
			else {
			$emailerr = "Email Already Registered";
			$flag-=1;
				}
				$db->close(); 
   }
     
   if (empty($_POST["passwords"])) {
     $passerr = "Enter Password";
	 $flag-=1;
   } else {
	   $pass=$_POST["passwords"];
   }
    if (empty($_POST["names"])) {
     $nameerr = "Enter Name";
	 $flag-=1;
   } else {
	   $name1=$_POST["names"];
   }
  if (empty($_POST["contacts"])) {
     $contacterr = "";
   } else {
	   $contact1=$_POST["contacts"];
   }
   if($flag==0)
{
	$db=new mysqli("127.0.0.1","root","","lost_base");
	$db->query("INSERT INTO mail1(name,mail_id,mail_pwd,rec_mail_id,contact) VALUES('$name1','$email','$pass','$rec','$contact1')");
	$db->close();
	    header('Location: home.php');
		die();

}

}

?>

 <nav class="navbar navbar-inverse navi">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitrpr.ac.in">IIT Ropar</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
		<li><a href="archive.php">Archive</a></li>
		<li ><a href="entry.php">Submit Queries</a></li>
		<li ><a href="aboutus.php">about us</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="active"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="jumbotron" id="jumbo">
    <h2>Registration</h2>          
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
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="emails" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-4">          
            <input type="password" class="form-control" id="pwd" name="passwords" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">RecoveryMail:</label>
          <div class="col-sm-4">          
            <input type="email" class="form-control" id="email" name="recovery_mails" placeholder="Enter Email">
          </div>
        </div>
          <div class="form-group">
          <label class="control-label col-sm-2">Contact:</label>
          <div class="col-sm-4">          
            <input class="form-control" name="contacts" placeholder="Contact">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-default">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
	<div class="col-md-4">
	<span class="error"><?php echo $nameerr;?></span><br>
    <span class="error"><?php echo $emailerr;?></span><br>
	<span class="error"><?php echo $emailerr2;?></span><br>
	<span class="error"><?php echo $passerr;?></span>
   </div>
   </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

</body>

</html>
