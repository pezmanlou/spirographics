<?php
require("connect.php");

$result = mysql_query("SELECT * FROM graphrank ORDER BY rank DESC LIMIT 0,10");

while($row = mysql_fetch_array($result))
{
	//echo $row['rank'].'<br />';


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SpiroGraphics for the kids?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="assets/js/spiro.js"></script>
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    background-color: black;
      }

.container {
    background-color: transparent;
}
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">


 <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="">SpiroGraphics</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Generate</a></li>
              <li><a href="topgraphs.php">Top 10 Spirographs</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
     	<div class="row">
			<div class="well">
			</div>
	</div>
   </div>
      <footer>
        <p>&copy; tehInternetzd00d (we are ironic) 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://www.nihilogic.dk/labs/canvas2image/canvas2image.js" type="text/javascript"></script>
    <script src="http://www.nihilogic.dk/labs/canvas2image/base64.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <!-- <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script> -->
<script>

    $(document).ready(function() { welcome(); });

    $("input").focus(function () {
         $(this).next("span").css('display','inline').fadeOut(1000);
	
    });

</script>

  </body>
</html>
