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
    	
			<form action="<?php echo base_url('Marriage_Controller/add') ?>" method="post" accept-charset="utf-8">
	     	<?php echo validation_errors();  ?>
	     	<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group ">
				<label for="date">Date of Marriage :</label>
				<input type="date"  class="form-control input-lg" name="date" placeholder="yyyy/mm/dd" required>
			</div>
			</div><div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group ">
			<label for="place">Place of Marriage :</label>
				<input type="text"  class="form-control input-lg" name="ma_place" required>
		
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
					<input type="text"  class="form-control" name="hus_name" required id="hus_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="address">Address :</label>
					<textarea  class="form-control" name="address" required id="address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">s
				<label  for="dob">DOB :</label>
					<input type="date" name="dob">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="email">email :</label>
					<input type="text"  class="form-control" name="emailid" required id="emailid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="citizen">citizen :</label>
					<input type="text"  class="form-control" name="citizen" required id="citizen"></div>
				</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="job">Job :</label>
					<input type="text"  class="form-control" name="job" required id="job">
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
					<input type="text"  class="form-control" name="hno_spouse" required id="hno_spouse">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="father_name">Father Name/Name of Guardian  :</label>
					<input type="text"  class="form-control" name="f_name" required id="f_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="age">Age :</label>
					<input type="text"  class="form-control" name="f_age" required id="f_age">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="address">Address :</label>
					<textarea  class="form-control" name="f_address" required id="f_address"></textarea>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="mother">Mother Name :</label>
					<input type="text"  class="form-control" name="m_name" required id="mother_name">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="m_age">Age :</label>
					<input type="text"  class="form-control" name="m_age" required id="m_age">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">	
				<div class="form-group">
					<label  for="m_address">Address :</label>
					<textarea  class="form-control" name="m_address" required id="m_address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="victim_name">Victim Name :</label>
					<input type="text"  class="form-control" name="v1_name" required id="v1_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="v_address">Address :</label>
					<textarea  class="form-control" name="v1_address" required id="v1_address"></textarea>
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
					<input type="text"  class="form-control" name="w_name" required id="w_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="address">Address:</label>
					<textarea  class="form-control" name="w_address" required id="w_address"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="w_dob">DOB :</label>
				   <input type="date" name="w_dob">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="citizen">citizen :</label>
					<input type="text"  class="form-control" name="w_citizen" required id="w_citizen">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="job">Job  :</label>
					<input type="text"  class="form-control" name="w_job" required id="w_job">
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
					<input type="text"  class="form-control" name="w_no_spouse" required id="w_no_spouse"></div>
				</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="father_name">Father Name/Name of Guardian :</label>
					<br><input type="text"  class="form-control" name="wf_name" required id="wf_name">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="age">Age </label>
					<input type="text"  class="form-control" name="wf_age" required id="wf_age">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="address">Address :</label>
					<textarea  class="form-control" name="wf_address" required id="wf_address"></textarea></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label  for="mother">Mother Name :</label>
					<input type="text"  class="form-control" name="wm_name" required id="wm_name">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="m_age">Mother Age :</label>
					<input type="text"  class="form-control" name="wm_age" required id="wm_age">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="m_address">Mother Address :</label>
					<textarea  class="form-control" name="wm_address" required id="wm_address"></textarea>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label  for="victim_name">Name Of Second Victim:</label>
				<input type="text"  class="form-control" name="v2_name" required id="v2_name"></div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="form-group">
			<label for="v_address">Address Of Second Victim:</label>
			<textarea  class="form-control" name="v2_address" required id="v2_address"></textarea>
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