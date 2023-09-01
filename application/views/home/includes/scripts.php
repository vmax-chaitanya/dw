<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                class="fa fa-angle-up"></i></a>

        <script src="<?php echo base_url();?>assets/home/vendors/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/jarallax/jarallax.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/jquery-appear/jquery.appear.min.js"></script>
        <script
            src="<?php echo base_url();?>assets/home/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
        <script
            src="<?php echo base_url();?>assets/home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/jquery-validate/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/nouislider/nouislider.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/odometer/odometer.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/swiper/swiper.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/tiny-slider/tiny-slider.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/wnumb/wNumb.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/wow/wow.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/isotope/isotope.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/countdown/countdown.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/bxslider/jquery.bxslider.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/vegas/vegas.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="<?php echo base_url();?>assets/home/vendors/timepicker/timePicker.js"></script>

        <!-- template js -->
        <script src="<?php echo base_url();?>assets/home/js/qutiiz.js"></script>
      
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>
    $(function() {
        $("form[name='contact']").validate({
            rules: {
                name: "required",
                subject: "required",
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages: {
                name: "Please Enter Name",
                subject: "Please Enter Subject",
                mobile: {
                    required: "Please Enter Mobile Number",
                    minlength: "Please Enter 10 digit valid Mobile Number",
                    maxlength: "Please Enter 10 digit valid Mobile Number",
                },
                email: "Please Enter a valid email address"
            },
            submitHandler: function(form) {
                // Validation has passed, so call the AJAX request to store data
				var services_ids = $("input[name='service[]']:checked").map(function() {
                    return this.value;
                }).get();

				var formData = $(form).serializeArray();
                formData.push({ name: "services_ids", value: services_ids });

                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('contact-enquiry'); ?>", // URL for the create method
                    data: formData,
                    success: function(response) {
                        alert(response);
                        // You can perform additional actions after successful submission
                    }
                });
            }
        });
    });
</script>
<script>
$(document).ready(function() {
    $('.ajax-form').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'text', // Set the expected data type
            success: function(response) {
                // Initiate the file download
                window.location.href = response; // The response contains the file URL
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});
</script>
