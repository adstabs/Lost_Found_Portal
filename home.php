<html>
<head>
	<title>Login Form</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./js/rainbows.js"></script>
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<style type="text/css">
html {margin:0;padding:0;border:0;}body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, code, del, dfn, em, img, q, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, dialog, figure, footer, header, hgroup, nav, section {margin:0;padding:0;border:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;vertical-align:baseline;}article, aside, dialog, figure, footer, header, hgroup, nav, section {display:block;}body {line-height:1.5;background:white;}table {border-collapse:separate;border-spacing:0;}caption, th, td {text-align:left;font-weight:normal;float:none !important;}table, th, td {vertical-align:middle;}blockquote:before, blockquote:after, q:before, q:after {content:'';}blockquote, q {quotes:"" "";}a img {border:none;}:focus {outline:0;}

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
#wrapper {	
	padding: 0 0 0 0px;
	height: 100%;
	width: 350px;
	margin-top:30px;
	margin-left:70px;
	position: relative;
	float:right;
}

#wrappertop {
	background:url(images/wrapper_top.png) no-repeat;
	height:22px;
}

#wrappermiddle {
	background:url(images/wrapper_middle.png) repeat-y;
	height:240px;
}

#wrapperbottom {
	background:url(images/wrapper_bottom.png) no-repeat;
	height:22px;
}

#wrapper h2 {
	margin-left:20px;
	font-size:20px;
	font-weight:bold;
	font-family:Myriad Pro;
	text-transform:uppercase;
	position:absolute;
	text-shadow: #fff 2px 2px 2px;
}

#username_input {
	margin-left:25px;
	position:absolute;
	width:300;
	height:50px;
	margin-top:40px;
}

#username_inputleft {
	float:left;
	background:url(images/input_left.png) no-repeat;
	width:12px;
	height:50px;
}

#username_inputmiddle {
	float:left;
	background:url(images/input_middle.png) repeat-x;
	width:276px;
	height:50px;
}

#username_inputright {
	float:left;
	background:url(images/input_right.png) no-repeat;
	width:12px;
	height:50px;
}

#url{
	display:block;
	width:276px;
	height:45px;
	background:transparent;
	border:0;
	color:#bdbdbd;
	font-family:helvetica, sans-serif;
	font-size:14px;
	padding-left:20px;
}

#url_user {
	position:absolute;
	display:block;
	margin-top:-28px;
	float:left;
	padding-right:10px;
}

#password_input {
	margin-left:25px;
	position:absolute;
	width:300;
	height:50px;
	margin-top:100px;
}

#password_inputleft {
	float:left;
	background:url(images/input_left.png) no-repeat;
	width:12px;
	height:50px;
}

#password_inputmiddle {
	float:left;
	background:url(images/input_middle.png) repeat-x;
	width:276px;
	height:50px;
}

#password_inputright {
	float:left;
	background:url(images/input_right.png) no-repeat;
	width:12px;
	height:50px;
}

#url_password {
	display:block;
	position:absolute;
	margin-top:-32px;
	float:left;
	margin-left:4px;
}

#submit{
	float:left;
	position:relative;
	padding:0;
	margin-top:160px;
	margin-left:25px;
	width:300px;
	height:40px;
	border:0;
}

#submit1 {
	position:absolute;
	z-index: 10;
	border:0;
	margin-top:0px;
}

#links_left{
	float:left;
	position:relative;
	padding-top:5px;
	margin-left:25px;
}

#links_left a{
	color:#bbb;
	font-size:11px;
	text-decoration:none;
	transition: color 0.3s linear;
	-moz-transition: color 0.3s linear;
	-webkit-transition: color 0.3s linear;
	-o-transition: color 0.3s linear;
}

#links_left a:hover{
	color:#292929;
}

.navbar{
margin-bottom:0;
}

  .error{
	  color:red;
	  font-size:10px;
	  font-weight:bold;
	  font-family: Arial, Helvetica, sans-serif;
  }
  
  .lost{
	  color:red;
	  margin-bottom:10px;
	  margin-top:10px;
	  margin-right:20px;
	  border:1px solid red;
	  border-radius:6px;

  }
  .images{
	  float:left;
	  margin-right:15px;
	  margin-left:7px;
	  margin-top:7px;

  }
  .clear{
	  clear:both;
  }
  .found{
	  color:green;
	  margin-bottom:10px;
	  margin-top:10px;
	  margin-right:20px;
	  border:1px solid green;
	  border-radius:6px;
  }
  .head{
	  font-size:30px;
  }
  
  .col-md-4{
	  padding:0;
  }
div.lost:active{
	height:200px;
	width:500px;
	position:relative;
	z-index:1001;
	font-size:20px;
	font-weight:bold;
	color:black;
	background-color:#FF9999;
}
div.lost:active img{
	height:180px;
	width:180px;
}

div.found:active img{
	height:180px;
	width:180px;
}
div.found:active{
	height:200px;
	width:500px;
	position:relativee;
	z-index:1000;
	font-size:20px;
	font-weight:bold;	
	color:black;
	background-color:#99FFCC;
}
 
</style>
<?php
error_reporting(0);
include 'homelost.php';
include 'homefound.php';
session_start();
$flag=0;
$mail=$pass="";
$loginerr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["email"])) {
	   			$loginerr="LOGIN ERROR";
   } else {
	 $flag=1;
     $mail=$_POST["email"];
     }
   
   if (empty($_POST["password"])) {
	   $pass="dodo";
	   	$loginerr="LOGIN ERROR";
   } else {
	   $pass=$_POST["password"];
   }
	if($flag==1)
	{
		$db=new mysqli('127.0.0.1','root','','lost_base');
		//echo $mail;
		$result=$db->query("SELECT name,mail_pwd FROM mail1 WHERE mail_id='$mail'");
		$rows=$result->fetch_all(MYSQLI_ASSOC);
		foreach($rows as $row){
			}
		//echo print_r($rows);
		//echo $row['name'];
		echo $row['mail_pwd'];
			if($row['mail_pwd']==$pass){
				$_SESSION['username']=$mail;
				 $_SESSION['login_user']=1;
			echo "<script>window.location.href = 'entry.php';</script>";
		}
		else{
			$loginerr="LOGIN ERROR";
		}
		$db->close();
	}
	if($_SESSION['login_user']==1){
		header("location: profile.php");
	}
 }
?>
</head>
<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitrpr.ac.in">IIT Ropar</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		<li><a href="archive.php">Archive</a></li>
		<li ><a href="entry.php">Submit Queries</a></li>
		<li ><a href="aboutus.php">about us</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron">
    <h1>Lost And Found portal</h1>          
  </div>
  
<div class="container">
  <div class="row">
    <div class="col-md-4">

    	<h1 class="head"><b>Lost Items</b></h1>
		<div class="lost">
			<div class="images">
				<img src=get.php?id=<?php echo $idarrl[0];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  : <b><?php echo $itemarrl[0];?></b></span><br>
				<span class="span">Date Lost  : <?php echo $datearrl[0];?></span><br>
				<span class="span">Description: <?php echo $describearrl[0];?></span><br>
				<span class="span">lost By    : <?php echo $namel[0];?></span><br>
				<span class="span">Contact    : <?php echo $contactl[0];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="lost">
			<div class="images">
				<img src=get.php?id=<?php echo $idarrl[1];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  :<b> <?php echo $itemarrl[1];?></b></span><br>
				<span class="span">Date Lost  : <?php echo $datearrl[1];?></span><br>
				<span class="span">Description: <?php echo $describearrl[1];?></span><br>
				<span class="span">lost By    : <?php echo $namel[1];?></span><br>
				<span class="span">Contact    : <?php echo $contactl[1];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="lost">
			<div class="images">
				<img src=get.php?id=<?php echo $idarrl[2];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  :<b> <?php echo $itemarrl[2];?></b></span><br>
				<span class="span">Date Lost  : <?php echo $datearrl[2];?></span><br>
				<span class="span">Description: <?php echo $describearrl[2];?></span><br>
				<span class="span">lost By    : <?php echo $namel[2];?></span><br>
				<span class="span">Contact    : <?php echo $contactl[2];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="lost">
			<div class="images">
				<img src=get.php?id=<?php echo $idarrl[3];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  :<b><?php echo $itemarrl[3];?></b></span><br>
				<span class="span">Date Lost  : <?php echo $datearrl[3];?></span><br>
				<span class="span">Description: <?php echo $describearrl[3];?></span><br>
				<span class="span">lost By    : <?php echo $namel[3];?></span><br>
				<span class="span">Contact    : <?php echo $contactl[3];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="lost">
			<div class="images">
				<img src=get.php?id=<?php echo $idarrl[4];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  : <b><?php echo $itemarrl[4];?></b></span><br>
				<span class="span">Date Lost  : <?php echo $datearrl[4];?></span><br>
				<span class="span">Description: <?php echo $describearrl[4];?></span><br>
				<span class="span">lost By    : <?php echo $namel[4];?></span><br>
				<span class="span">Contact    : <?php echo $contactl[4];?></span>
			</div>
			<div class="clear"></div>
		</div>

	</div>
    
    <div class="col-md-4">
		<div>
    	<h1 class="head"><b>Found Items</b></h1>
			<div class="found">
			<div class="images">
				<img src=getfound.php?id=<?php echo $idarrf[0];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item found :<b> <?php echo $itemarrf[0];?></b></span><br>
				<span class="span">Date found : <?php echo $datearrf[0];?></span><br>
				<span class="span">Description: <?php echo $describearrf[0];?></span><br>
				<span class="span">Found By   : <?php echo $namef[0];?></span><br>
				<span class="span">Contact    : <?php echo $contactf[0];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="found">
			<div class="images">
				<img src=getfound.php?id=<?php echo $idarrf[1];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item found : <b><?php echo $itemarrf[1];?></b></span><br>
				<span class="span">Date found : <?php echo $datearrf[1];?></span><br>
				<span class="span">Description: <?php echo $describearrf[1];?></span><br>
				<span class="span">Found By   : <?php echo $namef[1];?></span><br>
				<span class="span">Contact    : <?php echo $contactf[1];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="found">
			<div class="images">
				<img src=getfound.php?id=<?php echo $idarrf[2];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item found : <b><?php echo $itemarrf[2];?></b></span><br>
				<span class="span">Date found : <?php echo $datearrf[2];?></span><br>
				<span class="span">Description: <?php echo $describearrf[2];?></span><br>
				<span class="span">Found By   : <?php echo $namef[2];?></span><br>
				<span class="span">Contact    : <?php echo $contactf[2];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="found">
			<div class="images">
				<img src=getfound.php?id=<?php echo $idarrf[3];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item found : <b><?php echo $itemarrf[3];?></b></span><br>
				<span class="span">Date found : <?php echo $datearrf[3];?></span><br>
				<span class="span">Description: <?php echo $describearrf[3];?></span><br>
				<span class="span">Found By   : <?php echo $namef[3];?></span><br>
				<span class="span">Contact    : <?php echo $contactf[3];?></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="found">
			<div class="images">
				<img src=getfound.php?id=<?php echo $idarrf[4];?> height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item found :<b> <?php echo $itemarrf[4];?></b></span><br>
				<span class="span">Date found : <?php echo $datearrf[4];?></span><br>
				<span class="span">Description: <?php echo $describearrf[4];?></span><br>
				<span class="span">Found By   : <?php echo $namef[4];?></span><br>
				<span class="span">Contact    : <?php echo $contactf[4];?></span>
			</div>
			<div class="clear"></div>
		</div>
		</div>
    </div>
    
    <div class="col-md-4"> 
      <div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login<span class="error"><?php echo $loginerr ?></span></h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="text" name="email" id="url" placeholder="E-mail Address"/>
					<img id="url_user" src="./images/mailicon.png">
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
	
					<input type="password" name="password" id="url" placeholder="Password">
					<img id="url_password" src="./images/passicon.png">

				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
	
				<input type="image" src="./images/submit_hover.png" id="submit1" value="Sign In">
			</div>
</form>

			<div id="links_left">

			<a href="forgot.php">Forgot your Password?</a>

			</div>

		</div>

		<div id="wrapperbottom"></div>
		
	</div>
    </div>

    
    <div class="clearfix visible-lg"></div>
  </div>
</div>
</body>
</html>
