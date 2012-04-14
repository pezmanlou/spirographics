window.requestAnimFrame = (function(callback){
    return window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback){
        window.setTimeout(callback, 1000 / 60);
    };
})();

function animate(lastTime, mySpiro){
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");

    // get elapsed time since last draw
    var date = new Date();
    var time = date.getTime();
    var timeDiff = time - lastTime;
    lastTime = time;

    // calculate how much more to draw to keep consistant appearance
	mySpiro.currentTheta = mySpiro.currentTheta + .1 * timeDiff;
 
    // clear the canvas
    context.clearRect(0, 0, canvas.width, canvas.height);

    // other vars
    var x = 0;
    var y = 0;



    // move to starting point
    x = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.cos(0) + mySpiro.movingGearOffset*Math.cos(0);
    y = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.sin(0) - mySpiro.movingGearOffset*Math.sin(0);
    context.moveTo(canvas.width/2 + x,canvas.height/2 + y);
    context.beginPath();

    // then draw the line
    for (var tempTheta = 0; tempTheta <= mySpiro.currentTheta; tempTheta = tempTheta + .01)
    {
        if (tempTheta > mySpiro.maxTheta)
        {
            x = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.cos(mySpiro.maxTheta) + mySpiro.movingGearOffset*Math.cos(((mySpiro.fixedGearRadius-mySpiro.movingGearRadius)/mySpiro.movingGearRadius)*mySpiro.maxTheta);
            y = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.sin(mySpiro.maxTheta) - mySpiro.movingGearOffset*Math.sin(((mySpiro.fixedGearRadius-mySpiro.movingGearRadius)/mySpiro.movingGearRadius)*mySpiro.maxTheta);
        }else
        {
            x = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.cos(tempTheta) + mySpiro.movingGearOffset*Math.cos(((mySpiro.fixedGearRadius-mySpiro.movingGearRadius)/mySpiro.movingGearRadius)*tempTheta);
            y = (mySpiro.fixedGearRadius - mySpiro.movingGearRadius)*Math.sin(tempTheta) - mySpiro.movingGearOffset*Math.sin(((mySpiro.fixedGearRadius-mySpiro.movingGearRadius)/mySpiro.movingGearRadius)*tempTheta);
        }
        context.lineTo(canvas.width/2 + x,canvas.height/2 + y);

    }
    context.lineWidth = 1;
    context.strokeStyle = mySpiro.lineColor;
    context.stroke();

   /* context.fillStyle = "#ffffff"
    context.fillText("fixed: " + mySpiro.fixedGearRadius ,50,canvas.height - 60);
    context.fillText("moving: " + mySpiro.movingGearRadius ,50,canvas.height - 40);
    context.fillText("height: " + mySpiro.movingGearOffset ,50,canvas.height - 20);
 */
    // request new frame
    if (mySpiro.currentTheta <= mySpiro.maxTheta)
    {
        requestAnimFrame(function(){
            animate(lastTime, mySpiro);
        });
    }

}
 function GCD(a,b){
	var t;
	while(b!=0)b=a%(t=b),a=t;		
	return a;
}





