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
    <script src="<?php echo base_url('assets/admin/');?>vendors/sweetalert.js"></script>
    <!-- Date Range Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>node_modules/daterange-picker/daterangepicker.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable').DataTable();
      } );
    </script>
    
    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#pernyataanModal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
        });

        $('#pekerjaModal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
        });

        $('#wiraswastaModal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
        });
    });
</script>
    <script type="text/javascript">
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>
  </body>
</html>