<?php
require("connect.php");



?>
<script type="text/javascript">
function thumbnail(c, f, m, o){
    var canvas = document.getElementById(c);
    var context = canvas.getContext("2d");


    // other vars
    var x = 0;
    var y = 0;



    // move to starting point
    x = (f - m)*Math.cos(0) + o*Math.cos(0);
    y = (f - m)*Math.sin(0) - o*Math.sin(0);
    context.moveTo(canvas.width/2 + x,canvas.height/2 + y);
    context.beginPath();
    var maxtheta = (Math.abs(m)/GCD(Math.abs(f),Math.abs(m)))*2*Math.PI;

    // then draw the line
    for (var tempTheta = 0; tempTheta <= maxtheta; tempTheta = tempTheta + .01)
    {
        if (tempTheta > maxtheta)
        {
            x = (f - m)*Math.cos(maxtheta) + o*Math.cos(((f-m)/m)*maxtheta);
            y = (f - m)*Math.sin(maxtheta) - o*Math.sin(((f-m)/m)*maxtheta);
        }else
        {
            x = (f - m)*Math.cos(tempTheta) + o*Math.cos(((f-m)/m)*tempTheta);
            y = (f - m)*Math.sin(tempTheta) - o*Math.sin(((f-m)/m)*tempTheta);
        }
        context.lineTo(canvas.width/2 + x,canvas.height/2 + y);

    }
    context.lineWidth = .5;
    context.strokeStyle = "#228B22";
    context.stroke();


}
 function GCD(a,b){
	var t;
	while(b!=0)b=a%(t=b),a=t;		
	return a;
}
</script>

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
	<?php $result = mysql_query("SELECT * FROM graphrank ORDER BY rank DESC LIMIT 0,10");
	while($row = mysql_fetch_array($result))
{
	echo "<div class='span6'>
			<div class='well'>
				 <canvas id='".$row['penis']."'  />
				<script>thumbnail(".$row['penis'].",".$row['fixed'].",".$row['moving'].",".$row['offset']." )</script>

			</div>
			</div>";	

}
	?>	      
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


  </body>
</html>

