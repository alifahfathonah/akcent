<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="content-wrapper">
    <section class="content-header">
      	<h1><i class="fa fa-fw fa-users"></i> <?php echo $this->session->userdata('submenu'); ?></h1>
      	<ol class="breadcrumb">
        	<li><i class="fa fa-fw fa-users"></i> <?php echo $this->session->userdata('topmenu'); ?></li>
        	<li><?php echo $this->session->userdata('submenu'); ?></li>
      	</ol>
    </section>
    <section class="content">
    	<div class="callout callout-danger" id="delete_info" style="display: none;">
          <h4>Delete Warning !</h4>
           This Party Used In Receipt Info
        </div>
      <div class="row">
    		<div class="col-md-12">
          <div class="box box-info">
          	<div class="box-header with-border">
          		<h3 class="box-title"><i class="fa fa-list"></i> Sale Invoice List </h3>
          		<div class="box-tools pull-right">
                <a href="<?php echo site_url('Admin/SaleInvoice/SaleInvoiceAdd'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add </a> 
             </div>
        		</div>
		        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th> Date </th>
                    <th> Bill No </th>
                    <th> Party Group </th>
                    <th> Party Name </th>
                    <th> Contract Ref No </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($data)) { foreach ($data as $d) { ?>
                    <tr>  
                      <td> <?php echo $d->date; ?> </td>
                      <td> <?php echo $d->bill_no; ?> </td>
                      <td> <?php echo $d->party_name; ?> </td>
                      <td> <?php echo $d->name; ?> </td>
                      <td> <?php echo $d->contract_ref_no; ?> </td>
                      </td> 
                      <td>
                        <a href="<?php echo site_url('Admin/SaleInvoice/SaleInvoiceEdit/').$d->id; ?>"><i class="fa fa-pencil"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="<?php echo site_url('Admin/SaleInvoice/SaleInvoiceDelete/').$d->id; ?>" onclick="return confirm('Delete Confirm');"><i class="fa fa-trash"></i></a>
                      </td>        
                    </tr>           
                  <?php } } ?>
                </tbody>
              </table>
			    	</div>
				</div>
			</div>
		</div>
	</section>
</div> 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {    
    <?php if($this->session->userdata('delete_msg')){ ?>
      $('#delete_info').show();
    <?php } ?>
    setTimeout(function() { 
      $('#delete_info').fadeOut('fast');
    }, 4000);
    <?php $this->session->unset_userdata('delete_msg'); ?>
  });
</script>