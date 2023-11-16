
      <!-- Main Content -->
      <?php if($this->session->userdata('type_id') == 1) {?>
      <div class="main-content">
        <section class="section">
          <div class="row ">
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>accountant" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Hospital Management</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($accountant);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>appointment" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Appointment</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($appointment);?></span>
                    
                  </div>
                  
                  
                </a>
                
                </div>
              </div>
            </div> 
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3"  style="height: 130px;">
                <a href="<?=base_url(); ?>expenditures" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Expenditures</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($expenditures);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>laboratory" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">laboratory</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($laboratory);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>

          </div>


        <div class="row ">
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>labills" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Lab bills</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($labbills);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>drug" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Medicines</h4>
                    <span style="font-size: 35px; margin-left: 56%;"><?php echo count($drug);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>

          <!-- </div>  -->

      <!-- <div class="row "> -->
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>nurse" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Nurse</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($nurse);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
           
           
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>patient" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Patient</h4>
                    <span style="font-size: 35px; margin-left: 48%;"><?php echo count($patient);?></span>
                    </div>
                  
                </a>
                
                </div>
              </div>
            </div>
        </div>
          
           
    <div class="row ">
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>presciption" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciptions</h4>
                    <span style="font-size: 35px; margin-left: 65%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>purchase" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Purchase</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($purchase);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>sales" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Sales</h4>
                    <span style="font-size: 35px; margin-left: 64%;"><?php echo count($sales);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>


            


            
             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>drug" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Medicines</h4>
                    <span style="font-size: 35px; margin-left: 56%;"><?php echo count($drug);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>


         
    </div>

          
          <!-- <div class="row">
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Quantity of Items in</h4>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                </div>
                <div class="card-body">
                  <div id="echart_graph_line" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Articles with Major</h4>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="echart_area_line" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          
        </section>
        
      </div>

    <?php } ?>

    <?php if($this->session->userdata('type_id') == 2) {?>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 3) {?>
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>accountant" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Hospital Management</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($accountant);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>appointment" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Appointment</h4>
                    <span style="font-size: 35px; margin-left: 65%;"><?php echo count($appointment);?></span>
                   
                    </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>presciption" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciption</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
          </div>
          <div class="row ">
        
          <!-- <div class="row "> -->
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>patient" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Patient</h4>
                    <span style="font-size: 35px; margin-left: 55%;"><?php echo count($patient);?></span>
                    
                  </div>
                  
                  
                </a>
                
                </div>
              </div>
            </div>

          <!--   
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>laboratorist" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Laboratorists</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($laboratories);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div> -->

           <!--  <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>doctor" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciptions</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
          </div>
          </div> -->
          
        </section>
        
      </div>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 4) {?>

      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>presciption" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciptions</h4>
                    <span style="font-size: 35px; margin-left: 60%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>patient" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Patient</h4>
                    <span style="font-size: 35px; margin-left: 45%;"><?php echo count($patient);?></span>
                    <!-- <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                    <!-- <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p> -->
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
          </div>
          <div class="row ">
            
        
          <!-- <div class="row "> -->
             
         </section>
        
      </div>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 5) {?>

      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>drug" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Medicines</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($drug);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
           
            
          </div>
          <div class="row ">
        
          <!-- <div class="row "> -->
            

            
        
          </div>
          </div>
          
          
        </section>
        
      </div>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 6) {?>

      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>laboratory" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">laboratory</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($laboratory);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>labills" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Lab Bills</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($labbills);?></span>
                    </div>
                  
                </a>
                
                </div>
              </div>
            </div>
           <!--  <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>nurse" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Nurse</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($nurse);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
          </div> -->
          <!-- <div class="row "> -->
        

           <!--  <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>doctor" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciptions</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
          </div> -->
          <!-- </div> -->
          
        </section>
        
      </div>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 7) {?>


        <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>expenditures" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Expenditures</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($expenditures);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>sales" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Sales</h4>
                    <span style="font-size: 35px; margin-left: 65%;"><?php echo count($sales);?></span>
                   
                    </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>purchase" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Purchase</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($purchase);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
          </div>
          <div class="row ">
        
          <!-- <div class="row "> -->
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>labills" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title"> OP Lab Bills</h4>
                    <span style="font-size: 35px; margin-left: 55%;"><?php echo count($labbills);?></span>
                    
                  </div>
                  
                  
                </a>
                
                </div>
              </div>
            </div>
 
          
        </section>
        
      </div>

    <?php } ?>

    <?php if($this->session->userdata('type_id') == 8) {?>

      <div class="main-content">
        <section class="section">
          <div class="row ">

             <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3" style="height: 130px;">
                <a href="<?=base_url(); ?>appointment" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Appointment</h4>
                    <span style="font-size: 35px; margin-left: 70%;"><?php echo count($appointment);?></span>
                    
                  </div>
                  
                  
                </a>
                
                </div>
              </div>
            </div> 
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>patient" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Patient</h4>
                    <span style="font-size: 35px; margin-left: 55%;"><?php echo count($patient);?></span>
                    </div>
                  
                </a>
                
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3">
                <a href="<?=base_url(); ?>doctor" style="color: #fff;">  
                  <div class="card-content">
                    <h4 class="card-title">Presciptions</h4>
                    <span style="font-size: 35px; margin-left: 65%;"><?php echo count($presciptions);?></span>
                    
                  </div>
                  
                </a>
                
                </div>
              </div>
            </div>
            
          </div>
          </div>
          
        </section>
        
      </div>
    <?php } ?>

    <?php if($this->session->userdata('type_id') == 9) {?>

<div class="main-content">
  <section class="section">
    <div class="row ">

       <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-cyan-dark">
          <div class="card-statistic-3">
          <a href="<?=base_url(); ?>accountant" style="color: #fff;">  
            <div class="card-content">
              <h4 class="card-title">Hospital Management</h4>
              <span style="font-size: 35px; margin-left: 65%;"><?php echo count($accountant);?></span>
              
            </div>
            
          </a>
          
          </div>
        </div>
      </div>
      
    </div>
    </div>
    
  </section>
  
</div>
<?php } ?>