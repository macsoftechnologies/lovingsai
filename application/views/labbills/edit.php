
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
    
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Lab Bill</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>labills/update/<?php echo $labbills['lab_bills_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
                        <div id="output"></div>
          				<div class="col-md-3">
          					<div class="form-group">
          						<label for="name">Customer Name</label>
                                <select class="form-control selectuser" id="field1" name="patient_id" onchange="yesnoCheck(this);" style="display: none;">
          						<option value="">Select Patient</option>
                                <option value="0">Others</option>
                                    <?php if($patient->num_rows() > 0){
                                        foreach ($patient->result() as $pa) { ?>
                                            <option value="<?php echo $pa->patient_id;?>"><?php echo $pa->patient_code;?> - <?php echo $pa->name;?> - <?php echo $pa->phone;?></option>
                                        <?php }
                                    }?>
                                </select>
          					</div>
          				</div>

                        <div class="col-md-3" id="templates1">
                    <div class="form-group">
                      <label for="name">Customer Name</label>
                      <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Enter customer_name" value="<?php echo $labbills['customer_name'];?>"><?php echo form_error('customer Name'); ?>
                    </div>
                  </div>

                  <div class="col-md-3" id="templates2">
                    <div class="form-group">
                      <label for="name">Phone Number</label>
                      <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number" value="<?php echo $labbills['phone_number'];?>"><?php echo form_error('phone_number'); ?>
                    </div>
                  </div>

                  <div class="col-md-3" id="templates3">
                    <div class="form-group">
                      <label for="name">Age</label>
                      <input type="number" name="age" id="age" class="form-control" placeholder="Enter Age" value="<?php echo $labbills['age'];?>"><?php echo form_error('age'); ?>
                    </div>
                  </div>

                  <div class="col-md-3" id="templates4">
                    <div class="form-group">
                      <label for="name">Address</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" value="<?php echo $labbills['address'];?>"><?php echo form_error('address'); ?>
                    </div>
                  </div>

                    <div class="col-md-3">
                    <div class="form-group">
                      <label for="style_code">Type of Invoice</label>
                      <select class="form-control" name="type_of_invoice" required>
                        <option value="<?php echo $labbills['type_of_invoice'];?>"><?php echo $labbills['type_of_invoice'];?></option>
                        <option value="Loving Sai Clinic">Loving Sai Clinic</option>
                        <option value="Tenet">Tenet</option>
                        <option value="Vimta">Vimta</option>
                        <option value="SR DIAGNOSTICS">SR DIAGNOSTICS</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="style_code">Method of Payment</label>
                      <select class="form-control" name="method_of_payment">
                        <option value="<?php echo $labbills['method_of_payment'];?>"><?php echo $labbills['method_of_payment'];?></option>
                        <option value="CASH">CASH</option>
                        <option value="CARD">CARD</option>
                        <option value="UPI">UPI</option>
                      </select>
                    </div>
                  </div>
          				
                  

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="weight">Amount</label>
                      <input type="text" name="total_amount" id="total_amount" class="form-control" placeholder="Enter Amount" value="<?php echo $labbills['total_amount'];?>" readonly><?php echo form_error('total_amount'); ?>
                    </div>
                  </div>

                  

                  <div class="col-md-12">
                    <div class="page-content page-container" id="page-content">
                       <div class="padding">
                           <div class="row container d-flex justify-content-center">
                               <div class="col-lg-12 grid-margin stretch-card">
                                   <div class="card">
                                       <div class="card-body">
                                           <h4 class="card-title text-center">Lab Bills Details</h4>
                                           <hr>
                                           <div class="table-responsive">
                                               <table id="faqs" class="table table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Test</th>
                                                           <th>Price</th>
                                                           <th>Discount Price</th>
                                                           <th>Action</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                    <?php 
                                                   if ($tests->num_rows() > 0) {
                                                       foreach ($tests->result() as $key => $te) {
                                                    ?>
                                                       <tr id="rowdelete<?php echo $key+1;?>">
                                                           <td> <select class="form-control" name="laboratory_id[]" id="product_id<?php echo $key+1;?>">
                                                             <option value="<?php echo $te->laboratory_id;?>"><?php echo $te->test;?></option>
                                                             <?php if($laboratory->num_rows() > 0) { 
                                                              foreach ($laboratory->result() as $key1 => $lab) {
                                                              ?>
                                                              <option value="<?php echo $lab->laboratory_id;?>"><?php if($lab->laboratory_type == 'Package') { ?><?php echo $lab->package_name.'- '.$lab->test;?><?php }else {?><?php echo $lab->test;?><?php } ?></option>
                                                            <?php }
                                                          } ?>
                                                           </select></td>
                                                           <td><input type="text" class="form-control" name="price[]" id="price<?php echo $key+1;?>" placeholder="Enter Price..." value="<?php echo $te->price;?>"></td>
                                                           <td><input type="text" class="form-control" id="discount<?php echo $key+1;?>" name="discount_price[]" placeholder="Enter Discount Price" value="<?php echo $te->discount_price;?>"></td>
                                                           <td class="mt-10"><a class="badge badge-danger" style="color:#fff;" id="<?php echo $key+1;?>" onclick="$('#rowdelete<?php echo $key+1;?>').hide();"><i class="fa fa-trash"></i> Delete</a></td>
                                                       </tr>
                                                   <?php } 
                                               } ?>
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
 <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
<script type="text/javascript">
  var faqs_row = 0;

  
function addfaqs() {
html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><select class="form-control" name="laboratory_id[]" id=row'+faqs_row+' ><option value="">Select Test</option><?php if($laboratory->num_rows() > 0) { foreach ($laboratory->result() as $key => $lab) {?><option value="<?php echo $lab->laboratory_id;?>"><?php if($lab->laboratory_type == 'Package') { ?><?php echo $lab->package_name.'- '.$lab->test;?><?php }else {?><?php echo $lab->test;?><?php } ?></option><?php }} ?></select></td>';
    html += '<td><input type="text" class="form-control" name="price[]" id=p'+faqs_row+' placeholder="Enter Price..." value="0"></td>';
    html += '<td><input type="text" class="form-control" name="discount_price[]" placeholder="Enter Discount Price" id=discountedprice'+faqs_row+' value="0"></td>';
    html += '<td class="mt-10"><a class="badge badge-danger system" style="color: #fff;" id='+faqs_row+' onclick="$(\'#faqs-row' + faqs_row + '\').hide();"><i class="fa fa-trash"></i> Delete</a></td>';

    html += '</tr>';

$('.system').on('click',function(){
       var pro_id = $(this).attr('id');
        var laboratory_id = this.value;
       var txtIdm= "#discountedprice"+pro_id;
       var rowdelete = "#faqs-row"+pro_id;
       console.log(txtIdm);
       
       var price = $('#total_amount').val();
                    var discount = $(txtIdm).val();
                    console.log(price);
                    console.log(discount);
                    var tot_amount = parseFloat(price) - parseFloat(discount);
                    console.log(tot_amount);
                    $('#total_amount').val(tot_amount);
                    $(rowdelete).remove();
});

$('#faqs tbody').append(html);



faqs_row++;


}



$('body').on("change",'[id^=row]',function(e){
        var pro_id = $(this).attr('id');
        var laboratory_id = this.value;
        var txtId= "#p"+pro_id[pro_id.length-1]
        var txtIds= "#discountedprice"+pro_id[pro_id.length-1]
         $(txtId).empty();
         $(txtIds).empty();
         $('#total_amount').empty();
         // $(txtgg).empty();
          var url = baseurl + "labills/getajaxprice";
        $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $(txtId).show();
                    $(txtId).val(result['price']);
                    $(txtIds).val(result['discount']);

                    var price = $('#total_amount').val();
                    var tot_amount = parseFloat(price) + parseFloat(result['discount']);
                    $('#total_amount').val(tot_amount);

                   }else{
                    $(txtId).show();
                    $(txtId).css('color','red');
                    $(txtIds).css('color','red');
                    $(txtId).append("No Price Available");
                    // $(txtId).val("Sorry! No Price avaliable here.");
                   }
                }
            });
       });


</script>
<!-- <script type="text/javascript">
  
</script> -->


<script type="text/javascript">
  $('.badge-danger').on('click',function(){
       var pro_id = $(this).attr('id');
        var laboratory_id = this.value;
       var txtIdm= "#discount"+pro_id;
       var rowdelete = "#rowdelete"+pro_id;
       console.log(txtIdm);
       
       var price = $('#total_amount').val();
                    var discount = $(txtIdm).val();
                    console.log(price);
                    console.log(discount);
                    var tot_amount = parseFloat(price) - parseFloat(discount);
                    console.log(tot_amount);
                    $('#total_amount').val(tot_amount);
                    $(rowdelete).remove();
});
</script>


<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id1').change(function(){
            $('#price1').empty();
            $('#discount1').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price1').val(result['price']);
                    $('#discount1').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price1').show();
                    $('#price1').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount1').val("No Discount Price Available");
                    $('#price1').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>


<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id2').change(function(){
            $('#price2').empty();
            $('#discount2').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price2').val(result['price']);
                    $('#discount2').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price2').show();
                    $('#price2').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount2').val("No Discount Price Available");
                    $('#price2').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id3').change(function(){
            $('#price3').empty();
            $('#discount3').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price3').val(result['price']);
                    $('#discount3').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price3').show();
                    $('#price3').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount').val("No Discount Price Available");
                    $('#price3').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id4').change(function(){
            $('#price4').empty();
            $('#discount4').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price4').val(result['price']);
                    $('#discount4').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price4').show();
                    $('#price4').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount4').val("No Discount Price Available");
                    $('#price4').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id5').change(function(){
            $('#price5').empty();
            $('#discount5').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price5').val(result['price']);
                    $('#discount5').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price5').show();
                    $('#price5').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount5').val("No Discount Price Available");
                    $('#price5').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#product_id6').change(function(){
            $('#price6').empty();
            $('#discount6').empty();
            $('#total_amount').empty();
            var laboratory_id = this.value;
            var url = baseurl + "labills/getPricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{laboratory_id: laboratory_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#price6').val(result['price']);
                    $('#discount6').val(result['discount']);

            var price = $('#total_amount').val();
            var tot_amount = parseFloat(price) + parseFloat(result['discount']);
            $('#total_amount').val(tot_amount);
                   }else{
                    $('#price6').show();
                    $('#price6').css('color','red');
                    $('#quadiscountn').css('color','red')
                    $('#discount6').val("No Discount Price Available");
                    $('#price6').append("Sorry! No Price avaliable here.");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#result').on('change', function() {
    if ( this.value == 'Diamond')
      {
        $("#data").show();
        $("#data2").show();
        $("#data3").show();
        $("#data4").show();

      }
      else
      {
        $("#data").hide();
        $("#data2").hide();
        $("#data3").hide();
        $("#data4").hide();
      }

});
  });

</script>

<script type="text/javascript">
    function yesnoCheck(that) {
    if (that.value == "Others") {
            document.getElementById("templates2").style.display = "block";
            document.getElementById("templates3").style.display = "block";
            document.getElementById("templates1").style.display = "block";
            document.getElementById("templates4").style.display = "block";
            
        } else {
            document.getElementById("templates4").style.display = "block";
          document.getElementById("templates3").style.display = "block";
            document.getElementById("templates2").style.display = "block";
            document.getElementById("templates1").style.display = "block";
        }
    }
</script>

<link rel="stylesheet" type="text/css" href="https://harvesthq.github.io/chosen/chosen.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="//harvesthq.github.io/chosen/chosen.jquery.js"></script>

<script>
  document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#field1').change(function(){
             $('#age').empty();
          $('#customer_name').empty();
          $('#phone_number').empty();
          $('#address').empty();
            var patient_id = this.value;
            console.log(patient_id);
            var url = baseurl + "presciption/getCustomersvalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{patient_id: patient_id},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){

                     $('#patientinformation').show();
                      $('#age').val(result['age']);
                      $('#customer_name').val(result['name']);
                      $('#phone_number').val(result['phone']);
                      $('#address').val(result['city']);
                   
                   }else{
                    $('#age').empty();
                      $('#customer_name').val("");
                      $('#phone_number').val("");
                      $('#address').val("");
                      $('#age').val("");
                   }
                }
            });

        });
          });
</script>

<script type="text/javascript">
  function create_custom_dropdowns() {
    $('.selectuser').each(function (i, select) {
        if (!$(this).next().hasClass('dropdown-select')) {
            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = $(this).next();
            var options = $(select).find('option');
            var selected = $(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function (j, o) {
                var display = $(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
            });
        }
    });

    $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
    if($(event.target).hasClass('dd-searchbox')){
        return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).find('.option').attr('tabindex', 0);
        $(this).find('.selected').focus();
    } else {
        $(this).find('.option').removeAttr('tabindex');
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on('click', function (event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
        $('.dropdown-select').removeClass('open');
        $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

function filter(){
    var valThis = $('#txtSearchValue').val();
    $('.dropdown-select ul > li').each(function(){
     var text = $(this).text();
        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();         
   });
};
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});


$(document).ready(function () {
    create_custom_dropdowns();
});
</script>  



