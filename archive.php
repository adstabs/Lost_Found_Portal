<?php
error_reporting(0);
session_start();
if($_SESSION['login_user']==0){
    header('Location: home.php'); // Redirecting To Home Page
}
$sitename="archive.php";
$db=new mysqli("127.0.0.1","root","","lost_base");
$lost_archive=$db->query("SELECT * FROM lost1");
$found_archive=$db->query("SELECT * FROM found1");
$input=$lost_archive->fetch_all(MYSQLI_ASSOC);
$rows_l = array_reverse($input);
$input=$found_archive->fetch_all(MYSQLI_ASSOC);
$rows_f = array_reverse($input);

$itemarrl=array();
$idarrl=array();
$datearrl=array();
$contactl=array();
$describearrl=array();
$namel=array();
foreach($rows_l as $row)
{
	array_push($itemarrl,$row['item']);
	array_push($datearrl,$row['date']);
	array_push($contactl,$row['contact']);
	array_push($idarrl,$row['id']);
	array_push($namel,$row['name']);
	array_push($describearrl,$row['comment']);
}

$itemarrf=array();
$idarrf=array();
$datearrf=array();
$contactf=array();
$describearrf=array();
$namef=array();
foreach($rows_f as $row)
{
	array_push($itemarrf,$row['item']);
	array_push($datearrf,$row['date']);
	array_push($contactf,$row['contact']);
	array_push($idarrf,$row['id']);
	array_push($namef,$row['name']);
	array_push($describearrf,$row['comment']);
}


include 'new.php';
echo '<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitrpr.ac.in">IIT Ropar</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
		<li class="active"><a href="#">Archive</a></li>
		<li><a href="entry.php">Submit Queries</a></li>
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
		 <h4 class="navbar-from navbar-right">Welcome:'.$_SESSION["username"].'</h4>
    </div>
  </div>
</nav>

  <div class="jumbotron">
    <h1>Lost And Found portal</h1>          
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-6">
    	<h1 class="head"><b>Lost Items</b></h1>';

		$i=0;
foreach($rows_l as $row)
{
	echo '
			<div class="lost">
			<div class="images">
				<img src=get.php?id='.$idarrl[$i].' height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Lost  : <b>'.$itemarrl[$i].'</b></span><br>
				<span class="span">Date Lost  : '.$datearrl[$i].'</span><br>
				<span class="span">Description: '.$describearrl[$i].'</span><br>
				<span class="span">lost By    : '.$namel[$i].'</span><br>
				<span class="span">Contact    : '.$contactl[$i].'</span>
			</div>
			<div class="clear"></div>
			<form method="post" action=remove_lost.php?id='.$idarrl[$i].'>
				<input type="submit" value="Confirm Found">
			</form>
		</div>';
		$i+=1;
}		
echo '</div>
	   <div class="col-md-6">
    	<h1 class="head"><b>Found Items</b></h1>';
	
$i=0;
foreach($rows_f as $row)
{
	echo '<div class="found">
			<div class="images">
				<img src=getfound.php?id='.$idarrf[$i].' height="85" width="85">
			</div>
			<div class="description">
				<span class="span">Item Found  : <b>'.$itemarrf[$i].'</b></span><br>
				<span class="span">Date Found  : '.$datearrf[$i].'</span><br>
				<span class="span">Description: '.$describearrf[$i].'</span><br>
				<span class="span">Found By    : '.$namef[$i].'</span><br>
				<span class="span">Contact    : '.$contactf[$i].'</span>
			</div>
			<div class="clear"></div>
			<form method="post" action=remove_found.php?id='.$idarrf[$i].'>
				<input type="submit" value="Confirm Given">
			</form>
		</div>';
		$i+=1;
}
echo '</div>
	</div>
	</div>';
	
echo '
<a href="#"><div class="loadmore"><h1>Load More</h1></div></a>
</body>
</html>';
if($_SESSION['error']==1)
{
				echo '<script>alert("You are not authorized!");</script>';
				$_SESSION['error']=0;
}

$db->close();

?>