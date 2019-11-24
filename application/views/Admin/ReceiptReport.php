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
    	<div class="row">
    		<div class="col-md-12">
          <div class="box box-info">
          	<div class="box-header with-border">
          		<h3 class="box-title"><i class="fa fa-list"></i> Receipt Info List </h3>
        		</div>
		        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th> Receipt No </th>
                    <th> Create Date </th>
                    <th> Party </th>
                    <th> Party Name </th>
                    <th> Contract Ref No</th>
                    <th> Receipt Amt </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($datas)) { foreach ($datas as $d) { ?>
                    <tr>  
                      <td> <?php echo $d['receipt_no']; ?> </td> 
                      <td> <?php echo $d['date']; ?> </td>
                      <td> <?php echo $d['party_name']; ?> </td>
                      <td> <?php echo $d['name']; ?> </td>
                      <td> <?php echo $d['contract_ref_no']; ?> </td>
                      <td> <?php echo $d['receipt_amt']; ?> </td>
                      <td>
                        <div>
                           <a href="<?php echo site_url('Admin/Report/ReceiptReportPrint/').$d['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-list-alt"></i> View </a>
                        </div><br>
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