
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
		  	<h3>Create Employee</h3>
		</div>

	                  <div class="card-body">
          		<form action="<?=base_url()?>employeesdata/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="name">Employee Name</label>
          						<input type="text" name="name" id="name" class="form-control" placeholder="Enter employee name">
                      <input type="hidden" name="admin_id" class="form-control" placeholder="Enter Admin" value="<?php echo $this->session->userdata('adminId');?>">
          					</div>
          				</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobile_number">Mobile Number</label>
                      <input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                  </div>
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="aadhar_number">Aadhar Number</label>
          						<input type="text" name="aadhar_number" id="aadhar_number" class="form-control" placeholder="Enter aadhar">
          					</div>
          				</div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="image">Profile</label>
                      <input type="file" name="image" id="image" class="form-control" placeholder="Enter Profile">
                    </div>
                  </div>
          				<!-- <div class="col-md-6">
          					<div class="form-group">
          						<label for="daily_wage">Daily Wage</label>
          						<input type="text" name="daily_wage" id="daily_wage" class="form-control" placeholder="Enter daily wage">
          					</div>
          				</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="minimum_wage_days">Minimum Wage Days</label>
                      <input type="text" name="minimum_wage_days" id="minimum_wage_days" class="form-control" placeholder="Enter minimum wage days">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="overtime_commission_per_hours">Over Time Commission</label>
                      <input type="text" name="overtime_commission_per_hours" id="overtime_commission_per_hours" class="form-control" placeholder="Enter Over Time Commission">
                    </div>
                  </div> -->
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="address">Address</label>
          						<textarea name="address" id="address" class="form-control" placeholder="Enter Address" rows="3"></textarea>
          					</div>
          				</div>
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
          				</div>
          			</div>
          		</form>
          	 </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>