
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
		  	<h3>Employee Attendance</h3>
		</div>

	 <div class="card-body">
              <form action="<?=base_url()?>employeesdata/searchAttdance" role="form" id="userForm" name="userForm" method="post">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <!--  <label for="dqte">Attendance Date</label> -->
                      <input type="text" name="date_search" id="datepicker" class="form-control" placeholder="DD-MM-YYYY" value="<?php echo $cc_date;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Search">
                    </div>
                  </div>
                </div>
              </form>

          		<form action="<?=base_url()?>employeesdata/insertAttendance" role="form" id="userForm" name="userForm" method="post">
          			<div class="form-row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="dqte">Attendance Date</label>
          						<input type="text" name="date" id="date" class="form-control" placeholder="DD-MM-YYYY" value="<?php echo $cc_date;?>" readonly>
          					</div>
          				</div>
                  <div class="col-md-12">
                    <table class="table table-bordered ">
                      <thead>
                        <tr>
                          <th>Employee Name</th>
                          <th>Full Day</th>
                          <th>1st Half</th>
                          <th>2st Half</th>
                          <th>Absent</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($employees) > 0){
                              for ($i=0; $i < count($employees); $i++) { ?>
                                <tr>
                                  <td><?php echo $employees[$i]['name']." - ".$employees[$i]['aadhar_number']; ?></td>
                                  <td>
                                    <div class="radio"><label><input type="radio" name="attendance_<?php echo $i;?>" value="1_<?php echo $employees[$i]['employee_id'];?>"  <?php if($employees[$i]['attendence'] == 2) echo "checked";else echo "checked";?> > Full Day</label></div>
                                    </td>
                                  <td><div class="radio"><label><input type="radio" name="attendance_<?php echo $i;?>" value="2_<?php echo $employees[$i]['employee_id'];?>" <?php if($employees[$i]['attendence'] == 2) echo "checked";?>> 1st Half</label></div></td>
                                  <td><div class="radio"><label><input type="radio" name="attendance_<?php echo $i;?>" value="3_<?php echo $employees[$i]['employee_id'];?>" <?php if($employees[$i]['attendence'] == 3) echo "checked";?>> 2nd Half</label></div></td>
                                  <td><div class="radio"><label><input type="radio" name="attendance_<?php echo $i;?>" value="4_<?php echo $employees[$i]['employee_id'];?>" <?php if($employees[$i]['attendence'] == 4) echo "checked";?>> Absent</label></div></td>
                                </tr>
                              <?php }
                            } ?>
                      </tbody>
                    </table>
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