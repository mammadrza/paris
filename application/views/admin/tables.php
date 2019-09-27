<?php $this->load->view('admin/connects/headerStyle'); ?>
<?php $this->load->view('admin/connects/leftMenu'); ?>
<?php $this->load->view('admin/connects/header'); ?>


<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">News</span>
                <h3 class="page-title">All News</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>

                    <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } ?>

                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Title</th>
                          <th scope="col" class="border-0">Description</th>
                          <th scope="col" class="border-0">Date</th>
                          <th scope="col" class="border-0">Category</th>
                          <th scope="col" class="border-0">Status</th>
                          <th scope="col" class="border-0">Image</th>
                          <th scope="col" class="border-0">Operation</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($getAllPosts as $getAllPost){ ?>

                        <tr>

                          <td><?php echo $getAllPost['title'] ?></td>
                          <td><?php echo $getAllPost['description'] ?></td>
                          <td><?php echo $getAllPost['date'] ?></td>
                          <td><?php echo $getAllPost['category'] ?></td>
                          <td><?php echo $getAllPost['status'] ?></td>
                          <td><img width="70px;" src="<?php echo base_url('uploads/'.$getAllPost['image']) ?>" alt="image"></td>
                          <td>
                              <a href="<?php echo base_url('update/'.$getAllPost['id']) ?>">Update</a>
                              |

                              <?php if($_SESSION['userInfo']['status'] == 'admin'){ ?>
                                  <a href="<?php echo base_url('delete/'.$getAllPost['id']) ?>">Delete</a>
                                <?php }else{ ?>

                                    <span>silme huququ yoxdur</span>
                                <?php } ?>

                          </td>
                        </tr>

                      <?php  } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

</div>








<?php $this->load->view('admin/connects/footer'); ?>
<?php $this->load->view('admin/connects/footerScripts'); ?>
