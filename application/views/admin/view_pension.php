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
        <?php echo dashboard_menu('gallary');?>
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
