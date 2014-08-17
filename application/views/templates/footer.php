<strong>&copy; Derek Toub 2014</strong>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo asset_url().'js/bootstrap.min.js'?>"></script>
<script src="<?php echo asset_url().'js/table/jquery.dataTables.min.js'?>"></script>
<script>
$(document).ready(function(){
    $("#interacTable").dataTable({"lengthMenu":[20, 35, 50, 100]});
});
</script>
</body>
</html>
