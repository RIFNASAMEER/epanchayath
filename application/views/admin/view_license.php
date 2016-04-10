<!doctype html>
<html lang="en">
<head>
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
        <?php echo dashboard_menu('license');?>
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
<caption>View D and O License</caption>
<thead>
<tr>
     
      <th>name</th>
      <th>address</th>
      <th>mobileno</th>
     
      <th>purposeoflicense</th>
      <th>name&addressofbuilding</th>
      <th>village</th>
      <th>wardno</th>
      <th>surveyno</th>
      <th>buildingno</th>
      <th>yearoflicense_neede</th>
      <th>typeofroof</th>
    
      </thead>
      <tbody>
      <?php
      if(isset($result) && !empty($result))
      {
      	foreach ($result as $value){ ?>
      	   <tr>
  
      	       <td><?php echo $value->name; ?></td>
      	       <td><?php echo $value->purpose_of_license; ?></td>
      	       <td><?php echo $value->name_and_address_of_building; ?></td>
      	       <td><?php echo $value->village; ?></td>
      	       <td><?php echo $value->ward_no; ?></td>
      	       <td><?php echo $value->survey_no; ?></td>
      	       <td><?php echo $value->building_no; ?></td>
      	       <td><?php echo $value->year_of_license_needed; ?></td>
      	       <td><?php echo $value->type_of_roof; ?></td>
                   <?php }}?>
                   
                     <th>ifthelicenseforrenewel</th>
      <th>nameofnearestbuilding</th>

      <th>boundaries</th>
      <th>totalareaofplant</th>


      <th>paidamount</th>
      <th>paiddate</th>
      <th>totalyield</th>
      <th>Remove</th>

      </tr>
      <tr> <?php
      if(isset($result) && !empty($result))
      {
            foreach ($result as $value){ ?>
      	       <td><?php echo $value->if_the_license_for_renewel; ?></td>
      	     
      	       <td><?php echo $value->name_of_nearest_building; ?></td>
      	
      	       <td><?php echo $value->boundaries; ?></td>
      	       <td><?php echo $value->total_area_of_plant; ?></td>
      	       <td><?php echo $value->no_of_workers; ?></td>
      	       <td><?php echo $value->reciept_no; ?></td>
      	       <td><?php echo $value->paid_amount; ?></td>
      	       <td><?php echo $value->paid_date; ?></td>
      	       <td><?php echo $value->total_yield; ?></td>

      	       <?php
      	       foreach ($address as $values) {
      	       	    if($values->id==$value->address_id){

      	       	    	?>
      	       	    	<td><?php echo $values->address ?></td>
                              
                              <td><?php echo $values->mobileno; ?></td>
                         
      	       	    	<td><a href="<?php echo base_url('License_Controller/delete'). '/'.$value->address_id;?>">delete</a>
      	       	    	</td>
      	       	    	<?php }}}}?>
      	       	    	</tr>
      	       	    	</body>
						</html>
      	       	    		
      	       	    
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       
      	       




