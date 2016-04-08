<!DOCTYPE html>
<html>
<head>
	<title>View Permit</title>
</head>
<body>
<table border="1px">
<caption>View Permit</caption>
<thead>
<tr>
 <th>Id</th>
      <th>name</th>
      <th>address</th>
      <th>email</th>
      <th>name_development</th>
      <th>survey_no</th>
      <th>extend</th>
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
      <th>whether_complete_or_not</th>
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
                    <td><?php echo $value->extend; ?></td>
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
                          <td><?php echo $value->whether_complete_or_not; ?></td>
                          <td><?php echo $value->stage; ?></td>
                          <td><?php echo $value->developer_details; ?></td>
                          <td><?php echo $value->amount; ?></td>
                          <td><?php echo $value->number_date; ?></td>
                          <td><?php echo $value->document_details; ?></td>

                   <?php
                   foreach ($address as $values) {
                            if($values->id==$value->address_id){

                              ?>
                              <td><?php echo $value->address; ?></td>
                              <td><?php echo $value->email; ?></td>
                              <td><a href="<?php echo base_url('Permit_Controller/delete'). '/'.$value->address_id;?>">delete</a>
                              </td>
                              <?php }}}}?>
                              </tr>
                              </body>
                                    </html>
                                    
                            

     
      
 