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

                                <fieldset>
                                <legend>Leaves :</legend>

                                <div class="col-md-12">
                    <div class="page-content page-container" id="page-content">
                       <div class="padding">
                           <div class="row container d-flex justify-content-center">
                               <div class="col-lg-12 grid-margin stretch-card">
                                   <div class="card">
                                       <div class="card-body">
                                           <h4 class="card-title text-center">Leaves Details</h4>
                                           <hr>
                                           <div class="table-responsive">
                                            <form action="<?=base_url()?>employeesdata/insertleaves/<?php echo $employees['employee_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                               <table id="faqs" class="table table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Year</th>
                                                           <th>Month</th>
                                                           <th>CL</th>
                                                           <th>EL</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>

                                                    <?php
                                                    $year = date('Y');
                                                    $month = date('m');
                                                    $months = 13 - $month; 
                                                    for ($i=0; $i < 12; $i++) { 
                                                    ?>
                                                       <tr>
                                                        <td><input type="text" name="year[]" class="form-control" placeholder="Enter Year" value="<?php echo date('Y');?>"></td>
                                                        <td><input type="text" name="month[]" class="form-control" placeholder="Enter Month" value="<?php echo $i+1;?>"></td>
                                                        <td><input type="text" name="cl[]" class="form-control" placeholder="Enter CL" value="0"></td>
                                                        <td><input type="text" name="el[]" class="form-control" placeholder="Enter EL" value="0"></td>
                                                       </tr>
                                                   <?php } ?>
                                                   </tbody>
                                               </table>

                                               <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
                                                </div>
                                           </form>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                  </div>
                                
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
