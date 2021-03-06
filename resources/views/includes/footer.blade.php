    <!-- jQuery -->
    <script src="/js/sb-admin-2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/sb-admin-2/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/sb-admin-2/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2/sb-admin-2.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
$(document).ready(function(){
    
    $('[data-toggle="popover"]').popover({
        html : true
    });   

    
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
  
   

    $('#tableMain').DataTable();



});
</script>