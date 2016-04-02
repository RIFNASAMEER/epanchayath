<!DOCTYPE html>
<html>
<head>
	<title>Application Form For Birth/Death Certificate</title>
</head>
<body>
    <form name="application form" id="bdform" method="post" action="<?php echo base_url('');?>">
        <label for="type"></label>
           Select Type Of Form :<input type="radio" id="Birth"value="Birth Form">Birth Form</input>
                    <input type="radio" value="Death form" id="Death">Death Form</input><br>
		<label for="applicant name"></label>
			Full Name Of The Requester: <input type="text" name="appliant_name" id="appliant_name"></input><br>
		<label for="gender"></label>
		    Gender :<input type="radio" value="M">Male</input>
                    <input type="radio" value="F">Female</input><br>
		<label for="Address"></label>
			Applicant Address : <textarea name="address" id="address"></textarea><br>
		<label for="place"></label>
		    Place : <input type="text" name="place" id="place"></input><br>
		<label for="mobileno"></label>
		    Mobile Number : <input type="text" name="mobileno" id="mobileno"></input><br>
		<label for="email"></label>
		    E-mail : <input type="text" name="email" id="email"></input><br>
        <label for="requester name"></label>
			Full Name Of The Requester: <input type="text" name="appliant_name" id="appliant_name"></input><br>
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
		    Name Of Father/Mother :<input type="text" name="father_mother" id="father_mother"></input><br>
		<label for="Date Of Death/Birth"></label>
		    Date Of Death/Birth :<input type="text" name="date" id="date"></input><br>
		<label for="Purpose Of The Certificate"></label>
		    Purpose Of The Certificate :<input type="text" name="purpose" id="purpose"></input><br>
        <label for="Name Of Registrar Office"></label>
            Name Of Registrar Office :<input type="text" name="registrar"></input><br>
        <label for="Registration Number"></label>
            Registration Number:<input type="text" name="registration_no" id="registration_no"></input><br>
        <label for="Localbody type"></label>
            Localbody Type:<select name="Localbodytype">
               <option value="Panchayath">Panchayath</option>
               <option value="Municipality">Municipality</option>
               <option value="Corporation">Corporation</option>
            </select><br>
        <label for="Localbody"></label>
            Place Of Birth/Death :<input type="text" name="localbody" id="localbody"></input><br>
        <label for="gender"></label>
            Gender :<input type="radio" id="bgender"value="M">Male</input>
                    <input type="radio" value="F" id="bgender">Female</input><br>
        <label for="Address"></label>
             Address :<textarea name="baddress" id="baddress"></textarea><br>
        <button type="submit">Submit</button>
	</form>
</body>
</html>