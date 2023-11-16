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
                    <h4>Create Lab Test</h4>
                      <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                      <!-- <a href="<?=base_url();?>complaint/create">New Complaint Registration</a> -->
                  </div>
                  <div class="card-body">
          		<form action="<?=base_url()?>laboratory/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-4">
          					<div class="form-group">
          						<label for="laboratory_type">Laboratory Type</label>
          						<select class="form-control" name="laboratory_type" onchange="yesnoCheck(this);">
                         <option value="Test">Test</option>
                         <option value="Package">Package</option>      
                      </select>
          					</div>
          				</div>

                  <div class="col-md-4" id="templates1">
                    <div class="form-group">
                      <label for="name">TestName</label>
                      <input type="text" name="test" id="test" class="form-control" placeholder="Enter test" value="<?php echo $this->input->post('test')?>"><?php echo form_error('test'); ?>
                    </div>
                  </div>

                  <div class="col-md-4" id="templates3" style="display: none;">
                    <div class="form-group">
                      <label for="laboratory_type">Package Name</label>
                      <input type="text" name="package_name" class="form-control" placeholder="Package Name">
                    </div>
                  </div>

                  <div class="col-md-4" id="templates2" style="display: none;">
                    <div class="form-group">
                      <label for="laboratory_type">Packages</label>
                      <select class="form-control label ui selection fluid dropdown" name="testdata[]" multiple="">
                         <?php if($laboratory->num_rows() > 0) {
                          foreach ($laboratory->result() as $key => $lab) { ?>  
                            <option value="<?php echo $lab->test;?>"><?php echo $lab->test;?></option>
                          <?php }
                          } ?> 
                      </select>
                    </div>
                  </div>



                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="code">Code</label>
                      <input type="text" name="code" id="test" class="form-control" placeholder="Enter code" value="<?php echo $this->input->post('code')?>"><?php echo form_error('code'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Price</label>
                      <input type="text" name="price" id="test" class="form-control" placeholder="Enter Price" value="0"><?php echo form_error('price'); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Discount Price</label>
                      <input type="text" name="discount" id="test" class="form-control" placeholder="Enter Discount" value="0"><?php echo form_error('discount'); ?>
                    </div>
                  </div>

                  

                  

                  
                   <!-- <td></td> -->
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
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

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
<script type="text/javascript">
  $('.label.ui.dropdown')
  .dropdown();

$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})
</script> 

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?=base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>



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
    function yesnoCheck(that) {
    if (that.value == "Package") {
            document.getElementById("templates2").style.display = "block";
            document.getElementById("templates3").style.display = "block";
            document.getElementById("templates1").style.display = "none";
            
        } else {
          document.getElementById("templates3").style.display = "none";
            document.getElementById("templates2").style.display = "none";
            document.getElementById("templates1").style.display = "block";
        }
    }
</script>
