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
			</tr>
		</thead>
		<tbody>
		<?php foreach ($result as $value){ ?>
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