<!DOCTYPE html>
<html>
<head>
	<title>view employees</title>
</head>
<body>
	<table border="1px">
		<caption>employees</caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>name</th>
				<th>designation</th>
			</tr>
		</thead>
		<tbody>
		<?php
<<<<<<< HEAD
		if(isset($result))
		
=======
		if(isset($result) && !empty($result))
>>>>>>> cb2e084ac773a991675782c3219f89a5084214fc
		{
			
		foreach ($result as $value){ ?>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><?php echo $value->designation; ?></td>
				</tr>			
		<?php } ?>
		</tbody>
	</table> 
</body>
</html>