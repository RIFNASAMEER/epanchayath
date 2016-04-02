<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
</head>
<body>
	<form name="notification" method="post" action="<?php echo base_url('Notification_Controller/add'); ?>">
	 <label for="notification"></label>
	 	Notification:<textarea name="notification" id="notification"></textarea><br>
	 <button type="submit">Add</button>	
</body>
</html>
