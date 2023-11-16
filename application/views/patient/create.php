
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
                    <h4>Add Patient</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>patient/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-4">
                    <div class="form-group">
                      <label for="name"> Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $this->input->post('name')?>"><?php echo form_error('name'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="birth_date">Date Of Birth</label>
                      <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Enter birth_date" value="<?php echo $this->input->post('birth_date')?>">
                     </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" value="<?php echo $this->input->post('age')?>"><?php echo form_error('age'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="sex" name="sex" id="name" class="form-control" placeholder="Enter Sex" value="<?php echo $this->input->post('sex')?>"><?php echo form_error('sex'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="mobile">WhatsAppNo</label>
                      <input type="text" name="mobile" id="phone" class="form-control" placeholder="Enter Number" value="<?php echo $this->input->post('mobile')?>"><?php echo form_error('mobile'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" value="<?php echo $this->input->post('phone')?>"><?php echo form_error('phone'); ?>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="height">Height</label>
                      <input type="text" name="height" id="account_opening" class="form-control" placeholder="Enter height" value="<?php echo $this->input->post('height')?>"><?php echo form_error('height'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="weight">Weight</label>
                      <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="<?php echo $this->input->post('weight')?>"><?php echo form_error('weight'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                   <div class="form-group">
                    <label for="bmi">BMI</label>
                    <input type="text" name="bmi" id="bmi" class="form-control" placeholder="BMI" readonly>
                     </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                    <label for="diabetes">Diabetes</label>
                      <input type="text" name="diabetes" id="diabetes" class="form-control" placeholder="Enter Diabetes" value="<?php echo $this->input->post('diabetes')?>"><?php echo form_error('diabetes'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                    <label for="hypertention">Hypertention</label>
                      <input type="text" name="hypertention" id="hypertention" class="form-control" placeholder="Enter hypertention" value="<?php echo $this->input->post('hypertention')?>"><?php echo form_error('hypertention'); ?>
                    </div>
                  </div>

                 <!--  <div class="col-md-4">
                    <div class="form-group">
                    <label for="provisionalDiagnosis">Provisional Diagnosis</label>
                      <input type="text" name="provisionalDiagnosis" id="provisionalDiagnosis" class="form-control" placeholder="Enter ProvisionalDiagnosis" value="<?php echo $this->input->post('provisionalDiagnosis')?>"><?php echo form_error('provisionalDiagnosis'); ?>
                    </div>
                  </div> -->


                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="bp">BP</label>
                      <input type="text" name="bp" id="bp" class="form-control" placeholder="Enter BP" value="<?php echo $this->input->post('bp')?>"><?php echo form_error('bp'); ?>
                    </div>
                  </div>
                     
                                    
                                  
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="alcohol">Alcohol</label>
                      <input type="text" name="alcohol" id="alcohol" class="form-control" placeholder="Enter alcohol" value="<?php echo $this->input->post('alcohol')?>"><?php echo form_error('alcohol'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="smoking">Smoking</label>
                      <input type="boolean" name="smoking" id="smoking" class="form-control" placeholder="Enter smoking" value="<?php echo $this->input->post('smoking')?>"><?php echo form_error('smoking'); ?>
                    </div>
                  </div>

                   
                 <!--  <div class="col-md-4">
                    <div class="form-group">
                      <label for="no">No</label>
                      <input type="text" name="no" id="no" class="form-control" placeholder="Enter No" value="<?php echo $this->input->post('no')?>"><?php echo form_error('no'); ?>
                    </div>
                  </div>
 -->
               <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation">Occupation</label>
                      <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Enter occupation" value="<?php echo $this->input->post('occupation')?>"><?php echo form_error('occupation'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="pincode">Pincode</label>
                      <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode" value="<?php echo $this->input->post('pincode')?>"><?php echo form_error('pincode'); ?>
                    </div>
                  </div>
                  
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="address">village</label>
                      <input type="address" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $this->input->post('address')?>"><?php echo form_error('address'); ?>
                    </div>
                  </div>


                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="address1">State</label>
                      <input type="text" name="address1" id="address1" class="form-control" placeholder="Enter city" value="<?php echo $this->input->post('address1')?>"><?php echo form_error('address1'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="district">District</label>
                      <input type="text" name="address2" id="address2" class="form-control" placeholder="Enter district" value="<?php echo $this->input->post('address2')?>"><?php echo form_error('address2'); ?>
                    </div>
                  </div>
                  
                   
                  
                   <!-- <td></td> -->
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
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


<script type="text/javascript">
  $(document).ready(function() {
     
    function calculateAge(birthDate) {
      const today = new Date();
      const dob = new Date(birthDate);
      const age = today.getFullYear() - dob.getFullYear();
      const monthDiff = today.getMonth() - dob.getMonth();
      if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
        return age - 1;
      }
      return age;
    }

     
    $('#birth_date').on('change', function() {
      const birthDate = $(this).val();
      const age = calculateAge(birthDate);
      $('#age').val(age);
    });
  });
</script>

<script>
   $(document).ready(function() {
  $('#pincode').on('blur', function() {
    const pincode = $(this).val();

    if (pincode.trim() !== '') {
      $.ajax({
        url: `https://api.postalpincode.in/pincode/${pincode}`,
        method: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response && response[0].PostOffice.length > 0) {
            const data = response[0].PostOffice[0];
 
            let address1 = data.Region || '';
            let address = data.Block || '';
            let address2 = data.District || '';
            
            $('#address1').val(address1.trim());
            $('#address').val(address.trim());
            $('#address2').val(address2.trim());

         
          } else {
            alert('Invalid pincode or no data found.');
          }
        },
        error: function() {
          alert('Error fetching data. Please try again later.');
        }
      });
    }
  });
});


</script>


