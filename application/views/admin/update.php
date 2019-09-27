<?php $this->load->view('admin/connects/headerStyle'); ?>
<?php $this->load->view('admin/connects/leftMenu'); ?>
<?php $this->load->view('admin/connects/header'); ?>



<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">News</span>
            <h3 class="page-title">Update News</h3>

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

                    <form class="add-new-post" method="post" action="<?php echo base_url('updateAct/'.$getSinglePosts['id'])?>" enctype="multipart/form-data">
                        <input name="title" class="form-control form-control-lg mb-3" type="text" placeholder="Title" value="<?php echo $getSinglePosts['title'] ?>">
                        <textarea name="desc" id="" class="form-control form-control-lg mb-3" cols="30" rows="10" placeholder="Description"><?php echo $getSinglePosts['description'] ?></textarea>
                        <input name="date" class="form-control form-control-lg mb-3" type="date" value="<?php echo $getSinglePosts['date'] ?>">



                        <select name="cate" id="" class="form-control form-control-lg mb-3">
                            <option <?php if ($getSinglePosts['status'] == ''){ echo 'SELECTED';} ?> value="">-Select-</option>
                            <option <?php if ($getSinglePosts['status'] == 'Comedy'){ echo 'SELECTED';} ?> value="Comedy">Comedy</option>
                            <option <?php if ($getSinglePosts['status'] == 'Horror'){ echo 'SELECTED';} ?> value="Horror">Horror</option>
                            <option <?php if ($getSinglePosts['status'] == 'Fantasy'){ echo 'SELECTED';} ?> value="Fantasy">Fantasy</option>
                        </select>




                        <select name="status" id="" class="form-control form-control-lg mb-3">
                            <option <?php if ($getSinglePosts['status'] == ''){ echo 'SELECTED';} ?> value="">-Select-</option>
                            <option <?php if ($getSinglePosts['status'] == 'Active'){ echo 'SELECTED';} ?> value="Active">Active</option>
                            <option <?php if ($getSinglePosts['status'] == 'Deactive'){ echo 'SELECTED';} ?> value="Deactive">Deactive</option>
                        </select>
                        <input name="images" type="file" class="form-control form-control-lg mb-3">
                        <img src="<?php echo base_url('uploads/'.$getSinglePosts['image']) ?>" width="150px" alt="">
                        <br> <br>
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
