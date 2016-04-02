<!DOCTYPE html>
<html>
<head>
	<title> view notification</title>
</head>
<body>
<table border=2px>
	<caption></caption>
	   	<thead>
         <tr>
			<th>id</th>
			<th>notification</th>

		 </tr>
        </thead>
        <tbody>

        <?php if(isset($result)){
            foreach ($result as $value) 
                { 
                ?>
                
                <tr>
                	<td><?php echo $value->id; ?></td>
                	<td><?php echo $value->notification; ?></td>
                	<td><a href="<?php echo base_url('Notification_Controller/delete/').'/'.$value->id;?>">delete
                    </a></td>

                </tr>
        <?php }} ?>
        <tbody>
</table>
</body>
</html>