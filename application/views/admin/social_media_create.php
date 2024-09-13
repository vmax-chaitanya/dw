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
                                    <?php if ($this->session->flashdata('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/social_media/create_or_update'); ?>" enctype="multipart/form-data">
                                      
                                        <p class="card-description">Social Media Details</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gmail</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="gmail"
                                                            value="<?php echo isset($social_media['gmail']) ? $social_media['gmail'] : ''; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Facebook</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="facebook"
                                                            value="<?php echo isset($social_media['facebook']) ? $social_media['facebook'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Twitter</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="twitter"
                                                            value="<?php echo isset($social_media['twitter']) ? $social_media['twitter'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Instagram</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="instagram"
                                                            value="<?php echo isset($social_media['instagram']) ? $social_media['instagram'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Pinterest</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="pinterest"
                                                            value="<?php echo isset($social_media['pinterest']) ? $social_media['pinterest'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">WhatsApp</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="whatsapp"
                                                            value="<?php echo isset($social_media['whatsapp']) ? $social_media['whatsapp'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Quora</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="quora"
                                                            value="<?php echo isset($social_media['quora']) ? $social_media['quora'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">LinkedIn</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="linkedin"
                                                            value="<?php echo isset($social_media['linkedin']) ? $social_media['linkedin'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Youtube</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="youtube"
                                                            value="<?php echo isset($social_media['youtube']) ? $social_media['youtube'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mission Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="mission_image"
                                                            value="">
                                                            <?php if ($social_media['mission_image']): ?>
                                                            <img src="<?php echo base_url('' . $social_media['mission_image']); ?>"
                                                                alt="Blog Image" width="150">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mission </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="mission" rows="6"
                                                            required><?php echo isset($social_media['mission']) ? $social_media['mission'] : ''; ?></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Vision Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="vision_image"
                                                            value="">
                                                            <?php if ($social_media['vision_image']): ?>
                                                            <img src="<?php echo base_url('' . $social_media['vision_image']); ?>"
                                                                alt="Blog Image" width="150">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Vision </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="vision" rows="6"
                                                            required><?php echo isset($social_media['vision']) ? $social_media['vision'] : ''; ?></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Value Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="value_image"
                                                            value="">
                                                            <?php if ($social_media['value_image']): ?>
                                                            <img src="<?php echo base_url('' . $social_media['value_image']); ?>"
                                                                alt="Blog Image" width="150">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Value </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="value" rows="6"
                                                            required><?php echo isset($social_media['value']) ? $social_media['value'] : ''; ?></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                            <input type="hidden" name="id"  value="<?php echo isset($social_media['id']) ? $social_media['id'] : ''; ?>">
                                            <input type="hidden" name="old_mission_image"  value="<?php echo isset($social_media['mission_image']) ? $social_media['mission_image'] : ''; ?>">

                                            <input type="hidden" name="old_vision_image"  value="<?php echo isset($social_media['vision_image']) ? $social_media['vision_image'] : ''; ?>">

                                            <input type="hidden" name="old_value_image"  value="<?php echo isset($social_media['value_image']) ? $social_media['value_image'] : ''; ?>">


                                                <button type="submit" class="btn btn-success mr-2">Save</button>
                                                <a href="<?php echo site_url('admin/social_media'); ?>"
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