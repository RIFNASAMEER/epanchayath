<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view permit</title>
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
        <h3 class="panel-title">Permit</h3>
    </div><div class="panel-body">

  <?php echo form_open(base_url('Permit_Controller/add_permit'),["class"=>"form-horizontal"]); ?>

 
<div class="form-group">
	<label   class="control-label col-xs-4" for="name">Name</label>
	<div class="col-xs-8">
	<input required type="text" name="name"  class="form-control" id="name">
	</div></div><br>			
	<div class="form-group">
	<label   class="control-label col-xs-4" for="address">Address</label>
	<div class="col-xs-8">
	<input type="textarea" name="address"  class="form-control" id="address"></div></div><br>
    <div class="form-group">
    <label   class="control-label col-xs-4" for="email">email</label>
	<div class="col-xs-8">
	<input required type="text" name="emailid"  class="form-control" id="emailid"></div></div><br>
	<div class="form-group">
	<label   class="control-label col-xs-4" for="name of development/construction">Name of development/construction</label>
	<div class="col-xs-8">
	<select name="name_development">
       <option value="Division of plot">Division of plot</option>
	   <option value="New construction">New construction</option>
		<option value="Reconstruction">Reconstruction</option>
		<option value="Alteration<">Alteration</option>
		<option value="Addition/Extension">Addition/Extension</option>
		<option value="Digging of well">Digging of well</option>
		<option value="change in occupancy">change in occupancy</option>
		<option value="Erection of Telecommunication tower/other structure">Erection of Telecommunication tower/other structure</option>
		<option value="Demolition">Demolition</option>
	</select></div></div>
	<div class="form-group">
	<label   class="control-label col-xs-4" for="Details of plot"><center><b>Details of plot</b></center>
	</label></div>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="survey no">survey no:</label><div class="col-xs-8">
		<input required type="text" name="survey_no"  class="form-control" id="survey_no"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Extent">Extent:</label><div class="col-xs-8">
		<input required type="text" name="extent"  class="form-control" id="extent"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Nature of ownership">Nature of ownership:</label><div class="col-xs-8">
		<input required type="text" name="nature"  class="form-control" id="nature"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Number and date ofdeed/document">Number and date of deed/document:</label><div class="col-xs-8">
		<input required type="text" name="date"  class="form-control" id="date"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="registar's office">Name Of Registar's Office:</label><div class="col-xs-8">
		<input required type="text" name="office"  class="form-control" id="office"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="sub division">Sub Division:</label><div class="col-xs-8">
		<input required type="text" name="division"  class="form-control" id="division"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="ward number">Ward number:M</label><div class="col-xs-8">
		<input required type="text" name="ward"  class="form-control" id="ward"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="no of the nearest building">Number of the nearest building:</label><div class="col-xs-8">
		<input required type="text" name="no_building"  class="form-control" id="no_building"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Revenue Village">Revenue Village:</label><div class="col-xs-8">
		<input required type="text" name="revenue"  class="form-control" id="revenue"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="taluk">Taluk:</label><div class="col-xs-8">
		<input required type="text" name="taluk"  class="form-control" id="taluk"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="district">District:</label><div class="col-xs-8">
		<input required type="text" name="district"  class="form-control" id="district"></div></div><br/>
	    <div class="form-group">
	   <label  class="control-label col-xs-4"   for="Occupancy">Occupancy :
	    </label>
	    <input type="checkbox" name="occupancy"  id="occupancy" value="residential_group_a1">Residential Group A1
		<input type="checkbox" name="occupancy"   id="occupancy" value="non_residential">Non Residential<br/>
			</div><div class="form-group">
		<label class="control-label col-xs-4" >Whether Government or Quasi Government:</label>
		<input type="checkbox" name="govt_quasi"   id="govt_quasi" value="government">government
		<input type="checkbox" name="govt_quasi"  id="govt_quasi" value="no">quasi government<br/>
		</div>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="area of the proposed building">area of the proposed building:</label><div class="col-xs-8">
		<input required type="text" name="plinth_area"  class="form-control" id="plinth_area"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="basement floor">basement floor:</label><div class="col-xs-8">
		<input required type="text" name="basement_floor"  class="form-control" id="basement_floor"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="ground floor">ground floor:</label><div class="col-xs-8">
		<input required type="text" name="ground_floor"  class="form-control" id="ground_floor"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="first floor">first floor:</label><div class="col-xs-8">
		<input required type="text" name="first_floor"  class="form-control" id="first_floor"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="second floor">second floor:</label><div class="col-xs-8">
		<input required type="text" name="second_floor"  class="form-control" id="second_floor"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Total area">Total area:</label><div class="col-xs-8">
		<input required type="text" name="total_area"  class="form-control" id="total_area"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Maximum height of building in metres">Maximum height of building in metres:</label><div class="col-xs-8">
		<input required type="text" name="height"  class="form-control" id="height"></div></div><br/>
	<div class="form-group">
	<label   class="control-label col-xs-4" for="if the application is regularisation">If the application is regularisation</label></div>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="whether completed or not">whether completed or not:</label>
		<input type="radio" name="whether_completed_or_not" id="whether_completed_or_not" value="completed">completed<input type="radio" name="whether_completed_or_not"  id="whether_completed_or_not" value="not completed">not completed</div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="if_not_completed,the stage of construction">if not completed,the stage of construction:</label><div class="col-xs-8">
		<input required type="text" name="stage"  class="form-control" id="stage"></div><br></div>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Name and address of the developer">Name and address of the developer:</label><div class="col-xs-8">
		<textarea name="developer_details"  class="form-control" id="developer_details"></textarea></div></div><br/>
	<div class="form-group">
	<label   class="control-label col-xs-4" for="details of fee paid">Details of fee paid</label>
		<label   for="amount">amount:</label><div class="col-xs-8">
		<input required type="text" name="amount"  class="form-control" id="amount"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Number and date of receipt">Number and date of receipt:</label><div class="col-xs-8">
		<input required type="text" name="number_date"  class="form-control" id="number_date"></div></div><br/>
		<div class="form-group">
		<label   class="control-label col-xs-4" for="Details of documents,plans,certificates etc.enclosed">Details of documents,plans,certificates etc.enclosed:</label><div class="col-xs-8">
		<input required type="text" name="document_details"  class="form-control" id="document_details"></div></div><br/>
		<div class="form-group">
		 <div class="col-xs-offset-2 col-xs-8">
			<button type="submit"class="btn btn-primary">Submit</button>
		</div></div>

		</div></div></div></form>

</body>
</html>