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
                    <div class="row">

                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Two column</h4>
                                

                                    <form class="form-sample" method="POST" action="<?php echo site_url('admin/static_pages_seo/create'); ?>" enctype="multipart/form-data">
                                        <p class="card-description">Static Pages SEO Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Page </label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="page_id" required>
                                                            <option value="">Select page</option>
                                                            <option value="1">Home</option>
                                                            <option value="2">About</option>
                                                            <option value="3">Contact</option>
                                                            <option value="4">Careers</option>
                                                            <option value="5">Why only we</option>
                                                            <option value="6">Why digital marketing</option>
                                                            <option value="7">services</option>
                                                            <option value="8">training</option>
                                                            <option value="9">Blog</option>
                                                            <option value="10">Disclamer</option>
                                                            <option value="11">Privacy Policy</option>
                                                            <option value="12">Gallery</option>
                                                            <option value="13">Sarevices category</option>
                                                            <option value="14">Outdoor Advertising</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="meta_description" rows="4" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Keywords</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="meta_keywords" rows="4" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status" required>
                                                            <!-- <option value="">Select Status</option> -->
                                                            <option value="1">Active</option>
                                                            <option value="2">Inactive</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-success mr-2">Create</button>
                                                <a href="<?php echo site_url('admin/static_pages_seo'); ?>" class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('includes/footer.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('includes/scripts.php'); ?>
    <!-- End custom js for this page-->
</body>




</html>