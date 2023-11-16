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
                    <h4>Update Sales</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>purchase/update/<?php echo $purchase['purchase_id']; ?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-4">
          					<div class="form-group">
          						<label for="date">Date</label>
          						<input type="date" name="date" id="name" class="form-control" placeholder="Enter date" value="<?php echo $purchase['date'];?>"><?php echo form_error('date'); ?>
          					</div>
          				</div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" name="name" id="code" class="form-control" placeholder="Enter patientName" value="<?php echo $purchase['name'];?>"><?php echo form_error('name'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="InvoiceNo">InvoiceNo</label>
                      <input type="text" name="invoiceNo" id="invoiceNo" class="form-control" placeholder="Enter 	InvoiceNo" value="<?php echo $purchase['invoiceNo'];?>"><?php echo form_error('InvoiceNo'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="product">Product</label>
                      <input type="text" name="product" id="product" class="form-control" placeholder="Enter product" value="<?php echo $purchase['product'];?>"><?php echo form_error('product'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" value="<?php echo $purchase['quantity'];?>"><?php echo form_error('quantity'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" value="<?php echo $purchase['price'];?>"><?php echo form_error('price'); ?>
                    </div>
                  </div>
                   
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="total">Total</label>
                      <input type="text" name="total" id="total" class="form-control" placeholder="Enter total" value="<?php echo $purchase['total'];?>"><?php echo form_error('quantity'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="due">DueAmount</label>
                      <input type="text" name="due" id="total" class="form-control" placeholder="Enter DueAmount" value="<?php echo $purchase['due'];?>"><?php echo form_error('due'); ?>
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


