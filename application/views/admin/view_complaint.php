<!DOCTYPE html>
<html>
<head>
	<title> view complaint</title>
</head>
<body>
<table border=2px>
	<caption></caption>
	   	<thead>
         <tr>
			<th>id</th>
			<th>complaints</th>
            <th>name</th>
            <th>email</th>

		 </tr>
        </thead>
        <tbody>

        <?php if(isset($result)){
            foreach ($result as $value) 
                { 
                ?>
                
                <tr>
                	<td><?php echo $value->id; ?></td>
                	<td><?php echo $value->complaints; ?></td>
                    <td><?php echo $value->name; ?></td>
                    <td><?php echo $value->email; ?></td>
                	<td><a href="<?php echo base_url('Complaint_Controller/delete/').'/'.$value->id;?>">delete
                    </a></td>

                </tr>
        <?php }} ?>
        <tbody>
</table>
</body>
</html>