
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<!-- Sparkline -->
<script src="js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="js/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<!-- datepicker -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

<script src="js/icheck.min.js"></script>

{literal}


    <script src="./bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tablesFlag').DataTable({
            responsive: true
        });
    });
</script>

    <script>
        $(document).ready(function() {
            $('#tablesJob').DataTable({
                responsive: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablesLike').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablesCapable').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablesCatagory').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablesApplicants').DataTable({
                responsive: true
            });
        });
    </script>

    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            //language:  'fr',
            pickTime: false,
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>


		<script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FF5757");
		}

		function updateFeild(editableObj,column) {
			$.ajax({
				url: "ajax/profile_edit.php",
				type: "GET",
				data:'column='+column+'&editval='+editableObj.innerHTML,
				success: function(data){
					$(editableObj).css("background","#00D98F");
				}
		   });
		}
		</script>

    <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
{/literal}


</body>
</html>