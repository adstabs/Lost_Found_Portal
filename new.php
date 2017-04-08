<html>
<head>
<title>ARCHIVE</title>
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
	  display:none;

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
	  display:none;
  }
  .head{
	  font-size:30px;
  }
  
  .col-md-4{
	  padding:0;
  }
  .loadmore{
	  width:100%;
	  height:60px;
	  bottom:0;
	  text-align:center;
	  color:white;
	  background-color:black;
	  font-size:30px;
  }

</style>
<script text="text/javascript">
$(function(){
    $(".lost").slice(0, 4).show(); 
    $(".loadmore").click(function(e){ 
        e.preventDefault();
        $(".lost:hidden").slice(0,4).show(); 
        if($(".lost:hidden").length == 0){ 
            //alert("No more Lost Items");
        }
    });
});

$(function(){
    $(".found").slice(0, 4).show(); 
    $(".loadmore").click(function(e){ 
        e.preventDefault();
        $(".found:hidden").slice(0,4).show(); 
        if($(".found:hidden").length == 0){ 
            //alert("No more Found Items");
        }
    });
});
</script>
</head>