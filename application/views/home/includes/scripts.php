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
        "positionClass": "toast-top-right",
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
                },
                copoun_select: "required",
                copoun_id: {
                    required: function(element) {
                        return $("#copoun_select").val() == "1";
                    },
                    minlength: 9,
                    maxlength: 9
                },
                message: "required"
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
                email: "Enter email address",
                message: "Please write a message"
            },
            submitHandler: function(form) {

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
                        //alert(response);
                        // $("#exampleModalLabel").modal("hide");
                        $('#exampleModal').modal('hide');
                        $('#contact-form')[0].reset();
                        $('.contact-form')[0].reset();
                        //alert("hi");
                        toastr.success('Thank you for your message. We will get in touch with you shortly');
                        this.reset();

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
    // $(function () {
    //     $("form[name='brouchuredd']").validate({
    //         rules: {
    //             name: "required",
    //             subject: "required",
    //             email: {
    //                 required: true,
    //                 email: true
    //             },
    //             mobile: {
    //                 required: true,
    //                 minlength: 10,
    //                 maxlength: 10
    //             }

    //         },
    //         messages: {
    //             name: "Please Enter Name",
    //             subject: "Please Enter Subject",
    //             mobile: {
    //                 required: "Please Enter Mobile Number",
    //                 minlength: "Please Enter 10 digit valid Mobile Number",
    //                 maxlength: "Please Enter 10 digit valid Mobile Number",
    //             },

    //             email: "Please Enter a valid email address"
    //         },
    //         submitHandler: function (form) {
    //             var formData = $(form).serializeArray();
    //             $.ajax({
    //                 type: 'POST',
    //                 url: $(this).attr('action'),
    //                 data: $(this).serialize(),
    //                 dataType: 'text', // Set the expected data type
    //                 success: function (response) {
    //                     // Initiate the file download
    //                     window.location.href = response; // The response contains the file URL
    //                 },
    //                 error: function (error) {
    //                     console.log('Error:', error);
    //                 }
    //             });
    //         }
    //     });
    // });

    /////thisis for brouchure download////
    $(document).ready(function () {
    // Initialize form validation
    $("#brouchure").validate({
        rules: {
            name1: "required",
            email1: {
                required: true,
                email: true // Validate email format
            },
            mobile1: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
            subject1: "required"
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
            subject1: "Please enter a subject"
        },
        submitHandler: function (form) {
            // Handle the form submission via AJAX here
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: $(form).serialize(),
                dataType: 'text',
                success: function (response) {
                  
                    if (response) {
                        // Force the browser to download the file
                        var link = document.createElement('a');
                        link.href = response;
                        link.download = 'Brochure.pdf';
                        link.click();
                        toastr.success('Succesfully Downloaded');
                        $('#brouchure')[0].reset();
                        $('#exampleModal').modal('hide');
                    } else {
                        toastr.error('Error downloading PDF');
                    }
                },
                error: function (error) {
                    console.log('Error:', error);
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
    $(document).ready(function () {
        // Add an event listener to the modal when it's hidden (closed)
        $('#exampleModal').on('hidden.bs.modal', function (e) {
            // Reset the form fields
            $('#brouchure')[0].reset();
        });
    });
</script>