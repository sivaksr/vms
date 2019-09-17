<footer class="main-footer custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Quick Links</p>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="advertise-driver.php">Advertisement - Driver</a></li>
                    <li><a href="support.php">Support</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Listing</p>
                <ul class="list-unstyled">
                    <li><a href="vehicle.php">Vehicle</a></li>
                    <li><a href="add-driver.php">Driver</a></li>
                    <li><a href="all-approvals.php">All Approvals</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Loads</p>
                <ul class="list-unstyled">
                    <li><a href="load-booking.php">Create Load</a></li>
                    <li><a href="active-bookings.php">Active Bookings</a></li>
                    <li><a href="cancelled-bookings.php">Cancelled Bookings</a></li>
                    <li><a href="load-delivery-list.php">Load Delivered List</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Payments</p>
                <ul class="list-unstyled">
                    <li><a href="payments-overview.php">Payments Overview</a></li>
                    <li><a href="previous-payments-list.php">Previous Payments</a></li>
                    <li><a href="transactions.php">Transaction</a></li>
                    <li><a href="invoices.php">Invoice</a></li>
                    <li><a href="#">Statements</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Third Party</p>
                <ul class="list-unstyled">
                    <li><a href="fuels-tie-up-list.php">Fuel</a></li>
                    <li><a href="garage-tie-up-list.php">Garage</a></li>
                    <li><a href="rto-tie-up-list.php">RTO / Insurance</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <p>Growth</p>
                <ul class="list-unstyled">
                    <li><a href="account-health.php">Account Health</a></li>
                    <li><a href="performance-overview.php">Performance Overview</a></li>
                    <li><a href="advertising-list.php">Advertising</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <strong>Copyright &copy; 2018 <a href="#">VMS</a>.</strong> All rights reserved.
        </div>
    </div>
</div>

</div>
<!-- ./wrapper -->
<!-- DataTables -->

<!-- Bootstrap 3.3.7 -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/select2.full.min.js"></script>
<!-- SlimScroll -->

<script src="<?php echo base_url(); ?>assets/vendor/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/jquery.slimscroll.min.js"></script>
<!-- SlimScroll 1.3.0 -->

<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/demo.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/Chart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/vendor/backend/js/dashboard.js"></script>

<script>
    $(document).ready(function() {
        $('#example1').DataTable();
        $('#example2').DataTable();
    });
</script>

</body>

</html>