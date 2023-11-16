<style type="text/css">
    fieldset 
    {
        border: 1px solid cornflowerblue !important;
        padding: 2px;
        margin: 0;
        min-width: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background:none;
        padding-left:10px!important;
        margin-bottom: 10px;
    }   
        
    legend
    {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px; 
        width: 25%; 
        border: 1px solid #ddd;
        border-radius: 4px; 
        padding: 5px 5px 5px 10px; 
        background-color: cornflowerblue;
        color:#ffffff;
    }
</style>
<style type="text/css">
/*@media (max-width: 200px) {
  .data-modal {
    height: 400px;
  }
}*/

@media (max-width: 200px) {
  .data-modal {
    height: 400px;
  }
  }
</style>

<div class="main-content">
      <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Employee Details</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>products/create" class="btn btn-primary pull-right" style="color:#fff;">New Product</a> -->
                  </div>
                  <div class="card-body">
                    <div class="" style="width: 100%;overflow-x: scroll;">
                     <fieldset>
                                <legend>Employee Details :</legend>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><b>Employee Name:</b> </td><td colspan="3"><?php echo $employees['name'];?></td>
                                        <td><b>Phone Number: </b></td><td colspan="3"><?php echo $employees['mobile_number'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><b>Aadhar Number:</b> </td><td colspan="3"><?php echo $employees['aadhar_number'];?></td>
                                        <td><b>Address:</b> </td><td colspan="3"><?php echo $employees['address'];?></td>
                                    </tr>
                                    
                                </table>
                                </fieldset>
                                <?php 
                                  $leavescount = $this->db->query("SELECT * FROM `employee_leaves` WHERE year = '".date('Y')."' AND employee_id = '".$employees['employee_id']."'")->result_array();
                              ?>

                                <fieldset>
                                <legend>Leaves : <?php if(count($leavescount) == 0) {?><a href="<?=base_url();?>employeesdata/leaves/<?php echo $employees['employee_id'];?>" class="btn btn-warning btn-xs pull-right" style="color:#fff;">Add Leaves</a><?php } else { ?><?php } ?></legend>
                                <table class="table table-bordered">
                                    
                                    <thead>
                                        <tr>
                                        <th>Year - Month</th>
                                        <th>Total CL</th>
                                        <th>Total EL</th>
                                        <th>CL</th>
                                        <th>EL</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php 
                                if($leaves->num_rows() > 0) {
                                    foreach ($leaves->result() as $key => $lea) { ?>
                                        <tr>
                                            <td><?php echo $lea->year;?> - 

<?php 
// PHP program to convert number to month name 
  
// Declare month number and initialize it 
$month_num =$lea->month; 
  
// Use mktime() and date() function to 
// convert number to month name 
$month_name = date("F", mktime(0, 0, 0, $month_num, 10)); 
  
// Display month name 
echo $month_name."\n"; 
  
?></td>
                                            <td><?php echo $lea->cl;?></td>
                                            <td><?php echo $lea->el;?></td>
                                            <td><?php echo $lea->cl_use;?></td>
                                            <td><?php echo $lea->el_use;?></td>
                                            <td><a data-toggle="modal" data-target="#Modaldata<?php echo $lea->employee_leave_id;?>"  class="btn btn-primary" style="color:#fff;"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                    <?php }
                                } ?>
                                    </tbody>
                                    
                                </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
    </div>

<script type="text/javascript">
    function deleteItem() {
    if (confirm("Are you sure you want to remove ?")) {
        return true;
    }
    return false;
}
</script>
    <?php 
        if($leaves->num_rows() > 0) {
            foreach ($leaves->result() as $key => $lea) { ?>
            <div class="modal fade" id="Modaldata<?php echo $lea->employee_leave_id;?>">
              <div class="modal-dialog">
                <div class="modal-content photo-modal data-modal">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Leaves</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                       <form action="<?=base_url()?>employeesdata/updateleaves/<?php echo $lea->employee_leave_id;?>/<?php echo $employees['employee_id'];?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 col-xs-12" >
                              <div class="form-group">
                                <label>CL</label>
                                 <input type="text" name="cl_use" class="form-control" placeholder="Enter CL" id="declaration" value="<?php echo $lea->cl_use;?>">
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12" >
                              <div class="form-group">
                                <label>EL</label>
                                 <input type="text" name="el_use" class="form-control" placeholder="Enter CL" id="declaration" value="<?php echo $lea->el_use;?>">
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                              <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                          </div>
                        </div>
                   </form>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>

        <?php } 
         } ?>
