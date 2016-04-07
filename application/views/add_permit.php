<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view permit</title>
	<link rel="stylesheet" href="">
</head>
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
        <h3 class="panel-title">Complaint Registration</h3>
    </div><div class="panel-body">
  <?php echo form_open(base_url('Permit_Controller/add'),["class"=>"form-horizontal", 'name'='permit',  'method'='post']); ?>
<div class="form-group">
<body>
	<label for="name">Name
	<div><input type="text" name="name" id="name"></div></label><br>			
	<label for="address">Address
	<div><input type="textarea" name="address" id="address"></div></label><br>
	<label for="email">email
	<div><input type="text" name="email" id="email"></div></label><br>
	<label for="name of development/construction">Nature of development/construction
	<div><select name="select one" id="name_development">
		<option value="Division of plot">Division of plot</option>
		<option value="New construction">New construction</option>
		<option value="Reconstruction">Reconstruction</option>
		<option value="Alteration<">Alteration</option>
		<option value="Addition/Extension">Addition/Extension</option>
		<option value="Digging of well">Digging of well</option>
		<option value="change in occupancy">change in occupancy</option>
		<option value="Erection of Telecommunication tower/other structure">Erection of Telecommunication tower/other structure</option>
		<option value="Demolition">Demolition</option>
	</select></div>
	<label for="Details of plot">Details of plot
		<label for="survey no">survey no:<div><input type="text" name="survey_no" id="survey_no"></div></label><br/>
		<label for="Extent">Extent:<div><input type="text" name="extent" id="extent"></div></label><br/>
		<label for="Nature of ownership">Nature of ownership:<div><input type="text" name="nature" id="nature"></div></label><br/>
		<label for="Number and date ofdeed/document">Number and date of deed/document:<div><input type="text" name="date" id="date"></div></label><br/>
		<label for="registar's office">Name Of Registar's Office:<div><input type="text" name="office" id="office"></div></label><br/>
		<label for="sub division">Sub Division:<div><input type="text" name="division" id="division"></div></label><br/>
		<label for="ward number">Ward number:<div><input type="text" name="ward" id="ward"></div></label><br/>
		<label for="no of the nearest building">Number of the nearest building:<div><input type="text" name="no_building" id="no_building"></div></label><br/>
		<label for="Revenue Village">Revenue Village:<div><input type="text" name="revenue" id="revenue"></div></label><br/>
		<label for="taluk">Taluk:<div><input type="text" name="taluk" id="taluk"></div></label><br/>
		<label for="district">District:<div><input type="text" name="district" id="district"></div></label><br/>
	    <label for="Occupancy">Occupancy :<label/><div><input type="checkbox" name="occupancy" id="occupancy" value="residential_group_a1">Residential Group A1
		<input type="checkbox" name="occupancy" id="occupancy" value="non_residential">NOn Residential<br/>

		Whether Government or Quasi Government:<div><input type="checkbox" name="govt_quasi" id="govt_quasi" value="government">government
		<input type="checkbox" name="govt_quasi" id="govt_quasi" value="no">NO<br/>
		<label for="area of the proposed building">area of the proposed building:<input type="text" name="plinth_area" id="plinth_area"></div></label><br/>
		<label for="basement floor">basement floor:<div><input type="text" name="basement_floor" id="basement_floor"></div></label><br/>
		<label for="ground floor">ground floor:<div><input type="text" name="ground_floor" id="ground_floor"></div></label><br/>
		<label for="first floor">first floor:<div><input type="text" name="first_floor" id="first_floor"></div></label><br/>
		<label for="second floor">second floor:<div><input type="text" name="second_floor" id="second_floor"></div></label><br/>
		<label for="Total area">Total area:<div><input type="text" name="total_area" id="total_area"></div></label><br/>
		<label for="Maximum height of building in metres">Maximum height of building in metres:<div><input type="text" name="height" id="height"></div></label><br/>
	<label for="if the application is regularisation">If the application is regularisation</label>
		<label for="whether completed or not">whether completed or not:</label><div><input type="radio" name="whether_completed_or_not" id="whether_completed_or_not" value="completed">completed</div><br/>
		<label for="whether completed or not">whether completed or not:</label><div><input type="radio" name="whether_completed_or_not" id="whether_completed_or_not" value="not">not</div><br/>
		<label for="if_not_completed,the stage of construction">if not completed,the stage of construction:</label><div><input type="text" name="stage" id="stage"></div><br>
		<label for="Name and address of the developer">Name and address of the developer:<div><textarea name="developer_details" id="developer_details"></textarea></div></label><br/>
	<label for="details of fee paid">Details of fee paid</label>
		<label for="amount">amount:<div><input type="text" name="amount" id="amount"></div></label><br/>
		<label for="Number and date of receipt">Number and date of receipt:<div><input type="text" name="number_date" id="number_date"></div></label><br/>
		<label for="Details of documents,plans,certificates etc.enclosed">Details of documents,plans,certificates etc.enclosed:<div><input type="text" name="document_details" id="document_details"></div></label><br/>
		<input type="submit" name="submit" id="submit" value="Apply">
		<input type="Reset" name="Reset" id="Reset">
</body>
</html>