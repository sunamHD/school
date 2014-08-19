    </div> <!-- Close the content div -->
<div id="cpDer2014">
    &copy; Derek Toub 2014
</div>
<footer>
    <div class="navbar navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="navbar-collapse collapse" id="footer-body">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('students/create') ?>">Create</a></li>
                        <li><a href="<?php echo site_url('students/delete') ?>">Delete</a></li>
                        <li><a href="<?php echo site_url('students/editMenu') ?>">Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('students/index') ?>">Index</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('classes/create') ?>">Create</a></li>
                        <li><a href="<?php echo site_url('classes/delete') ?>">Delete</a></li>
                        <li><a href="<?php echo site_url('classes/editMenu') ?>">Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('classes/index') ?>">Index</a></li>
                      </ul>
                    </li>

                    <li><a href="<?php echo site_url('classes/majors') ?>">Majors</a></li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enrollment <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('classes/enroll') ?>">Enroll</a></li>
                        <li><a href="<?php echo site_url('classes/unenroll') ?>">Unenroll</a></li>
                        <li><a href="<?php echo site_url('classes/enrollmentSelect') ?>">View Enrollment</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
          	<div id = "THEBOTTOM" class="navbar-header">
                <button type="button" class="navbar-toggle" style="border-color:#FFFFFF; color: $FFFFFF; background-image: linear-gradient(to bottom,#0066FF 0,#000000 100%);" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
        </div>
    </div>
</footer>

<!-- jQuery for dataTables -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo asset_url().'js/table/jquery.dataTables.min.js'?>"></script>

<!-- js for Bootstrap -->
<script src="<?php echo asset_url().'js/bootstrap/bootstrap.min.js'?>"></script> 

<script>
$(document).ready(function(){
    /* This function makes it so that the class index starts with 10 entries,
       while any other data table starts with 20 entries */
    $('.display').each(function(i, obj) {
        if (obj.id == 'display10')
        {
            $('#display10').dataTable({"lengthMenu":[10, 20, 50, 100]}); 
        }
        else
        {
            $(this).dataTable({"lengthMenu":[20, 35, 50, 100]});
        }
    });
});

/* This function fills empty cells so that they still have a border in firefox*/
$(document).ready(function() {
      $("td:empty").html("&nbsp;");
    });
</script>
</body>
</html>
