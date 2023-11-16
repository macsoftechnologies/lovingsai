
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
                    <h4>Update Patient</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>patient/update/<?php echo $patient['patient_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-4">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="<?php echo $patient['name'];?>"><?php echo form_error('name'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Age">Age</label>
                      <input type="number" name="age" id="age" class="form-control" placeholder="Enter age" value="<?php echo $patient['age'];?>"><?php echo form_error('age'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="birth_date">Date Of Birth</label>
                      <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Enter date" value="<?php echo $patient['birth_date'];?>"><?php echo form_error('birth_date'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="text" name="sex" id="sex" class="form-control" placeholder="Enter sex" value="<?php echo $patient['sex'];?>"><?php echo form_error('sex'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="<?php echo $patient['phone'];?>"><?php echo form_error('phone'); ?>
                    </div>
                  </div>

                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="mobile">WhatsApp No</label>
                      <input type="number" name="mobile" id="birth_date" class="form-control" placeholder="Enter Number" value="<?php echo $patient['mobile'];?>"><?php echo form_error('mobile'); ?>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="height">Height</label>
                      <input type="text" name="height" id="height" class="form-control" placeholder="Enter height" value="<?php echo $patient['height'];?>"><?php echo form_error('height'); ?>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="weight">Weight</label>
                      <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="<?php echo $patient['weight'];?>"><?php echo form_error('weight'); ?>
                    </div>
                  </div>
                   
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="text">BMI</label>
                      <input type="bmi" name="bmi" id="bmi" class="form-control" placeholder="" value="<?php echo $patient['bmi'];?>"><?php echo form_error('bmi'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="diabetes">Diabetes</label>
                      <input type="text" name="diabetes" id="diabetes" class="form-control" placeholder="" value="<?php echo $patient['diabetes'];?>"><?php echo form_error('diabetes'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="hypertention">Hypertention</label>
                      <input type="text" name="hypertention" id="hypertention" class="form-control" placeholder="" value="<?php echo $patient['hypertention'];?>"><?php echo form_error('hypertention'); ?>
                    </div>
                  </div>

                 <!--  <div class="col-md-4">
                    <div class="form-group">
                      <label for="provisionalDiagnosis">ProvisionalDiagnosis</label>
                      <input type="text" name="provisionalDiagnosis" id="ProvisionalDiagnosis" class="form-control" placeholder="" value="<?php echo $patient['provisionalDiagnosis'];?>"><?php echo form_error('provisionalDiagnosis'); ?>
                    </div>
                  </div> -->
 
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="bp">BP</label>
                      <input type="text" name="bp" id="bp" class="form-control" placeholder="" value="<?php echo $patient['bp'];?>"><?php echo form_error('bp'); ?>
                    </div>
                  </div>


                  

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="text">Alcohol</label>
                      <input type="text" name="alcohol" id="alcohol" class="form-control" placeholder="" value="<?php echo $patient['alcohol'];?>"><?php echo form_error('alcohol'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="smoking">Smoking</label>
                      <input type="boolean" name="smoking" id="smoking" class="form-control" placeholder="Enter weight" value="<?php echo $patient['smoking'];?>"><?php echo form_error('smoking'); ?>
                    </div>
                  </div>
                  
                 <!--    <div class="col-md-4">
                    <div class="form-group">
                      <label for="no">No</label>
                      <input type="text" name="no" id="no" class="form-control" placeholder="" value="<?php echo $patient['no'];?>"><?php echo form_error('no'); ?>
                    </div>
                  </div>
 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation">Occpation</label>
                      <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Enter occupation" value="<?php echo $patient['occupation'];?>"><?php echo form_error('occupation'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="address">Village</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $patient['address'];?>"><?php echo form_error('address'); ?>
                    </div>
                  </div>

                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="address1">State</label>
                      <input type="text" name="address1" id="address1" class="form-control" placeholder="" value="<?php echo $patient['address1'];?>"><?php echo form_error('address1'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="address2">District</label>
                      <input type="text" name="address2" id="address2" class="form-control" placeholder="" value="<?php echo $patient['address2'];?>"><?php echo form_error('address2'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="pincode">Pincode</label>
                      <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Enter pincode" value="<?php echo $patient['pincode'];?>"><?php echo form_error('pincode'); ?>
                    </div>
                  </div>

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


