<!DOCTYPE html>
<html>
<head>
	<title>Application Form For Birth/Death Certificate</title>
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
        <h3 class="panel-title">Death/Birth Certificat</h3>
    </div>
    <div class="panel-body">
    <?php echo form_open(base_url('Complaint_Controller/add'),["class"=>"form-horizontal"]); ?>
    	<div class="form-group">
    		  		<label for="type"  class="col-sm-4 control-label">Select Type Of Form :</label>
    		  		<label class="radio-inline control-labe ">
    		  	  	<input type="radio" name="optradio">Death</label>
    		   		<label class="radio-inline control-label">
    		      	<input type="radio" name="optradio">Bearth</label>
    		    </div>
    			<div class="form-group row">
    			   <label for="" class="control-label col-xs-4">FullName:</label>
    	           <div class="col-xs-8">
    	           		<input type="text" name="name" class="form-control">
    	           </div>
    	        </div>
    			<div class="form-group">
    				<label for="gender" class="control-label col-xs-4"> Gender: </label>
    				<label class="radio-inline control-labe ">
    				   <input type="radio" name="optradio">Male</label>
    	       		<label class="radio-inline control-label">
    	       		  <input type="radio" name="optradio">Female</label>
    	        </div>
    	        <div class="form-group">
    				<label for="Address" class="control-label col-xs-4">ApplicantAddress:</label>
    			    <div class="col-xs-8">
    				<textarea name="address" class="form-control">
    				</textarea><br>
    				</div>
    			</div>
    			<div class="form-group">
    			    <label for="place" class="control-label col-xs-4"> Place: </label>
    				<div class="col-xs-8">
    					<input type="text" name="place" class="form-control"><br>
    				</div>
    			</div>
    			<div class="form-group">
    			    <label for="mobileno" class="control-label col-xs-4"> MobileNumber: </label>
    				   	<div class="col-xs-8">
    				   		<input type="text" name="mobileno" class="form-control"><br>
    				   	</div>
    			</div>
    			<div class="form-group">
    				<label for="email" class="control-label col-xs-4"> E-mail :</label>
    			    <div class="col-xs-8">
    			    	<input type="text" name="email" class="form-control"><br>
    			    </div>
    			</div>
    			<div class="form-group">
    				<label for="requester name" class="control-label col-xs-4">FullNameOfThe Requester:</label>
    				<div class="col-xs-8">
    					<input type="text" name="appliant_name" class="form-control"><br>
    				</div>
    			</div>
    			<div class="form-group">
    				<label for="house no" class="control-label col-xs-4">House Number:</label>
    				<div class="col-xs-8"><input type="text" name="house_no" class="form-control"></input><br>
    				</div>
    			</div>
    			<div class="form-group">
    				<label for="ward no" class="control-label col-xs-4">Ward Number: </label>
    				<div class="col-xs-8"><input type="text" name="ward_no"class="form-control"><br></div>
    			</div>
    			<div class="form-group">
    				<label for="village" class="control-label col-xs-4">Village: </label>
    				<div class="col-xs-8"><input type="text" name="house_no" class="form-control"></input><br></div> 
    	
    			</div>			
    			<div class="form-group">
    				<label for="postoffice" class="control-label col-xs-4">Postoffice:</label>
    				<div class="col-xs-8"><input type="text" name="postoffice" class="form-control"></input><br></div>
    			</div>
    			<div class="form-group">
    				<label for="pincode" class="control-label col-xs-4">Pincode:</label>
    				<div class="col-xs-8"><input type="text" name="pincode" class="form-control"></input><br></div>
    			</div>
    			<div class="form-group">
    				<label for="district" class="control-label col-xs-4"> District : </label>
    				<div class="col-xs-8"><input type="text" name="district" class="form-control"></input><br></div>
    			</div>
    			<div class="form-group">
    			    <label for="Name Of The Death/Birth Person" class="control-label col-xs-4"> Name Of The Death/Birth Person :</label>
    				<div class="col-xs-8"><input type="text" name="name" class="form-control"></input><br> </div>
    			</div>
    			<div class="form-group">
    				<label for="Name Of Father/Mother" class="control-label col-xs-4">Name Of Father/Mother :</label> 
    				<div class="col-xs-8"><input type="text" name="father_mother" class="form-control"><br></div>
    			</div>
    			<div class="form-group">
    				<label for="Date Of Death/Birth" class="control-label col-xs-4">Date Of Death/Birth :</label>
    				<div class="col-xs-8"><input type="text" name="date" class="form-control"></input><br></div>
    			</div>
		<div class="form-group">
			<label for="Purpose Of The Certificate" class="control-label col-xs-4">Purpose Of The Certificate:</label>
			<div class="col-xs-8">
				<input type="text" name="purpose" class="form-control"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="Purpose Of The Certificate" class="control-label col-xs-4">Name Of Registrar Office:</label>
			<div class="col-xs-8"><input type="text" name="office" class="form-control"><br>
			</div>
		</div>
		<div class="form-group">
	        <label for="Name Of Registrar Office" class="control-label col-xs-4">Name Of Registrar Office:</label>
	        <div class="col-xs-8"><input type="text" name="registrar"class="form-control"></input><br></div>
        </div>
        <div class="form-group">
	        <label for="Registration Number" class="control-label col-xs-4">Registration Number:</label>
	        <div class="col-xs-8"><input type="text" name="registration_no" class="form-control"><br></div>
        </div>
        <div class="form-group">
	        <label for="Localbody type" class="control-label col-xs-4"> Localbody Type:</label>
	        <div class="col-xs-8">
	           <select name="Localbodytype" class = "form-control">
	               <option value="Panchayath">Panchayath</option>
	               <option value="Municipality">Municipality</option>
	               <option value="Corporation">Corporation</option>
	            </select><br>
	        </div>
        </div> 
        <div class="form-group">
	        <label for="Localbody" class="control-label col-xs-4"> Place Of Birth/Death :</label>
	        <div class="col-xs-8"><input type="text" name="localbody" class="form-control"></input><br></div>
        </div>
         <div class="form-group">
	        <label for="gender" class="control-label col-xs-4"> Gender: </label>
    		<label class="radio-inline control-labe ">
    		<input type="radio" name="optradio">Male</label>
    	    <label class="radio-inline control-label">
    	     <input type="radio" name="optradio">Female</label>
		</div>
		 <div class="form-group">
			<label for="Address" class="control-label col-xs-4"> Address :</label>
			<div class="col-xs-8"><textarea name="baddress" class="form-control"></textarea><br></div>
		</div>
		<div class="form-group">
		 <div class="col-xs-offset-2 col-xs-8">
			<button type="submit"class="btn btn-primary">Submit</button>
		</div></div>
	</form>
	</div>
</body>
</html>