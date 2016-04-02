<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view authority</title>
	<link rel="stylesheet" href="">
</head>
<body>
 <table border="1px">
 	<caption>authority table</caption>
 	<thead>
 		<tr>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Designation</th>
 			<th>ward no</th>
 			<th>DOB</th>
 			<th>Gender</th>
 			<th>Address</th>
 			<th>Place</th>
 			<th>mobile no</th>
 			<th>Remove</th>
 		</tr>
 	</thead>
 	<tbody>
		<?php
		if(isset($result))
		{
		 foreach ($result as $value){ ?>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><?php echo $value->designation; ?></td>
					<td><?php echo $value->wardno; ?></td>
					<?php 
					foreach ($address as $values) {
						if($values->id == $value->address_id){
						
					?>
					<td><?php echo $values->dob; ?></td>
					<td><?php echo $values->gender; ?></td>
					<td><?php echo $values->address ?></td>
					<td><?php echo $values->place; ?></td>
					<td><?php echo $values->mobileno; ?></td>
					<td><a href="<?php echo base_url('Authority_Controller/delete').'/'.$value->address_id;?>">delete</a></td>
					<?php }}}}?>
				</tr>			
		
				</tbody>
 </table>
</body>
</html>