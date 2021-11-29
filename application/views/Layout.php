<!doctype html>
<html lang="en">
    <?php $this->load->view("templates/head") ?>
    <body data-sidebar-size="lg" data-topbar="dark">
    <!-- <body data-layout="horizontal"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view("templates/header") ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view("templates/left_menu") ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <?= $view ?>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <?php $this->load->view("templates/right_bar") ?>
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url() ?>/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url() ?>/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?= base_url() ?>/assets/libs/pace-js/pace.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.js" integrity="sha512-CWVDkca3f3uAWgDNVzW+W4XJbiC3CH84P2aWZXj+DqI6PNbTzXbl1dIzEHeNJpYSn4B6U8miSZb/hCws7FnUZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?= base_url() ?>/assets/js/app.js"></script>
        <script src="<?= base_url() ?>/assets/js/general.js"></script>
        <script src="<?= base_url() ?>/assets/js/atencion_control_prenatal.js"></script>
    </body>
</html>