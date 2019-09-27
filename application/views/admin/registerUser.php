<?php $this->load->view('admin/connects/headerStyle'); ?>
<?php $this->load->view('admin/connects/leftMenu'); ?>
<?php $this->load->view('admin/connects/header'); ?>



<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Users</span>
            <h3 class="page-title">Add User</h3>

        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">

                    <?php if($this->session->flashdata('err')){ ?>
                        <div class="alert alert-danger">
                            <span><?php echo $this->session->flashdata('err') ?></span>
                        </div>
                    <?php } ?>

                    <form class="add-new-post" method="post" action="<?php echo base_url('addUserAct') ?>" enctype="multipart/form-data">
                        <input name="username" class="form-control form-control-lg mb-3" type="text" placeholder="username">
                        <input name="password" class="form-control form-control-lg mb-3" type="password" placeholder="password">




                        <select name="status" id="" class="form-control form-control-lg mb-3">
                            <option value="">-Select-</option>
                            <option value="admin">Admin</option>
                            <option value="sade">Sade</option>
                        </select>



                        <button type="submit" class="mb-2 btn btn-lg btn-success mr-1">Add</button>
                    </form>

                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>
    </div>
</div>





<?php $this->load->view('admin/connects/footer'); ?>
<?php $this->load->view('admin/connects/footerScripts'); ?>
