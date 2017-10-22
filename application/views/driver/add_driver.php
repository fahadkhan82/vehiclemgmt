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
                                <div class="muted pull-left">Add New Driver</div>
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
							
							<div class="control-group">
  								<label class="control-label">First Name<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="fname" id="fname" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Last Name<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="lname" id="lname" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							
						
							
  							<div class="control-group">
  								<label class="control-label">City<span class="required">*</span></label>
  								<div class="controls">
  									
  									    <select id="city" name="city" class="chzn-select required">
                                        <option>Select</option>
										<option value='rawalpindi'>Rawalpindi</option>
									    <option value='islamabad'>Islamabad</option>
                                        <option value='lahore'>Lahore</option>
                                        <option value='faisalabad'>Faisalabad</option>
										</select>  								
										
  								</div>
  							</div>
  						
  								
  							
  							
  							<div class="control-group">
  								<label class="control-label">CNIC<span class="required">*</span></label>
  								<div class="controls">
  									<input name="cnic" id="cnic" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
							
  							<div class="control-group">
  								<label class="control-label">Age<span class="required">*</span></label>
  								<div class="controls">
  									<input name="age" id="age" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Permanent Address<span class="required">*</span></label>
  								<div class="controls">
  									<textarea name="perma_address" id="perma_address"  class="span6 m-wrap" data-required="1"/></textarea>
  								</div>
  							</div>
							
							   <div class="control-group">
                                          <label class="control-label" for="date01">Joining Date</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" id="join_date" name="join_date" value="02/16/12">
                                           
                                          </div>
                              </div>
							
							<div class="control-group">
  								<label class="control-label">Salary<span class="required">*</span></label>
  								<div class="controls">
  									<input name="salary" id="salary" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Mobile No<span class="required">*</span></label>
  								<div class="controls">
  									<input name="mobile_no" id="mobile_no" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
  							
							<div class="control-group">
  								<label class="control-label">Alternate No<span class="required">*</span></label>
  								<div class="controls">
  									<input name="alternate_no" id="alternate_no" type="text" class="span6 m-wrap" data-required="1"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Emergency No<span class="required">*</span></label>
  								<div class="controls">
  									<input name="emergency_no" id="emergency_no" type="text" class="span6 m-wrap" data-required="1"/>
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
  <script>

	

        $(function() {
            $(".datepicker").datepicker();
           
        });
        </script>
<?php $this->view('footer'); ?>