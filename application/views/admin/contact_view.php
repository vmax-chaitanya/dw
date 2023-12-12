<!DOCTYPE html>
<html lang="en">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/styles.php'); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php include('includes/settings.php'); ?>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('includes/side_menu.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-10">
                                    <h4 class="card-title">Information</h4>
                                </div>
                                <!-- <div class="col-md-2 ms-auto">
                                    <a href="<?php echo base_url(); ?>admin/contact/add"
                                        class="w-100 btn btn-primary">Create</a>
                                </div> -->
                            </div>



                            <!-- <a class="nav-link dropdown-toggle bg-primary" id="actionDropdown" href="#" data-toggle="dropdown">
                                <span class="btn">+ Create new</span>
                            </a> -->
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary"><?php echo $contact['name']; ?></h5>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="card-text"><strong>Email:</strong> <?php echo $contact['email']; ?></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="card-text"><strong>Mobile:</strong> <?php echo $contact['mobile']; ?></p>
                                                </div>
                                                <div class="col-md-3">
                                                <p class="card-text"><strong>Coupon:</strong> <?php echo $contact['coupon_id'] ? $contact['coupon_id'] : 'N/A'; ?></p>

                                                </div>
                                                <div class="col-md-5 pt-3">
                                                    <p class="card-text"><strong>Subject:</strong> <?php echo $contact['subject']; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-3">
                                                    <p class="card-text"><strong>Application Status:</strong> <?php if ($contact['status'] == '1') : ?>
                                                            <label class="badge badge-success">Pending</label>
                                                        <?php elseif ($contact['status'] == '2') : ?>
                                                            <label class="badge badge-danger">Contacted</label>
                                                        <?php elseif ($contact['status'] == '3') : ?>
                                                            <label class="badge badge-danger">Accepted</label>
                                                        <?php else : ?>
                                                            <label class="badge badge-info">Rejected</label>
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="card-text"><strong>Message:</strong><br> <?php echo $contact['message']; ?></p>
                                                </div>

                                            </div>

                                            <hr>

                                            <p class="card-text">
                                                <?php if($contact['status'] == 1 || $contact['status'] == 2){ ?>
                                                    <?php if($contact['status'] == 1 ){ ?>
                                                <a href="#" class="btn btn-primary btn-sm update-status" data-id="<?php echo $contact['id']; ?>" data-status="2">Contacted</a>
                                                <?php } ?>

                                                <a href="#" class="btn btn-success btn-sm update-status" data-id="<?php echo $contact['id']; ?>" data-status="3">Accepted</a>
                                                <a href="#" class="btn btn-info btn-sm update-status" data-id="<?php echo $contact['id']; ?>" data-status="4">Rejected</a>
                                                <?php } ?>

                                                <!-- <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this invoice?')">Delete</a> -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- main-panel ends -->
                        </div>
                        <!-- page-body-wrapper ends -->
                    </div>
                    <!-- container-scroller -->
                    <!-- plugins:js -->
                    <?php include('includes/scripts.php'); ?>
                    <!-- End custom js for this page-->

                    <script>
                        $(document).ready(function() {
                            $(".update-status").on("click", function(e) {
                                e.preventDefault();
                                var itemId = $(this).data("id");
                                var newStatus = $(this).data("status");
                           // alert(newStatus);
                                $.ajax({
                                    url: "<?php echo base_url('admin/contact/updateStatus'); ?>",
                                    type: "POST",
                                    data: {
                                        id: itemId,
                                        status: newStatus
                                    },
                                    success: function(response) {

                                        var result = JSON.parse(response);
                                        if (result.status === 'success') {
                                            alert("Status updated successfully");
                                            window.location.href = "<?php echo base_url('admin/contact/'); ?>" + newStatus;
                                        } else {
                                            alert("Failed to update status");
                                        }
                                    },
                                    error: function(error) {

                                        console.error("Error updating status: ", error);
                                    }
                                });
                            });
                        });
                    </script>

                    </script>
</body>




</html>