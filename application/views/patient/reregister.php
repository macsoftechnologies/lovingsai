
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
                    <h4>Re-Register Patient</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>patient/reinsert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
                        
                  <div class="col-md-6">
                    <div class="form-group">
                        <div id="output"></div>
                      <label for="category_id">Select Patient</label>
                        <select class="form-control selectuser year" name="patient_id" id="field1" style="display:none;">
                            <option value="">Select Patient</option>
                            <?php if($patient->num_rows() > 0){
                                foreach ($patient->result() as $pa) { ?>
                                    <option value="<?php echo $pa->patient_id;?>"><?php echo $pa->patient_code;?> - <?php echo $pa->name;?> - <?php echo $pa->phone;?></option>
                                <?php }
                            }?>
                        </select>
                    </div>
                  </div>
              </div>

                <div id="patientinformation" class="col-md-12" style="display: none;">
                    <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $this->input->post('name')?>"><?php echo form_error('name'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="<?php echo $this->input->post('phone')?>"><?php echo form_error('phone'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $this->input->post('address')?>"><?php echo form_error('address'); ?>
                      <input type="hidden" name="admin_id" id="admin_id" class="form-control" placeholder="Enter admin_id" value="<?php echo $this->input->post('admin_id')?>"><?php echo form_error('admin_id'); ?>
                      <input type="hidden" name="type_id" id="type_id" class="form-control" placeholder="Enter type_id" value="<?php echo $this->input->post('type_id')?>"><?php echo form_error('type_id'); ?>
                      <input type="hidden" name="occupation" id="occupation" class="form-control" placeholder="Enter occupation" value="<?php echo $this->input->post('occupation')?>"><?php echo form_error('occupation'); ?>
                      <input type="hidden" name="city" id="city" class="form-control" placeholder="Enter city" value="<?php echo $this->input->post('city')?>"><?php echo form_error('city'); ?>
                      <input type="hidden" name="district" id="district" class="form-control" placeholder="Enter district" value="<?php echo $this->input->post('district')?>"><?php echo form_error('district'); ?>
                      <input type="hidden" name="pincode" id="pincode" class="form-control" placeholder="Enter pincode" value="<?php echo $this->input->post('pincode')?>"><?php echo form_error('pincode'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" value="<?php echo $this->input->post('age')?>"><?php echo form_error('age'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="sex" name="sex" id="sex" class="form-control" placeholder="Enter Sex" value="<?php echo $this->input->post('sex')?>"><?php echo form_error('sex'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="birth_date">Date Of Birth</label>
                      <input type="text" name="birth_date" id="birth_date" class="form-control" placeholder="Enter birth_date" value="<?php echo $this->input->post('birth_date')?>"><?php echo form_error('birth_date'); ?>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="height">Height</label>
                      <input type="text" name="height" id="height" class="form-control" placeholder="Enter height" value="<?php echo $this->input->post('height')?>"><?php echo form_error('height'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="weight">Weight</label>
                      <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="<?php echo $this->input->post('weight')?>"><?php echo form_error('weight'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                   <div class="form-group">
                    <label for="bmi">BMI</label>
                    <input type="text" name="bmi" id="bmi" class="form-control" placeholder="BMI">
                     </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="sex">Blood Group</label>
                      <input type="sex" name="blood_group" id="blood_group" class="form-control" placeholder="Enter Blood Group" value="<?php echo $this->input->post('blood_group')?>" readonly><?php echo form_error('blood_group'); ?>
                    </div>
                  </div> -->

                                  
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="alcohol">Alcohol</label>
                      <input type="text" name="alcohol" id="alcohol" class="form-control" placeholder="Enter alcohol" value="<?php echo $this->input->post('alcohol')?>"><?php echo form_error('alcohol'); ?>
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="smoking">Smoking</label>
                      <input type="boolean" name="smoking" id="smoking" class="form-control" placeholder="Enter smoking" value="<?php echo $this->input->post('smoking')?>"><?php echo form_error('smoking'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="diabetes">Diabetes</label>
                      <input type="text" name="diabetes" id="diabetes" class="form-control" placeholder="Enter diabetes" value="<?php echo $this->input->post('diabetes')?>"><?php echo form_error('diabetes'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="hypertention">Hypertention</label>
                      <input type="text" name="hypertention" id="hypertention" class="form-control" placeholder="Enter smoking" value="<?php echo $this->input->post('hypertention')?>"><?php echo form_error('hypertention'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="bp">Blood Presure (BP)</label>
                      <input type="text" name="bp" id="bp" class="form-control" placeholder="Enter bp" value="<?php echo $this->input->post('bp')?>"><?php echo form_error('bp'); ?>
                    </div>
                  </div>

                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="provisionalDiagnosis">Provisional Diagnosis</label>
                      <input type="text" name="provisionalDiagnosis" id="provisionalDiagnosis" class="form-control" placeholder="Enter provisionalDiagnosis" value="<?php echo $this->input->post('provisionalDiagnosis')?>"><?php echo form_error('provisionalDiagnosis'); ?>
                    </div>
                  </div> -->
                </div>
            </div>
                  
                   <!-- <td></td> -->
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Re-Register Patient">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $('.checkbox11').change(function() {
    if(this.checked) {
        $('#output11').val('1');
    }
  else
    {
        $('#output11').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox12').change(function() {
    if(this.checked) {
        $('#output12').val('1');
    }
  else
    {
        $('#output12').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox13').change(function() {
    if(this.checked) {
        $('#output13').val('1');
    }
  else
    {
        $('#output13').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox14').change(function() {
    if(this.checked) {
        $('#output14').val('1');
    }
  else
    {
        $('#output14').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox15').change(function() {
    if(this.checked) {
        $('#output15').val('1');
    }
  else
    {
        $('#output15').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox16').change(function() {
    if(this.checked) {
        $('#output16').val('1');
    }
  else
    {
        $('#output16').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox17').change(function() {
    if(this.checked) {
        $('#output17').val('1');
    }
  else
    {
        $('#output17').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox18').change(function() {
    if(this.checked) {
        $('#output18').val('1');
    }
  else
    {
        $('#output18').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox19').change(function() {
    if(this.checked) {
        $('#output19').val('1');
    }
  else
    {
        $('#output19').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox110').change(function() {
    if(this.checked) {
        $('#output110').val('1');
    }
  else
    {
        $('#output110').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox21').change(function() {
    if(this.checked) {
        $('#output21').val('1');
    }
  else
    {
        $('#output21').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox22').change(function() {
    if(this.checked) {
        $('#output22').val('1');
    }
  else
    {
        $('#output22').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox23').change(function() {
    if(this.checked) {
        $('#output23').val('1');
    }
  else
    {
        $('#output23').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox24').change(function() {
    if(this.checked) {
        $('#output24').val('1');
    }
  else
    {
        $('#output24').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox25').change(function() {
    if(this.checked) {
        $('#output25').val('1');
    }
  else
    {
        $('#output25').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox26').change(function() {
    if(this.checked) {
        $('#output26').val('1');
    }
  else
    {
        $('#output26').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox27').change(function() {
    if(this.checked) {
        $('#output27').val('1');
    }
  else
    {
        $('#output27').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox28').change(function() {
    if(this.checked) {
        $('#output28').val('1');
    }
  else
    {
        $('#output28').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox29').change(function() {
    if(this.checked) {
        $('#output29').val('1');
    }
  else
    {
        $('#output29').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('.checkbox210').change(function() {
    if(this.checked) {
        $('#output210').val('1');
    }
  else
    {
        $('#output210').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox31").change(function() {
    if(this.checked) {
        $('#output31').val('1');
    }
  else
    {
        $('#output31').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox32").change(function() {
    if(this.checked) {
        $('#output32').val('1');
    }
  else
    {
        $('#output32').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox33").change(function() {
    if(this.checked) {
        $('#output33').val('1');
    }
  else
    {
        $('#output33').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox34").change(function() {
    if(this.checked) {
        $('#output34').val('1');
    }
  else
    {
        $('#output34').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox35").change(function() {
    if(this.checked) {
        $('#output35').val('1');
    }
  else
    {
        $('#output35').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox36").change(function() {
    if(this.checked) {
        $('#output36').val('1');
    }
  else
    {
        $('#output36').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox37").change(function() {
    if(this.checked) {
        $('#output37').val('1');
    }
  else
    {
        $('#output37').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox38").change(function() {
    if(this.checked) {
        $('#output38').val('1');
    }
  else
    {
        $('#output38').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox39").change(function() {
    if(this.checked) {
        $('#output39').val('1');
    }
  else
    {
        $('#output39').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox310").change(function() {
    if(this.checked) {
        $('#output310').val('1');
    }
  else
    {
        $('#output310').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox41").change(function() {
    if(this.checked) {
        $('#output41').val('1');
    }
  else
    {
        $('#output41').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox42").change(function() {
    if(this.checked) {
        $('#output42').val('1');
    }
  else
    {
        $('#output42').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox43").change(function() {
    if(this.checked) {
        $('#output43').val('1');
    }
  else
    {
        $('#output43').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox44").change(function() {
    if(this.checked) {
        $('#output44').val('1');
    }
  else
    {
        $('#output44').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox45").change(function() {
    if(this.checked) {
        $('#output45').val('1');
    }
  else
    {
        $('#output45').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox46").change(function() {
    if(this.checked) {
        $('#output46').val('1');
    }
  else
    {
        $('#output46').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox47").change(function() {
    if(this.checked) {
        $('#output47').val('1');
    }
  else
    {
        $('#output47').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox48").change(function() {
    if(this.checked) {
        $('#output48').val('1');
    }
  else
    {
        $('#output48').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox49").change(function() {
    if(this.checked) {
        $('#output49').val('1');
    }
  else
    {
        $('#output49').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox410").change(function() {
    if(this.checked) {
        $('#output410').val('1');
    }
  else
    {
        $('#output410').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox51").change(function() {
    if(this.checked) {
        $('#output51').val('1');
    }
  else
    {
        $('#output51').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox52").change(function() {
    if(this.checked) {
        $('#output52').val('1');
    }
  else
    {
        $('#output52').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox53").change(function() {
    if(this.checked) {
        $('#output53').val('1');
    }
  else
    {
        $('#output53').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox54").change(function() {
    if(this.checked) {
        $('#output54').val('1');
    }
  else
    {
        $('#output54').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox55").change(function() {
    if(this.checked) {
        $('#output55').val('1');
    }
  else
    {
        $('#output55').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox56").change(function() {
    if(this.checked) {
        $('#output56').val('1');
    }
  else
    {
        $('#output56').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox57").change(function() {
    if(this.checked) {
        $('#output57').val('1');
    }
  else
    {
        $('#output57').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox58").change(function() {
    if(this.checked) {
        $('#output58').val('1');
    }
  else
    {
        $('#output58').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox59").change(function() {
    if(this.checked) {
        $('#output59').val('1');
    }
  else
    {
        $('#output59').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $(".checkbox510").change(function() {
    if(this.checked) {
        $('#output510').val('1');
    }
  else
    {
        $('#output510').val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('body').on("change",'[id^=row]',function(e){
    // $(".checkbox").change(function() {
        var pro_id = $(this).attr('id');
        var txtId= ".t"+pro_id[pro_id.length-1]
    if(this.checked) {
        $(txtId).val('1');
    }
  else
    {
        $(txtId).val('0');
      
    }
});
</script>


<script type="text/javascript">
    $('body').on("change",'[id^=afr]',function(e){
    // $(".checkbox").change(function() {
        var pro_id = $(this).attr('id');
        var txtIda= ".a"+pro_id[pro_id.length-1]
    if(this.checked) {
        $(txtIda).val('1');
    }
  else
    {
        $(txtIda).val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('body').on("change",'[id^=ngt]',function(e){
    // $(".checkbox").change(function() {
        var pro_id = $(this).attr('id');
        var txtIdn= ".n"+pro_id[pro_id.length-1]
    if(this.checked) {
        $(txtIdn).val('1');
    }
  else
    {
        $(txtIdn).val('0');
      
    }
});
</script>

<script type="text/javascript">
    $('body').on("change",'[id^=afrfd]',function(e){
    // $(".checkbox").change(function() {
        var pro_id = $(this).attr('id');
        var txtIdf= ".f"+pro_id[pro_id.length-1]
    if(this.checked) {
        $(txtIdf).val('1');
    }
  else
    {
        $(txtIdf).val('0');
      
    }
});
</script>


<script type="text/javascript">
    $('body').on("change",'[id^=ngtfd]',function(e){
    // $(".checkbox").change(function() {
        var pro_id = $(this).attr('id');
        var txtIdg= ".g"+pro_id[pro_id.length-1]
    if(this.checked) {
        $(txtIdg).val('1');
    }
  else
    {
        $(txtIdg).val('0');
      
    }
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>




<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
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
          $('#birth_date').empty();
          $('#height').empty();
          $('#weight').empty();
          $('#alcohol').empty();
          $('#smoking').empty();
          $('#sex').empty();
          $('#height').empty();
          $('#bmi').empty();
          $('#blood_group').empty();
            $('#afsdreggv').empty();
            var patient_id = this.value;
            console.log(patient_id);
            var url = baseurl + "patient/getCustomersvalue";
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
                      $('#birth_date').val(result['birth_date']);
                      $('#height').val(result['height']);
                      $('#weight').val(result['weight']);
                      $('#alcohol').val(result['alcohol']);
                      $('#smoking').val(result['smoking']);
                      $('#sex').val(result['sex']);
                      $('#height').val(result['height']);
                      $('#bmi').val(result['bmi']);
                      $('#blood_group').val(result['blood_group']);
                      $('#diabetes').val(result['diabetes']);
                      $('#hypertention').val(result['hypertention']);
                      $('#provisionalDiagnosis').val(result['provisionalDiagnosis']);
                      $('#admin_id').val(result['admin_id']);
                      $('#type_id').val(result['type_id']);
                      $('#name').val(result['name']);
                      $('#phone').val(result['phone']);
                      $('#address').val(result['address']);
                      $('#city').val(result['city']);
                      $('#district').val(result['district']);
                      $('#pincode').val(result['pincode']);
                      $('#occupation').val(result['occupation']);
                      $('#bp').val(result['bp']);
                   
                   }else{
                    $('#patientinformation1').show();
                    $('#patientinformation1').css('color','red');
                    $('#patientinformation1').append("Sorry! No Data avaliable here.");
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

