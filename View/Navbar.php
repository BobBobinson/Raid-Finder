<!-- Latest compiled and minified JavaScript -->
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Availability</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RaidFinder</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($_GET['url']=="Availability"){echo ' class="active"';} ?>><a href="Availability">Availability</a></li>
      <li <?php if($_GET['url']=="Character"){echo ' class="active"';} ?>><a href="Character">Character</a></li>
      <li <?php if($_GET['url']=="Raids"){echo ' class="active"';} ?>><a href="Raids">Raids</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="Logout">Logout</a></li>
	</ul>
  </div>
</nav>