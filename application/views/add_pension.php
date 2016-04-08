<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add pension</title>
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
  
  <div class="bs-example">
 <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pension</h3>
    </div><div class="panel-body">
  <?php echo form_open(base_url('Pension_Controller/add'),["class"=>"form-horizontal"]); ?>
    <div class="form-group">
		<label for="" class="control-label col-xs-4">Name</label>
		<div class="col-xs-8">
			<input type="text" name="name" id="name"><br>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">House Number :</label>
		<div class="col-xs-8">
			<input type="text" name="houseno" id="houseno"><br>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Landmark :</label>
		<div class="col-xs-8">
			<input type="text" name="landmark" id="landmark"><br>
		</div>
	</div>
	<div class="form-group">
    	<label for="nameofstreet" class="control-label col-xs-4">Name Of Street :</label>
    	<div class="col-xs-8"><input type="nameofstreet" name="nameofstreet" class="form-control"></input><br></div>
    	</div>
    <div class="form-group">
    	<label for="" class="control-label col-xs-4">Major Place :</label>
    	<div class="col-xs-8"><input type="majorplace" name="majorplace" class="form-control"></input><br></div>
    	</div>
    <div class="form-group">
    	<label for="" class="control-label col-xs-4">Post Office :</label>
    	<div class="col-xs-8"><input type="postoffice" name="postoffice" class="form-control"></input><br></div>
    	</div>
    <div class="form-group">
    	<label for="" class="control-label col-xs-4">Pincode :</label>
    	<div class="col-xs-8"><input type="pincode" name="pincode" class="form-control"></input><br></div>
    	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Gender:</label>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="m">MALE</div>
		<div class="col-xs-8">
			<input type="radio" name="gender" value="f">FEMALE</input><br/></div>
	
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Disease:</label>
		<div class="col-xs-8">
			<input type="text" name="disease" id="disease"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Number Of Years In Kerela:</label>
		<div class="col-xs-8">
			<input type="text" name="no_ofyears_inkerala" id="no_ofyears_inkerala"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Ration Card Number:
		</label>
		<div class="col-xs-8">
			<input type="text" name="rationcardno" id="rationcardno"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">BPL Card Number:</label>
		<div class="col-xs-8">
			<input type="text" name="bplcardno" id="bplcardno"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">ID Card Number:</label>
		<div class="col-xs-8">
			<input type="text" name="idcardno" id="idcardno"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Name Of Ward Councilor(ward member):</label>
		<div class="col-xs-8">
			<input type="text" name="wardcouncilor" id="wardcouncilor"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Indegently :</label>
		<div class="col-xs-8">
			<input type="text" name="intigently" id="intigently"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Begger :</label>
		<div class="col-xs-8">
			<input type="text" name="begger" id="begger"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Martial Status :</label>
		<div class="col-xs-8">
			<input type="text" name="marcialstatus" id="marcialstatus"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Husband/Wife:</label>
		<div class="col-xs-8">
			<input type="text" name="husbend_wife" id="husbend_wife"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Annual Income:</label>
		<div class="col-xs-8">
			<input type="text" name="annualincome" id="annualincome"><br/>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-xs-4">Contact(Email/mobile):</label>
		<div class="col-xs-8">
			<input type="text" name="contact" id="contact"><br/>
		</div>
	</div>
	<div class="form-group">
		 <div class="col-xs-offset-2 col-xs-8">
			<button type="submit"class="btn btn-primary">Submit</button>
		</div></div>

</form></div></div></div>
</body>
</html>