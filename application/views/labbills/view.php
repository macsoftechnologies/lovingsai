<style>

                .receipt-main {
                    background: #ffffff none repeat scroll 0 0;
                    margin-top: 50px;
                    margin-bottom: 50px;
                    padding: 40px 30px !important;
                    position: relative;
                    font-family: 'Times New Roman', Times, serif;
                }
                .receipt-main p {
                    color: #333333;
                    font-family: 'Times New Roman', Times, serif;
                    line-height: 1.42857;
                }
                .receipt-footer h1 {
                    font-size: 15px;
                    font-weight: 400 !important;
                    margin: 0 !important;
                }
                .receipt-main::after {
                    content: "";
                    height: 5px;
                    left: 0;
                    position: absolute;
                    right: 0;
                    top: -13px;
                }
    
                .receipt-main thead th {
                    color:#000;
                    text-align: center;
                }
    
                .main-logo{
                    display: flex!important;
                    justify-content: end!important;
    
                }
                .receipt-right h5 {
                    font-size: 16px;
                    font-weight: bold;
                    margin: 0 0 7px 0;
                }
                .receipt-right p {
                    font-size: 12px;
                    margin: 0px;
                    font-weight: 800;
                }
                .receipt-right p i {
                    text-align: center;
                    width: 18px;
                }
                .reciept-right1 p {
                    font-weight: 800;
                    text-align: center;
                }
                .receipt-main td {
                    padding: 9px 20px !important;
                }
                .receipt-main th {
                    padding: 13px 20px !important;
                }
                .receipt-main td {
                    font-size: 13px;
                    font-weight: initial !important;
                }
                .receipt-main td p:last-child {
                    margin: 0;
                    padding: 0;
                }   
                .receipt-main td h2 {
                    font-size: 20px;
                    font-weight: 900;
                    margin: 0;
                    text-transform: uppercase;
                }
                .receipt-header-mid .receipt-left h1 {
                    font-weight: 100;
                    margin: 34px 0 0;
                    text-align: right;
                    text-transform: uppercase;
                }
                .receipt-header-mid {
                    overflow: hidden;
                }
                
                #container {
                    background-color: #dcdcdc;
                }
  
</style>

<section>

    <?php if($labbills['type_of_invoice'] == 'Loving Sai Clinic') {?>

<div class="main-content">
    
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">

                 <div class="card"  id="root" >

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/lovingsai.jpg" style="width: 100px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?>
                                    </td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
            </div>
          </div>

        <div class="newdiv" id="privntDIvb" style="display: none">
       <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/lovingsai.jpg" style="width: 100px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
        </div>

         <div style="background: white; padding-bottom: 30px;padding-left: 45px;">

    <button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="test()">
        <i class="fa fa-download"></i> Download PDF</button>

     

    <button class="btn btn-info pull-right" onclick="printDiv('privntDIvb')" style="margin-right: 10px;"><i
            class="fa fa-print" aria-hidden="true"> Print</i></button>

    </div>


        </section>  
</div>

<?php }else if($labbills['type_of_invoice'] == 'Tenet') { ?>


<div class="main-content">
    
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/tenet-logo.png" style="width: 100px;margin-right: 350px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
            </div>
          </div>
      
         
         <div class="newdiv" id="privntDIvb" style="display: none">
           <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/tenet-logo.png" style="width: 100px;margin-right: 350px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
          
          </div>
        
          <div style="background: white; padding-bottom: 30px;padding-left: 45px;">

    <button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="test()">
        <i class="fa fa-download"></i> Download PDF</button>

     

    <button class="btn btn-info pull-right" onclick="printDiv('privntDIvb')" style="margin-right: 10px;"><i
            class="fa fa-print" aria-hidden="true"> Print</i></button>

    </div>
        </section>  
</div>
<?php }else if($labbills['type_of_invoice'] == 'SR DIAGNOSTICS') { ?>


<div class="main-content">
    
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/SR-DIAGNOSTICS.png" style="width: 250px;margin-right: 250px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
            </div>
          </div>
      
         
         <div class="newdiv" id="privntDIvb" style="display: none">
           <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/SR-DIAGNOSTICS.png" style="width: 250px;margin-right: 250px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
          
          </div>
        
          <div style="background: white; padding-bottom: 30px;padding-left: 45px;">

    <button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="test()">
        <i class="fa fa-download"></i> Download PDF</button>

     

    <button class="btn btn-info pull-right" onclick="printDiv('privntDIvb')" style="margin-right: 10px;"><i
            class="fa fa-print" aria-hidden="true"> Print</i></button>

    </div>
        </section>  
</div>


<?php }else { ?>

<div class="main-content">
    
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/vimta.png" style="width: 100px;margin-right: 350px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                            <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
            </div>
        </div>

            <div class="newdiv" id="privntDIvb" style="display: none">
                 <div class="col-12">

                 <div class="card" id="root">

                <div class="receipt-main">
                   <div class="">
                       <div class="receipt-header row">
                           <div class="col-xs-6 col-sm-6 col-md-6 ml">
                               <div class="receipt-left main-logo">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="<?=base_url();?>assets/vimta.png" style="width: 100px;margin-right: 350px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <p>Authorised Collection Center</p>
                                   <h5>LOVING SAI CLINIC</h5>
                                   <p>General Medicine & Diabetes</p>
                                   <p>Door No. 1-117-8,MIG-I,PLOT NO-58</p>
                                   <p>Sector-12, MVP Colony</p>
                                   <p>Opp.Nandhi Temple,</p>
                                   <p>Visakhapatnam-530 017</p>
                               </div>
                           </div>
                       </div>
                   </div>

                    <hr />

                   <div class="">
                       <div class="receipt-header receipt-header-mid row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right1">
                                   <p>Patient Name : <?php echo $labbills['customer_name'];?></p>
                                   <p>Address : <?php echo $labbills['address'];?></p>
                                   <p>Mobile : <?php echo $labbills['phone_number'];?></p>
                                   <p>Age : <?php echo $labbills['age'];?></p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <p>Patient ID : <?php echo $labbills['patientid'];?></p>
                                   <p>Reciept No : <?php echo $labbills['receipt_no'];?></p>
                                   <p>Reciept Date : <?php echo date('d-m-Y', strtotime($labbills['created_at'])) ;?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Test Name</th>
                                   <th>Rate</th>
                               </tr>
                           </thead>
                           <tbody>
                            <?php if($tests->num_rows() > 0) {
                                foreach ($tests->result() as $key => $tt) { ?>
                               <tr>
                                   <td class="col-md-9">
                                    <?php if($tt->package_name == '') {?>
                                    <?php }else { ?>

                                        <h6><b><?php echo $tt->package_name;?></b></h6>
                                    <?php } ?>
                                    <?php 
                                   $string = $tt->test; 
$str_arr = explode (",", $string);  
                                   ?>
                                   <?php for ($i=0; $i < count($str_arr); $i++) {  ?>
                                    <?php echo $str_arr[$i];?><br>
                                        <?php } ?></td>
                                   <td class="col-md-3"><?php echo $tt->discount_price;?></td>
                               </tr>
                           <?php } 
                       } ?>
                               
                               <tr>
                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   <td class="text-left text-danger"><h2><strong><?php echo $labbills['total_amount'];?></strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="">
                       <div class="receipt-header receipt-header-mid receipt-footer row">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date : <?php echo date('d M Y', strtotime($labbills['created_at'])) ;?></b></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   
               </div>    

                 </div>

              </div>
            </div>
         <div style="background: white; padding-bottom: 30px;padding-left: 45px;">

    <button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="test()">
        <i class="fa fa-download"></i> Download PDF</button>

     

    <button class="btn btn-info pull-right" onclick="printDiv('privntDIvb')" style="margin-right: 10px;"><i
            class="fa fa-print" aria-hidden="true"> Print</i></button>

    </div>
        </section>  
</div>

<?php } ?>
    
<section>



    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?= base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>



<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
<script src="<?= base_url() ?>assets/html2pdf.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script>
    function test() {
        // Get the element.
        var doc = new jsPDF('p', 'pt', 'letter');
        doc.setLineWidth(2);
        doc.rect(10, 20, 150, 75);

        var element = document.getElementById('root');

        var name = "labbills" + "<?php echo $labbills['patientid']; ?>" + ".pdf";
        // Generate the PDF.
        var opt = {
            margin: 2,
            filename: name,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: {
                unit: 'mm',
                format: [280, 350],
                orientation: 'portrait'
            }
        };

        html2pdf().set(opt).from(element).save();

    }
</script>

<script>
    function printDiv(divName) {
        document.getElementById("privntDIvb").style.display = "block";
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        document.getElementById("privntDIvb").style.display = "none";
    }
</script>




