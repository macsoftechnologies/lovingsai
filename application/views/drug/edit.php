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
                    <h4>Update medicne</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
              <form action="<?=base_url()?>drug/update/<?php echo $drug['medicine_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
              <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Product_type</label>
                      <input type="text" name="product_type" id="Product_type" class="form-control" placeholder="Enter ProductType" value="<?php echo $drug['product_type'];?>"><?php echo form_error('product_type'); ?>
                    </div>
                  </div>  
              <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $drug['name'];?>"><?php echo form_error('name'); ?>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="aliasName">AliasName</label>
                      <input type="text" name="aliasname" id="aliasName" class="form-control" placeholder="Enter aliasName" value="<?php echo $drug['aliasname'];?>"><?php echo form_error('aliasname'); ?>
                    </div>
                  </div>  
              <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="generic">Generic</label>
                      <input type="text" name="generic" id="generic" class="form-control" placeholder="Enter generic" value="<?php echo $drug['generic'];?>"><?php echo form_error('generic'); ?>
                    </div>
                  </div>

                <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Status</label>
                      <input type="text" name="status" id="name" class="form-control" placeholder="" value="<?php echo $drug['status'];?>"><?php echo form_error('manufacturing_company'); ?>
                    </div>
                  </div>
                   
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description"> Description</label>
                      <textarea name="description" id="editor1" class="form-control" placeholder="Enter Description"><?php echo $drug['description'];?></textarea><?php echo form_error('description'); ?>
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


