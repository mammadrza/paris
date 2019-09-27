



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hikers Blog &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('public/assets/') ?>css/style.css">
  </head>
  <body>

  <?php $this->load->view('user/connects/navbarPage'); ?>


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo base_url('public/assets/') ?>images/hero_1.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3">Nature</span>
              <h1 class="mb-4"><a href="#">Category</a></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--    --><?php //print_r($single); ?>
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate mb-5">

          <div class="col-md-12 col-lg-8 main-content">
            




            <div class="entry2 mb-5">
              <img src="<?php echo base_url('uploads/'.$single['image']) ?>" alt="Image" class="img-fluid rounded">
              <span class="post-category text-white bg-primary mb-3">Sports</span>
              <h2><?php echo $single['title'] ?></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <span><?php echo $single['date'] ?></span>
              </div>
              <p><?php echo $single['description'] ?></p>
            </div>

            


<!--            <div class="row text-center pt-5 border-top">-->
<!--              <div class="col-md-12">-->
<!--                <div class="custom-pagination">-->
<!--                  <span>1</span>-->
<!--                  <a href="#">2</a>-->
<!--                  <a href="#">3</a>-->
<!--                  <a href="#">4</a>-->
<!--                  <span>...</span>-->
<!--                  <a href="#">15</a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">

            <!-- END sidebar-box -->

            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Bənzər <xəbərlə></xəbərlə>r</h3>
              <div class="post-entry-sidebar">
                <ul>
                    <?php foreach ($all as $allKeys){ ?>

                        <li>
                            <a href="<?php echo base_url('singlePage/'.$allKeys['id'])?>">
                                <img src="<?php echo base_url('uploads/'.$allKeys['image']) ?>" alt="Image placeholder" class="mr-4">
                                <div class="text">
                                    <h4><?php echo $allKeys['title'] ?></h4>
                                    <div class="post-meta">
                                        <span class="mr-2"><?php echo $allKeys['date'] ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>


                    <?php } ?>



                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->


            <!-- END sidebar-box -->

          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>


    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="footer-heading mb-4">Quick Menu</h3>
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Subscribe</h3>
              <form action="" method="post" class="form-footer-subscribe">
                <div class="form-group d-flex">
                  <input type="text" class="form-control">
                  <input type="submit" class="btn btn-primary text-white" value="Subscribe">
                </div>
              </form>
            </div>

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="<?php echo base_url('public/assets/') ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/jquery-ui.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/popper.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url('public/assets/') ?>js/aos.js"></script>

  <script src="<?php echo base_url('public/assets/') ?>js/main.js"></script>
    
  </body>
</html>