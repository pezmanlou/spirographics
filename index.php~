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

<script type="text/javascript">

function welcome()
{


    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");

    // canvas resize code
    context.canvas.width = $("#spiroWidth").width();
    context.canvas.height = $("#spiroHeight").height();
    //alert("width = " + $("#spiroDiv").width());
    //alert("height = " + $("#spiroDiv").height());


    // create array of neon colors
    var colorArray = ["#fa9033", "#ffda3b", "#ffff1b", "#ffff59", "#faf831", "#fcfa65", "#3cb24a", "#85de67", "#067952", "#42a964", "#0d94b0", "#caf7f1", "#39a6c8", "#95def6", "#27c0ef", "#0098d6", "#74aad8", "#1f60ad", "#0e268b", "#130f88", "#13016f", "#fcffff", "#f9f9fc", "#fffeff", "#f9f9f9", "#fefefe", "#fcfcfc", "#fffeff", "#fdf996", "#ffa2b8", "#fa5192", "#ff1366", "#f62821", "#ff246f", "#fffeff", "#b73d9c", "#a762ab", "#360062", "#f60f41", "#f82015", "#fa1b16", "#ef2310", "#f88721"];
var mySpiro;

    // create spirograph object
    mySpiro = {
        currentTheta: 0,
        lineColor: colorArray[Math.floor(Math.random()*43)],
        fixedGearRadius: 0,
        movingGearRadius: 0,
        movingGearOffset: 0,
        maxTheta: 0
    };
    mySpiro.fixedGearRadius = Math.floor(Math.random()*canvas.height/2);
    mySpiro.movingGearRadius = Math.floor(Math.random()*(((canvas.height/2) - mySpiro.fixedGearRadius)/2));
    mySpiro.movingGearOffset = Math.floor(Math.random()*(((canvas.height/2) - mySpiro.fixedGearRadius)/2));
    mySpiro.maxTheta = (Math.abs(mySpiro.movingGearRadius)/GCD(Math.abs(mySpiro.fixedGearRadius),Math.abs(mySpiro.movingGearRadius)))*2*Math.PI;
    <?php if($_GET['fixed']) 

	echo "alert(".$_GET['fixed'].");";
    ?>	
    document.getElementById("moving").value = mySpiro.movingGearRadius;
    document.getElementById("offset").value = mySpiro.movingGearOffset;
    document.getElementById("fixed").value = mySpiro.fixedGearRadius;
    var date = new Date();
    var time = date.getTime();
    animate(time, mySpiro);

}

function update()
{

   var colorArray = ["#fa9033", "#ffda3b", "#ffff1b", "#ffff59", "#faf831", "#fcfa65", "#3cb24a", "#85de67", "#067952", "#42a964", "#0d94b0", "#caf7f1", "#39a6c8", "#95def6", "#27c0ef", "#0098d6", "#74aad8", "#1f60ad", "#0e268b", "#130f88", "#13016f", "#fcffff", "#f9f9fc", "#fffeff", "#f9f9f9", "#fefefe", "#fcfcfc", "#fffeff", "#fdf996", "#ffa2b8", "#fa5192", "#ff1366", "#f62821", "#ff246f", "#fffeff", "#b73d9c", "#a762ab", "#360062", "#f60f41", "#f82015", "#fa1b16", "#ef2310", "#f88721"];
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");

    //context.fillStyle = "#000000";
    context.clearRect(0,0,canvas.width, canvas.height);
   // context.fill();
	
	var mySpiro = {
        currentTheta: 0,
        lineColor: colorArray[Math.floor(Math.random()*43)],
        fixedGearRadius:  document.getElementById("fixed").value,
        movingGearRadius:  document.getElementById("moving").value,
        movingGearOffset:  document.getElementById("offset").value,
        maxTheta: 0
    };

	  mySpiro.maxTheta = (Math.abs	(mySpiro.movingGearRadius)/GCD(Math.abs(mySpiro.fixedGearRadius),Math.abs(mySpiro.movingGearRadius)))*2*Math.PI
    var date = new Date();
    var time = date.getTime();
    animate(time, mySpiro);

}

function save()
{

            var canvas = document.getElementById("myCanvas");

	// save canvas image as data url (png format by default)
            //var dataURL = canvas.toDataURL();
 Canvas2Image.saveAsPNG(canvas);
            // set canvasImg image src to dataURL
            // so it can be saved as an image
	    alert (dataURL);
}


function addToTheMotherFuckingDatabaseLouisIsThatBetter()
{

var offset = document.getElementById("offset").value;
var moving = document.getElementById("moving").value;
var fixed = document.getElementById("fixed").value;
$('input[name=offset]').val(offset);
$('input[name=moving]').val(moving);
$('input[name=fixed]').val(fixed);
$('input[name=vote]').val("up");
//document.bonerjams08.submit();
 $.post("update.php",{ fixed: fixed, moving:moving, offset:offset, vote: "up" },
            function(data){
               alert(data);
            });

}

function addToTheMotherFuckingDatabaseLouisIsThatBetterDown()
{

var offset = document.getElementById("offset").value;
var moving = document.getElementById("moving").value;
var fixed = document.getElementById("fixed").value;
$('input[name=offset]').val(offset);
$('input[name=moving]').val(moving);
$('input[name=fixed]').val(fixed);
$('input[name=vote]').val("down");
//document.bonerjams08.submit();
 $.post("update.php",{ fixed: fixed, moving:moving, offset:offset, vote:"down"},
            function(data){
               $(".alert-message success").alert(data);
            });



}

	

function getLink()
{
	var base_url = "http://ec2-23-22-31-167.compute-1.amazonaws.com/Spirographics/";
	var offset = "offset="+document.getElementById("offset").value;
	var moving = "moving="+document.getElementById("moving").value;
	var fixed = "fixed="+document.getElementById("fixed").value
	var final_url = base_url + fixed + moving + offset; 


	var rest = "http://fatlink.me/api.php?action=shorturl&format=simple&url="+final_url;
         $.post("shortener.php",{ getLink: rest },
            function(data){
               alert(data);
            });


}

    </script>




    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

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

    <div class="container-fluid">
      <div class="row-fluid" id="spiroHeight">
        <div class="span2" style="width:20%" style="background:#fff">
          <div class="well sidebar-nav" id="sidebar" >

	<form id="update">

  <p><span>fixed gear radius: </span><br /><input type="text" style="width: 75%" id = "fixed"/></p>
<p> <span>moving gear radius</span><br /><input type="text" style="width: 75%" id="moving" /></p><p><span>moving gear offset</span><input type="text" id = "offset" style="width: 75%" /> </p>
	  <input type="button" value="Draw" onclick="update()" class="btn btn-primary btn-small"/>
	<input type ="submit" value="Random" class="btn btn-primary btn-small"/>

    </form>
          </div><!--/.well -->
<div class="well sidebar-nav" id="sidebar" >

 <form name="bonerjams08" action="" method="post">
   <input type="hidden" name="moving" value="">
   <input type="hidden" name="offset" value = "">
  <input type="hidden" name="fixed" value="">
  <input type="hidden" name="vote" value="">
</form>
<div class="alerts">
  <div class="alert-message success">
    <a class="close" href="#">×</a>
    <p><strong>Well done!</strong> You successfully <a href="#">read this</a> alert message.</p>
  </div>

</div>
<button type="Submit" onclick="addToTheMotherFuckingDatabaseLouisIsThatBetter()"><img src="assets/img/up.png" style="width:64px;"/></button>
	
 <button type="button" onclick="addToTheMotherFuckingDatabaseLouisIsThatBetterDown()"><img src="assets/img/down.png" style=" width:64px"/></button>


<h3>Do you like this graph?</h3></p></div>
<div class="well sidebar-nav" id="sidebar" >
            <div style="width:48%; float:left"><input type ="submit" value="Download" onclick="save()" class="btn btn-primary btn-medium" /></div>
	       <div style="width:48%; float:right" id ="link"><input type ="submit" value="Short Url" onclick="getLink()" class="btn btn-primary btn-medium" /></div>

</div>
        </div><!--/span-->
 <div class="span9" id="spiroWidth">
		<div style="background:#000">
                <canvas id="myCanvas" />
		</div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; tehInternetzd00d (we are ironic) 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://www.nihilogic.dk/labs/canvas2image/canvas2image.js" type="text/javascript"></script>
    <script src="http://www.nihilogic.dk/labs/canvas2image/base64.js" type="text/javascript"></script>
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
