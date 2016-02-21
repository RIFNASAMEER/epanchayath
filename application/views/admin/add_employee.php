<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>

<?php echo validation_errors();  ?>
	<form action="<?php echo base_url('Employee_Controller/add'); ?>" method="post" accept-charset="utf-8">
		
		<label for="name">Name</label>
			<input type="text" name="name" id="name"><br>
		<label for="gender">Gender</label>
			<input type="radio" name="gender" id="gender" value="m" >male<input type="radio" name="gender" id="gender" value="f">female<br>
		<label for="designation">Designation</label>
			<input type="text" name="designation" id="designation"><br>
		<label for="address">Address</label>
			<input type="text" name="address" id="address"><br>
		<label for="place">Place</label>
			<input type="text" name="place" id="place"><br>
		
        <label for="mobile">Mobile no</label>
			<input type="text" name="mobileno" id="mobileno"><br>


		<button type="submit">Add</button>
	</form>
</body>
</html>