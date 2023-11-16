
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

.textarea-box .text-boxx{
    height: 50px !important;
}

select {
  width: 258px;
  position: relative;
  left: -17px;
  margin: 0;
  border: 1px solid #DDE1E4;
  border-top: none;
  font-size:9pt;
}

datalist {
  display: none;
}

option {
  padding: 3px;
}

option:hover {
  background-color: #11E8EA;
}


/*h3,
h4 {
  text-align: center;
}*/


/* to hide datalist arrow in webkit */

/*input::-webkit-calendar-picker-indicator {
  display: none;
}*/

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
                  <!-- <div class="card-header">
                    <h4>Add Presciption</h4> -->
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  <!-- </div> -->
                  <div class="card-body">
          		<form action="<?=base_url()?>presciption/addinsert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">

                <div class="col-md-3">
                    <div class="form-group">
                      <label for="age">Patient Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $patient['name'];?>" readonly><?php echo form_error('name'); ?>
                      <input type="hidden" name="patient_id" id="name" class="form-control" placeholder="Enter name" value="<?php echo $patient['patient_id'];?>" readonly><?php echo form_error('name'); ?>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="age">Phone Number</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="<?php echo $patient['phone']?>" readonly><?php echo form_error('phone'); ?>
                    </div>
                </div>

               <!--  <div class="col-md-2">
                    <div class="form-group">
                      <label for="age">Address</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $patient['address']?>" readonly><?php echo form_error('address'); ?>
                    </div>
                </div>  -->
                        
                 
                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" value="<?php echo $patient['age']?>" readonly><?php echo form_error('age'); ?>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="sex" name="sex" id="sex" class="form-control" placeholder="Enter Sex" value="<?php echo$patient['sex']?>" readonly><?php echo form_error('sex'); ?>
                    </div>
                  </div>
               <!--    <div class="col-md-2">
                    <div class="form-group">
                      <label for="birth_date">Date Of Birth</label>
                      <input type="text" name="birth_date" id="birth_date" class="form-control" placeholder="Enter birth_date" value="<?php echo $patient['birth_date']?>" readonly><?php echo form_error('birth_date'); ?>
                    </div>
                  </div> -->
                  
                <!--   <div class="col-md-1">
                    <div class="form-group">
                      <label for="height">Height</label>
                      <input type="text" name="height" id="height" class="form-control" placeholder="Enter height" value="<?php echo $patient['height']?>" readonly><?php echo form_error('height'); ?>
                    </div>
                  </div>
 -->
                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="weight">Weight</label>
                      <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="<?php echo $patient['weight']?>" readonly><?php echo form_error('weight'); ?>
                    </div>
                  </div>


                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="bp">BP</label>
                      <input type="text" name="bp" id="bp" class="form-control" placeholder="Enter bp" value="<?php echo $patient['bp']?>" readonly><?php echo form_error('bp'); ?>
                    </div>
                  </div>
                   <!-- <div class="col-md-2">
                   <div class="form-group">
                    <label for="bmi">BMI</label>
                    <input type="text" name="bmi" id="bmi" class="form-control" placeholder="BMI" value="<?php echo $patient['bmi']?>" readonly>
                     </div> 
                  </div> -->
                 <!--  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sex">Blood Group</label>
                      <input type="sex" name="blood_group" id="blood_group" class="form-control" placeholder="Enter Blood Group" value="<?php echo $patient['blood_group']?>" readonly><?php echo form_error('blood_group'); ?>
                    </div>
                  </div> -->

                                  
                  <div class="col-md-1">
                    <div class="form-group">
                    <label for="alcohol">Alcohol</label>
                      <input type="text" name="alcohol" id="alcohol" class="form-control" placeholder="Enter alcohol" value="<?php echo $patient['alcohol']?>" readonly><?php echo form_error('alcohol'); ?>
                    </div>
                  </div>

                   <div class="col-md-1">
                    <div class="form-group">
                      <label for="smoking">Smoking</label>
                      <input type="boolean" name="smoking" id="smoking" class="form-control" placeholder="Enter smoking" value="<?php echo $patient['smoking']?>" readonly><?php echo form_error('smoking'); ?>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="diabetes">Diabetes</label>
                      <input type="text" name="diabetes" id="diabetes" class="form-control" placeholder="Enter diabetes" value="<?php echo $patient['diabetes']?>" readonly><?php echo form_error('diabetes'); ?>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="hypertention">Hypertention</label>
                      <input type="text" name="hypertention" id="hypertention" class="form-control" placeholder="Enter smoking" value="<?php echo $patient['hypertention']?>" readonly><?php echo form_error('hypertention'); ?>
                    </div>
                  </div>


                  <div class="col-md-1">
                   <div class="form-group">
                    <label for="bmi">BMI</label>
                    <input type="text" name="bmi" id="bmi" class="form-control" placeholder="BMI" value="<?php echo $patient['bmi']?>" readonly>
                     </div> 
                  </div>

                 <!--   <div class="col-md-2">
                    <div class="form-group">
                      <label for="bp">BP</label>
                      <input type="text" name="bp" id="bp" class="form-control" placeholder="Enter bp" value="<?php echo $patient['bp']?>" readonly><?php echo form_error('bp'); ?>
                    </div>
                  </div> -->
 
                  


                <div class="col-md-3">
                    <div class="form-group">
                      <label for="provisionalDiagnosis">Provisional Diagnosis</label>
                      <textarea type="text" name="provisionalDiagnosis" id="provisionalDiagnosis" class="form-control" placeholder="Enter provisionalDiagnosis" ><?php echo form_error('provisionalDiagnosis'); ?></textarea>
                    </div>
                  </div>
                  
                 
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="note">Notes</label>
                      <textarea type="text" name="note1" id="note1" class="form-control" placeholder="Enter Notes"></textarea>
                    </div>
                  </div>
                  

                  
                 <!--  <div class="" style="width: 35%;">
                    <div class="form-group">
                      <label for="provisionalDiagnosis">Provisional Diagnosis</label>
                      <input type="text" name="provisionalDiagnosis" id="provisionalDiagnosis" class="form-control" placeholder="Enter provisionalDiagnosis" ><?php echo form_error('provisionalDiagnosis'); ?>
                    </div>
                  </div> -->
                  

                  
                 <!--  <div class="col-md-5" >
                    <div class="form-group">
                      <label for="note">Next Review Date</label>
                      <input type="date" name="review_date" value="<?php echo date("Y-m-d", strtotime("+90 days", strtotime(date('Y-m-d'))));?>" class="form-control">
                    </div>
                  </div> -->
                  <div class="col-md-3" >
                    <div class="form-group textarea-box">
                      <label for="note">Note</label>
                      <textarea type="text" name="note2" class="form-control text-boxx" placeholder="Enter Note"></textarea>
                      <!-- <textarea name="note2" id="note2" class="form-control" placeholder="Enter Description"></textarea><?php echo form_error('note2'); ?> -->
                    </div>
                  </div>
                  
                 
               </div>

                <div class="form-row">
                  
              </div>

                  <!-- <div id="patientinformation1"></div> -->
                  

                <?php if($presciptions == '') {?>  

                  <div class="col-md-12" id="medicinetable">
                    <div class="page-content page-container"  id="page-content">
                       <div class="padding">
                           <div class="row container d-flex justify-content-center">
                               <div class="col-lg-11 grid-margin stretch-card">
                                   <div class="card">
                                       <div class="card-body">
                                           
                                           <div class="table-responsive" style="height: 700px;">
                                               <table id="faqs" class="table table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Medicine</th>
                                                           <th>Morning</th>
                                                           <th>Afternoon</th>
                                                           <th>Night</th>
                                                           <th>Before Food</th>
                                                           <th>After Food</th>
                                                           <th>No of Days</th>
                                                           <th>Action</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                    <?php for ($i=0; $i < 10; $i++) {  ?>
                                                       <tr class="select-med-padding" id="rowdelete<?php echo $i+1;?>">
                                                           <td style="width: 100px"> 
                                                            <input list=text_editors style="width:310px; height: 50px;" name="medicine_id[]">
<!-- <button>▼</button> -->
                                                            <datalist id="text_editors" >
                                                                <select multiple size=8  class="form-control">
                                                                    <option value="Select Medicine">Select Medicine</option>
                                                                <?php if($medicine->num_rows() > 0){
                                                                    foreach ($medicine->result() as $pa) { ?>
                                                                        <option value="<?php echo $pa->name;?>"></option>
                                                                    <?php }
                                                                }?>
                                                                </select>
                                                            </datalist>
                                                           <!-- <select class="form-control select2 year" name="medicine_id[]" style="width:310px; height: 50px;">
                                                                <option value="">Select Medicine</option>
                                                                <?php if($medicine->num_rows() > 0){
                                                                    foreach ($medicine->result() as $pa) { ?>
                                                                        <option value="<?php echo $pa->medicine_id;?>"><?php echo $pa->name;?></option>
                                                                    <?php }
                                                                }?>
                                                            </select> --></td>
                                                           <td>
                                                            <input type="text" class="form-control largerCheckbox<?php echo $i+1;?> checkbox1<?php echo $i+1;?> form-cont" value="-" name="morning[]" style="font-size: 25px;">
                                                           
                                                           </td>
                                                           <td><input type="text" name="afternoon[]" class="form-control largerCheckbox<?php echo $i+1;?> checkbox2<?php echo $i+1;?>" value="-" style="font-size: 25px;">
                                                           
                                                           </td>
                                                           <td><input type="text" name="night[]" class="form-control largerCheckbox<?php echo $i+1;?> checkbox3<?php echo $i+1;?>" value="-" style="font-size: 25px;">

                                                            
                                                           </td>
                                                           <td><input type="checkbox" name="befofood[]" class="form-control checkbox5<?php echo $i+1;?>"value="0" style="font-size: 25px;">
                                                            <input type="hidden" name="before_food[]"  id="output5<?php echo $i+1;?>" value="0">
                                                           </td>
                                                           <td><input type="checkbox" name="afted[]" class="form-control checkbox4<?php echo $i+1;?>" value="0" style="height: 45px;width: 45px;">
                                                            <input type="hidden" name="after_food[]"  id="output4<?php echo $i+1;?>" value="0">
                                                           </td>
                                                           
                                                           <td><input type="number" name="no_of_days[]" value="90" style="height: 50px;width: 66px;"></td>
                                                           <td class="mt-10"><a class="badge badge-danger" style="color:#fff;" onclick="$('#rowdelete<?php echo $i+1;?>').remove();"><i class="fa fa-trash"></i> Delete</a></td>
                                                       </tr>
                                                   <?php } ?>
                                                   </tbody>
                                               </table>
                                           </div>
                                           <div class="text-center"><a onclick="addfaqs();" class="badge badge-success" style="color:#fff;"><i class="fa fa-plus"></i> ADD NEW</a></div>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-1">
                                  <div class="form-group" style="width: 120px;">
                      <label for="age">Address</label>
                      <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $patient['address']?>" readonly><?php echo $patient['address']?></textarea>
                    </div>

                      <div class="form-group" style="width: 120px;">
                      <label for="note">Next Review Date</label>
                      <input type="date" name="review_date" value="<?php echo date("Y-m-d", strtotime("+90 days", strtotime(date('Y-m-d'))));?>" class="form-control">
                    </div>

                      <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create" style="margin-top: 5px;">

                               </div>
                           </div>
                       </div>
                   </div>
                  </div>

              <?php }else { ?>

                <div class="col-md-12" id="medicinetable">
                    <div class="page-content page-container"  id="page-content">
                       <div class="padding">
                           <div class="row container d-flex justify-content-center">
                               <div class="col-lg-11 grid-margin stretch-card">
                                   <div class="card">
                                       <div class="card-body">
                                           
                                           <div class="table-responsive" style="height: 700px;">
                                               <table id="faqs" class="table table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Medicine</th>
                                                           <th>Morning</th>
                                                           <th>Afternoon</th>
                                                           <th>Nightsss</th>
                                                           <th>Before Food</th>
                                                           <th>After Foods</th>
                                                           <th>No of Days</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                    <?php if($medicines->num_rows() > 0) {
                                                        foreach ($medicines->result() as $key => $md) { ?>
                                                       <tr class="select-med-padding" id="deleteitem<?php echo $md->medicine_id;?>">
                                                           <td style="width: 100px">
                                                            <input list=text_editors style="width:310px; height: 50px;" name="medicine_id[]" value="<?php echo $md->medicine_name;?>">
<!-- <button>▼</button> -->
                                                            <datalist id="text_editors" >
                                                                <select multiple size=8  class="form-control">
                                                                    <!-- <option value="<?php echo $md->medicine_name;?>"></option> -->
                                                                <?php if($medicine->num_rows() > 0){
                                                                    foreach ($medicine->result() as $pa) { ?>
                                                                        <option value="<?php echo $pa->name;?>"></option>
                                                                    <?php }
                                                                }?>
                                                                </select>
                                                            </datalist></td>
                                                           <td>
                                                            <?php if($md->morning == 0) {
                                                                    $mof = '';
                                                                }else {
                                                                    $mof = 'checked';
                                                                }?>
                                                            <input type="text" class="form-control largerCheckbox<?php echo $key+1;?> checkbox1<?php echo $key+1;?>" value="<?php echo $md->morning;?>" name="morning[]" style="font-size:25px;" <?php echo $mof;?>>
                                                           
                                                           </td>
                                                           <td>
                                                            <?php if($md->afternoon == 0) {
                                                                    $aof = '';
                                                                }else {
                                                                    $aof = 'checked';
                                                                }?>
                                                            <input type="text" name="afternoon[]" class="form-control largerCheckbox<?php echo $key+1;?> checkbox2<?php echo $key+1;?>" style="font-size:25px;" value="<?php echo $md->afternoon;?>" <?php echo $aof;?>>
                                                           
                                                           </td>
                                                           <td>
                                                            <?php if($md->night == 0) {
                                                                    $ngf = '';
                                                                }else {
                                                                    $ngf = 'checked';
                                                                }?>
                                                            <input type="text" name="night[]" class="form-control largerCheckbox<?php echo $key+1;?> checkbox3<?php echo $key+1;?>" style="font-size:25px;" value="<?php echo $md->night;?>" >

                                                           </td>
                                                           <td>
                                                            <?php if($md->before_food == 0) {
                                                                    $bftr = '';
                                                                }else {
                                                                    $bftr = 'checked';
                                                                }?>
                                                            <input type="checkbox" name="beforfood[]" style="font-size:25px;" class="form-control checkbox5<?php echo $key+1;?>"value="<?php echo $md->before_food;?>" <?php echo $bftr;?>>
                                                            <input type="hidden" name="before_food[]"  id="output5<?php echo $key+1;?>" value="<?php echo $md->before_food;?>">
                                                           </td>
                                                           <td>
                                                            <?php if($md->after_food == 0) {
                                                                    $aftr = '';
                                                                }else {
                                                                    $aftr = 'checked';
                                                                }?>
                                                            <input type="checkbox" name="afted[]" style="font-size:25px;" class="form-control checkbox4<?php echo $key+1;?>" value="<?php echo $md->after_food;?>" <?php echo $aftr;?>>
                                                            <input type="hidden" name="after_food[]"  id="output4<?php echo $key+1;?>" value="<?php echo $md->after_food;?>">
                                                           </td>
                                                           
                                                           <td><input type="number" name="no_of_days[]" value="<?php echo $md->no_of_days;?>" style="height: 50px;width: 66px;"></td>
                                                           <td class="mt-10"><a class="badge badge-danger" style="color:#fff;" onclick="$('#deleteitem<?php echo $md->medicine_id;?>').remove();"><i class="fa fa-trash"></i> Delete</a></td>
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

                               <div class="col-lg-1">
                                  <div class="form-group" style="width: 120px;">
                      <label for="age">Address</label>
                      <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="<?php echo $patient['address']?>" readonly><?php echo $patient['address']?></textarea>
                    </div>

                      <div class="form-group" style="width: 120px;">
                      <label for="note">Next Review Date</label>
                      <input type="date" name="review_date" value="<?php echo date("Y-m-d", strtotime("+90 days", strtotime(date('Y-m-d'))));?>" class="form-control">
                    </div>

                      <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create" style="margin-top: 5px;">

                               </div>
                           </div>
                       </div>
                   </div>
                  </div>
              <?php } ?>
                  
                   <!-- <td></td> -->
          				<!-- <div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
          				</div> -->
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
<script type="text/javascript">
  var faqs_row = 1;
function addfaqs() {
html = '<tr id="faqs-row' + faqs_row + '" class="select-med-padding">';
    html += '<td style="width: 100px"><input list=text_editors style="width:310px; height: 50px;" name="medicine_id[]"><datalist id="text_editors" ><select multiple size=8  class="form-control"><option value="Select Medicine">Select Medicine</option><?php if($medicine->num_rows() > 0){foreach ($medicine->result() as $pa) { ?><option value="<?php echo $pa->name;?><?php }}?></select></datalist></td>';
    html += '<td style="display:none;"><input type="hidden" id=afr'+faqs_row+' value="0"   class="largerCheckbox'+faqs_row+' form-control" name="chi[]" style="font-size: 25px;"> </td>';
   html += '<td><input type="text" id=mor'+faqs_row+' value="0"   class="largerCheckbox'+faqs_row+' form-control" name="morning[]" style="font-size: 25px;"> </td>';
    html += '<td><input type="text" id=afr'+faqs_row+' class="form-control largerCheckbox'+faqs_row+'"  value="0" name="afternoon[]" style="font-size:25px;"> </td>';
    html += '<td><input type="text" id=ngt'+faqs_row+' class="form-control largerCheckbox'+faqs_row+'"  value="0" name="night[]" style="font-size:25px;"></td>';
    html += '<td><input type="checkbox" id=afrfd'+faqs_row+' class="form-control" style="font-size: 25px;" value="0" name="aftd[]"> <input type="hidden" class=f'+faqs_row+' value="0" name="after_food[]"></td>';
    html += '<td><input type="checkbox" id=ngtfd'+faqs_row+' class="form-control" style="font-size: 25px;" value="0" name="befd[]"> <input type="hidden" class=g'+faqs_row+' value="0" name="before_food[]"></td>';
    html += '<td><input type="number" name="no_of_days[]" value="0" style="height: 50px;width: 66px;"></td>';
    html += '<td class="mt-10"><a class="badge badge-danger" style="color: #fff;" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</a></td>';

    html += '</tr>';

$('#faqs tbody').append(html);

faqs_row++;
}
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
                      $('#birth_date').val(result['birth_date']);
                      $('#height').val(result['height']);
                      $('#weight').val(result['weight']);
                      $('#alcohol').val(result['alcohol']);
                      $('#smoking').val(result['smoking']);
                      $('#sex').val(result['sex']);
                      $('#height').val(result['height']);
                      $('#bmi').val(result['bmi']);
                      $('#blood_group').val(result['blood_group']);

                      if(result['medicines'] == 0) {
                        $('#medicinetable').show();
                      }else {
                         $('#afsdreggv').show();
                         var faqs_row = 1;
                         msg = '<div class="page-content page-container" id="page-content"><div class="padding"><div class="row container d-flex justify-content-center"><div class="col-lg-12 grid-margin stretch-card"><div class="card"><div class="card-body"><h4 class="card-title text-center">Medicine Details</h4><hr><div class="table-responsive" style="height: 300px;"><table id="faqs" class="table table-hover"><thead><tr><th>Medicine</th><th>Morning</th><th>Afternoon</th><th>Night</th><th>Before Food</th><th>After Food</th><th>No of Days</th></tr></thead><tbody>';
                        $.each(result['list'], function (k, v) {

                            if(v.morning == 0) {
                                var mof = '';
                            }else {
                                var mof = 'checked';
                            }

                            if(v.afternoon == 0) {
                                var aof = '';
                            }else {
                                var aof = 'checked';
                            }

                            if(v.night == 0) {
                                var nof = '';
                            }else {
                                var nof = 'checked';
                            }

                            if(v.after_food == 0) {
                                var aff = '';
                            }else {
                                var aff = 'checked';
                            }

                            if(v.before_food == 0) {
                                var bef = '';
                            }else {
                                var bef = 'checked';
                            }
                            msg += '<tr id="faqs-row' + faqs_row + '"><td style="width: 100px"><input list=text_editors style="width:310px; height: 50px;" name="medicine_id[]"><datalist id="text_editors" ><select multiple size=8  class="form-control"><option value="'+v.medicine_name+'"></option><?php if($medicine->num_rows() > 0){foreach ($medicine->result() as $pa) { ?><option value="<?php echo $pa->name;?>"></option><?php }}?></select></datalist></td><td><input type="checkbox" id=row'+faqs_row+' value="'+v.morning+'"name="morning[]" '+mof+'> </td><td><input type="checkbox" id=afr'+faqs_row+' value="'+v.afternoon+'" name="afternoon[]" '+aof+'> </td><td><input type="checkbox" id=ngt'+faqs_row+' value="'+v.night+'" name="night[]" '+nof+'> </td><td><input type="checkbox" id=afrfd'+faqs_row+' value="'+v.after_food+'" name="aftd[]" '+aff+'> <input type="hidden" class=f'+faqs_row+' value="'+v.after_food+'" name="after_food[]"></td><td><input type="checkbox" id=ngtfd'+faqs_row+' value="'+v.before_food+'" name="befd[]" '+bef+'> <input type="hidden" class=g'+faqs_row+' value="'+v.before_food+'" name="before_food[]"></td><td><input type="number" class="form-control" name="no_of_days[]" value="'+v.no_of_days+'" style="width:100px;"></td><td class="mt-10"><a class="badge badge-danger" style="color: #fff;" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</a></td>';
                        });

                        msg += '</tbody></table></div><div class="text-center"><a onclick="addfaqs();" class="badge badge-success" style="color:#fff;"><i class="fa fa-plus"></i> ADD NEW</a></div></div></div></div></div></div></div>';
                        $('#afsdreggv').append(msg);
                      }
                   
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

<script type="text/javascript">
    button = document.querySelector('button');
datalist = document.querySelector('datalist');
select = document.querySelector('select');
options = select.options;

/* on arrow button click, show/hide the DDL*/
button.addEventListener('click', toggle_ddl);

function toggle_ddl() {
  if (datalist.style.display === '') {
    datalist.style.display = 'block';
    this.textContent = "▲";
    /* If input already has a value, select that option from DDL */
    var val = input.value;
    for (var i = 0; i < options.length; i++) {
      if (options[i].text === val) {
        select.selectedIndex = i;
        break;
      }
    }
  } else hide_select();
}

/* when user selects an option from DDL, write it to text field */
select.addEventListener('change', fill_input);

function fill_input() {
  input.value = options[this.selectedIndex].value;
  hide_select();
}

/* when user wants to type in text field, hide DDL */
input = document.querySelector('input');
input.addEventListener('focus', hide_select);

function hide_select() {
  datalist.style.display = '';
  button.textContent = "▼";
}
</script>   

