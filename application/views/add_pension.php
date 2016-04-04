<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view pension</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css') ?>">

</head>
<body>
 <style type="text/css">
    .bs-example{
      margin: 50px ;
      width:50%;
      padding: 18px 18px;
    }
  </style>
  <!--  <form name="complaints"  method="post" action="<?php //echo base_url(''Complaint_Controller/add''); ?>"> -->
  <div class="bs-example">
 <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pention</h3>
    </div><div class="panel-body">
  <?php echo form_open(base_url(''),["class"=>"form-horizontal"]); ?>
    <div class="form-group">
		<label for="" class="control-label col-xs-4">Name</label>
		<div class="col-xs-8">
			<input type="text" name="name" id="name"><br>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Address</label>
		<div class="col-xs-8">
			<input type="text" name="name" id="name"><br>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Age</label>
		<div class="col-xs-8">
			<input type="text" name="name" id="name"><br>
		</div>
	</div>
	<div class="form-group">
    	<label for="Date Of Death/Birth" class="control-label col-xs-4">Date Of Death/Birth :</label>
    	<div class="col-xs-8"><input type="text" name="date" class="form-control"></input><br></div>
    	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Gender:</label>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="m">MALE</div>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="f">FEMALE</input><br/></div>
	
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">House no:</label>
		<div class="col-xs-8">
			<input type="text" name="house" id="house"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Landmark:</label>
		<div class="col-xs-8">
			<input type="text" name="landmark" id="landmark"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Name of street:
		</label>
		<div class="col-xs-8">
			<input type="text" name="street" id="street"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Major place:</label>
		<div class="col-xs-8">
			<input type="text" name="major" id="major"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Post office:</label>
		<div class="col-xs-8">
			<input type="text" name="post" id="post"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Pin code:</label>
		<div class="col-xs-8">
			<input type="text" name="pincode" id="pincode"><br/>
		</div>
	</div>
	 <div class="form-group">
	        <label for="Localbody type" class="control-label col-xs-4"> Category</label>
	        <div class="col-xs-8">
	           <select name="Localbodytype" class = "form-control">
	               <option value="Genaral">Genaral</option>
	               <option value="Sc/St">Sc/St</option>
	               <option value="OBC">OBC</option>
	            </select><br>
	        </div>
        </div> 
	<div class="form-group">
		<label for="" class="control-label col-xs-4">No of years,living in kerala:</label>
		<div class="col-xs-8">
			<input type="text" name="years" id="years"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Ration card no:</label>
		<div class="col-xs-8">
			<input type="text" name="rationcard" id="rationcard"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Bpl card no:</label>
		<div class="col-xs-8">
			<input type="text" name="bpl" id="bpl"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Id card no:</label>
		<div class="col-xs-8">
			<input type="text" name="idcard" id="idcard"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Ward member:</label>
		<div class="col-xs-8">
			<input type="text" name="councilor" id="councilor"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Name of Guardian:</label>
		<div class="col-xs-8">
			<input type="text" name="idcard" id="idcard"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Job of Guardian:</label>
		<div class="col-xs-8">
			<input type="text" name="idcard" id="idcard"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Whether orphan</label>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="m">yes</div>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="f">no</input><br/></div>
	
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Whether reciving any other pension</label>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="m">yes</div>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="f">no</input><br/></div>
	
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Annual income:</label>
		<div class="col-xs-8">
			<input type="text" name="income" id="income"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Phone no/contact no:</label>
		<div class="col-xs-8">
			<input type="text" name="contact" id="contact"><br/></div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-8">
			<button type="submit"class="btn btn-primary">Submit</button>
			<button type="submit" class="btn btn-primary">Reset </button>
		</div>
  </div>



</form></div></div></div>
</body>
</html>