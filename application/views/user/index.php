
<?php $this->load->view('user/connects/headerCss'); ?>
<?php $this->load->view('user/connects/navbarPage'); ?>
<?php $this->load->view('user/connects/caruselSlide'); ?>
<?php $this->load->view('user/connects/banner'); ?>
    

<?php //print_r($all) ?>
    <div class="site-section">
      <div class="container">
        <div class="row">


            <?php foreach ($all as $allKey){ ?>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="section-heading mb-5 d-flex align-items-center">
                    <h2>Sports</h2>
                    <div class="ml-auto"><a href="#" class="view-all-btn">View All</a></div>
                </div>

                <div class="entry2 mb-5">
                    <a href="<?php echo base_url('singlePage/'.$allKey['id']) ?>"><img src="<?php echo base_url('uploads/'.$allKey['image']) ?>"  alt="Image" class="img-fluid rounded" style="height: 250px;"></a>
                    <span class="post-category text-white bg-primary mb-3"><?php echo $allKey['category'] ?></span>
                    <h2><?php echo $allKey['title'] ?></h2>
                    <div class="post-meta align-items-center text-left clearfix">
                        <span><?php echo $allKey['date'] ?></span>
                    </div>
                    <p><?php echo $allKey['description'] ?></p>
                </div>
            </div>
            <?php } ?>

      </div>
    </div>
    

    <?php $this->load->view('user/connects/footer'); ?>
    <?php $this->load->view('user/connects/footerJs'); ?>