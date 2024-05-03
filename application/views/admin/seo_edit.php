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
                                  
                                    <form class="form-sample" method="POST" action="<?php echo site_url('admin/static_pages_seo/update/' . $seo_record['id']); ?>" enctype="multipart/form-data">
                                        <p class="card-description">SEO Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_name" value="<?php echo $seo_record['meta_name']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="meta_description" rows="4"><?php echo $seo_record['meta_description']; ?></textarea>
                                                        <?php //echo form_error('meta_description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Keywords</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="meta_keywords" rows="4"><?php echo $seo_record['meta_keywords']; ?></textarea>
                                                        <?php // echo form_error('meta_keywords', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status">
                                                            <option value="1" <?php echo $seo_record['status'] == '1' ? 'selected' : ''; ?>>Active</option>
                                                            <option value="2" <?php echo $seo_record['status'] == '2' ? 'selected' : ''; ?>>In-Active</option>
                                                            <option value="3" <?php echo $seo_record['status'] == '3' ? 'selected' : ''; ?>>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Page ID</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" class="form-control" name="page_id" value="<?php echo $seo_record['page_id']; ?>">
                                                        <?php // echo form_error('page_id', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php // echo site_url('admin/static_pages_seo'); ?>" class="btn btn-light">Cancel</a>
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