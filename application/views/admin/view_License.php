<!DOCTYPE html>
<html>
<head>
	<title>View D and O License</title>
</head>
<body>
<table border="1px">
<caption>View D and O License</caption>
<thead>
<tr>
      <th>Id</th>
      <th>name</th>
      <th>address</th>
      <th>mobileno</th>
      <th>email</th>
      <th>purpose_of_license</th>
      <th>name_and_address_of_building</th>
      <th>village</th>
      <th>ward_no</th>
      <th>survey_no</th>
      <th>building_no</th>
      <th>year_of_license_neede</th>
      <th>type_of_roof</th>
      <th>if_the_license_for_renewel</th>
      <th>nearest_place</th>
      <th>name_of_nearest_building</th>
      <th>power</th>
      <th>boundaries</th>
      <th>total_area_of_plant</th>
      <th>no_of_workers</th>
      <th>reciept_no</th>
      <th>paid_amount</th>
      <th>paid_date</th>
      <th>total_yield</th>
      <th>Remove</th>
      </tr>
      </thead>
      <tbody>
      <?php
      if(isset($result) && !empty($result))
      {
      	foreach ($result as $value){ ?>
      	   <tr>
      	       <td><?php echo $value->id; ?></td>
      	       <td><?php echo $value->name; ?></td>
      	       <td><?php echo $value->purpose_of_license; ?></td>
      	       <td><?php echo $value->name_and_address_of_building; ?></td>
      	       <td><?php echo $value->village; ?></td>
      	       <td><?php echo $value->ward_no; ?></td>
      	       <td><?php echo $value->survey_no; ?></td>
      	       <td><?php echo $value->building_no; ?></td>
      	       <td><?php echo $value->year_of_license_neede; ?></td>
      	       <td><?php echo $value->type_of_roof; ?></td>
      	       <td><?php echo $value->if_the_license_for_renewel; ?></td>
      	       <td><?php echo $value->nearest_place; ?></td>
      	       <td><?php echo $value->name_of_nearest_building; ?></td>
      	       <td><?php echo $value->power; ?></td>
      	       <td><?php echo $value->boundaries; ?></td>
      	       <td><?php echo $value->total_area_of_plant; ?></td>
      	       <td><?php echo $value->no_of_workers; ?></td>
      	       <td><?php echo $value->reciept_no; ?></td>
      	       <td><?php echo $value->paid_amount; ?></td>
      	       <td><?php echo $value->paid_date; ?></td>
      	       <td><?php echo $value->total_yield; ?></td>

      	       <?php
      	       foreach ($address as $values) {
      	       	    if($values->id==$value->address_id){

      	       	    	?>
      	       	    	<td><?php echo $value->address; ?></td>
      	       	    	<td><?php echo $value->mobileno; ?></td>
      	       	    	<td><?php echo $value->email; ?></td>
      	       	    	<td><a href="<?php echo base_url('License_Controller/delete'). '/'.$value->address_id;?>">delete</a>
      	       	    	</td>
      	       	    	<?php }}}}?>
      	       	    	</tr>
      	       	    	</body>
						</html>
      	       	    		
      	       	    
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       




