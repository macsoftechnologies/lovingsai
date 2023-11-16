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
    <?php if ($this->session->flashdata('success_msg')) { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success_msg'); ?></div>
    <?php } ?>

    <?php if ($this->session->flashdata('error_msg')) { ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error_msg'); ?></div>
    <?php } ?>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Sales</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>sales/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="text" name="date" id="name" class="form-control" placeholder="Enter date" value="<?php echo $this->input->post('date') ?>"><?php echo form_error('date'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="patient_id">Patient</label>
                                           <!--  <select class="form-control" name="patient_id">
                                                <option value="">Select Patient</option>
                                                <?php if (!empty($patients) && $patients->num_rows() > 0) {
                                                    foreach ($patients->result() as $patient) { ?>
                                                        <option value="<?php echo $patient->patient_id; ?>"><?php echo $patient->name; ?></option>
                                                <?php }
                                                } ?>
                                            </select> -->
                                            <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Enter Patient Name" value="<?php echo $this->input->post('patient_name') ?>"><?php echo form_error('patient_name'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="InvoiceNo">InvoiceNo</label>
                                            <input type="text" name="InvoiceNo" id="InvoiceNo" class="form-control" placeholder="Enter InvoiceNo" value="<?php echo $this->input->post('InvoiceNo') ?>"><?php echo form_error('InvoiceNo'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="status">status</label>
                                            <input type="text" name="status" id="status" class="form-control" placeholder="Enter status" value="<?php echo $this->input->post('status') ?>"><?php echo form_error('status'); ?>
                                        </div>
                                    </div>

                                     <!-- <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="weight">Amount</label>
                                          <input type="text" name="systems" id="systems" class="form-control" placeholder="Enter Amount" value="0" readonly><?php echo form_error('systems'); ?>
                                        </div>
                                      </div> -->
                                </div>

                                <div class="col-md-12">
                    <div class="page-content page-container" id="page-content">
                       <div class="padding">
                           <div class="row container d-flex justify-content-center">
                               <div class="col-lg-12 grid-margin stretch-card">
                                   <div class="card">
                                       <div class="card-body">
                                           <h4 class="card-title text-center">Add Products</h4>
                                           <hr>
                                           <div class="table-responsive">
                                               <table id="faqs" class="table table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Product</th>
                                                           <th>Quantity</th>
                                                           <th>Price</th>
                                                           <th>Total</th>
                                                           <th>Action</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                       <tr>
                                                           <td><input type="text" class="form-control" name="product[]" id="product" placeholder="Enter product..." ></td>
                                                           <td><input type="text" class="form-control" name="quantity[]" id="quantity" placeholder="Enter quantity..." value="0"></td>
                                                           <td><input type="text" class="form-control" id="price" name="price[]" placeholder="Enter price" value="0"></td>
                                                           <td><input type="text" class="form-control" id="total" name="total[]" placeholder="Enter total" value="0"></td>
                                                           <td class="mt-10"><a class="badge badge-danger" style="color:#fff;"><i class="fa fa-trash"></i> Delete</a></td>
                                                       </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                           <div class="text-center"><a onclick="addfaqs();" class="badge badge-success" style="color:#fff;"><i class="fa fa-plus"></i> ADD NEW</a></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                  </div>
                               
                               <!-- 
                                <div class="form-rowsdata" id="product" >
                                 
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="product">product</label>
                                            <input type="text" name="product" id="product" class="form-control" placeholder="Enter product" value="<?php echo $this->input->post('product') ?>"><?php echo form_error('product'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="quantity">quantity</label>
                                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" value="<?php echo $this->input->post('quantity') ?>"><?php echo form_error('quantity'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="price">price</label>
                                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" value="<?php echo $this->input->post('price') ?>"><?php echo form_error('price'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="total">Total</label>
                                            <input type="text" name="total" id="total" class="form-control" placeholder="Enter total" value="<?php echo $this->input->post('total') ?>"><?php echo form_error('total'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <button type="button" id="add-product" class="btn btn-primary"  style="margin-top:27px; margin-left:37px;">Add Product</button> </div>
                                    </div> -->
                                    

                                   
                                </div>
                                
                                <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create" >
                                    </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
<script>
    $(document).ready(function () {
         
        function addProductRow() {
            var productRow = $(".form-rowsdata").first().clone();
            productRow.find('input[type="text"]').val(''); 
            $("#product").append(productRow);
        }

         
        $("#add-product").click(function () {
            addProductRow();
        });
    });
</script>

<script type="text/javascript">
  var faqs_row = 0;
function addfaqs() {
html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><input type="text" class="form-control" name="product[]" placeholder="Enter product..." ></td>';
     html += '<td><input type="text" class="form-control" name="quantity[]" id=q'+faqs_row+' placeholder="Enter quantity..." value="0"></td>';
    html += '<td><input type="text" class="form-control" name="price[]" id=p'+faqs_row+' placeholder="Enter Price..." value="0"></td>';
    html += '<td><input type="text" class="form-control" name="total[]" placeholder="Enter total" id=t'+faqs_row+' value="0"></td>';
    html += '<td class="mt-10"><a class="badge badge-danger system" style="color: #fff;" id='+faqs_row+' onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</a></td>';

    html += '</tr>';

$('#faqs tbody').append(html);

faqs_row++;
}

// $('body').on("change",'[id^=q]',function(e){
//         var pro_id = $(this).attr('id');
//         var laboratory_id = this.value;
//         var txtId= "#p"+pro_id[pro_id.length-1]
//         var txtIds= "#t"+pro_id[pro_id.length-1]

//         var price = $(txtId).val();
//          $(txtId).empty();
//          $(txtIds).empty();
//          $('#total_amount').empty();
//         var tot_amount = parseFloat(laboratory_id) * parseFloat(price);
//         var total = $('#total_amount').val();
//         var finalamount = parseFloat(total) + parseFloat(tot_amount);
//             $('#total_amount').val(finalamount);
//         $(txtIds).val(tot_amount);
//        });


$('body').on("change",'[id^=p]',function(e){
        var pro_id = $(this).attr('id');
        var laboratory_id = this.value;

        var txtId= "#q"+pro_id[pro_id.length-1]
        var txtIds= "#t"+pro_id[pro_id.length-1]
         $(txtId).empty();
         $(txtIds).empty();
         $('#systems').empty();
         var price = $(txtId).val();
        var tot_amount = parseFloat(laboratory_id) * parseFloat(price);
        var total = $('#systems').val();
            var finalamount = parseFloat(total) + parseFloat(tot_amount);
            $('#systems').val(finalamount);
        $(txtIds).val(tot_amount);
       });


$('body').on("change",'[id^=q]',function(e){
        var pro_id = $(this).attr('id');
        var laboratory_id = this.value;

        var txtId= "#p"+pro_id[pro_id.length-1]
        var txtIds= "#t"+pro_id[pro_id.length-1]
         $(txtId).empty();
         $(txtIds).empty();
         $('#systems').empty();
         var price = $(txtId).val();
        var tot_amount = parseFloat(laboratory_id) * parseFloat(price);
        var total = $('#systems').val();
            var finalamount = parseFloat(total) + parseFloat(tot_amount);
            $('#systems').val(finalamount);
        $(txtIds).val(tot_amount);
       });


</script>

<!-- <script type="text/javascript">
    $(document).ready(function () {
      $('#quantity').change(function(){
            $('#total').empty();
            $('#systems').empty();

            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var tot_amount = parseFloat(price) * parseFloat(quantity);
            var total = $('#systems').val();
            var finalamount = parseInt(total) + parseInt(tot_amount);
            console.log(total);
            console.log(tot_amount);
            console.log(finalamount);
                 if(tot_amount == 0) {
               $('#systems').val(tot_amount);
            }else {
               $('#systems').val(finalamount); 
            }
           
            $('#total').val(tot_amount);
              
          });
  });
</script> -->

<script type="text/javascript">
    $(document).ready(function () {
      $('#price').change(function(){
            $('#total').empty();
            $('#systems').empty();

            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var tot_amount = parseFloat(price) * parseFloat(quantity);
            var total = $('#systems').val();
            var finalamount = parseInt(total) + parseInt(tot_amount);
            console.log(total);
            console.log(tot_amount);
            console.log(finalamount);
            if(tot_amount == 0) {
               $('#systems').val(tot_amount);
            }else {
               $('#systems').val(finalamount); 
            }
                 
            $('#total').val(tot_amount);
              
          });
  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#quantity').change(function(){
            $('#total').empty();
            $('#systems').empty();

            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var tot_amount = parseFloat(price) * parseFloat(quantity);
            var total = $('#systems').val();
            var finalamount = parseInt(total) + parseInt(tot_amount);
            console.log(total);
            console.log(tot_amount);
            console.log(finalamount);
            if(tot_amount == 0) {
               $('#systems').val(tot_amount);
            }else {
               $('#systems').val(finalamount); 
            }
                 
            $('#total').val(tot_amount);
              
          });
  });
</script>


