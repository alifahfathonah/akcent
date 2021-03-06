<?php defined('BASEPATH') OR exit('No direct script access allowed'); error_reporting(0);?>

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
          		<h3 class="box-title"><i class="fa fa-list"></i> List <?php echo $this->session->userdata('submenu'); ?> </h3>
        		</div>
		        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th> Date </th>
                    <th> Ticket Info Name  </th>
                    <th> Engineer Name </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($datas as $d) { ?>
                    <tr>
                      <td> <?php echo $d['create_date']; ?> </td>
                      <td> <?php echo $d['problem_info']; ?> </td>
                      <td> 
                        <div class="input-group" id="AddEngineer">
                          <?php if($d['engineer_id'] == null){ ?> not allocate <?php } else { ?> <?php echo $d['engineer_name']; ?>
                          <?php } ?> 
                        </div>
                      </td>
                      <td> 
                        <?php ?>
                      </td>
                      <td align="center"> 
                        <?php if($d['call_visit_id'] == null){ ?>
                         <a href="<?php echo site_url('Admin/CallVisitReport/CallVisitReportAdd/').$d['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add </a>
                        <?php } else { ?>
                          <a href="<?php echo site_url('Admin/CallVisitReport/CallVisitReportEdit/').$d['id']; ?>"><i class="fa fa-pencil"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                          <a href="<?php echo site_url('Admin/CallVisitReport/CallVisitReportDelete/').$d['call_visit_id']; ?>" onclick="return confirm('Delete Confirm');"><i class="fa fa-trash"></i></a>
                        <?php } ?>
                      </td>            
                  <?php } ?>
                </tbody>
              </table>
			    	</div>
				</div>
			</div>
		</div>
	</section>
</div> 
</script>