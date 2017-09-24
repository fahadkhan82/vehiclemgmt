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
                                <div class="muted pull-left">Add New Maintainance Record</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="maintainance/addRecord" id="form_sample_1" class="form-horizontal" method="post">
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
                                  $vid = $this->input->get('vid');							      
								  $veh=get_vehicle_rec($vid);
								   
							?>
  							<div class="control-group">
                                          <label class="control-label" for="client">Vehicle-ID</label>
                                          <div class="controls">
                                            <?php echo $veh[0]->id?>
											<input type="hidden" id="vid" name="vid" value="$veh[0]->id">
                                          </div>
                            </div>
							<div class="control-group">
  								<label class="control-label">Model</label>
  								<div class="controls">
  									<?php echo $veh[0]->model?>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Make</label>
  								<div class="controls">
  									<?php echo $veh[0]->make?>
  								</div>
  							</div>
							
						
							
  							<div class="control-group">
  								<label class="control-label">Year</label>
  								<div class="controls">
  									<?php echo $veh[0]->year?>
  								</div>
  							</div>
  						
  							<div class="control-group">
  								<label class="control-label">Type</label>
  								<div class="controls">
  									<?php echo $veh[0]->type?>
  								</div>
  							</div>	
  							
  							
  							<div class="control-group">
  								<label class="control-label">Maintainance Type<span class="required">*</span></label>
  								<div class="controls">
  									 <select id="veh_type" name="veh_type" class="chzn-select">
                                              
											  <option value=''>Select</option>
											  <option value='Change the engine oil'>Change the engine oil</option>
											   <option value='Replace the air filter'>Replace the air filter</option>
											    <option value='Replace the fuel filter'>Replace the fuel filter</option>
												 <option value='Replace the cabin filter'>Replace the cabin filter</option>
												  <option value='Replace the spark plugs'>Replace the spark plugs</option>
												   <option value='Tune the engine'>Tune the engine</option>
												    <option value='Refill brake fluid/clutch fluid'>Refill brake fluid/clutch fluid</option>
													 <option value='Check Brake Discs/Drums, and replace'>Check Brake Discs/Drums, and replace</option>
													  <option value='Check & refill power steering fluid'>Check & refill power steering fluid</option>
													   <option value='Check & refill Automatic/Manual Transmission Fluid'>Check & refill Automatic/Manual Transmission Fluid</option>
											  
                                     </select>
  								</div>
  							</div>
							
  							
  							
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Submit & Add Another</button>
  								<button type="button" class="btn">Back to main</button>
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