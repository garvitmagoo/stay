<?php 


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="stayuncle search for rooms" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Stayuncle </title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="search.js" rel="stylesheet" type="text/javascript"  />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maps.googleapis.com/maps/api/js?libraries=places'></script>

        <script src="search.js"></script>
<script >
}
</script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1 style="color:white"><a href="#" style="color:white;">Stay Uncle</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#">Homepage</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		 <div id="banner">
			<div class="content" style="position:relative; top:200px; left:300px;">
               <form method="GET" action="city.php">
<input type="text" id="location" size="110" name="cityname" onkeyup="showResult(this.value)" style="background:white;height:50px;padding-left:10px;font-wieght:bold"
placeholder="Enter your Destination" required>
<input type="submit" class="button" value="Go" id="go" style="background-color:black;color:white;height:50px;width:90px; border:1px black"></button>

<span class="zip"></span>

</form>

			</div>
		</div>
	</div>
	<!-- end #header -->
	
<!--<div id="footer">
	<p>&copy; Untitled. All rights reserved. Images by <a href="http://fotogrph.com/">Fotogrph</a>. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>-->
<!-- end #footer -->
</body>
</html>
