<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view permit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="name">Name</label>
	<input type="text" name="name" id="name"><br>			
	<label for="address">Address</label>
	<input type="text" name="address" id="address"><br>
	<label for="name of development/construction">Name of development/construction</label>
	<select name="select one">
		<option value="1">Division of plot</option>
		<option value="2">New construction</option>
		<option value="3">Reconstruction</option>
		<option value="4">Alteration</option>
		<option value="5">Addition/Extension</option>
		<option value="6">Digging of well</option>
		<option value="7">change in occupancy</option>
		<option value="8">Erection of Telecommunication tower/other structure</option>
		<option value="9">Demolition</option>
	<label for="Details of plot">Details of plot</label>
		survey no:<input type="text" name="survey" id="survey"><br/>
		Extend:<input type="text" name="extend" id="extend"><br/>
		Nature of ownership:<input type="text" name="nature" id="nature"><br/>
		Number and date ofdeed/document:<input type="text" name="date" id="date"><br/>
		Registar's Office:<input type="text" name="office" id="office"><br/>
		Sub Division:<input type="text" name="division" id="division"><br/>:
		Ward number:<input type="text" name="ward" id="ward"><br/>
		No of the nearest building:<input type="text" name="building" id="building"><br/>
		Revenue Village:<input type="text" name="revenue" id="revenue"><br/>
		Taluk:<input type="text" name="taluk" id="taluk"><br/>
		District:<input type="text" name="district" id="district"><br/>
	<label for="Occupancy">Occupancy<label/>
		Whether Government or Quasi Government:<input type="checkbox" name="govt" id="govt">YES
		<input type="checkbox" name="gov" id="gov">NO<br/>
		plinth area of the proposed building:<input type="text" name="plinth" id="plinth"><br/>
		basement floor:<input type="text" name="basement" id="basement"><br/>
		ground floor:<input type="text" name="ground" id="ground"><br/>
		first floor:<input type="text" name="first" id="first"><br/>
		second floor:<input type="text" name="second" id="second"><br/>
		Total area:<input type="text" name="total" id="total"><br/>
		Maximum height of building in metres:<input type="text" name="height" id="height"><br/>
	<label for="if the application is regularisation">If the application is regularisation</label>
		whether completed or not:<input type="radio" name="whether" id="whether"><br/>
		if not completed,the stage of construction:<input type="radio" name="not" id="not"><br/>
		Name and address of the developer:<input type="text" name="developer" id="developer"><br/>
	<label for="details of fee paid">Details of fee paid</label>
		amount:<input type="text" name="amount" id="amount"><br/>
			Number and date of receipt:<input type="text" name="number" id="number"><br/>
		Details of documents,plans,certificates etc.enclosed:<input type="text" name="details" id="details"><br/>
		<input type="submit" name="submit" id="submit">
		<input type="Reset" name="Reset" id="Reset">
</body>
</html>