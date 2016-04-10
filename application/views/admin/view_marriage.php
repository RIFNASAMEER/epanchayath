<!doctype html>
<html lang="en">
<head>

	<title>Marriege Registration Table</title>

    <meta charset="UTF-8">
    <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
    <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('admin/img/ico.png');?>" type="image/png" sizes="47x54">
    <title>Epanchayath</title>
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
        <?php echo dashboard_menu('marriage');?>
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

  <div style="float:left"> 	
  <table border="1px">
 	<caption>Marriage Registration Table</caption>
 	<thead>
 		<tr>
 			
 			<th>date</th>
 			<th>ma_place</th>
 			<th>hus_name</th>
 		
 			<th>emailid</th>
 			<th>citizen</th>
 			<th>job</th>
 			<th>h_first_married_or_not</th>
 			<th>hno_spouse</th>
 			<th>f_name</th>			
 			<th>m_name</th>
 			<th>v1_name</th>
 			
 		</tr>
 	</thead><
 	<tbody>
 	<tr>
        <?php
		if(isset($result) && !empty($result))
		{
		 foreach ($result as $value){ ?>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->date; ?></td>
					<td><?php echo $value->ma_place; ?></td>
					<td><?php echo $value->hus_name; ?></td>
					<td><?php echo $value->citizen; ?></td>
					<td><?php echo $value->job; ?></td>
					<td><?php echo $value->h_first_married_or_not; ?></td>
					<td><?php echo $value->hno_spouse; ?></td>
					<td><?php echo $value->f_name; ?></td>
					<td><?php echo $value->m_name; ?></td>
					<td><?php echo $value->m_age; ?></td>
					<td><?php echo $value->m_address; ?></td>
					<td><?php echo $value->v1_name; ?></td>
        
                    <?php }} ?></tr></tr></tbody><br><br><thead>
                    <th>v1_address</th>
                    <th>w_name</th>
                    <th>w_address</th>
                    <th>w_dob</th>
                    <th>w_citizen</th>
                    <th>w_job</th>
                    <th>w_first_married_or_not</th>
                    <th>w_no_spouse</th>
                    <th>wf_name</th>
                
                  
                    <th>wm_name</th>
                    
                    <th>v2_name</th>
                    
                    <th>Remove</th></thead><tbody>
                    <?php
        if(isset($result) && !empty($result))
        {
         foreach ($result as $value){ ?>
         <tr>
                    <td><?php echo $value->v1_address; ?></td>
                    <td><?php echo $value->w_name; ?></td>
                    <td><?php echo $value->w_address; ?></td>
                    <td><?php echo $value->w_dob; ?></td>
                    <td><?php echo $value->w_citizen; ?></td>
                    <td><?php echo $value->w_job; ?></td>
                    <td><?php echo $value->w_first_married_or_not; ?></td>
                    <td><?php echo $value->w_no_spouse; ?></td>
                    <td><?php echo $value->wf_name; ?></td>
                    <td><?php echo $value->wf_age; ?></td>
 					<td><?php echo $value->wf_address; ?></td>
 					<td><?php echo $value->wm_name; ?></td>
 					<td><?php echo $value->v2_name; ?></td>
 					<td><?php echo $value->v2_address; ?></td>
                    <?php 
					foreach ($address as $values) {
						if($values->id == $value->address_id){
						
					?>
					
					<td><a href="<?php echo base_url('dashboard/marriage/delete/').'/'.$value->address_id;?>">delete</a></td>
					<?php }}}}?>
 	</tr>
		
		</tr></tbody></table></div></body></html>
