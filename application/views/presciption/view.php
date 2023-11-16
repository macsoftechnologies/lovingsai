<style>
    .navbar {
        margin-top: 3px;
    }

    .head {
        justify-content: center;
        text-align: center;
        /* display: flex; */
    }

    .logo-text {
        border-style: solid;
        margin-top: 15px;
        z-index: 50px;
    }

    hr {
        border: none;
        height: 1px;
        /* Set the hr color */
        color: #333;
        /* old IE */
        background-color: #333
    }

    p {
        margin: 0px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .blood-sample {
        border: 1px solid #000;
        border-radius: 5px;
        margin-left: 15px;
    }

    .blood-samples p {
        padding: 5px;

    }

    .blood-sample p {
        padding: 5px;

    }

    .pre-header {
        border-bottom: none !important;
    }


</style>

<div class="main-content">

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pre-header">
                            <!-- <h4>Presciption</h4> -->
                            <!-- <a data-toggle="modal" data-target="#Modaldata"  class="btn btn-primary pull-right" style="color:#fff;"><i class="fas fa-plus-circle"></i> New Complaint Registration</a> -->
                            <!-- <a href="<?= base_url(); ?>complaint/create">New Complaint Registration</a> -->
                        </div>
                        <div class="card-body" id="root">
                            <div class="container">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <!-- <h6><?php echo $presciptions['adminname']; ?></h6> -->
                                        <p>
                                            <?php echo $presciptions['departmentname']; ?>
                                        </p>
                                        <!-- <p>DNB Family Medicine(Puttaparthi)</p> -->

                                    </div>
                                    <!--             <div class="head">
                <img src="<?= base_url(); ?>assets/lovingsai123.jpg"
                    style="height: 150px; width: 150px" alt="logo" />

            </div> -->
                                    <!--  <form class="form-inline">

                <div>
                    <h6>Loving Sai Clinic</h6>
                    <p><?php echo $presciptions['adminaddress']; ?></p> -->
                                    <!--  <p>
                    <p>Dr.no. 1-117-8,MIG-1,Plot No.58</p>
                    <p> Sector-12, MVP colony</p> DR kkr gowtham school road<p>
                        visakhapatnam-530017.A.P </p>
                    <p>Timings: 7:00am-1:30pm(3:30pm)</p>
                    <p> Closed on
                        Sunday & Last monday</p>
                    </p> -->
                                </div>
                                </form>
                            </div>
                        </div>

                        <!--  <section class="d-flex container">
        <div class="blood-samples">
            <p>
                <i class="fa fa-phone-square" aria-hidden="true"></i><?php echo $presciptions['phonenumber']; ?>
            </p>
        </div>
        <div class="blood-sample">
            <p>HOME BLOOD SAMPLE: 7207573464/7207573465</p>
        </div>
    </section>  -->


                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <a>Patient Name:
                                    <?php echo $presciptions['name']; ?>
                                </a>
                                <a style="padding-left: 517px;">Date:
                                    <?php echo date('d-m-Y', strtotime($presciptions['created_at'])); ?>
                                </a>
                                <a>Age/Sex:
                                    <?php echo $presciptions['age']; ?>/
                                    <?php echo $presciptions['sex']; ?>
                                </a>
                                <a style="margin-right:60px;">BP:
                                    <?php echo $presciptions['bp']; ?>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between" style="margin-top: 30px;">
                                <a>Wt:
                                    <?php echo $presciptions['weight']; ?>
                                </a>
                                <a>Alchohol:
                                    <?php echo $presciptions['alcohol']; ?>
                                </a>
                                <a>Smoking:
                                    <?php echo $presciptions['smoking']; ?>
                                </a>
                                <a style="padding-right: 22px;">Diabetes:
                                    <?php echo $presciptions['diabetes']; ?>
                                </a>

                                <a style="margin-right:61px;">Hypertention:
                                    <?php echo $presciptions['hypertention']; ?>
                                </a>
                                <!-- <?php echo $presciptions['hypertention']; ?> -->

                            </div>
                            <div class="container"
                                style="margin-top: 30px; display: flex; justify-content: space-between;">
                                <div>
                                    <!-- <a style="margin: 10px;padding-right: 601px;margin-right: 54px;">Provisional Diagnosis:</a> -->
                                    <ul style="list-style: none;margin-left: -13px;padding: 0px;">
                                        <li style="inline-size: 200px; overflow-wrap: break-word;">Provisional Diagnosis:
                                            <?php echo $presciptions['provisional_diagnostics']; ?>
                                        </li>
                                        <li style="inline-size: 200px; overflow-wrap: break-word;">Notes:
                                            <?php echo $presciptions['note1']; ?>
                                        </li>
                                    </ul>

                                </div>


                                <div style="display: flex;font-size: 15px;margin-left: -63px;">
                                    <ul style="list-style: none;padding-left: 400px;">
                                        <li>Patient id</li>
                                        <li>Mobile</li>
                                        <li>Address</li>
                                        <li>Next Review Date</li>
                                        <li>Note</li>
                                    </ul>
                                    <ul style="list-style: none;">
                                        <li>:</li>
                                        <li>:</li>
                                        <li>:</li>
                                        <li>:</li>
                                        <li>:</li>
                                        
                                        
                                    </ul>
                                    <ul style="list-style: none;">
                                        <li><?php echo $presciptions['patient_code']; ?></li>
                                        <li><?php echo $presciptions['phonenumber']; ?></li>
                                        <li><?php echo $presciptions['address']; ?></li>
                                        <li><?php echo date('d-m-Y', strtotime($presciptions['review_date'])); ?></li>
                                        <li style="inline-size: 250px; overflow-wrap: break-word;"><?php echo $presciptions['note1']; ?></li>
                        
                                    </ul>

                                </div>
                                <div>


                                </div>
                            </div>

                            <div style="display: flex; margin-top: 30px;position: relative;">
                                <p style="margin-right: 20px;">Investigation:</p>
                                <table style="width: 100%;">
                                    <tr>
                                        <th style="width:40%">DRUG</th>
                                        <th></th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                    <?php if ($medicines->num_rows() > 0) {
                                         
                                        foreach ($medicines->result() as $key => $mds) { ?>
                                            <tr>

                                                <td>
                                                
                                                     <?php echo $key+1; ?>
                                                     
                                                    <b>
                                                        <?php echo $mds->medicine_name; ?>
                                                    </b><br>
                                                   <?php echo $mds->generic; ?>
                                                </td>
                                                <td>
                                                    <?php echo $mds->morning; ?>
                                                </td>
                                                <td>
                                                    <?php echo $mds->afternoon; ?>
                                                </td>
                                                <td>
                                                    <?php echo $mds->night; ?>
                                                </td>
                                                <td>
                                                    <?php if ($mds->before_food == 1) { ?>
                                                        <i class="fa fa-check"></i>
                                                    <?php } else { ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($mds->after_food == 1) { ?>
                                                        <i class="fa fa-check"></i>
                                                    <?php } else { ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $mds->no_of_days; ?>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                    <tr>
                                        <td style="height: 350px;"> </td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div style="position: absolute; left: 7px; bottom: 50px;"> 
                     
                                    <p style="font-size: 14px;text-align: justify;border: 1px solid black;width: 100px;height: 60px;padding: 10px;border-style: none;">Consultation Fee Is Valid For 10 Days.</p>
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

    <a href="<?= base_url() ?>presciption/edit/<?php echo $presciptions['patient_id']; ?>/<?php echo $presciptions['presciption_id']; ?>"
        class="btn btn-success"><i class="fa fa-pencil"></i>Edit</a>

        <a href="<?= base_url()?>presciption" class="btn btn-warning pull-right"><i class="fa fa-arrow-left">Back to Presciption</i></a>

    <button class="btn btn-info pull-right" onclick="printDiv('privntDIvb')" style="margin-right: 10px;"><i
            class="fa fa-print" aria-hidden="true"> Print</i></button>

</div>





</section>
</div>
<div class="newdiv" id="privntDIvb" style="display: none">

    <div class="card-body">
        <div class="container">
            <div class="d-flex justify-content-between">
                <!--  <div>
                <h6><?php echo $presciptions['adminname']; ?></h6>
                <p><?php echo $presciptions['departmentname']; ?></p>
                <p>DNB Family Medicine(Puttaparthi)</p>
    
            </div>
    --> <!-- <div class="head">
                <img src="<?= base_url(); ?>assets/lovingsai123.jpg"
                    style="height: 150px; width: 150px" alt="logo" />
    
            </div> -->
                <form class="form-inline">

                    <div>

                        <!-- <p><?php echo $presciptions['adminaddress']; ?></p> -->
                        <!--  <p>
                    <p>Dr.no. 1-117-8,MIG-1,Plot No.58</p>
                    <p> Sector-12, MVP colony</p> DR kkr gowtham school road<p>
                        visakhapatnam-530017.A.P </p>
                    <p>Timings: 7:00am-1:30pm(3:30pm)</p>
                    <p> Closed on
                        Sunday & Last monday</p>
                    </p> -->
                    </div>
                </form>
            </div>
        </div>

        <!--   <section class="d-flex container">
        <div class="blood-samples">
            <p>
                <i class="fa fa-phone-square" aria-hidden="true"></i><?php echo $presciptions['phonenumber']; ?>
            </p>
        </div>
        <div class="blood-sample">
            //<p>HOME BLOOD SAMPLE: 7207573464/7207573465</p>
        </div>
    </section> -->


        <div class="container" style="margin-top:305px;">
            <div class="d-flex justify-content-between" style="margin-top:-10px;display: flex;">
                <a style="padding-left: 90px;font-size: 20px;font-weight: bolder;">
                  <b>  <?php echo $presciptions['name']; ?></b>
                </a>
                <a style="padding-left:400px;font-size: 20px;font-weight: bolder;margin-right: -30px;">
                  <b>  <?php echo date('d-m-Y', strtotime($presciptions['created_at'])); ?> </b>
                </a>
                <a style="margin-left:120px;font-size: 20px; font-weight: bolder;margin-right: -70px;">
                  <b>  <?php echo $presciptions['age']; ?>/
                    <?php echo $presciptions['sex']; ?> </b>
                </a>
                <a style="margin-left: 130px;font-size: 20px;font-weight: bolder;margin-right: -35px;">
                   <b> <?php echo $presciptions['bp']; ?> </b>
                </a>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: 25px;font-weight: bolder;">
                <a style="padding-left: 15px;font-size: 20px;">
                  <b>  <?php echo $presciptions['weight']; ?> </b>
                </a>
                <a style="padding-left:0px;font-size: 20px; font-weight: bolder;">
                 <b>    <?php echo $presciptions['alcohol']; ?> </b>
                </a>
                <a style="padding-left: 20px;font-size: 20px;font-weight: bolder;">
                 <b>    <?php echo $presciptions['smoking']; ?>  </b>
                </a>
                <a style="padding-left: 35px;font-size: 20px;font-weight: bolder;">
                 <b>   <?php echo $presciptions['diabetes']; ?> </b>
                </a>
                <a style="padding-left:110px;font-size: 20px;font-weight: bolder;margin-right: -35px;">
                  <b>  <?php echo $presciptions['hypertention']; ?> </b>
                </a>

            </div>
        <div class="container" style="margin-top: 10px; display: flex; justify-content: space-between;">
                <div class="pro-block" style=" ">
                    <!-- <a style="margin: 10px;padding-right: 601px;margin-right: 54px;">Provisional Diagnosis:</a> -->
                    <ul style="list-style: none;padding: 0px;">
                        <li style="margin-top: 5px;margin-left: 160px;font-size: 20px; inline-size: 350px; overflow-wrap: break-word;">
                            <?php echo $presciptions['provisional_diagnostics']; ?>
                        </li>
                        <li style="margin-top: 40px;margin-left: 30px;font-size: 20px; inline-size: 350px; overflow-wrap: break-word;">
                            <?php echo $presciptions['note1']; ?>
                        </li>
                    </ul>

                </div>

            <div style="display: flex;list-style: none;font-size: 20px;margin-left: -30px;">
                    
                  <ul style="list-style: none;">
                      <li>PatientId</li>
                      <li>Mobile</li>
                      <li>Address</li>
                      <li>NextReviewDate</li>
                      <li>Note</li>
                  </ul>
                  <ul style="list-style: none;">
                      <li >:</li>
                      <li >:</li>
                      <li >:</li>
                      <li >:</li>
                      <li >:</li>
                      
                      
                  </ul>
                  <ul style="list-style: none;">
                      <li ><?php echo $presciptions['patient_code']; ?></li>
                      <li ><?php echo $presciptions['phonenumber']; ?></li>
                      <li ><?php echo $presciptions['address']; ?></li>
                      <li style="font-size: 20px; font-weight:bolder; "><?php echo date('d-m-Y', strtotime($presciptions['review_date'])); ?></li>
                      <li style="inline-size: 280px; overflow-wrap: break-word;"><?php echo $presciptions['note2']; ?></li>
                      
                  </ul>


            </div> 
        
        <div>


                </div>
            </div>

            <div style="display: flex; margin-top: 180px; ">
                <p style="width: 15%;"></p>

                <table style="width: 85%;">
                     
                     
                        <tr>
                            <th style="width: 50px;"><th>
                            <th style="width :50px"></th>
                            <th style="width :50px"></th>
                            <th style="width :50px"></th>
                            <th style="width :50px"></th>
                            <th style="width :50px"></th>
                            <th style="width :50px"></th>
                             

                        </tr>
                        <?php if ($medicines->num_rows() > 0) {
                            foreach ($medicines->result() as $key => $mds) { ?>
                                

                     <tr class="med-row">
                        <td style="width: 10px; font-size: 20px; font-weight:bolder;">
                            <span class="med-medicine-name"><?php echo $key + 1; ?>.</span>
                        </td>
                        <td class="med-key" style="width:250px; font-size: 20px; font-weight: bolder;" >
                            
                            <b>
                                <?php echo $mds->medicine_name; ?>
                            </b><br>
                            <span class="med-generic" style="font: font-style: italic; font-size: 15px;"><?php echo $mds->generic; ?></span>
                        </td>
                        <td class="med-dosage" style="width: 60px; text-align: end; font-size: 20px;  font-weight: bolder;">
                            <?php echo $mds->morning; ?>
                        </td>
                        <td class="med-dosage" style="width :55px; text-align:end; font-size: 20px; font-weight: bolder;">
                            <?php echo $mds->afternoon; ?>
                        </td>
                        <td class="med-dosage" style="width :55px; text-align:end; font-size: 20px; font-weight: bolder;">
                            <?php echo $mds->night; ?>
                        </td>
                        <td class="med-check" style="width: 60px; text-align: end; font-size: 20px;  font-weight:bolder;">
                            <?php if ($mds->before_food == 1) { ?>
                                <i class="fa fa-check"></i>
                            <?php } ?>
                        </td>
                        <td class="med-check" style="width: 60px; text-align:end; font-size: 20px;  font-weight: bolder;">
                            <?php if ($mds->after_food == 1) { ?>
                                <i class="fa fa-check"></i>
                            <?php } ?>
                        </td>
                        <td class="med-no-of-days" style="width: 50px; text-align:end;  font-size: 20px; font-weight: bolder;">
                            <?php echo $mds->no_of_days; ?>
                        </td>
             </tr>



                            <?php }
                        } ?>
                   


                    </table>

                 </div>

                <div style="position: absolute; left: 0px; bottom: 50px;position: absolute;"> 
                     
                                    <p style="font-size: 15px;border: 1px solid black;width: 125px;height: 60px;padding: 10px;border-style: none;font-weight: bolder;">Consultation Fee Is Valid For 10 Days.</p>



                </div>
 

        </div>


        <!-- <div style="position: absolute;"><p style="margin-top: -560px;font-size: 20px;margin-left: -18px;">Note:
                        <?php echo $presciptions['note2']; ?></p></div> -->

      

      
    </div>
    

</div>







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

        var name = "Patient" + "<?php echo $presciptions['patient_code']; ?>" + ".pdf";
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