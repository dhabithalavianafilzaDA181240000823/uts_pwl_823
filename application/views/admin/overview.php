<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
  </head>

  <body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="wrapper">
      <?php $this->load->view("admin/_partials/sidebar.php") ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
         <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-book-open"></i>
                  </div>
                  <div class="mr-5">Data Buku</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/products') ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Data Supplier</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/supliers') ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            
          <!-- Area Chart Example-->
         

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       <?php $this->load->view("admin/_partials/footer.php") ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
     
    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
 <?php $this->load->view("admin/_partials/js.php") ?>


  </body>

</html>