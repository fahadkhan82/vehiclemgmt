<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->view('header_inner'); ?>
<script>	
	jQuery(document).ready(function() {   
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
                                <div class="muted pull-left">Client Management</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="client/saveClient" id="form_sample_1" class="form-horizontal" method="post">
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
  								<label class="control-label">Email<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="email" id="email" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Address<span class="required">*</span></label>
  								<div class="controls">
  									<textarea  name="address" id="address" data-required="1" class="span6 m-wrap"/></textarea>
  								</div>
  							</div>
							
  							<div class="control-group">
  								<label class="control-label">CNIC<span class="required">*</span></label>
  								<div class="controls">
  									<input name="cnic"  id="cnic" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">City<span class="required">*</span></label>
  								<div class="controls">
  									<select class="span6 m-wrap" name="city" id="city"> 
									<option value="">Choose City</option>
									<option value="islamabad">Islamabad</option>
									<option value="rawalpindi">Rawalpindi</option>
									<option value="lahore">Lahore</option>
									<option value="faisalabad">Faisalabad</option>
									<option value="karachi">Karachi</option>
									</select>
  									<!--<span class="help-block">e.g: http://www.demo.com or http://demo.com</span>-->
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Agreement Tenure<span class="required">*</span></label>
  								<div class="controls">
  									<input name="tenure" id="tenure" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
							<div class="control-group">
  								<label class="control-label">Payment Method<span class="required">*</span></label>
  								<div class="controls">
  									<select class="span6 m-wrap" name="payment" id="payment"> 
									<option value="">Select Method</option>
									<option value="cash">Cash</option>
									<option value="cheque">Cheque</option>
									<option value="account">Account Transfer</option>
									
									</select>
  									<!--<span class="help-block">e.g: http://www.demo.com or http://demo.com</span>-->
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Account Number</label>
  								<div class="controls">
  									<input name="account" id="account" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							
  							<div class="control-group">
  								<label class="control-label">Occupation&nbsp;&nbsp;</label>
  								<div class="controls">
  									<input name="occupation" id="occupation" type="text" class="span6 m-wrap"/>
  									
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