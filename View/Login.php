<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Login</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal col-sm-12" action="" method="get">
  <div class="form-group text-center">
    <label class="conrol-label col-sm-3" for="email">Email address:</label>
    <div class="col-sm-6">
		<input name="email" type="email" class="form-control" id="email">
	</div>
  </div>
  <div class="form-group text-center">
    <label class="conrol-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-6">
		<input name="password" type="password" class="form-control" id="pwd">
	</div>
  </div>
  <div class="form-group">
		<button type="submit" class=" btn btn-block">Submit</button>
	</div>
</form>
</body>
</html>