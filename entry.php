<!DOCTYPE html>
<html lang="en">
<head>
  <title>After Login</title>
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

#lost{
color: red;
margin-bottom: 20px;
margin-top: 0;
padding-top: 0;
}

#found{
color: yellowgreen;
margin-bottom: 20px;
margin-top: 0;
padding-top: 0;
}

.navbar {
    margin-bottom:0;
  }
  

</style>
<?php 
error_reporting(0);
session_start();
if($_SESSION['login_user']==0){
    header('Location: home.php'); // Redirecting To Home Page
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
        <li><a href="home.php">Home</a></li>
		<li><a href="archive.php">Archive</a></li>
		<li class="active"><a href="#">Submit Queries</a></li>
		<li ><a href="aboutus.php">about us</a></li>
       </ul>
        <form class="navbar-form navbar-right" method="post" action="search.php">
            <div class="form-group">
                <input type="text" name="sitem" placeholder="Search Lost Items" class="form-control">
				<button type="button" class="btn btn-info form-control">Search</button>
            </div>
        </form>
		 <form class="navbar-form navbar-right" action="logout.php" >
		 <div class="form-group">
				<button type="submit" class="btn btn-info form-control">Log Out</button>
            </div>
        </form>
		 <p class="navbar-from navbar-right">Welcome:<?php echo $_SESSION['username']?></p>
    </div>
  </div>
</nav>
<div class="jumbotron">
    <h1>Finding Things Made Easy</h1>          
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <h2 id="lost">Report Lost Items</h2>
    <form class="form-horizontal" role="form" method="post" action="lost.php" enctype="multipart/form-data">
    	 <div class="form-group">
          <label class="control-label col-sm-2" >Name:</label>
          <div class="col-sm-4">
            <input type="name" class="form-control" id="name" name="namel" placeholder="Name">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2">ItemLost:</label>
          <div class="col-sm-4">
            <input type="name" class="form-control" id="name" name="iteml" placeholder="ItemLost">
          </div>
        </div>
       <div class="form-group">
          <label class="control-label col-sm-2">DateLost:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="datel" placeholder="XX/Month/Year">
          </div>
        </div>        
          <div class="form-group">
          <label class="control-label col-sm-2">Contact:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="contactl" placeholder="Contact">
          </div>
        </div>
	   <div class="form-group">
          <label class="control-label col-sm-2">Description:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="commentl" placeholder="add description">
          </div>
        </div>
        <div class="form-group">       
         <label class="control-label col-sm-2">Upload Image:</label>  
          <div class="col-sm-4">
              <input type="file" name="picl">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
		
      </form>
    </div>
   
      <div class="col-md-6">
      <h2 id="found">Report Found Items</h2>
    <form class="form-horizontal" role="form" method="post" action="found.php" enctype="multipart/form-data">
    	 <div class="form-group">
          <label class="control-label col-sm-2">Name:</label>
          <div class="col-sm-4">
            <input type="name" class="form-control" id="name" name="namef" placeholder="Name">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2">ItemFound:</label>
          <div class="col-sm-4">
            <input type="name" class="form-control" id="name" name="itemf" placeholder="ItemFound">
          </div>
        </div>
       <div class="form-group">
          <label class="control-label col-sm-2">DateFound:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="datef" placeholder="XX/Month/Year">
          </div>
        </div>        
          <div class="form-group">
          <label class="control-label col-sm-2">Contact:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="contactf" placeholder="Contact">
          </div>
        </div>
	   <div class="form-group">
          <label class="control-label col-sm-2">Description:</label>
          <div class="col-sm-4">          
            <input type="name" class="form-control" id="name" name="commentf" placeholder="add description">
          </div>
        </div>
        <div class="form-group">       
         <label class="control-label col-sm-2">Upload Image:</label>  
          <div class="col-sm-4">
              <input type="file" name="picf" >
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>


</body>
</html>
