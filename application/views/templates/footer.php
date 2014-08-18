</div> <!-- Close the body div -->
</div> <!-- Close the wrapper div -->
<footer>
    <div class="navbar navbar-fixed-bottom">
        <div class="container">
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
                        <li><a href="<?php echo site_url('classes/enrollmentSelect') ?>">View Enrollment</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
          	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="footer-bar-btns visible-xs">
                    <li><a href="#" class="btn" title="History"><i class="fa fa-2x fa-clock-o blue-text"></i></a></li>
                    <li><a href="#" class="btn" title="Favourites"><i class="fa fa-2x fa-star yellow-text"></i></a></li>
                    <li><a href="#" class="btn" title="Subscriptions"><i class="fa fa-2x fa-rss-square orange-text"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery for dataTables -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo asset_url().'js/table/jquery.dataTables.min.js'?>"></script>

<!-- jQuery for Bootstrap -->
<script src="<?php echo asset_url().'js/bootstrap/bootstrap.min.js'?>"></script> 

<script>
$(document).ready(function(){
    $(".display").dataTable({"lengthMenu":[20, 35, 50, 100]});
});
</script>
</body>
</html>
