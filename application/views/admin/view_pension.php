<!DOCTYPE html>
<html>
<head>
	<title> view Pension</title>
</head>
<body>
<table border=2px>
	<caption></caption>
	   	<thead>
         <tr>
			<th>idpensions</th>
			<th>name</th>
            <th>houseno</th>
            <th>majorplace</th>
            <th>postoffice</th>
            <th>pincode</th>
            <th>gender</th>
            <th>disease</th>
            <th>no_ofyears_inkerela</th>
            <th>rationcardno</th>
            <th>bplcardno</th>
            <th>idcardno</th>
            <th>wardcouncilor</th>
            <th>integently</th>
            <th>begger</th>
            <th>marcialstatus</th>
            <th>husbend/wife</th>
            <th>annualincome</th>
             <th>contact</th>

		 </tr>
        </thead>
        <tbody>

        <?php if(isset($result)){
            foreach ($result as $value) 
                { 
                ?>
                
                <tr>
                	<td><?php echo $value->idpensions; ?></td>
                	<td><?php echo $value->name; ?></td>
                    <td><?php echo $value->houseno; ?></td>
                    <td><?php echo $value->majorplace; ?></td>
                    <td><?php echo $value->postoffice; ?></td>
                    <td><?php echo $value->pincode; ?></td>
                    <td><?php echo $value->gender; ?></td>
                    <td><?php echo $value->disease; ?></td>
                    <td><?php echo $value->no_ofyears_inkerala; ?></td>
                    <td><?php echo $value->rationcardno; ?></td>
                    <td><?php echo $value->bplcardno; ?></td>
                    <td><?php echo $value->idcardno; ?></td>
                    <td><?php echo $value->wardcouncilor; ?></td>
                    <td><?php echo $value->intigently; ?></td>
                    <td><?php echo $value->begger; ?></td>
                    <td><?php echo $value->marcialstatus; ?></td>
                    <td><?php echo $value->husbend_wife; ?></td>
                    <td><?php echo $value->annualincome; ?></td>
                    <td><?php echo $value->contact; ?></td>
                	<td><a href="<?php echo base_url('Pension_Controller/delete/').'/'.$value->idpensions;?>">delete
                    </a></td>

                </tr>
        <?php }} ?>
        <tbody>
</table>
</body>
</html>
