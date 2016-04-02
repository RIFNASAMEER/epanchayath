<!DOCTYPE html>
<html>
<head>
	<title>Application Form For Birth/Death Certificate</title>
</head>
<body>
    <form name="application form" id="bdform" method="post" action="<?php echo base_url('');?>">
		<label for="applicant name"></label>
			Full Name Of The Requester: <input type="text" name="applicant_name" id="applicant_name"></input><br>
		<label for="Address"></label>
			Applicant Address : <textarea name="applicant_address"></textarea><br>
		<label for="house no"></label>
			House Number: <input type="text" name="house_no" id="house_no"></input><br> 
		<label for="ward no"></label>
			Ward Number: <input type="text" name="ward_no" id="ward_no"></input><br>
		<label for="village"></label>
		    Village: <input type="text" name="house_no" id="house_no"></input><br> 
		<label for="postoffice"></label>
		    Postoffice: <input type="text" name="postoffice" id="postoffice"></input><br>
		<label for="pincode"></label>
		    Pincode: <input type="text" name="pincode" id="pincode"></input><br>
		<label for="district"></label>
		   District : <input type="text" name="district" id="district"></input><br>
		<label for="Name Of The Death/Birth Person"></label>
		   Name Of The Death/Birth Person : <input type="text" name="name" id="name"></input><br> 
		<label for="Name Of Father/Mother"></label> 
		    Name Of Father/Mother :<input type="text" name="father_mother" id="father_mother"></input>
		<label for="Date Of Death/Birth"></label>
		    Date Of Death/Birth :<input type="text" name="date" id="date"></input>
		 <label for="Purpose "></label>  
        <button type="submit">login</button>
	</form>
</body>
</html>