
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
                    <h4>Update Expenditures</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>expenditures/update/<?php echo $expenditures['expenditures_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-4">
          					<div class="form-group">
          						<label for="date">Date</label>
          						<input type="date" name="date" id="name" class="form-control" placeholder="Enter date" value="<?php echo $expenditures['date'];?>"><?php echo form_error('date'); ?>
          					</div>
          				</div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="expenditure_type">Expenditure Type</label>
                      <input type="text" name="expenditure_type" id="expenditure_type" class="form-control" placeholder="Enter expenditure_type " value="<?php echo $expenditures['expenditure_type'];?>"><?php echo form_error('expenditure_type'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="amount">Amount</label>
                      <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter amount" value="<?php echo $expenditures['amount'];?>"><?php echo form_error('amount'); ?>
                    </div>
                  </div>
                 
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="paidto">Paid To</label>
                      <input type="text" name="paidto" id="paidto" class="form-control" placeholder="Enter 	paidto" value="<?php echo $expenditures['paidto'];?>"><?php echo form_error('paidto'); ?>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description" id="description" class="form-control" placeholder="Enter description" value="<?php echo $expenditures['description'];?>"><?php echo form_error('description'); ?>
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


