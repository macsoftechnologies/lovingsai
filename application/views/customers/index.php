
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

  #pagination>a {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #666;
    text-decoration: none;
    border: 1px solid #EEE;
    background-color: #FFF;
    box-shadow: 0px 0px 10px 0px #eee
}

#pagination>strong {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: white;
    text-decoration: none;
    background-color: #016db5;
    border: 1px solid #ddd;
    box-shadow: 0px 0px 10px 0px #eee

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
                    <h4>Customers</h4>
                    <!-- <a href="<?=base_url()?>customers/excelgenerateXls" class="btn btn-success btn-xs pull-right"  data-toggle="tooltip" data-placement="left" title="Export in excel" style="margin-left: 8px;"><i class="fa fa-files-o"></i>Export in excel</a> -->
                  </div>
                  <div class="card-body">
                    <div class="" style="width: 100%;overflow-x: scroll;">
                      <table class="table table-striped" id="employeeList">
                        <thead>
                          <tr>
                            <th class="text-center" width="15%">S.no</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Pincode</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                         
                        </tbody>
                      </table>
                      <div id='pagination' class="pull-right"></div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
    </div>
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>

    <script type='text/javascript'>
$(document).ready(function() {
    createPagination(0);
    $('#pagination').on('click','a',function(e){
        e.preventDefault(); 
        var pageNum = $(this).attr('data-ci-pagination-page');
        createPagination(pageNum);
    });
    function createPagination(pageNum){
        $.ajax({
            url: '<?=base_url()?>Products/loadData/'+pageNum,
            type: 'get',
            dataType: 'json',
            success: function(responseData){
                $('#pagination').html(responseData.pagination);
                paginationData(responseData.empData);
            }
        });
    }
    function paginationData(data) {
        $('#employeeList tbody').empty();
        for(emp in data){
            var empRow = "<tr>";
            var count = parseFloat(emp)+parseFloat(1);
            var date = new Date(data[emp].created_at);
            empRow += "<td><span class='btn btn-primary btn-xs'>"+ count +"</span></td>";


            
            empRow += "<td>"+ data[emp].name +"</td>";
            empRow += "<td>"+ data[emp].mobile +"</td>";
            empRow += "<td>"+ data[emp].email +"</td>";
            empRow += "<td>"+ data[emp].pincode +"</td>";
            empRow += "<td><a href='<?=base_url()?>customers/delete/"+ data[emp].user_id +"' data-toggle='tooltip' data-placement='top' title='Delete' onclick='return deleteItem();' class='btn btn-danger btn-action mr-1'><i class='fa fa-trash'></i></a></td>";
            empRow += "</tr>";
            $('#employeeList tbody').append(empRow);                    
        }
    }
});
</script>

<script type="text/javascript">
    function deleteItem() {
    if (confirm("Are you sure you want to remove ?")) {
        return true;
    }
    return false;
}
</script>
