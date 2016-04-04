<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view permit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="name">Name
	<input type="text" name="name" id="name"></label><br>			
	<label for="address">Address
	<input type="textarea" name="address" id="address"></label><br>
	<label for="name of development/construction">Name of development/construction
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
	</select>
	<label for="Details of plot">Details of plot
		<label for="survey no">survey no:<input type="text" name="survey" id="survey"></label><br/>
		<label for="Extend">Extend:<input type="text" name="extend" id="extend"></label><br/>
		<label for="Nature of ownership">Nature of ownership:<input type="text" name="nature" id="nature"></label><br/>
		<label for="Number and date ofdeed/document">Number and date ofdeed/document:<input type="text" name="date" id="date"></label><br/>
		<label for="registar's office">Registar's Office:<input type="text" name="office" id="office"></label><br/>
		<label for="sub division">Sub Division:<input type="text" name="division" id="division"></label><br/>
		<label for="ward number">Ward number:<input type="text" name="ward" id="ward"></label><br/>
		<label for="no of the nearest building">Number of the nearest building:<input type="text" name="building" id="building"></label><br/>
		<label for="Revenue Village">Revenue Village:<input type="text" name="revenue" id="revenue"></label><br/>
		<label for="taluk">Taluk:<input type="text" name="taluk" id="taluk"></label><br/>
		<label for="district">District:<input type="text" name="district" id="district"></label><br/>
	<label for="Occupancy">Occupancy<label/>
		Whether Government or Quasi Government:<input type="checkbox" name="govt" id="govt">YES
		<input type="checkbox" name="gov" id="gov">NO<br/>
		<label for="area of the proposed building">area of the proposed building:<input type="text" name="plinth" id="plinth"></label><br/>
		<label for="basement floor">basement floor:<input type="text" name="basement" id="basement"></label><br/>
		<label for="ground floor">ground floor:<input type="text" name="ground" id="ground"></label><br/>
		<label for="first floor">first floor:<input type="text" name="first" id="first"></label><br/>
		<label for="second floor">second floor:<input type="text" name="second" id="second"></label><br/>
		<label for="Total area">Total area:<input type="text" name="total" id="total"></label><br/>
		<label for="Maximum height of building in metres">Maximum height of building in metres:<input type="text" name="height" id="height"></label><br/>
	<label for="if the application is regularisation">If the application is regularisation</label>
		<label for="whether completed or not">whether completed or not:<input type="radio" name="whether" id="whether"></label><br/>
		<label for="if not completed,the stage of construction">if not completed,the stage of construction:<input type="radio" name="not" id="not"></label><br/>
		<label for="Name and address of the developer">Name and address of the developer:<input type="text" name="developer" id="developer"></label><br/>
	<label for="details of fee paid">Details of fee paid</label>
		<label for="amount">amount:<input type="text" name="amount" id="amount"></label><br/>
		<label for="Number and date of receipt">Number and date of receipt:<input type="text" name="number" id="number"></label><br/>
		<label for="Details of documents,plans,certificates etc.enclosed">Details of documents,plans,certificates etc.enclosed:<input type="text" name="details" id="details"></label><br/>
		<input type="submit" name="submit" id="submit" value="Apply">
		<input type="Reset" name="Reset" id="Reset">
</body>
</html>