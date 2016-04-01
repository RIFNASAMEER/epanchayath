<!DOCTYPE html>
<html>
<head>
	<title>view employess</title>
</head>
<body>
	<table border="1px">
		<caption>employees</caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>name</th>
				<th>designation</th>
				<th>gender</th>
				<th>address</th>
				<th>place</th>
				<th>mobile number</th>
				<th>edit|delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if(isset($result))
		{
		 foreach ($result as $value){ ?>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->designation; ?></td>
					<?php 
					foreach ($address as $values) {
						if($value->id == $values->id){
					?>
					<td><?php echo $values->gender; ?></td>
					<td><?php echo $values->address ?></td>
					<td><?php echo $values->place?></td>
					<td><?php echo $values->mobileno; ?></td>
					<td><a href= "<?php echo base_url('Employee_Controller/edit_data/').'/'.$value->id;?>"> edit
					|<a href="<?php echo base_url('Employee_Controller/delete/').'/'.$value->id;?>">delete</a></td>
					<?php }}}}?>
				</tr>			
		
				</tbody>
		
	</table> 
    </body>
</html>