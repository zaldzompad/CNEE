<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CNEE</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./fonts/css/header1.css">

</head> 
<body>
    <div id="slider" class="carousel slide" data-ride ="carousel">
        <ol class="carousel-indicators">
            <li data-target = "#slider" data-slide-to="0" class="active"></li>
            <li data-target = "#slider" data-slide-to="1"></li>
            <li data-target = "#slider" data-slide-to="2"></li>
        </ol>   
            <div class="carousel-inner" role="listbox">
                <div class="item active" id="slide1">
                    <img src="./fonts/images/test2.jpg">
                    <div class="carousel-caption">
                        <h1>Cebu North Enterprise</h1>
                        <br>
                        <button type="button" class="btn btn-default">Order Now</button>
                    </div>
                
                </div>  <!--end active-->
                <div class="item" id="slide2">
                   <img src="./fonts/images/test3.jpg">
                    <div class="carousel-caption">
                        <h1>second page</h1>
                        <br>
                        <p>Cebu North Enterprise</p> 
                    </div>
                </div>
                <div class="item" id="slide3">
                    <img src="./fonts/images/background3.jpg">
                    <div class="carousel-caption">
                        <h1>second page</h1>
                        <br>
                        <p>Cebu North Enterprise</p> 
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
</body>
</html>                            