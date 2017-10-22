<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->view('header_inner'); ?>
<script>	
	jQuery(document).ready(function() {   
	$(".chzn-select").chosen();
	   FormValidation.init();
	});
	
</script>  
  <body>
          <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $_SESSION['fname']?> <?php echo $_SESSION['lname']?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="welcome/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
						 <?php $this->view('top_menu'); ?>
                  
                                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
			<?php $this->view('sidebar'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
				
                 <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add New Vehicle</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="vehicle/saveVehicle" id="form_sample_1" class="form-horizontal" method="post">
						<fieldset>
							<div class="alert alert-error hide">
								<button class="close" data-dismiss="alert"></button>
								You have some form errors. Please check below.
							</div>
							<div class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Your form validation is successful!
							</div>
							<?php
							       $clients=get_client_list();
								   
							?>
  							<div class="control-group">
                                          <label class="control-label" for="client">Select Client</label>
                                          <div class="controls">
                                            <select id="client" name="client" class="chzn-select">
                                              <?php foreach($clients  as $r) { ?>
											  <option value='<?php echo $r->id; ?>'><?php echo $r->id; ?>-<?php echo $r->fname; ?> <?php echo $r->lname; ?></option>
											  <?php } ?>
                                            </select>
                                          </div>
                            </div>
							<div class="control-group">
  								<label class="control-label">Model<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="model" id="model" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Make<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="make" id="make" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							
						
							
  							<div class="control-group">
  								<label class="control-label">Year<span class="required">*</span></label>
  								<div class="controls">
  									<input name="year"  id="year" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  						
  								
  							
  							
  							<div class="control-group">
  								<label class="control-label">Type<span class="required">*</span></label>
  								<div class="controls">
  									<input name="type" id="type" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
							
  							<div class="control-group">
  								<label class="control-label">Engine Capicty<span class="required">*</span></label>
  								<div class="controls">
  									<input name="engine" id="engine" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Transmission<span class="required">*</span></label>
  								<div class="controls">
  									    <select id="transmission" name="transmission" class="chzn-select required">
                                        <option>Select</option>
										<option value='automatic'>Automatic</option>
									    <option value='manual'>Manual</option>
										</select>  								
										</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Registration No<span class="required">*</span></label>
  								<div class="controls">
  									<input name="reg_no" id="reg_no" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Chasis No<span class="required">*</span></label>
  								<div class="controls">
  									<input name="chasis_no" id="chasis_no" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
  							
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Submit</button>
  								<button type="button" class="btn">Cancel</button>
  							</div>
						</fieldset>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>

                </div>
            </div>
           
        </div>
        <!--/.fluid-container-->

<?php $this->view('footer'); ?>