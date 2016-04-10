<!DOCTYPE html>
<html>
<head>
	<title>complaints</title>
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css') ?>">
</head>
<body>
  <style type="text/css">
    .bs-example{
      margin: 50px ;
      width:50%;
      padding: 18px 18px;
    }
  </style>
  <!--  <form name="complaints"  method="post" action="<?php //echo base_url(''Complaint_Controller/add''); ?>"> -->
  <div class="bs-example">
 <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Complaint Registration</h3>
    </div><div class="panel-body">
  <?php echo form_open(base_url('Complaint_Controller/add'),["class"=>"form-horizontal"]); ?>
    <div class="form-group">
     <label for="" class="control-label col-xs-2">Name:</label>
     <div class="col-xs-10"><input  required type="text" name="name" class="form-control"><br></div>
      <?php echo form_error('name'); ?><br></div>
    <div class="form-group">
      <label for="" class="control-label col-xs-2">Email:</label>
      <div class="col-xs-10"><input  required type="email" name="email" class="form-control"><br></div>
      <?php echo form_error('email'); ?><br></div>
    <div class="form-group">
      <label for="" class="control-label col-xs-2">Complaint:</label>
      <div class="col-xs-10"> <textarea name="complaint"  class="form-control"></textarea><br></div>
      <?php echo form_error('complaint'); ?><br></div>
   	  <div class="col-xs-offset-2 col-xs-10">
        <button  required type="submit"class="btn btn-primary">Add</button></div>
    </form></div></div>
</body>
</html>