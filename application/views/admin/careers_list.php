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
                                    <h4 class="card-title">Careers List</h4>
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
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <!-- <th>Message</th> -->

                                                    <th>Status</th>
                                                    <th>Received At</th>
                                                    <th>Resume</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($careers as $row) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i++; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['mobile']; ?>
                                                        </td>
                                                        <!-- <td>
                                                            <?php echo $row['message']; ?>
                                                        </td> -->

                                                        <td>
                                                            <?php if ($row['status'] == '1') : ?>
                                                                <label class="badge badge-success">Pending</label>
                                                            <?php elseif ($row['status'] == '2') : ?>
                                                                <label class="badge badge-danger">Contacted</label>
                                                            <?php elseif ($row['status'] == '3') : ?>
                                                                <label class="badge badge-danger">Accepted</label>
                                                            <?php else : ?>
                                                                <label class="badge badge-info">Rejected</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['created_at']; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('' . $row['resume']); ?>" download><i class="fa fa-download" aria-hidden="true"></i> Download
                                                            </a>

                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('admin/careers/view/' . $row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                            <a href="<?php echo site_url('admin/careers/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
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