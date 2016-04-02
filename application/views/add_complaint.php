<!DOCTYPE html>
<html>
<head>
	<title>complaints</title>
</head>
<body>
  <!--  <form name="complaints"  method="post" action="<?php //echo base_url(''Complaint_Controller/add''); ?>"> -->
  <?php echo form_open(base_url('Complaint_Controller/add')); ?>

      Name:<input type="text" name="name" id="names"><br>
      <?php echo form_error('name'); ?><br>
   
      Email:<input type="email" name="email" id="emails"><br>
      <?php echo form_error('email'); ?><br>
    
      Complaint:<textarea name="complaint"  id="complaints"></textarea><br>
      <?php echo form_error('complaint'); ?><br>
   	<button type="submit">Add</button>
    </form>
</body>
</html>