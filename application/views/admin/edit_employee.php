<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>
<?php 


 echo validation_errors();  ?>
	<form action="<?php echo base_url('Employee_Controller/edit'); ?>" method="post" accept-charset="utf-8">
		<input type="hidden" name ="id" value ="<?php echo $id ?>">
		<?php if (isset($result)) {
			foreach ($result as $value) 
			{
			?>
		<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $value->name ?>"><br>
		<label for="designation">Designation</label>
			<input type="text" name="designation" id="designation" value="<?php echo $value->designation ?>"><br><?php }} ?>
		
       	<?php if (isset($address)) {
       		foreach ($address as $value)
       		 {
       		 ?>

		<label for="gender">Gender</label>
			<input type="radio" name="gender" id="gender" value""> male <input type="radio" name="gender" id="gender" value="">female<br>
		<label for="address">Address</label>
			<input type="text" name="address" id="address" value="<?php echo $value->address ?>"><br>
		<label for="place">Place</label>
			<input type="text" name="place" id="place" value="<?php echo $value->place ?>"><br>
		
        <label for="mobile">Mobile no</label>
			<input type="text" name="mobileno" id="mobileno" value="<?php echo $value->mobileno ?>"><br><?php }} ?>


		<button type="submit">update</button>
	</form>
</body>
</html>