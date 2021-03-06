<?php
session_start();
if(isset($_SESSION['username']))
{
	$_SESSION['msg'] = " You must login in first to view the page";
	header("location : login.php");
}
if(isset($_GET['logout']))
{
	session_decode();
	unset($_SESSION['username']);
	header("location : login.php");
}
?>
<html>
    <head class="head">
       
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width intial scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
       
    </head>
    <body class="body">

        <title>Travel Where ever!!</title>

        <section class="header">
            <div class='container'>
               
                <div class ='navbar navbar-expand-sm navbar-light bg-light' style="background: gray;">
                  
                    
                <div class="collapse navbar-collapse" id='mynav'>
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive;padding: 40px;">
                        <li class="nav-item" style="background-color:gray">
                            <a href="#"> HOME </a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:wheat">
                            <a href="Registration.php">REGISTER</a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:mediumspringgreen">
                            <a href="login.php">LOGIN</a>
                        </li>
                    </ul> 
                    
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:aqua">
                            <a href="gallery.html">Gallery</a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:tomato">
                            <a href="cart.html">Reviews</a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:yellow">
                            <a href="about.html">ABOUT</a>
                        </li>
                    </ul> 
                    
                    <ul class="navbar-nav text-center" style="font-family: 'Permanent Marker', cursive; padding: 40px;">
                        <li class="nav-item" style="background-color:mediumvioletred">
                            <a href="contactus.html">CONTACT US </a>
                        </li>
                    </ul> 
                    
                </div>
                </div>
            </div>
            <div class="container">
                
                <h1>Travel Where Ever !!</h1>
              </div>
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search a place.....">
                 <div class="input-group-append">
                  <button type="submit" class="input-group-text btn">
                      Search
                  </button>
              </div>
             </div>
           
        </section>
        <section class="features">
            <h1 style="text-align: center;"> Famous cities</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                                <img src= "Travel.jpg">
                                <div class="price">
                                    <p>90K</p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="feature-details">
                                <h4>INDIA</h4>
                                <p><b>
                                    India, our country is a huge and beautiful land full of wonders. From the Himalayas to the Indian Ocean, Desert of Thar in the snowy mountains of Sikkim, it is a country full of beautiful landscapes and beautiful people.
                                     India is a unique country with diversity. "Unity is diversity" is the main slogan of the country.
                                </b></p>
                                <div class="de">
                                    <span>
                                        <i class="fa fa-map-marker" style="color:blue;"></i>
                                        India
                                    </span>
                                    <span>
                                        
                                        <i class="fa fa-sun-o" style="color:orange"></i>4 days
                                    </span>
                                    <span>
                                        <i class="fa fa-moon-o" style="color:violet"></i>
                                        3 Nights
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                                <img src= "Travel.jpg">
                                <div class="price">
                                    <p>85K</p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="feature-details">
                                <h4>Paris</h4>
                                <p><b>
                                    Paris, Frances capital, is a major European city and a global 
                                    center for art, fashion, gastronomy and culture. Its 19th-century cityscape 
                                    is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as
                                     the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral
                                </b></p>
                                <div class="de">
                                    <span>
                                        <i class="fa fa-map-marker" style="color:blue;"></i>
                                        Paris
                                    </span>
                                    <span>
                                        
                                        <i class="fa fa-sun-o" style="color:orange"></i>4 days
                                    </span>
                                    <span>
                                        <i class="fa fa-moon-o" style="color:violet"></i>
                                        3 Nights
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                                <img src= "Travel.jpg">
                                <div class="price">
                                    <p>80K</p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="feature-details">
                                <h4>Russia</h4>
                                <p><b>
                                    Russia, or the Russian Federation, is a transcontinental country spanning Eastern Europe and Northern Asia. It covers over 17,125,191 square kilometres, consists of more than one-eighth of the Earths 
                                    inhabited land area, extends to eleven time zones, and has borders with sixteen sovereign nations
                                </b></p>
                                <div class="de">
                                    <span>
                                        <i class="fa fa-map-marker" style="color:blue;"></i>
                                        Russia
                                    </span>
                                    <span>
                                        
                                        <i class="fa fa-sun-o" style="color:orange"></i>4 days
                                    </span>
                                    <span>
                                        <i class="fa fa-moon-o" style="color:violet"></i>
                                        3 Nights
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </section>
        <section class="gallery">
            <h1 style="text-align: center ;">
                Travelling gallery
            </h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="Travel.jpg">
                        <h4>India</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="Travel5.jpg">
                        <h4>Paris</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="Travel6.jpg">
                        <h4>Russia</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="banner">
            <img src="Travel4.jpg">
            <section class="banner-highlight">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>GET 30% ON 1ST TOUR</h2>
                            <P>TRAVEL WHERE EVER NEEDDED TO TRAVEL ON OR BEFORE 21 JUNE</P>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="booking-btn">
                                BOOK NOW
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="users-feedback">
            <h1 style="text-align: center;">  Reviews</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>
                                Paris, Frances capital, is a major European city and a global 
                                center for art, fashion, gastronomy and culture. Its 19th-century cityscape 
                                is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as
                                 the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral
                            </p>
                            <h5>Anjum</h5>
                            <small>India</small>
                        </div>
                        <img src="Travel3.jpg">
                    </div>
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>
                                Paris, Frances capital, is a major European city and a global 
                                center for art, fashion, gastronomy and culture. Its 19th-century cityscape 
                                is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as
                                 the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral
                            </p>
                            <h5>Sai Pranav</h5>
                            <small>India</small>
                        </div>
                        <img src="Travel3.jpg">
                        
                    </div>
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>
                                Paris, Frances capital, is a major European city and a global 
                                center for art, fashion, gastronomy and culture. Its 19th-century cityscape 
                                is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as
                                 the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral
                            </p>
                            <h5>Nani</h5>
                            <small>India</small>
                        </div>
                        <img src="Travel3.jpg">
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="Travel5.jpg" class="footer-logo">
                        <p> India is the seventh-largest country and most populous democracy in the world. It is located in South Asia and was officially declared as the Republic of India ...
                        </p>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>

        </section>
    </body>
</html>

