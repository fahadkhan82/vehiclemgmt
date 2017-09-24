var FormValidation = function () {

    var handleValidation1 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form_sample_1');
            var error1 = $('.alert-error', form1);
            var success1 = $('.alert-success', form1);





            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    fname: {
                        minlength: 2,
                        required: true
                    },
					 lname: {
                        minlength: 2,
                        required: true
                    },
					email: {
                       email:true,
                        required: true
                    },
			         address: {
                        minlength: 2,
                        required: true
                    }, 
					  cnic: {
						
                        minlength: 15,
                        required: true
                    }, 
					 city: {
                       
                        required: true
                    },
					 tenure: {
                        number:true,
                        required: true
                    }, 
					 payment: {
                       
                        required: true
                    },
                    client: {

                        required: true
                    },

                    make: {

                        required: true
                    },
                    model: {

                        required: true
                    },
                    year: {

                        required: true
                    },

                    type: {

                        required: true
                    },
					
					veh_type: {

                        required: true
                    },


                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                  
                    FormValidation.scrollTo(error1, -200);
					
					
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
					
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
					form.submit();
                    //success1.show();
                   /// error1.hide();
					
                }
            });
    }

    return {
        //main function to initiate the module
        init: function () {

            handleValidation1();

        },

	// wrapper function to scroll to an element
        scrollTo: function (el, offeset) {
            pos = el ? el.offset().top : 0;
            jQuery('html,body').animate({
                    scrollTop: pos + (offeset ? offeset : 0)
                }, 'slow');
        }

    };

}();

