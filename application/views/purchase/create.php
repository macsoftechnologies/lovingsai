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
                            <h4>Add Purchase</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>purchase/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" name="date" id="name" class="form-control" placeholder="Enter date" value="<?php echo $this->input->post('date') ?>"><?php echo form_error('date'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $this->input->post('name') ?>"><?php echo form_error('name'); ?>
                                        </div>
                                    </div>
                                    
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="InvoiceNo">InvoiceNo</label>
                                            <input type="text" name="invoiceNo" id="invoiceNo" class="form-control" placeholder="Enter InvoiceNo" value="<?php echo $this->input->post('invoiceNo') ?>"><?php echo form_error('invoiceNo'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="product">Product</label>
                                            <input type="text" name="product" id="product" class="form-control" placeholder="Enter product" value="<?php echo $this->input->post('product') ?>"><?php echo form_error('product'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" value="0"><?php echo form_error('quantity'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" value="0"><?php echo form_error('price'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="total">Total</label>
                                            <input type="text" name="total" id="total" class="form-control" placeholder="Enter total" value="<?php echo $this->input->post('total') ?>" readonly><?php echo form_error('total'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="due"> DueAmount</label>
                                            <input type="text" name="due" id="due" class="form-control" placeholder="Enter DueAmount" value="<?php echo $this->input->post('due') ?>"><?php echo form_error('due'); ?>
                                        </div>
                                    </div>
  
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
 <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
      $('#quantity').change(function(){
            $('#total').empty();

            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var tot_amount = parseFloat(price) * parseFloat(quantity);
            $('#total').val(tot_amount);
              
          });
  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#price').change(function(){
            $('#total').empty();

            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var tot_amount = parseFloat(price) * parseFloat(quantity);
            $('#total').val(tot_amount);
              
          });
  });
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?= base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>

<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
