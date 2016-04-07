<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>application for marriage registration</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="Marriage_Controller/add" method="POST" accept-charset="utf-8">

		<label for="date">Date of Marriage<div><input type="text" name="date" placeholder="yyyy/mm/dd"></div></label>
		<label for="place">Place of Marriage<div><input type="text" name="ma_place" ></div></label>

		<h6>husband details</h6>

		<label for="name">Name<div><input type="text" name="hus_name" id="hus_name"></div></label>
		<label for="address">Address<div><input type="text" name="address" id="address"></div></label>
		<label for="dob">DOB<div><select name="dob">
			<option value="1">1</option>
			</select></div></label><br>

		<label for="email">email<div><input type="text" name="email" id="email"></div></label>	
		<label for="citizen">citizen<div><input type="text" name="citizen" id="citizen"></div></label>
		<label for="job">Job<input type="text" name="job" id="job"></label>
		<label for="martial_status">First Married or not<input type="radio" name="h_first_married_or_not" id="h_first_married_or_not" value="yes">yes<input type="radio" name="h_first_married_or_not" id="h_first_married_or_not" value="no">no</label>
		<label for="no of spouse">Number of Spouse(any spouse are living)<div><input type="text" name="hno_spouse" id="hno_spouse"></div></label>
		<label for="father_name">Father Name/Name of Guardian<div><input type="text" name="f_name" id="f_name"></div></label>
		<label for="age">Age<div><input type="text" name="f_age" id="f_age"></div></label>
		<label for="address">Address<div><input type="text" name="f_address" id="f_address"></div></label>
		<label for="mother">Mother Name<div><input type="text" name="m_name" id="mother_name"></div></label>
		<label for="m_age">Age<div><input type="text" name="m_age" id="m_age"></div></label>
		<label for="m_address">Address<div><input type="text" name="m_address" id="m_address"></div></label>
		<label for="victim_name">Victim Name<div><input type="text" name="v1_name" id="v1_name"></div></label>
		<label for="v_address">Address<div><input type="text" name="v1_address" id="v1_address"></div></label>
		
        <h6>wife details<h6>

		<label for="name">Name<div><input type="text" name="w_name" id="w_name"></div></label>
		<label for="address">Address<div><input type="text" name="w_address" id="w_address"></div></label>
		<label for="dob">DOB<div><select name="w_dob">
			<option value="1">1</option>
			</select></div></label><br>
			
		<label for="citizen">citizen<div><input type="text" name="w_citizen" id="w_citizen"></div></label>
		<label for="job">Job<input type="text" name="w_job" id="w_job"></label>
		<label for="martial_status">First Married or not<input type="radio" name="w_first_married_or_not" id="w_first_married_or_not" value="yes">yes<input type="radio" name="w_first_married_or_not" id="w_first_married_or_not" value="no">no</label>
		<label for="no of spouse">Number of Spouse(any spouse are living)<div><input type="text" name="w_no_spouse" id="w_no_spouse"></div></label>
		<label for="father_name">Father Name/Name of Guardian<div><input type="text" name="wf_name" id="wf_name"></div></label>
		<label for="age">Age<div><input type="text" name="wf_age" id="wf_age"></div></label>
		<label for="address">Address<div><input type="text" name="wf_address" id="wf_address"></div></label>
		<label for="mother">Mother Name<div><input type="text" name="wm_name" id="wm_name"></div></label>
		<label for="m_age">Age<div><input type="text" name="wm_age" id="wm_age"></div></label>
		<label for="m_adres">Address<div><input type="text" name="wm_addres" id="wm_adres"></div></label>
		<label for="victim_name">Name<div><input type="text" name="v2_name" id="v2_name"></div></label>
		<label for="v_address">Address<div><input type="text" name="v2_address" id="v2_address"></div></label>
		<input type="button" value="apply"></button>
	</form>
</body>
</html>