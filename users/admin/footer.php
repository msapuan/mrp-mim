  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 1.0 -->
    </div>
    <strong>Copyright &copy; 2022</strong> - Sistem MRP
  </footer>

  
</div>


<script src="../../assets/template/bower_components/jquery/dist/jquery.min.js"></script>

<script src="../../assets/template/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../../assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../../assets/template/bower_components/raphael/raphael.min.js"></script>
<script src="../../assets/template/bower_components/morris.js/morris.min.js"></script>

<script src="../../assets/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


<script src="../../assets/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="../../assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="../../assets/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="../../assets/template/bower_components/moment/min/moment.min.js"></script>
<script src="../../assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../../assets/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../../assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../../assets/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/template/bower_components/fastclick/lib/fastclick.js"></script>

<script src="../../assets/template/dist/js/adminlte.min.js"></script>

<script src="../../assets/template/dist/js/pages/dashboard.js"></script>

<script src="../../assets/template/dist/js/demo.js"></script>
<script src="../../assets/template/bower_components/ckeditor/ckeditor.js"></script>
<script src="../../assets/template/bower_components/chart.js/Chart.min.js"></script>

<script>
  $(document).ready(function(){

   // $(".edit").hide();

   $('#table-datatable').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : true,
    "pageLength"  : 50
  });

 });
  
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
  }).datepicker("setDate", new Date());

  $('.datepicker2').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  });
</script>

</body>
</html>
