
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
                    <h4>Update Appointment</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>appointment/update/<?php echo $appointment['patient_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Patient Id</label>
                      <input type="text" name="patient_code" id="patient_code" class="form-control" placeholder="Enter Patient Id" value="<?php echo $appointment['patient_code'];?>"><?php echo form_error('patient_code'); ?>
                    </div>
                  </div> -->
          				<div class="col-md-4">
          					<div class="form-group">
          						<label for="name">Name</label>
          						<input type="text" name="Name" id="name" class="form-control" placeholder="Enter Name" value="<?php echo $appointment['name'];?>"><?php echo form_error('Name'); ?>
          					</div>
          				</div>
                  <div class="col-md-4">
          					<div class="form-group">
          						<label for="mobile">Mobile Number</label>
          						<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile" value="<?php echo $appointment['phone'];?>"><?php echo form_error('mobile'); ?>
          					</div>
          				</div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="appointment_date">Appointment Date</label>
                      <input type="date" name="appointment_date" id="appointment_date" class="form-control" placeholder="dd/mm/yy" value="<?php echo $appointment['appointment_date'];?>"><?php echo form_error('appointment_date'); ?>
                    </div>
                  </div>

                 <!--  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status">status</label>
                      <input type="text" name="status" id="status" class="form-control" placeholder="status" value="<?php echo $appointment['status'];?>"><?php echo form_error('status'); ?>
                    </div>
                  </div> -->



                  
                   

                  

                  

                  
                   <!-- <td></td> -->
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update">
          				</div>
          			<!-- </div> -->
          		</form>
          	 </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>



<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?=base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>



<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>


