<section class="content-header">
    <h1>
        Employee Transactions
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dahsboard</a></li>
        <li class="active">Employee Transactions</li>
    </ol>
    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header">
                    <a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left"  data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i></a>
                    <h3 class="box-title">Make Employee Transaction</h3>
                </div>
                <div class="box-body">
                        <div class="form">
                            <div class="row">
                                <form action="<?=base_url()?>employee/maketransaction/<?php echo $emp_id;?>" method="post" name="show" id="showform">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payment Type :</label>
                                            <select class="form-control select2" style="width: 100%;" name="transaction_type">
                                                <option value="">Select Type</option>
                                                <?php if($transactonTypes->num_rows() > 0){
                                                    foreach ($transactonTypes->result() as $type) { ?>
                                                    <option value="<?php echo $type->payment_type_id;?>"><?php echo $type->payment_type_name;?></option>
                                                    <?php }
                                                }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="datepicker" name="txn_date">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Amount :</label>
                                            <input type="text" class="form-control" name="amount">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Feedback :</label>
                                            <textarea class="form-control" name="feedback"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Make Transaction">
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Employee Transactions</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Transaction ID</th>
                                <th>Payment Type</th>
                                
                                <th>Amount</th>
                                <th>Transaction Date</th>
                                <th>Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            transactons
                            <?php if($transactons->num_rows() > 0){
                                foreach ($transactons->result() as $key => $tran) { ?>
                                    <tr>
                                        <td><span class="btn btn-xs btn-primary"><?php echo $key+1; ?></span></td>
                                        <td><?php echo $tran->transaction_id; ?></td>
                                        <td><?php echo $tran->payment_type_name; ?></td>
                                        <td><?php if($tran->paymeny_type_id == 3){
                                            echo '<span class="btn btn-xs btn-success">'.$tran->amount.'</span>';
                                        }if($tran->paymeny_type_id == 4){
                                            echo '<span class="btn btn-xs btn-info">'.$tran->amount.'</span>';
                                        }?></td>
                                        <td><?php echo date('d, M Y', strtotime($tran->txn_date)); ?></td>
                                        <td><?php echo $tran->feedback; ?></td>
                                    </tr>
                                <?php }
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>