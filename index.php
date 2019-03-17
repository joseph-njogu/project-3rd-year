<?php

?>
<!DOCTYPE HTML>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> JOJALE </title>
        <style>
div.background {
  background: url(klematis.jpg) repeat;
  /*border: 10px solid black;*/
} 

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
 /* opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */ 
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: purple;
  font-family: ubuntu;

}
</style>
        <script type="application/javascript">
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
    </head>
        
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">JOJALE</a>
      </div>

    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#main1">Home</a></li>
      <li><a data-toggle="tab" href="#Contractor">Contractor</a></li>
      <li><a data-toggle="tab" href="#">Laborer</a></li>
      <li><a data-toggle="tab" href="#contact">Contact Us</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="contractor/contractorsignup.php">Contractor</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="laborer/laborersignup2.php">Laborer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
       
       <marquee behaviour="alternate" width="100" height="200"> <h1 align="center" ><font color="red"> welcome to jojale</font></h1></marquee>
       
<!--<div class="bmsTop">
    <ul>
        <li style="font-size: 15px; font-weight: bold">Top Recruiters:</li>
        <li><a href="#" target="_blank">
                <img src="images/1.gif" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/2.gif" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/3.gif" border="0"></a>
        </li>
        <li><a href="#" target="_blank">
                <img src="images/4.gif" border="0"></a></li>
        <li><a href="#" target="_blank">
                <img src="images/5.gif" border="0"></a>
        </li>
    </ul>
</div> -->

<div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
<h1>JOJALE</h1>
    <p>Search for sample casual-jobs</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg " style="color: purple"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div> <!-- jumbotron -->

<div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
</div>
<div class="background">
      <div class="transbox">
      <p>Just but a sample of casual-labours we think know.</p>
<img src="images/13.jpg" width="200" height="200" >
<img src="images/5.jpg" width="200" height="200" >
<img src="images/6.jpg" width="200" height="200" >
<img src="images/7.jpg" width="200" height="200" >
<img src="images/8.jpg" width="200" height="200" >
</div>
</div>
<div class="page-header" style="background:#00FF00"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this platform for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Laborer</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post your details and skills in easy steps and start receiving calls from prospective contractors.
                        Find the right Contractor easily .</p>
                </div>
                <div class="panel-footer">
                    <h3></h3>
                   <a href="laborer/laborersignup.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Contractor</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active Contractors find better Casual-laborers. Get connected with over 45000 laborers.
                        Select from the list of thousands of laborers registered daily.</p>
                </div>
                <div class="panel-footer">
                    <h3></h3>
                    <a href="contractor/contractorsignup.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        
    </div>
</div>


    <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: #00FF00"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-phone"></span> +254 719 673 694</p>
                <p><span class="glyphicon glyphicon-envelope"></span> info@jojale.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->

</div> <!-- sub content -->
<!-- <div class="page-header" style="background: #f4511e"></div> -->
 </div> <!-- Container --> 
<!-- Set height and width with CSS -->
<!--<div id="googleMap" style="height:400px;width:100%;"></div> -->

<!-- Add Google Maps -->
<!--<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(11.2680519,75.7891479);

    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

 //   google.maps.event.addDomListener(window, 'load', initialize);
</script> -->
<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Jojale</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
