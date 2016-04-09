<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>application for marriage registration</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css') ?>">
</head>
<body>
		<h3><center> Marriage Registration<center></h3><br><br>
		

	<div class="container">
    	
			<form action="<?php echo base_url('Marriage_Controller/add') ?>" accept-charset="utf-8">
	     	<?php echo validation_errors();  ?>
	     	<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group ">
				<label for="date">Date of Marriage :</label>
				<input type="text"  class="form-control input-lg" name="date" placeholder="yyyy/mm/dd">
			</div>
			</div><div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group ">
			<label for="place">Place of Marriage :</label>
				<input type="text"  class="form-control input-lg" name="ma_place" >
		
			</div></div>
			</div>
		
		<div class="panel panel-primary">
    	<div class="panel-heading">
        <h3 class="panel-title">husband details</h3>
    	</div><div class="panel-body">
		
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="name">Name :</label>
					<input type="text"  class="form-control" name="hus_name" id="hus_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="address">Address :</label>
					<textarea  class="form-control" name="address" id="address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label  for="dob">DOB :</label>
					<select   name="dob">
					<option value="1">1</option>
					</select>
					<select   name="dob">
						<option value="1">1</option>
					</select>
					<select   name="dob">
						<option value="1990">1990</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="email">email :</label>
					<input type="text"  class="form-control" name="emailid" id="emailid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="citizen">citizen :</label>
					<input type="text"  class="form-control" name="citizen" id="citizen"></div>
				</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="job">Job :</label>
					<input type="text"  class="form-control" name="job" id="job">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="martial_status">First Married or not :</label>
					<input type="radio"  name="h_first_married_or_not" value="yes">yes
					<input type="radio"  name="h_first_married_or_not"  value="no">no
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="no of spouse">Number of Spouse(any spouse are living) :</label>
					<input type="text"  class="form-control" name="hno_spouse" id="hno_spouse">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="father_name">Father Name/Name of Guardian  :</label>
					<input type="text"  class="form-control" name="f_name" id="f_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="age">Age :</label>
					<input type="text"  class="form-control" name="f_age" id="f_age">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="address">Address :</label>
					<textarea  class="form-control" name="f_address" id="f_address"></textarea>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="mother">Mother Name :</label>
					<input type="text"  class="form-control" name="m_name" id="mother_name">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="m_age">Age :</label>
					<input type="text"  class="form-control" name="m_age" id="m_age">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">	
				<div class="form-group">
					<label  for="m_address">Address :</label>
					<textarea  class="form-control" name="m_address" id="m_address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="victim_name">Victim Name :</label>
					<input type="text"  class="form-control" name="v1_name" id="v1_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="v_address">Address :</label>
					<textarea  class="form-control" name="v1_address" id="v1_address"></textarea>
				</div>
			</div>
		</div></div></div>
		<div class="panel panel-primary">
    	<div class="panel-heading">
        <h3 class="panel-title">wife details</h3>
    	</div><div class="panel-body">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="name">Name :</label>
					<input type="text"  class="form-control" name="w_name" id="w_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="address">Address:</label>
					<textarea  class="form-control" name="w_address" id="w_address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="w_dob">DOB :</label>
				    <select   name="w_dob">
					 <option value="1">1</option>
					</select>
					<select   name="w_dob">
					 <option value="1">1</option>
					</select>
					<select   name="w_dob">
						<option value="1953" >1953</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="citizen">citizen :</label>
					<input type="text"  class="form-control" name="w_citizen" id="w_citizen">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="job">Job  :</label>
					<input type="text"  class="form-control" name="w_job" id="w_job">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="martial_status">
					First Married or not :</label>
						<input type="radio"   name="w_first_married_or_not" value="yes">yes<input type="radio"   name="w_first_married_or_not" value="no">no
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="no of spouse">Number of Spouse(any spouse are living) :</label>
					<input type="text"  class="form-control" name="w_no_spouse" id="w_no_spouse"></div>
				</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="father_name">Father Name/Name of Guardian :</label>
					<br><input type="text"  class="form-control" name="wf_name" id="wf_name">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="age">Age </label>
					<input type="text"  class="form-control" name="wf_age" id="wf_age">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="address">Address :</label>
					<textarea  class="form-control" name="wf_address" id="wf_address"></textarea></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="mother">Mother Name :</label>
					<input type="text"  class="form-control" name="wm_name" id="wm_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="m_age">Mother Age :</label>
					<input type="text"  class="form-control" name="wm_age" id="wm_age">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="m_address">Mother Address :</label>
					<textarea  class="form-control" name="wm_address" id="wm_address"></textarea>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label  for="victim_name">Name Of Second Victim:</label>
				<input type="text"  class="form-control" name="v2_name" id="v2_name"></div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="form-group">
			<label for="v_address">Address Of Second Victim:</label>
			<textarea  class="form-control" name="v2_address" id="v2_address"></textarea>
		</div>
		</div>
		</div></div>
		<div class="form-group">
		 <div class="col-xs-offset-2 col-xs-8">
		<button class="btn btn-primary">REGISTER</button>
		</div></div>
	</form></div></div>
</body>
</html> 