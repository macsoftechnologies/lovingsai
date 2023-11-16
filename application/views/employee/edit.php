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
		  	<h3>Update Employee</h3>
		</div>

		 <div class="card-body">
          		<form action="<?=base_url()?>employeesdata/update/<?php echo $employees['employee_id'];?>" role="form" id="userForm" name="userForm" method="post"  enctype="multipart/form-data"> 
          			<div class="form-row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="name">Employee Name</label>
          						<input type="text" name="name" id="name" class="form-control" value="<?php echo $employees['name']; ?>">
          					</div>
          				</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobile_number">Mobile Number</label>
                      <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="<?php echo $employees['mobile_number']; ?>">
                    </div>
                  </div>
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="aadhar_number">Aadhar Number</label>
          						<input type="text" name="aadhar_number" id="aadhar_number" class="form-control" value="<?php echo $employees['aadhar_number']; ?>">
          					</div>
          				</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image">Profile</label>
                      <input type="file" name="image" id="image" class="form-control" placeholder="Enter Profile"  value="<?php echo $employees['image'];?>">
                       <?php if($employees['image'] != ""){ ?>
                          <img src="<?php echo $employees['image'];?>" width="80" height="60" >
                        <?php }else{
                          echo "No Image";
                        } ?>
                    </div>
                  </div>
          				<!-- <div class="col-md-6">
          					<div class="form-group">
          						<label for="daily_wage">Daily Wage</label>
          						<input type="text" name="daily_wage" id="daily_wage" class="form-control" value="<?php echo $employees['daily_wage']; ?>">
          					</div>
          				</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="minimum_wage_days">Minimum Wage Days</label>
                      <input type="text" name="minimum_wage_days" id="minimum_wage_days" class="form-control" value="<?php echo $employees['minimum_wage_days']; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="overtime_commission_per_hours">Over Time Commission</label>
                      <input type="text" name="overtime_commission_per_hours" id="overtime_commission_per_hours" class="form-control" value="<?php echo $employees['overtime_commission_per_hours']; ?>">
                    </div>
                  </div> -->
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="address">Address</label>
          						<textarea name="address" id="address" class="form-control" rows="3"><?php echo $employees['address']; ?></textarea>
          					</div>
          				</div>
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update">
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