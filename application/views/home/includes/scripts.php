<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src="<?php echo base_url(); ?>assets/home/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/wow/wow.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/isotope/isotope.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/home/vendors/timepicker/timePicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<!-- template js -->
<script src="<?php echo base_url(); ?>assets/home/js/qutiiz.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
<script>
            $(function() {
                    // Custom email validation method
                    $.validator.addMethod("strictEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
            }, "Please enter a valid email address.");

             // Custom message validation based on service checkboxes and page_check
            $.validator.addMethod("messageRequiredIfNoService", function(value, element) {
                var pageCheck = $("#page_check").val();
                var serviceChecked = $(".service-checkbox:checked").length > 0;
                return (pageCheck != "1") || serviceChecked || value !== "";
            }, "Message is required if no service is selected ");


        $("form[name='contact']").validate({
            rules: {
                name: "required",
                subject: "required",
                email: {
                    required: true,
                    strictEmail: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                copoun_select: "required",
                copoun_id: {
                    required: function(element) {
                        return $("#copoun_select").val() == "1";
                    },
                    minlength: 9,
                    maxlength: 9
                },
                message: {
                        messageRequiredIfNoService: true
                    },
                captcha: {
                    required: true,
                    minlength: 6,
                    maxlength: 6
                }

            },
            messages: {
                name: "Enter Name",
                subject: "Enter Subject",
                mobile: {
                    required: "Enter Mobile Number",
                    minlength: "Enter Valid  Number",
                    maxlength: "Enter Valid  Number",
                },
                copoun_select: "Please select an option",
                copoun_id: {
                    required: "Coupon is required when 'Yes' is selected",
                    minlength: "Coupon must have exactly 9 characters",
                    maxlength: "Coupon must have exactly 9 characters"
                },
                email: "Enter Valid Email Address",
                message: "Please write a message",
                captcha: "Please enter captcha"
            },
            submitHandler: function(form) {

                // Show loading indicator
                $(".button-text").hide();
                $(".loading-indicator").show();

                var services_ids = $("input[name='service[]']:checked").map(function() {
                    return this.value;
                }).get();

                var formData = $(form).serializeArray();
                formData.push({
                    name: "services_ids",
                    value: services_ids
                });

                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('contact-enquiry'); ?>",
                    data: formData,
                    success: function(response) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    $('#exampleModal').modal('hide');
                   

                    // Parse the JSON response
                    var responseData = JSON.parse(response);
                        console.log(responseData.status);
                    // Check status of the response
                    if (responseData.status == "success") {
                        // If success, show success message
                        toastr.success(responseData.message);
                    $('#contact-form')[0].reset();
                    $('.contact-form')[0].reset();
                    } else {
                        // If error, show error message
                        toastr.error(responseData.message);
                    }
                },
                error: function(xhr, status, error) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    // Show error message
                    toastr.error("Error: " + xhr.responseText);
                }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#showFormButton").click(function() {
            $("#myModal").modal("show");
        });
    });
</script>
<script>
       $(document).ready(function(){
           $('.captcha-refresh').on('click', function(){
               $.get('<?php echo base_url().'generate-captcha/1'; ?>', function(data){
                console.log(data);
                   $('#image_captcha').html(data);
               });
           });
       });
   </script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        var accordionItems = document.querySelectorAll(".accrodion");


        accordionItems.forEach(function(item) {

            var title = item.querySelector(".accrodion-title1");

            var content = item.querySelector(".accrodion-content");


            title.addEventListener("click", function() {

                if (item.classList.contains("active")) {

                    item.classList.remove("active");

                    content.style.display = "none";

                } else {

                    // Close all other accordion items

                    accordionItems.forEach(function(otherItem) {

                        if (otherItem !== item && otherItem.classList.contains("active")) {

                            otherItem.classList.remove("active");

                            otherItem.querySelector(".accrodion-content").style.display = "none";

                        }

                    });


                    // Open the clicked accordion item

                    item.classList.add("active");

                    content.style.display = "block";

                }

            });

        });

    });
</script>
<script>
    /////thisis for brouchure download////
    $(document).ready(function() {

         // Custom email validation method
         $.validator.addMethod("strictEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
            }, "Please enter a valid email address.");
        // Initialize form validation
        $("#brouchure").validate({
            rules: {
                name1: "required",
                email1: {
                    required: true,
                    strictEmail: true // Validate email format
                },
                mobile1: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                subject1: "required",
                captcha1: {
                    required: true,
                    minlength: 6,
                    maxlength: 6
                }
            },
            messages: {
                name1: "Please enter your name",
                email1: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                mobile1: {
                    required: "Enter Mobile Number",
                    minlength: "Enter Valid  Number",
                    maxlength: "Enter Valid  Number",
                },
                subject1: "Please enter a subject",
                captcha1: "Please enter captcha"
            },
            submitHandler: function(form) {

                // Show loading indicator
                $(".button-text").hide();
                $(".loading-indicator").show();

                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    dataType: 'text',
                    success: function(response) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    
                    // Parse the JSON response
                    var responseData = JSON.parse(response);
                    console.log(responseData);
                    if (responseData.status == "success") {
                        // If success, force the browser to download the file
                        var pdfPath = responseData.pdfPath;
                        var link = document.createElement('a');
                        link.href = pdfPath;
                        link.download = 'Brochure.pdf';
                        link.click();
                        toastr.success('Successfully Downloaded');
                        $('#brouchure')[0].reset();
                        $('#exampleModal').modal('hide');
                    } else {
                        // If error, show error message
                        toastr.error(responseData.message);
                    }
                },
                error: function(xhr, status, error) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    // Show error message
                    toastr.error("Error: " + xhr.responseText);
                }
                });
            }
        });
    });
</script>
<script>
    /////thisis for brouchure download////
    $(document).ready(function() {

         // Custom email validation method
         $.validator.addMethod("strictEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
            }, "Please enter a valid email address.");
        // Initialize form validation
        $("#Trainingbrouchure").validate({
            rules: {
                name1: "required",
                email1: {
                    required: true,
                    strictEmail: true // Validate email format
                },
                mobile1: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                subject1: "required",
                captcha1: {
                    required: true,
                    minlength: 6,
                    maxlength: 6
                }
            },
            messages: {
                name1: "Please enter your name",
                email1: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                mobile1: {
                    required: "Enter Mobile Number",
                    minlength: "Enter Valid  Number",
                    maxlength: "Enter Valid  Number",
                },
                subject1: "Please enter a subject",
                captcha1: "Please enter captcha"

                
            },
            submitHandler: function(form) {
                // Show loading indicator
                $(".button-text").hide();
                $(".loading-indicator").show();

                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    dataType: 'text',
                    success: function(response) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    
                    // Parse the JSON response
                    var responseData = JSON.parse(response);
                    
                    if (responseData.status == "success") {
                        // If success, retrieve the PDF path from the response
                        var pdfPath = responseData.pdfPath;
                        console.log(pdfPath);
                        // Force the browser to download the file
                        var link = document.createElement('a');
                        link.href = pdfPath;
                        link.download = 'Brochure.pdf';
                        link.click();
                        
                        // Display success message
                        toastr.success(responseData.message);
                        
                        // Reset form and close modal
                        $('#brouchure')[0].reset();
                        $('#exampleModal').modal('hide');
                    } else {
                        // If error, display error message
                        toastr.error(responseData.message);
                    }
                },
                error: function(xhr, status, error) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    // Show error message
                    toastr.error("Error: " + xhr.responseText);
                }
                });
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input element by its name attribute
        var nameInput = document.querySelector("input[name='name']");

        // Add an input event listener to the name input field
        nameInput.addEventListener("input", function() {
            // Remove any non-alphabet characters (including numbers)
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input element by its name attribute
        var nameInput = document.querySelector("input[name='name1']");

        // Add an input event listener to the name input field
        nameInput.addEventListener("input", function() {
            // Remove any non-alphabet characters (including numbers)
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input element by its name attribute
        var nameInput = document.querySelector("input[name='career_name']");

        // Add an input event listener to the name input field
        nameInput.addEventListener("input", function() {
            // Remove any non-alphabet characters (including numbers)
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
    });
</script>
<!-- //////select all checkboxez// -->
<script>
    $(document).ready(function() {
        // Check or uncheck all checkboxes when "Select All" is clicked
        $("#select-all").click(function() {
            $(".service-checkbox").prop('checked', $(this).prop('checked'));
        });

        // Check or uncheck "Select All" when any service checkbox is clicked
        $(".service-checkbox").click(function() {
            if ($(".service-checkbox:checked").length === $(".service-checkbox").length) {
                $("#select-all").prop('checked', true);
            } else {
                $("#select-all").prop('checked', false);
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Add an event listener to the modal when it's hidden (closed)
        $('#exampleModal').on('hidden.bs.modal', function(e) {
            // Reset the form fields
            $('#brouchure')[0].reset();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#copoun_id").prop("disabled", true).addClass("disabled-input");
        $("#copoun_select").change(function() {
            if ($(this).val() === "1") {
                $("#copoun_id").prop("disabled", false).removeClass("disabled-input"); // Enable the input field and add the class
            } else {
                $("#copoun_id").prop("disabled", true).addClass("disabled-input"); // Disable the input field and remove the class
                $("#copoun_id").val("");
            }
        });
    });
</script>

<script>
    $(function() {
         // Custom email validation method
         $.validator.addMethod("strictEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
            }, "Please enter a valid email address.");

        $("form[name='careeerForm']").validate({
            rules: {
                career_name: "required",
                subject: "required",
                career_email: {
                    required: true,
                    strictEmail: true
                },
                careeer_mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                career_list: "required",
                resume: "required",

                message: "required",
                captcha: "required",

            },
            messages: {
                career_name: "Enter Name",
                subject: "Enter Subject",
                careeer_mobile: {
                    required: "Enter Mobile Number",
                    minlength: "Enter Valid  Number",
                    maxlength: "Enter Valid  Number",
                },
                career_list: "Please select an option",
                resume: "",

                career_email: "Enter email address",
                message: "Please write a message",
                captcha: "Please write a Captcha",

            },
            submitHandler: function(form) {
                var formData = new FormData(form);

                // Add any additional fields or data to the FormData if needed
                formData.append('otherField', 'otherValue');

                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('career-form'); ?>",
                    data: formData,
                    contentType: false,
                    processData: false, // These two options are important for file uploads
                    success: function(response) {
                    // Hide loading indicator
                    $(".loading-indicator").hide();
                    $(".button-text").show();
                    
                    // Parse the JSON response
                    var responseData = JSON.parse(response);
                    
                    // Handle the response
                    if (responseData.status === "success") {
                        // If success, display success message
                        toastr.success(responseData.message);
                        
                        // Reset form
                        form.reset();
                    } else {
                        // If error, display error message
                        toastr.error(responseData.message);
                    }
                }

                });
            }
        });
    });

      ////////////tools images js 
      $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>


