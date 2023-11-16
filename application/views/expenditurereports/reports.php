
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

 .dropdown-select {
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
    background-color: #fff;
    border-radius: 6px;
    border: solid 1px #eee;
    box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    /*float: left;*/
    font-size: 14px;
    font-weight: normal;
    /*height: 42px;*/
    /*line-height: 40px;*/
    outline: none;
    padding-left: 18px;
    padding-right: 30px;
    position: relative;
    text-align: left !important;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;

}

.dropdown-select:focus {
    background-color: #fff;
}

.dropdown-select:hover {
    background-color: #fff;
}

.dropdown-select:active,
.dropdown-select.open {
    background-color: #fff !important;
    border-color: #bbb;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown-select:after {
    height: 0;
    width: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #777;
    -webkit-transform: origin(50% 20%);
    transform: origin(50% 20%);
    transition: all 0.125s ease-in-out;
    content: '';
    display: block;
    margin-top: -2px;
    pointer-events: none;
    position: absolute;
    right: 10px;
    top: 50%;
}

.dropdown-select.open:after {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

.dropdown-select.open .list {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    pointer-events: auto;
}

.dropdown-select.open .option {
    cursor: pointer;
}

/*.dropdown-select.wide {
    width: 100%;
}*/

.dropdown-select.wide .list {
    left: 0 !important;
    right: 0 !important;
}

.dropdown-select .list {
    box-sizing: border-box;
    transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
    background-color: #fff;
    border-radius: 6px;
    margin-top: 4px;
    padding: 3px 0;
    opacity: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 999;
    max-height: 250px;
    overflow: auto;
    border: 1px solid #ddd;
}

.dropdown-select .list:hover .option:not(:hover) {
    background-color: transparent !important;
}
.dropdown-select .dd-search{
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0.5rem;
}

.dropdown-select .dd-searchbox{
  width:90%;
  padding:0.5rem;
  border:1px solid #999;
  border-color:#999;
  border-radius:4px;
  outline:none;
}
.dropdown-select .dd-searchbox:focus{
  border-color:#12CBC4;
}

.dropdown-select .list ul {
    padding: 0;
}

.dropdown-select .option {
    cursor: default;
    font-weight: 400;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    transition: all 0.2s;
    list-style: none;
}

.dropdown-select .option:hover,
.dropdown-select .option:focus {
    background-color: #f6f6f6 !important;
}

.dropdown-select .option.selected {
    font-weight: 600;
    color: #12cbc4;
}

.dropdown-select .option.selected:focus {
    background: #f6f6f6;
}

.dropdown-select a {
    color: #aaa;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.dropdown-select a:hover {
    color: #666;
}

</style>

<div class="main-content">
      <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
        <section class="section" >
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <a href="<?=base_url();?>reports/Export_Database/macsoforg.ipagemysql.com/expenditure/expenditure/expenditure" class="btn btn-success btn-xs">SQL</a> -->
                    <h4>Generate Expenditure Report</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
                    <form action="<?=base_url()?>expenditurereports/reports" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                    <div class="col-md-12 col-xs-12">
                      <div class="row">

                            <div class="col-md-4 col-xs-12" >
                              <div class="form-group">
                                <!-- <input type="text" name="declaration" class="form-control" placeholder="Enter Declaration" > -->
                                <label>From Date</label>
                                 <input type="date" name="from_date" class="form-control declaration" placeholder="Enter From Date" id="declaration" value="<?php echo $fromdate;?>">
                               <!--  <textarea class="form-control" name="about_me" size="100" placeholder="About Me"></textarea> -->
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12" >
                              <div class="form-group">
                                <!-- <input type="text" name="declaration" class="form-control" placeholder="Enter Declaration" > -->
                                <label>To Date</label>
                                 <input type="date" name="to_date" class="form-control declaration" placeholder="Enter To Date" id="declaration" value="<?php echo $todate;?>">
                               <!--  <textarea class="form-control" name="about_me" size="100" placeholder="About Me"></textarea> -->
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px;">
                              <br>
                              <input type="submit" class="btn btn-primary" value="Generate Report">
                              <!--  <a href="#" name="submit" class="edit-button declarationUpdate btn btn-primary"  >Generate Report</a> -->
                            </div>
                      </div>
                    </div>
                  </form>
                  </div>

                  <div class="card-body">
                    <div class="" >
                      <table class="table table-striped" id="datatables" style="width: 90%;overflow-x: scroll;">
                        <thead>
                          <tr>
                            
                            <th class="text-center" width="15%">S.no</th>
                            <th>Date</th>
                            <th>Expenditure Type</th>
                            <th>Amount</th>
                            <th>Paid To</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php if($expenditures->num_rows() > 0) {
                            foreach ($expenditures->result() as $key => $of) { ?>
                          <tr>
                              
                             <td class="text-center"><?php echo $key+1;?></td>
                            <td><?php echo date('d-m-Y',strtotime($of->date));?></td>
                            <td><?php echo $of->expenditure_type;?></td>
                            <td><?php echo $of->amount;?></td>
                            <td><?php echo $of->paidto;?></td>
                            <td><?php echo $of->description;?></td>
                              
                          </tr>

                          
                        <?php }
                      } ?>
                          
                         
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


<script type="text/javascript">
    function yesnoCheck(that) {
    if (that.value == "BANK") {
            document.getElementById("templates1").style.display = "block";
            document.getElementById("templates2").style.display = "block";
            document.getElementById("templates3").style.display = "block";
            document.getElementById("templates4").style.display = "block";
            document.getElementById("templates5").style.display = "none";            
        } else if(that.value == "CHEQUE"){
            document.getElementById("templates1").style.display = "none";
            document.getElementById("templates2").style.display = "none";
            document.getElementById("templates3").style.display = "none";
            document.getElementById("templates4").style.display = "none";
            document.getElementById("templates5").style.display = "block";
        } else {
          document.getElementById("templates1").style.display = "none";
            document.getElementById("templates2").style.display = "none";
            document.getElementById("templates3").style.display = "none";
            document.getElementById("templates4").style.display = "none";
            document.getElementById("templates5").style.display = "none";
        }
    }
</script>



<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>


<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.15/r-2.1.1/datatables.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.15/r-2.1.1/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script type="text/javascript" src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>

<script type="text/javascript" src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'print', 'excel', 'pdf'
            ]

        });
      
      $('.btn-copy').click(function(){
        $('.buttons-copy').trigger('click');
      });
      $('.btn-csv').click(function(){
        $('.buttons-csv').trigger('click');
      });
      $('.btn-excel').click(function(){
        $('.buttons-excel').trigger('click');
      });
      $('.btn-pdf').click(function(){
        $('.buttons-pdf').trigger('click');
      });
      $('.btn-print').click(function(){
        $('.buttons-print').trigger('click');
      });
    });

</script>


<script type="text/javascript">
      $(document).ready(function() {
        $('#datatables1').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'print', 'excel', 'pdf'
            ]

        });
      
      $('.btn-copy').click(function(){
        $('.buttons-copy').trigger('click');
      });
      $('.btn-csv').click(function(){
        $('.buttons-csv').trigger('click');
      });
      $('.btn-excel').click(function(){
        $('.buttons-excel').trigger('click');
      });
      $('.btn-pdf').click(function(){
        $('.buttons-pdf').trigger('click');
      });
      $('.btn-print').click(function(){
        $('.buttons-print').trigger('click');
      });
    });

</script>

