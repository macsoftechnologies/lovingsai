
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
                    <h4>Update Hospital Management</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>accountant/update/<?php echo $accountant['admin_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name"> Select Type</label>
                      <select class="form-control" name="type_id" >
                        <option value="<?php echo $accountant['type_id'];?>"><?php echo $accountant['type_name'];?></option>
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
          						<label for="name">Name</label>
          						<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="<?php echo $accountant['name'];?>"><?php echo form_error('name'); ?>
          					</div>
          				</div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo $accountant['email'];?>"><?php echo form_error('email'); ?>
                    </div>
                  </div>

                  
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="password">password</label>
                       <input type="password" name="offer_banner_image" id="offer_banner_image" class="form-control" placeholder="Enter Image" value="<?php echo $offer['offer_banner_image'];?>">
                       <p style="color: red; font-size: 12px;">Please Upload Less than 200KB Images</p>
                    </div>
                  </div> -->
                  <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Offer Description</label>
                      <textarea name="offer_desc" id="editor1" class="form-control" placeholder="Enter Description"><?php echo $offer['offer_desc'];?></textarea><?php echo form_error('offer_desc'); ?>
                    </div>
                  </div> -->

                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="password">password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" value="<?php echo $accountant['password'];?>"><?php echo form_error('password'); ?>
                    </div>
                  </div> -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="address" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $accountant['address'];?>"><?php echo form_error('address'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="<?php echo $accountant['phone'];?>"><?php echo form_error('phone'); ?>
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


        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Password</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
              <form action="<?=base_url()?>accountant/updatepassword/<?php echo $accountant['admin_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                <div class="form-row">

                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="password">password</label>
                       <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" >
                    </div>
                  </div>
                  
                   <!-- <td></td> -->
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update Password!">
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


