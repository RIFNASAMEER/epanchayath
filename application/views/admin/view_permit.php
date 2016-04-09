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
        <?php echo dashboard_menu('notification');?>
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
</div>

<table id="testimonial" class = "table">
<caption>View Permit</caption>
<thead  class="header">
<tr>
 <th>Id</th>
      <th>name</th>
      <th>address</th>
      <th>emailid</th>
      <th>name_development</th>
      <th>survey_no</th>
      <th>extent</th>
      <th>nature</th>
      <th>date</th>
      <th>office</th>
      <th>division</th>
      <th>ward</th>
      <th>no_building</th>
      <th>revenue</th>
      <th>taluk</th>
      <th>district</th>
      <th>govt_quasi</th>
      <th>plinth_area</th>
      <th>basement_floor</th>
      <th>ground_floor</th>
      <th>first_floor</th>
      <th>second_floor</th>
      <th>total_area</th>
      <th>height</th>
      <th>whether_completed_or_not</th>
      <th>stage</th>
      <th>developer_details</th>
      <th>amount</th>
      <th>number_date</th>
      <th>document_details</th>
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
                 <td><?php echo $value->name; ?></td>
                 <td><?php echo $value->name_development; ?></td>
                 <td><?php echo $value->survey_no; ?></td>
                 <td><?php echo $value->extent; ?></td>
                 <td><?php echo $value->nature; ?></td>
                 <td><?php echo $value->date; ?></td>
                 <td><?php echo $value->office; ?></td>
                 <td><?php echo $value->division; ?></td>
                 <td><?php echo $value->ward; ?></td>
                 <td><?php echo $value->no_building; ?></td>
                 <td><?php echo $value->revenue; ?></td>
                 <td><?php echo $value->taluk; ?></td>
                 <td><?php echo $value->district; ?></td>
                 <td><?php echo $value->govt_quasi; ?></td>
                 <td><?php echo $value->plinth_area; ?></td>
                 <td><?php echo $value->basement_floor; ?></td>
                 <td><?php echo $value->ground_floor; ?></td>
                 <td><?php echo $value->first_floor; ?></td>
                 <td><?php echo $value->second_floor; ?></td>
                 <td><?php echo $value->total_area; ?></td>
                 <td><?php echo $value->height; ?></td>
                 <td><?php echo $value->whether_completed_or_not; ?></td>
                 <td><?php echo $value->stage; ?></td>
                 <td><?php echo $value->developer_details; ?></td>
                 <td><?php echo $value->amount; ?></td>
                 <td><?php echo $value->number_date; ?></td>
                 <td><?php echo $value->document_details; ?></td>

                   <?php
                   foreach ($address as $values) {
                      if($values->id == $value->address_id){

                          ?>
                          <td><?php echo $value->address; ?></td>
                          <td><?php echo $value->emailid; ?></td>
                          <td><a href="<?php echo base_url('Permit_Controller/delete'). '/'.$value->address_id;?>">delete</a>
                          </td>
                          <?php }}}}?>
                          </tr>
                          </tbody></table></div>
</div>

</body>
</html>
                                    
                            

     
      
 