    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- Bootstrap and necessary plugins-->
    <script src="<?php echo base_url('assets/admin/');?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/pace-progress/pace.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts -->
    <script src="<?php echo base_url('assets/admin/');?>vendors/bootstrap-fileupload.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/tooltips.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable').DataTable();
      } );
    </script>
  </body>
</html>