<!DOCTYPE html>
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
                            <a href="#">REGISTER</a>
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
        <section class="register">
            <h1>Registeration Form</h1>
            <form action="registration.php" method="post">
                <div>
                    <label for="username">USER Name : </label>
                    <input type="text" name="username" required>


                </div>
                <div>
                    <label for="email">Email : </label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password : </label>
                    <input type="password" name="password1" required>
                </div>
                <div>
                    <label for="password">Confirm Password : </label>
                    <input type="password" name="password2" required>
                </div>
                <button type="submit" name="reg_user">Submit</button>
                <p> Already a User<a href="login.php"><b>Login</b></a></p>
            </form>
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