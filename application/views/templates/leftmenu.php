      <style type="text/css">
        
        .newside-menu{
          background-color: #004775;
    height: 650px;
/*    overflow-y: scroll;*/
        }
      </style>

      <div class="main-sidebar sidebar-style-2" >
        <aside id="sidebar-wrapper" style="height: 1200px;background-color: #004775;" >
          <div class="sidebar-brand">
            <a href="<?=base_url();?>adminlogin"> <!-- <img alt="image" src="<?=base_url();?>assets1/logo.png" class="header-logo" / style="height: 70px; width: 248px; background-color: #fff;"> --><!--  <span
                class="logo-name" style="font-size: 27px;">Vysyaraju Jewellers</span> -->
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?=base_url();?>assets/149071.png" style="height: 60px;">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $this->session->userdata('name');?></div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
          <ul class="sidebar-menu newside-menu">
            <li class="menu-header">Main</li>
            <?php if($this->session->userdata('type_id') == 1) {?>
            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            <li <?php if($this->router->fetch_class()== "accountant") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>accountant"><i data-feather="monitor"></i><span>Hospital Management</span></a></li>

              <li <?php if($this->router->fetch_class()== "appointment") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>appointment"><i data-feather="shield"></i><span>Appointment</span></a></li>

             <li <?php if($this->router->fetch_class()== "doctor") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>doctor"><i data-feather="shield"></i><span>Doctors</span></a></li>

             <li <?php if($this->router->fetch_class()== "department") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>department"><i data-feather="circle"></i><span>Department</span></a></li>

            <li <?php if($this->router->fetch_class()== "employeesdata") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>employeesdata"><i data-feather="monitor"></i><span>Employees</span></a></li>

             <li <?php if($this->router->fetch_class()== "expenditures") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>expenditures"><i data-feather="circle"></i><span>Expenditures</span></a></li>

             <li <?php if($this->router->fetch_class()== "laboratory") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>laboratory"><i data-feather="circle"></i><span>laboratory</span></a></li>

            <li <?php if($this->router->fetch_class()== "labills") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>labills"><i data-feather="circle"></i><span>OP Lab Bills</span></a></li>
             <li <?php if($this->router->fetch_class()== "drug") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>drug"><i data-feather="circle"></i><span>Medicines</span></a></li>
 

            <li <?php if($this->router->fetch_class()== "patient") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>patient"><i data-feather="shield"></i><span>Patient</span></a></li>
 
            <li <?php if($this->router->fetch_class()== "presciption") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>presciption"><i data-feather="circle"></i><span>Prescription</span></a></li>
              
            <!-- <li <?php if($this->router->fetch_class()== "nurse") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>nurse"><i data-feather="circle"></i><span>Nurse</span></a></li> -->
            
             <li <?php if($this->router->fetch_class()== "purchase") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>purchase"><i data-feather="circle"></i><span>Purchase</span></a></li>
           

            <li <?php if($this->router->fetch_class()== "sales") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>sales"><i data-feather="circle"></i><span>Sales</span></a></li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="file"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
               <li <?php if($this->router->fetch_class()== "reports") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>reports"><span style="color: #fff;">Patient Reports</span></a></li>
               <li <?php if($this->router->fetch_class()== "labreports") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>labreports"><span style="color: #fff;">Lab Reports</span></a></li>

               <li <?php if($this->router->fetch_class()== "expenditurereports") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>expenditurereports"><span style="color: #fff;">Expenditure Reports</span></a></li>

                <li <?php if($this->router->fetch_class()== "purchasereports") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>purchasereports"><span style="color: #fff;">Purchase Reports</span></a></li>

                <li <?php if($this->router->fetch_class()== "salesreports") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>salesreports"><span style="color: #fff;">Sales Reports</span></a></li>

              </ul>
            </li>

            

            

            

           

            
          <?php } ?>
          <?php if($this->session->userdata('type_id') == 3) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

             <li <?php if($this->router->fetch_class()== "employeesdata") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>employeesdata"><i data-feather="monitor"></i><span>Employees</span></a></li>
            <li <?php if($this->router->fetch_class()== "patient") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>patient"><i data-feather="shield"></i><span>Patient</span></a></li>

              <li <?php if($this->router->fetch_class()== "appointment") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>appointment"><i data-feather="shield"></i><span>Appointment</span></a></li>

            <li <?php if($this->router->fetch_class()== "presciption") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>presciption"><i data-feather="circle"></i><span>Presciption</span></a></li>
          


          <?php } ?>
           <?php if($this->session->userdata('type_id') == 2) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            

            
           <li <?php if($this->router->fetch_class()== "patient") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>patient"><i data-feather="shield"></i><span>Patient</span></a></li>

            <li <?php if($this->router->fetch_class()== "presciption") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>presciption"><i data-feather="circle"></i><span>Presciption</span></a></li>
            
         
          <?php } ?>

          <?php if($this->session->userdata('type_id') == 8) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
            <li <?php if($this->router->fetch_class()== "appointment") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>appointment"><i data-feather="shield"></i><span>Appointment</span></a></li>

            <li <?php if($this->router->fetch_class()== "patient") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>patient"><i data-feather="shield"></i><span>Patient</span></a></li>

            <li <?php if($this->router->fetch_class()== "presciption") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>presciption"><i data-feather="circle"></i><span>Presciption</span></a></li>
          <?php } ?>


          <?php if($this->session->userdata('type_id') == 6) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            <li <?php if($this->router->fetch_class()== "laboratory") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>laboratory"><i data-feather="circle"></i><span>laboratory</span></a></li>

            <li <?php if($this->router->fetch_class()== "labills") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>labills"><i data-feather="circle"></i><span>OP Lab Bills</span></a></li>
             
            
          <?php } ?>

          <?php if($this->session->userdata('type_id') == 5) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
            <li <?php if($this->router->fetch_class()== "drug") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>drug"><i data-feather="shield"></i><span>Medicines</span></a></li>

            
          <?php } ?>

      


          <?php if($this->session->userdata('type_id') == 4) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            <li <?php if($this->router->fetch_class()== "patient") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>patient"><i data-feather="shield"></i><span>Patient</span></a></li>

            <li <?php if($this->router->fetch_class()== "presciption") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>presciption"><i data-feather="circle"></i><span>Presciption</span></a></li>

            
          <?php } ?>

           <?php if($this->session->userdata('type_id') == 7) {?>

            <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            <li <?php if($this->router->fetch_class()== "expenditures") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>expenditures"><i data-feather="shield"></i><span>Expenditures</span></a></li>

            <li <?php if($this->router->fetch_class()== "purchase") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>purchase"><i data-feather="circle"></i><span>Purchase</span></a></li>

            <li <?php if($this->router->fetch_class()== "sales") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>sales"><i data-feather="circle"></i><span>Sales</span></a></li>

             <li <?php if($this->router->fetch_class()== "labills") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>labills"><i data-feather="circle"></i><span>OP Lab Bills</span></a></li>

            
          <?php } ?>

          <?php if($this->session->userdata('type_id') == 9) {?>

              <li <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>addashboard"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

              <li <?php if($this->router->fetch_class()== "employeesdata") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>employeesdata"><i data-feather="monitor"></i><span>Employees</span></a></li>
              <li <?php if($this->router->fetch_class()== "accountant") echo 'class="active"';?>><a class="nav-link" href="<?=base_url();?>accountant"><i data-feather="shield"></i><span>Hospital Management</span></a></li>

               


              <?php } ?>

            
          </ul>
        </aside>
      </div>