<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<meta charset="UTF-8"></meta>
	<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
	<link type="text/css" rel="stylesheet" href="css/style.css"></link>
	<link href="img/Icon.png" type="/image/x-icon" rel="Shortcut Icon"></link>
</head>
<body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="container" style="margin-top:200px;border-radius:10px;">
		<h2>Why Sign Up?</h2>
		<p>In order to keep things safe, We set up a password to prevent others from editing. 
		It is crucial that you log in to change any posts.</p>
		<form action="usercheck.php" method="post">
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<span class="glyphicon glyphicon-user"></span>
  				</span>
  				<input type="text" name="name" class="form-control" placeholder="User ID">
			</div><!--User ID-->
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<img src="img/key.png" style="width:18px;hight:18px;">
  				</span>
  				<input type="password" name="password" class="form-control" placeholder="Password">
			</div><!--passward-->
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<span class="glyphicon glyphicon-envelope"></span>
  				</span>
  				<input type="email" name="email" class="form-control" placeholder="email">
			</div><!--email-->
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">#</span>
  				<input type="text" name="sequence" class="form-control" placeholder="Sequence">
  				<span class="input-group-btn">
        			<button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="GO!">
        				<span class="glyphicon glyphicon-chevron-right"></span>
        			</button>
        		</span>
			</div><!--sequence-->
		</form>
	</div> <!--container-->
</body>