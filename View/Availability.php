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
      <li class="active"><a href="#">Availability</a></li>
      <li><a href="Character">Character</a></li>
      <li><a href="#">Raids</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="Logout">Logout</a></li>
	</ul>
  </div>
</nav>
<?php
	echo "<br><form method=\"get\"><div><table class=\"table table-hover\">
			<thead>
				<tr>
					<th scope=\"col\">hour</th>
					<th scope=\"col\">Monday</th>
					<th scope=\"col\">Tuesday</th>
					<th scope=\"col\">Wensday</th>
					<th scope=\"col\">Thursday</th>
					<th scope=\"col\">Friday</th>
					<th scope=\"col\">Saturday</th>
					<th scope=\"col\">Sunday</th>
				</tr>
			<tbody>";
	for($i=0;$i<24;$i++){
		echo "	<tr>
					<th scope=\"row\">".$i.":00</th>";
		for($j=0;$j<7;$j++){
			echo 	"<td>
						<div class=\"input-group\">
							<input name=\"".$j.$i."\" type=\"checkbox\" aria-label=\"Monday\"".checkedtotext($Availability[0][$i*7+$j]).">
						</div>
					</td>";
		}
	}
	echo '<button  style="margin-top:35px;" value="true"name="update"class="btn btn-default" type="submit">Update</button></div></form>';
	
function checkedtotext($text){
	if($text=="1"){
			return "checked";
	}else return "";
}
?>
</body>
</html>