
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
                    <h3>Employee Details</h3>
                    <a href="<?=base_url()?>employeesdata/create" class="btn btn-primary btn-xs pull-right"  data-toggle="tooltip" data-placement="left" title="Create Employee" style="margin-left: 8px;"><i class="fa fa-plus"></i> Create</a>
                    <!-- <a href="<?=base_url()?>employeesdata/attendance" class="btn btn-primary btn-xs pull-right"  data-toggle="tooltip" data-placement="left" title="Employee Attendance"><i class="fa fa-book"></i> Attendance</a> -->
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <!-- <th>Balance</th> -->
                                <th>Phone</th>
                                <th>Aadhar Number</th>
                                <!-- <th>Daily Wage</th>
                                <th>Minimum Wage</th>
                                <th>OverTime</th> -->
                                <th>Address</th>
                                <th>Profile</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if($employees->num_rows() > 0) {
                                    foreach ($employees->result() as $key => $emp) { ?>
                                       <tr>
                                        <td><a href="<?=base_url()?>employeesdata/attendlist/<?php echo $emp->employee_id;?>" data-toggle="tooltip" data-placement="top" title="Attendance"><button class="btn btn-primary btn-xs"><?php echo $key+1;?></button></a></td>
                                        <td><?php echo $emp->name; ?></td>
                                        <td><?php echo $emp->mobile_number; ?></td>
                                        <td><?php echo $emp->aadhar_number; ?></td>
                                        <!-- <td><?php echo $emp->daily_wage; ?></td>
                                        <td><?php echo $emp->minimum_wage_days; ?></td>
                                        <td><?php echo $emp->overtime_commission_per_hours; ?></td> -->
                                        <td><?php echo $emp->address; ?></td>
                                       <td><img src="<?php echo $emp->image; ?>" width="40" height="40"></td>
                                        <td>
                                            <a href="<?=base_url()?>employeesdata/edit/<?php echo $emp->employee_id;?>" data-toggle="tooltip" data-placement="top" title="Edit"><button class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>
                                            <a href="<?=base_url()?>employeesdata/delete/<?php echo $emp->employee_id;?>" data-toggle="tooltip" data-placement="top" title="Delete"><button class="btn btn-xs btn-danger" onclick="return deleteItem();"><i class="fa fa-trash"></i></button></a>
                                            <a href="<?=base_url()?>employeesdata/view/<?php echo $emp->employee_id;?>" data-toggle="tooltip" data-placement="top" title="Edit"><button class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></button></a>
                                        </td>
                                       </tr>
                                    <?php }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>