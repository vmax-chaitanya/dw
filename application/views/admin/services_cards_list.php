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
                                    <h3 class="card-title"><?php echo $service['name'];?></h3>
                                </div>
                                <div class="col-md-2 ms-auto">
                                    <a href="<?php echo base_url();?>admin/services_cards/add/<?php echo $this->uri->segment(3);?>" class="w-100 btn btn-primary">Add</a>
                                </div>
                            </div>



                            <!-- <a class="nav-link dropdown-toggle bg-primary" id="actionDropdown" href="#" data-toggle="dropdown">
                                <span class="btn">+ Create new</span>
                            </a> -->
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
							<h4 class="card-title pt-5">Module 2</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Service ID</th> -->
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($service_cards_type_1 as $card) : ?>
                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <!-- <td><?php echo $card['service_id']; ?></td> -->
                                                        <td><?php echo $card['name']; ?></td>
                                                        <td><?php echo $card['description']; ?></td>
                                                        <td>
                                                            <?php if ($card['image']) : ?>
                                                                <img src="<?php echo base_url('' . $card['image']); ?>" alt="Service Card Image" width="150">
                                                            <?php else : ?>
                                                                No Image
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($card['status'] == '1') : ?>
                                                                <label class="badge badge-success">Active</label>
                                                            <?php elseif ($card['status'] == '2') : ?>
                                                                <label class="badge badge-danger">Inactive</label>
                                                            <?php else : ?>
                                                                <label class="badge badge-info">Other</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/services_cards/edit/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-primary">Edit</a>
                                                            <a href="<?php echo base_url('admin/services_cards/delete/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this service card?')">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

							<hr><h4 class="card-title pt-5">Module 3</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Service ID</th> -->
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $j = 1;
                                                foreach ($service_cards_type_2 as $card) : ?>
                                                    <tr>
                                                        <td><?php echo $j++; ?></td>
                                                        <!-- <td><?php echo $card['service_id']; ?></td> -->
                                                        <td><?php echo $card['name']; ?></td>
                                                        <td><?php echo $card['description']; ?></td>
                                                        <td>
                                                            <?php if ($card['image']) : ?>
                                                                <img src="<?php echo base_url('' . $card['image']); ?>" alt="Service Card Image" width="150">
                                                            <?php else : ?>
                                                                No Image
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($card['status'] == '1') : ?>
                                                                <label class="badge badge-success">Active</label>
                                                            <?php elseif ($card['status'] == '2') : ?>
                                                                <label class="badge badge-danger">Inactive</label>
                                                            <?php else : ?>
                                                                <label class="badge badge-info">Other</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/services_cards/edit/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-primary">Edit</a>
                                                            <a href="<?php echo base_url('admin/services_cards/delete/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this service card?')">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

							<hr><h4 class="card-title pt-5">Module 4</h4>
							<div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Service ID</th> -->
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $k = 1;
                                                foreach ($service_cards_type_3 as $card) : ?>
                                                    <tr>
                                                        <td><?php echo $k++; ?></td>
                                                        <!-- <td><?php echo $card['service_id']; ?></td> -->
                                                        <td><?php echo $card['name']; ?></td>
                                                        <td><?php echo $card['description']; ?></td>
                                                        <td>
                                                            <?php if ($card['image']) : ?>
                                                                <img src="<?php echo base_url('' . $card['image']); ?>" alt="Service Card Image" width="150">
                                                            <?php else : ?>
                                                                No Image
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($card['status'] == '1') : ?>
                                                                <label class="badge badge-success">Active</label>
                                                            <?php elseif ($card['status'] == '2') : ?>
                                                                <label class="badge badge-danger">Inactive</label>
                                                            <?php else : ?>
                                                                <label class="badge badge-info">Other</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/services_cards/edit/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-primary">Edit</a>
                                                            <a href="<?php echo base_url('admin/services_cards/delete/' . $card['id'].'/'.$this->uri->segment(3)); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this service card?')">Delete</a>
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
