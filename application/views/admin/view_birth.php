<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
    <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('admin/img/ico.png');?>" type="image/png" sizes="47x54">
    <title><?php echo ucfirst($currentPage); ?> Kudumba sree</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/styleapp.css');?>">
    <script type="text/javascript" src="<?php echo base_url('admin/js/appjs.js');?>"></script>
    <style>
        #img{
            width: 10px;
            height: 10px;
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="left-wrapper">
        <?php echo dashboard_menu('birth');?>
    </div>

    <nav class="top-wrapper">
        <div class="sidebar-top">
            <button class="humburger pull-left">
                <i class="fa fa-bars fa-2x center-block"></i>
            </button>
            <ul class="menu-top pull-right">
                <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
                <li>
                    <a href="<?php echo base_url('dashboard/logout');?>">logout</a>
                </li>
            </ul>
        </div>
    </nav>

	<div>	>

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
 			<th>emailid</th>
 			<th>house_no</th>
 			<th>ward_no</th>
 			<th>village</th>
 			<th>postoffice</th>
 			<th>district</th>
 			<th>name</th>
 			<th>father/mother</th>
 			<th>date</th>
 			<th>purpose</th>
 			<th>registrar_office</th>
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
					<td><?php echo $value->applicant_name; ?></td>
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
					<td><?php echo $values->emailid; ?></td>
					<td><a href="<?php echo base_url('Birth_Controller/delete').'/'.$value->address_id;?>">delete</a></td>
					<?php }}}}?>
				</tr>			
		</tbody>
		</table>
		</div>
</body>
</html>