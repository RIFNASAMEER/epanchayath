<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<form name="loginform" id="loginform" method="post" action="<?php echo base_url('Admin_Controller/verify');?>">
		<label for="username"></label>
			User name : <input type="text" name="username" id="username"></input><br>
		<label for="password"></label>
			Password : <input type="password" name="password" id="password"></input><br>
		<button type="submit">login</button>
	</form>
</body>
</html>