<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>application for marriage registration</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo base_url('Marriage_Controller/add') ?>" method="POST" accept-charset="utf-8">
	     <?php echo validation_errors();  ?>

		<label for="date">Date of Marriage :</label><div><input type="text" name="date" placeholder="yyyy/mm/dd"></div><br>
		<label for="place">Place of Marriage :</label><div><input type="text" name="ma_place" ></div><br>

		<h6>husband details</h6>

		<label for="name">Name :</label><div><input type="text" name="hus_name" id="hus_name"></div><br>
		<label for="address">Address :</label><div><textarea name="address" id="address"></textarea></div><br>
		<label for="dob">DOB :</label><div><select name="dob">
			<option value="1">1</option>
			</select>
			<select name="dob">
				<option value="1">1</option>
			</select>
			<select name="dob">
				<option value="1990">1990</option>
			</select>
			</div><br>

		<label for="email">email :</label><div><input type="text" name="emailid" id="emailid"></div><br>	
		<label for="citizen">citizen :</label><div><input type="text" name="citizen" id="citizen"></div><br>
		<label for="job">Job :</label><input type="text" name="job" id="job"><br>
		<label for="martial_status">First Married or not :</label><br><div><input type="radio" name="h_first_married_or_not" value="yes">yes<input type="radio" name="h_first_married_or_not"  value="no">no</div><br>
		<label for="no of spouse">Number of Spouse(any spouse are living) :</label><div><input type="text" name="hno_spouse" id="hno_spouse"></div><br>
		<label for="father_name">Father Name/Name of Guardian  :</label><div><input type="text" name="f_name" id="f_name"></div><br>
		<label for="age">Age :</label><div><input type="text" name="f_age" id="f_age"></div><br>
		<label for="address">Address :</label><div><textarea name="f_address" id="f_address"></textarea></div><br>
		<label for="mother">Mother Name :</label><div><input type="text" name="m_name" id="mother_name"></div><br>
		<label for="m_age">Age :</label><div><input type="text" name="m_age" id="m_age"></div><br>
		<label for="m_address">Address :</label><div><textarea name="m_address" id="m_address"></textarea></div><br>
		<label for="victim_name">Victim Name :</label><div><input type="text" name="v1_name" id="v1_name"></div><br>
		<label for="v_address">Address :</label><div><textarea name="v1_address" id="v1_address"></textarea></div><br>
		
        <h6>wife details<h6>

		<label for="name">Name :</label><div><input type="text" name="w_name" id="w_name"></div><br>
		<label for="address">Address :</label><div><textarea name="w_address" id="w_address"></textarea></div><br>
		<label for="w_dob">DOB :</label><div>
		    <select name="w_dob">
			 <option value="1">1</option>
			</select>
			<select name="w_dob">
			 <option value="1">1</option>
			</select>
			<select name="w_dob">
				<option value="1953" >1953</option>
			</select>
			</div><br>
			
		<label for="citizen">citizen :</label><div><input type="text" name="w_citizen" id="w_citizen"></div><br>
		<label for="job">Job  :</label><div><input type="text" name="w_job" id="w_job"></div><br>
		<label for="martial_status">First Married or not :</label><div><input type="radio" name="w_first_married_or_not" value="yes">yes<input type="radio" name="w_first_married_or_not" value="no">no</div><br>
		<label for="no of spouse">Number of Spouse(any spouse are living) :</label><br><div><input type="text" name="w_no_spouse" id="w_no_spouse"></div><br>
		<label for="father_name">Father Name/Name of Guardian :</label><br><div><input type="text" name="wf_name" id="wf_name"></div><br>
		<label for="age">Age :</label><div><input type="text" name="wf_age" id="wf_age"></div><br>
		<label for="address">Address :</label><div><textarea name="wf_address" id="wf_address"></textarea></textarea></div><br>
		<label for="mother">Mother Name :</label><div><input type="text" name="wm_name" id="wm_name"></div><br>
		<label for="m_age">Mother Age :</label><div><input type="text" name="wm_age" id="wm_age"></div><br>
		<label for="m_address">Mother Address :</label><div><textarea name="wm_address" id="wm_address"></textarea></div>
		<label for="victim_name">Name Of Second Victim:</label><div><input type="text" name="v2_name" id="v2_name"></div><br>
		<label for="v_address">Address Of Second Victim:</label><div><textarea name="v2_address" id="v2_address"></textarea></div><br>
		<button>REGISTER</button>
	</form>
</body>
</html> 