
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

  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
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
                    <h4>Create Hospital Management</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>accountant/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name"> Select Type</label>
                      <select class="form-control" name="type_id" >
                        <option value="">Select Type</option>
                        <?php if($types->num_rows() > 0) {
                          foreach ($types->result() as $key => $ty) {?>
                            <option value="<?php echo $ty->type_id;?>"><?php echo $ty->type_name;?></option>
                          <?php }

                        } ?>
                      </select>
                    </div>
                  </div>

          				<div class="col-md-4">
          					<div class="form-group">
          						<label for="name"> Name</label>
          						<input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $this->input->post('name')?>"><?php echo form_error('name'); ?>
          					</div>
          				</div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" id="name" class="form-control" placeholder="Enter email" value="<?php echo $this->input->post('email')?>"><?php echo form_error('email'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="name" class="form-control" placeholder="Enter password" value="<?php echo $this->input->post('password')?>"><?php echo form_error('email'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="address" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $this->input->post('address')?>"><?php echo form_error('address'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" value="<?php echo $this->input->post('phone')?>"><?php echo form_error('phone'); ?>
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


