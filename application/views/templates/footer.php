</div> <!-- Close the body div -->
</div> <!-- Close the wrapper div -->
<footer>
    <div class="navbar navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-collapse collapse" id="footer-body">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Majors</a></li>
                    <li><a href="#">Enrollment</a></li>
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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo asset_url().'js/bootstrap.min.js'?>"></script>
<script src="<?php echo asset_url().'js/table/jquery.dataTables.min.js'?>"></script>
<script>
$(document).ready(function(){
    $(".display").dataTable({"lengthMenu":[20, 35, 50, 100]});
});
</script>
</body>
</html>
