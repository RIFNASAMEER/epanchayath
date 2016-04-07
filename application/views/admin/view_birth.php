<!DOCTYPE html>
<html>
<head>
	<title>View Birth/Death Application</title>
</head>
<body>
  <table border="1px">
 	<caption>Birth/death Application table</caption>
 	<thead>
 		<tr>
 			<th>Id</th>
 			<th>appliant_name</th>
 			<th>applicant_address</th>
 			<th>relationship</th>
 			<th>place</th>
 			<th>mobileno</th>
 			<th>email</th>
 			<th>house_no</th>
 			<th>ward_no</th>
 			<th>village</th>
 			<th>postoffice</th>
 			<th>district</th>
 			<th>name</th>
 			<th>father/mother</th>
 			<th>date</th>
 			<th>purpose</th>
 			<th>registrar</th>
 			<th>registration_no</th>
 			<th>localbodytype</th>
 			<th>localbody</th>
 			<th>gender</th>
 			<th>day_address</th>
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
					<td><?php echo $value->appliant_name; ?></td>
					<td><?php echo $value->relationship; ?></td>
					<td><?php echo $value->house_no; ?></td>
					<td><?php echo $value->ward_no; ?></td>
					<td><?php echo $value->village; ?></td>
					<td><?php echo $value->postoffice; ?></td>
					<td><?php echo $value->district; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><?php echo $value->father_mother; ?></td>
					<td><?php echo $value->date; ?></td>
					<td><?php echo $value->purpose; ?></td>
					<td><?php echo $value->registrar_office; ?></td>
					<td><?php echo $value->registration_no; ?></td>
					<td><?php echo $value->localbodytype; ?></td>
					<td><?php echo $value->localbody; ?></td>
					<td><?php echo $value->gender; ?></td>
                     <td><?php echo $value->day_address; ?></td>

					<?php 
					foreach ($address as $values) {
						if($values->id == $value->address_id){
						
					?>
					<td><?php echo $values->address ?></td>
					<td><?php echo $values->place; ?></td>
					<td><?php echo $values->mobileno; ?></td>
					<td><?php echo $values->email; ?></td>
					<td><a href="<?php echo base_url('Birth_Controller/delete').'/'.$value->address_id;?>">delete</a></td>
					<?php }}}}?>
				</tr>			
		
</body>
</html>