<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php include 'header.php';?>
<script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	}); 
$(document).ready(function() {


    // process the form
    $('.form-signin').submit(function(event) {
	$('.alert-error').css("display","none");
    $('.alert-success').css("display","none");			
	$('.loader').css("display","block");
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'email'              : $('input[id=email]').val(),
            'password'             : $('input[id=password]').val(),
        };
       
	     
		if(formData['email'] && formData['password'] !=''){			   
						// process the form
						$.ajax({
							type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
							url         : 'welcome/verify', // the url where we want to POST
							data        : formData, // our data object
							dataType    : 'json', // what type of data do we expect back from the server
							success: function(data){
									  $('.loader').css("display","none");
					
									  error=data['error'];
									  info=data['info'];
									 
    
									 if(error){
										
											$('.alert-error').css("display","block");						
											$('.alert-error').append(error);
										
									  } 	

									  if(info){
										
											$('.alert-success').css("display","block");						
											$('.alert-success').append(info);
											
										    window.location.href = "welcome/dashboard";
									  } 						  
											},
										encode          : true
						})
		}else{
			$('.loader').css("display","none");
			return false;
		}					

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});

</script>

  <body id="login">
    <div class="container">
      
      <form  action="#" class="form-signin" id="form_sample_1">
	  
        		<div class="loader" style="display: none"></div>    
		<fieldset>		
				<div class="alert alert-success" style="display: none">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Success!</strong> 
				</div>

                <div class="alert alert-error" style="display: none">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> 
				</div>
				
		
	   <h2 class="form-signin-heading">Please sign in</h2>
        
		                    <div class="control-group">
  								<label class="control-label">Username<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="email" id="email" data-required="1" class="input-block-level" placeholder="Email address"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Password<span class="required">*</span></label>
  								<div class="controls">
  									<input name="password" id="password" type="password" class="input-block-level" placeholder="Password"/>
  								</div>
  							</div>
							
							
							
		
		<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
			<div class="form-actions">
				<button class="btn btn-large btn-primary" type="submit">Sign in</button>
			</div>
		</fieldset>
      </form>

    </div> <!-- /container -->

<?php include 'footer.php';?>