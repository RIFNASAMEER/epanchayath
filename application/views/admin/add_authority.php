<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view authority</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" accept-charset="utf-8">
	<?php echo validation_errors();  ?>

	
	<label for="name">Name</label>
			<input type="text" name="name" id="name"><br>
		<label for="address">Address</label>
			<input type="text" name="address" id="address"><br>
		<label for="gender">Gender</label>
			<input type="radio" name="gender" id="gender" value="m" >male<input type="radio" name="gender" id="gender" value="f">female<br>
		<label for="dob">DOB</label>
			<select name="dob">
				<option value="1">1</option>
			</select><br>
		<label for="designation">Position</label>
			<select name="designation">
				<option value="president">president</option>
				<option value="secretory">secretory</option>
				<option value="vise president">vise president</option>
				<option value="standing commitee">standing commitee</option>
				<option value="member">member</option>
			</select><br> 
		<label for="place">Place</label>
			<input type="text" name="place" id="place"><br>
		<label for="ward_no">ward number</label>
			<select name="ward_no">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
			</select><br>
		<label for="mobile">Mobile no</label>
			<input type="text" name="mobileno" id="mobileno"><br><br>


		<button type="submit">Add</button>
</form>	
</body>
</html>