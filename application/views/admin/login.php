<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form name="loginform" id="loginform" method="post" action="<?php echo base_url('Admin_Controller/verify');?>">
		<label for="username">
			User name : <input type="text" name="username" id="username"></input>
		</label><br>
		<label for="password">
			Password : <input type="password" name="password" id="password"></input>
		</label><br>
		<button type="submit">login</button>
	</form>
</body>
</html>