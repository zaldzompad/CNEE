<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CNEE</title>

<link rel="stylesheet" type="text/css" href="./fonts/css/index.css">


</head> 
<body>
<link rel="stylesheet" type="text/css" href="./fonts/css/index.css">
<div>
<?php include("./header.php");?>
</div>
    <div id="slider" class="carousel slide" data-ride ="carousel">
        <ol class="carousel-indicators">
            <li data-target = "#slider" data-slide-to="0" class="active"></li>
            <li data-target = "#slider" data-slide-to="1"></li>
            <li data-target = "#slider" data-slide-to="2"></li>
        </ol>   
            <div class="carousel-inner" role="listbox" >
                <div class="item active" id="slide1">
                    <img src="./fonts/images/background/backs3.jpg">
                    <div class="carousel-caption">
                        <h1 id="company">Cebu North Eastern Enterprise</h1>
                    </div>
                </div>  <!--end active-->
                    <div class="item" id="slide2">
                       <img src="./fonts/images/background/backs2.jpg">
                       <div class="carousel-caption">
                            <h1 id="company">Cebu North Eastern Enterprise</h1>
                        </div>
                    </div>
                    <div class="item" id="slide3">
                        <img src="./fonts/images/background/backs1.jpg">
                        <div class="carousel-caption" class="col-md-3">
                            <h1 id="company">Cebu North Eastern Enterprise</h1>
                        </div>
                    </div>
            </div>
            <!--slider-->
             <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
             <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <div>
        
    </div>
   
<?php include("./footer.php");?>
</body> 
</html>                           