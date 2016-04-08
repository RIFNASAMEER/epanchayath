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
        <?php echo dashboard_menu('emloyee');?>
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

	<div>	
<?php 


 echo validation_errors();  ?>
	<form action="<?php echo base_url('Employee_Controller/edit'); ?>" method="post" accept-charset="utf-8">
		<input type="hidden" name ="id" value ="<?php echo $id ?>">
		<?php if (isset($result)) {
			foreach ($result as $value) 
			{
			?>
		<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $value->name ?>"><br>
		<label for="designation">Designation</label>
			<input type="text" name="designation" id="designation" value="<?php echo $value->designation ?>"><br><?php }} ?>
		
       	<?php if (isset($address)) {
       		foreach ($address as $value)
       		 {
       		 ?>

		<label for="gender">Gender</label>
			<input type="radio" name="gender" id="gender" value""> male <input type="radio" name="gender" id="gender" value="">female<br>
		<label for="address">Address</label>
			<input type="text" name="address" id="address" value="<?php echo $value->address ?>"><br>
		<label for="place">Place</label>
			<input type="text" name="place" id="place" value="<?php echo $value->place ?>"><br>
		
        <label for="mobile">Mobile no</label>
			<input type="text" name="mobileno" id="mobileno" value="<?php echo $value->mobileno ?>"><br><?php }} ?>


		<button type="submit">update</button>
	</form>
	</div>
</body>
</html>