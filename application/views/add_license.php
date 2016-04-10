<!DOCTYPE html>
<html>
<head>
	<title>APPLICATION FORM FOR D AND O LICENSE</title>
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css') ?>">
</head>
<body>
<style  type="text/css">
    .bs-example{
      margin: 50px ;
      width:50%;
      padding: 18px 18px;
    }
  </style>
<caption><center><b>APPLICATION FORM FOR D AND O LICENSE</b></center></caption>
<div class="bs-example">
 <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pension</h3>
    </div><div class="panel-body">

<?php echo form_open(base_url('License_Controller/add_license'),["class"=>"form-horizontal"]); ?>

</body><div class="form-group">
<label class="control-label col-xs-4" for="name">Name</label><div class="col-xs-8">
	<input required type="text" name="name"   class="form-control" id="name"></div>
</div><div class="form-group">
<label class="control-label col-xs-4" for="purpose of license">Purpose Of License</label><div class="col-xs-8">
	<input required type="text" name="purpose_of_license"   class="form-control" id="purpose_of_license"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="name and address of building">Name And Address Of Building</label><div class="col-xs-8">
	<textarea name="name_and_address_of_building"   class="form-control" id="name_and_address_of_building"></textarea></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="village">Village</label><div class="col-xs-8">
	<input required type="text" name="village"   class="form-control" id="village"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="ward no">Ward no</label><div class="col-xs-8">
	<input required type="text" name="ward_no"   class="form-control" id="ward_no"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="survey no">Survey no</label><div class="col-xs-8">
	<input required type="text" name="survey_no"   class="form-control" id="survey_no"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="building no">Building no</label><div class="col-xs-8">
	<input required type="text" name="building_no"   class="form-control" id="building_no"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="year of license needed">Year of license needed</label><div class="col-xs-8">
	<input required type="text" name="year_of_license_needed"   class="form-control" id="year_of_license_needed"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="type of roof">Type of roof</label>
<input required type="radio" name="type_of_roof"   id="type_of_roof" value="tile">Tile
<input required type="radio" name="type_of_roof"  id="type_of_roof" value="concrete">Concrete
<input required type="radio" name="type_of_roof"   id="type_of_roof" value="traditional">Traditional
<br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="if license  for renewel">If the license  for renewel</label>
<input required type="radio" name="if_the_license_for_renewel"    id="if_the_license_for_renewel" value="yes">Yes
<input required type="radio" name="if_the_license_for_renewel"   id="if_the_license_for_renewel" value="no">No
</div><div class="form-group">
<label class="control-label col-xs-4" for="nearest place">Nearest place</label><div class="col-xs-8">
	<input required type="text" name="nearest_place"   class="form-control" id="nearest_place"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="name of the building">Name of the building</label><div class="col-xs-8">
	<input required type="text" name="name_of_nearests_building"   class="form-control" id="name_of_the_building"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="power">Unit Of Power Used</label><div class="col-xs-8">
	<input required type="text" name="power"   class="form-control" id="power"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="boundaries">Boundaries</label><div class="col-xs-8">
	<input required type="text" name="boundaries"   class="form-control" id="boundaries"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="total area of plant">Total area of plant</label><div class="col-xs-8">
	<input required type="text" name="total_area_of_plant"   class="form-control" id="total_area_of_plant"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="no of workers">Number Of Workers</label><div class="col-xs-8">
	<input required type="text" name="no_of_workers"   class="form-control" id="no_of_workers"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="reciept no">Reciept no</label><div class="col-xs-8">
	<input required type="text" name="reciept_no"   class="form-control" id="reciept_no"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="paid amount">Paid amount</label><div class="col-xs-8">
	<input required type="text" name="paid_amount"   class="form-control" id="paid_amount"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="paid date">Paid date</label><div class="col-xs-8">
	<input required type="text" name="paid_date"   class="form-control" id="paid_date"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="total yield">Total yield</label><div class="col-xs-8">
	<input required type="text" name="total_yield"   class="form-control" id="total_yield"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="address">Address</label><div class="col-xs-8">
	<input required type="text" name="address"   class="form-control" id="address"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="mobileno">Mobileno</label><div class="col-xs-8">
	<input required type="text" name="mobileno"   class="form-control" id="mobileno"></div><br>
</div><div class="form-group">
<label class="control-label col-xs-4" for="email id">Email id</label><div class="col-xs-8">
	<input required type="text" name="emailid"   class="form-control" id="emailid"></div><br>
	</div></div></div></div>
<div class="form-group">
		 <div class="col-xs-offset-2 col-xs-8">
			<button required type="submit"class="btn btn-primary">Submit</button>
		</div></div></form>
</body>
</html>