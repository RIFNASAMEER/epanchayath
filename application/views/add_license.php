<!DOCTYPE html>
<html>
<head>
	<title>APPLICATION FORM FOR D AND O LICENSE</title>
</head>
<body>
<caption><center>APPLICATION FORM FOR D AND O LICENSE</center></caption><br><br>
<?php echo form_open(base_url('License_Controller/add_license'),["class"=>"form-horizontal"]); ?>
<label for="name">Name</label><div><input type="text" name="name" id="name"></div>
<label for="purpose of license">Purpose Of License</label><div><input type="text" name="purpose_of_license" id="purpose_of_license"></div><br>
<label for="name and address of building">Name And Address Of Building</label><div><textarea name="name_and_address_of_building" id="name_and_address_of_building"></textarea></div><br>
<label for="village">Village</label><div><input type="text" name="village" id="village"></div><br>
<label for="ward no">Ward no</label><div><input type="text" name="ward_no" id="ward_no"></div><br>
<label for="survey no">Survey no</label><div><input type="text" name="survey_no" id="survey_no"></div><br>
<label for="building no">Building no</label><div><input type="text" name="building_no" id="building_no"></div><br>
<label for="year of license needed">Year of license needed</label><div><input type="text" name="year_of_license_needed" id="year_of_license_needed"></div><br>
<label for="type of roof">Type of roof<br><input type="radio" name="type_of_roof" id="type_of_roof" value="tile">Tile<input type="radio" name="type_of_roof" id="type_of_roof" value="concrete">Concrete<input type="radio" name="type_of_roof" id="type_of_roof" value="traditional">Traditional</label><br>
<label for="if license for renewel">If the license for renewel<br><input type="radio" name="if_the_license_for_renewel" id="if_the_license_for_renewel" value="yes">Yes<input type="radio" name="if_the_license_for_renewel" id="if_the_license_for_renewel" value="no">No</label><br>
<label for="nearest place">Nearest place</label><div><input type="text" name="nearest_place" id="nearest_place"></div><br>
<label for="name of the building">Name of the building</label><div><input type="text" name="name_of_nearests_building" id="name_of_the_building"></div><br>
<label for="power">Unit Of Power Used</label><div><input type="text" name="power" id="power"></div><br>
<label for="boundaries">Boundaries</label><div><input type="text" name="boundaries" id="boundaries"></div><br>
<label for="total area of plant">Total area of plant</label><div><input type="text" name="total_area_of_plant" id="total_area_of_plant"></div><br>
<label for="no of workers">Number Of Workers</label><div><input type="text" name="no_of_workers" id="no_of_workers"></div><br>
<label for="reciept no">Reciept no</label><div><input type="text" name="reciept_no" id="reciept_no"></div><br>
<label for="paid amount">Paid amount</label><div><input type="text" name="paid_amount" id="paid_amount"></div><br>
<label for="paid date">Paid date</label><div><input type="text" name="paid_date" id="paid_date"></div><br>
<label for="total yield">Total yield</label><div><input type="text" name="total_yield" id="total_yield"></div><br>
<label for="address">Address</label><div><input type="text" name="address" id="address"></div><br>
<label for="mobileno">Mobileno</label><div><input type="text" name="mobileno" id="mobileno"></div><br>
<label for="email id">Email id</label><div><input type="text" name="emailid" id="emailid"></div><br>
<button type="submit" value="APPLY">APPLY</button>
</body>
</html>