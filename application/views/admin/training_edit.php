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
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/training/update/' . $training['id']); ?>"
                                        enctype="multipart/form-data">
                                        <p class="card-description">Training Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo set_value('name', $training['name']); ?>"
                                                            required>
                                                        <?php echo form_error('name', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Duration</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="duration"
                                                            value="<?php echo set_value('duration', $training['duration']); ?>"
                                                            required>
                                                        <?php echo form_error('duration', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="image">
                                                        <?php echo form_error('image', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($training['image']): ?>
                                                            <img src="<?php echo base_url('' . $training['image']); ?>"
                                                                alt="Training Image" width="150">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Brochure</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="brochure">
                                                        <?php echo form_error('brochure', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($training['brochure']): ?>
                                                            <a href="<?php echo base_url('' . $training['brochure']); ?>"
                                                                target="_blank">View Brochure</a>
                                                        <?php else: ?>
                                                            No Brochure
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Icon</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="icon" >
                                                        <?php echo form_error('icon', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($training['icon']): ?>
                                                            <img src="<?php echo base_url('' . $training['icon']); ?>"
                                                                alt="icon Image" width="150">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Banner Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="banner_image">
                                                        <?php echo form_error('banner_image', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($training['banner_image']): ?>
                                                            <img src="<?php echo base_url('' . $training['banner_image']); ?>"
                                                                alt="banner Image" width="150">
                                                        <?php endif; ?>
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
                                                            <option value="">Select Status</option>
                                                            <option value="1" <?php echo set_select('status', '1', ($training['status'] == '1')); ?>>Active</option>
                                                            <option value="2" <?php echo set_select('status', '2', ($training['status'] == '2')); ?>>Inactive</option>
                                                            <option value="3" <?php echo set_select('status', '3', ($training['status'] == '3')); ?>>Other</option>
                                                        </select>
                                                        <?php echo form_error('status', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Add any other fields you need here -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="4"
                                                        id="editor" required><?php echo set_value('description', $training['description']); ?></textarea>
                                                        <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 1</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_new" rows="4"
                                                            required><?php echo set_value('description_new', $training['description_new']); ?></textarea>
                                                        <?php echo form_error('description_new', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Name</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_name" rows="6"  ><?php echo $training['meta_name']; ?></textarea>
                                                        <?php echo form_error('meta_name', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_description" rows="6"  ><?php echo $training['meta_description']; ?></textarea>
                                                        <?php echo form_error('meta_description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_keywords" rows="6"  ><?php echo $training['meta_keywords']; ?></textarea>
                                                        <?php echo form_error('meta_keywords', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <input type="hidden" name="old_image"
                                                    value="<?php echo $training['image']; ?>" />
                                                <input type="hidden" name="old_brochure"
                                                    value="<?php echo $training['brochure']; ?>" />

                                                <input type="hidden" name="old_icon"
                                                    value="<?php echo $training['icon']; ?>" />
                                                <input type="hidden" name="old_banner_image"
                                                    value="<?php echo $training['banner_image']; ?>" />
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php echo site_url('admin/training'); ?>"
                                                    class="btn btn-light">Cancel</a>
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