
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
                     <a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i></a>
                    <h3>Attendance Details</h3>
                </div>
                <div class="card-body">
                <form action="<?=base_url()?>employeesdata/attendlist/<?php echo $employee_id;?>" role="form" id="userForm" name="userForm" method="post">
                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>From :</label>
                                <div class="input-group date">
                                    <!-- <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div> -->
                                    <input type="date" class="form-control pull-right" id="datepicker" name="fromdate" placeholder="YYYY-MM-DD" value="<?php echo $from_dt; ?>">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>To :</label>
                                <div class="input-group date">
                                    <!-- <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div> -->
                                    <input type="date" class="form-control pull-right" id="todate" name="todate"  placeholder="YYYY-MM-DD" value="<?php echo $to_dt; ?>">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
                        </div>
                    </div>
                </form>
               </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                       <tbody>
                            <?php if($attendlist->num_rows() > 0){
                                foreach ($attendlist->result() as $key => $attend) { ?>
                                    <tr>
                                        <td><span class="btn btn-primary btn-xs"><?php echo $key+1;?></span></td>
                                        <td><?php echo date('d, M Y', strtotime($attend->date));?></td>
                                        <td><?php if($attend->attendence < 4){echo '<span class="btn btn-success btn-xs">'.$attend->type;}if($attend->attendence == 4){
                                            echo '<span class="btn btn-xs btn-danger">'.$attend->type.'</span>';
                                        }?></td>
                                    </tr>
                                <?php }
                            }?>
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