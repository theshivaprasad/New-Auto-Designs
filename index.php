<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dorne - Directory &amp; Listing Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">
            <link href="css2/custom.css" rel="stylesheet">
<link href="css2/animate.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

    <script type="text/javascript">
        function myFunction(e) {
                var xmlhttp = new XMLHttpRequest();
                if (e.currentTarget.id == "maker") {
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("model").innerHTML = this.responseText;
                        }
                    };
                } else if (e.currentTarget.id == "model") {
                  xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("part").innerHTML = this.responseText;
                        }
                    };
                } else if (e.currentTarget.id == "part")  {
                  xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("year").innerHTML = this.responseText;
                        }
                    };
                }
                  if (e.currentTarget.id == "maker")
                    xmlhttp.open("GET", "show.php?maker=" + e.target.value, true);
                  else if (e.currentTarget.id == "model") 
                    xmlhttp.open("GET", "show.php?model=" + e.target.value, true);
                  else if (e.currentTarget.id == "part") 
                    xmlhttp.open("GET", "show.php?part=" + e.target.value, true);
                  xmlhttp.send();
            }
    </script>

</head>

<body>
    <!-- Preloader -->


    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area main" id="header">
        <div class="wrapper">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aboutus.html">About Us</a>
                                </li>
                                           <li class="nav-item">
                                    <a class="nav-link" href="partslist.php">Part List</a>
                                </li>
                                           <li class="nav-item">
                                    <a class="nav-link" href="partsrequest.html">Part Request</a>
                                </li>
                                           <li class="nav-item">
                                    <a class="nav-link" href="resources.html">Resources</a>
                                </li>
                                           <li class="nav-item">
                                    <a class="nav-link" href="customerservice.html">Customer Service</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">Free Quote $</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>

    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        
        <!-- Hero Social Btn -->

                <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">

                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Find a Part Now</a>
                            
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <center>
                                <form action="#" method="get">
                                    <select id="maker" class="custom-select" oninput="myFunction(event)">
                                        <option disabled selected>Select Maker</option>
                                       <?php
                                          include_once "includes/database.php";

                                          $sql="SELECT maker_name FROM tbl_car_maker ORDER BY maker_name";
                                          $result=$conn->query($sql);
                                          while ($row=$result->fetch_assoc()) {
                                            echo "<option value=\"".$row['maker_name']."\">".$row['maker_name']."</option>";
                                          }
                                        ?>
                                    </select>
                                    <select id="model" class="custom-select" oninput="myFunction(event)">
                                        <option disabled selected>Select Model</option>
                                    </select>
                                    <select id="part" class="custom-select" oninput="myFunction(event)">
                                        <option disabled selected>Select Part</option>
                                    </select>
                                     <select id="year" class="custom-select" >
                                        <option disabled selected>Select Year</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i></i> Get Quote</button>
                                </form>
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            <canvas id="effect-js"></canvas>
         <div id="particles-js"></div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
   
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Welcome To <br><span>Our Store</span></h2>
                                        <div class="content" style="color: black; font-size: 25px">
                        <p style="color: black;">Auto Parts is your one-stop shop for replacement high quality used OEM automotive parts and accessories. Since 2002 we have served hundreds of thousands of customers across the world, working hand in hand to find high quality parts for your vehicle.We are headquartered in Chicago, IL, with suppliers across North America. Our goal is to find you the correct part at an inexpensive price, close to your home or business. We can help you locate those hard-to-find parts. We ship your order directly to your home, business or to your mechanic to help you get back onto the road as rapidly as possible.</p>
                      
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>SERVICES</h4>
                        <p>Millions of Quality used OEM Parts</p>
                    </div>
                </div>
            </div>
<center>
           <div class="row">
                <div class="col-md-6 col-sm-12 at wow fadeInLeft">
                    <div class="col-8 rounddiv rounddivtext float-left">
                        <div class="rounddivtexth1">Quick Quotes that save you money</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft">
                    <div class="col-8 rounddiv rounddivtext float-left">
                        <div class="rounddivtexth1">Save over 50% off dealer prices</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft">
                    <div class="col-8 rounddiv rounddivtext float-left">
                        <div class="rounddivtexth1">Fast delivery to your home or mechanic</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft">
                    <div class="col-8 rounddiv rounddivtext float-left">
                        <div class="rounddivtexth1">home or mechanic We service all major makes</div>
                    </div>
                </div>
            </div>
        </center>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Destinations Area Start ***** -->
    <!-- ***** Features Destinations Area End ***** -->

    <!-- ***** Features Restaurant Area Start ***** -->
    <section class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Products</h4>
                        <p>Most Popular..!!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="responsive slider">
                        
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Side-View-Mirror')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/side-view-mirror.png" alt="Side View Mirror" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Side View Mirror Doors</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Transmission')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/transmission.png" alt="Transmission" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Transmission/Transaxle Assembly</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Head-Light')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/head-light.png" alt="Head Light" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Headlamp Assembly</div>                    
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Tail-Light')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/tail-light.png" alt="Tail Light" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Tail Lamp</div>                    
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('ABS-System')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/abs-system.png" alt="ABS System" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Anti Lock Brake Parts Brakes</div>                 
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Engine')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/engine.png" alt="Engine" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Engine Assembly Engine</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Steering-Column')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/steering-column.png" alt="Steering Column" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Steering Column</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Electronic-Control-Module')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/electronic-control-module.png" alt="Electronic Control Module" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Electronic Engine Control Module Electronic Modules</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Spindle-Knuckle-Front')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/spindle-knuckle-front.png" alt="Spindle Knuckle Front" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Spindle/Knuckle - Front</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Rear-Drive-Shaft')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/rear-drive-shaft.png" alt="Rear Drive Shaft" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Drive Shaft - Rear Axle</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Speedometer-Cluster')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/speedometer-cluster.png" alt="Speedometer Cluster" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Speedometer Head /Cluster Cowl</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Wheel')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/wheel.png" alt="Wheel" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Wheel Wheel Manual</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Temperature-Control-Module')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/temperature-control-module.png" alt="Temperature Control Module" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Temperature Control Cowl</div>                 
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Cylinder-Head')" >
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <img src="img/parts/cylinder-head.png" alt="Cylinder Head" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Cylinder Head Engine</div>                 
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         

                  </div>
              </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Testimonial Slider from Baamboo Studio modified for The Mentor Group (http://www.mentor-group.com/clients--testimonials.html) -->

                    <!-- TestimonialS Slider - Free Weebly Widget by Baamboo Studio - Style 2 -->
                    <div class="testimonial_slider_2">
                        <input type="radio" name="slider_2" id="slide_2_1" checked />
                        <input type="radio" name="slider_2" id="slide_2_2" />
                        <input type="radio" name="slider_2" id="slide_2_3" />
                        <input type="radio" name="slider_2" id="slide_2_4" />
                        <div class="boo_inner clearfix">
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                       <div class="section-heading text-center">
                        <span></span>
                        <h4>Client Testimonials</h4>
                        <p>Editor’s pick</p>
                    </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3 class="text-red">Daniel Frank, Seo Master</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <div class="section-heading text-center">
                        <span></span>
                        <h4>Client Testimonials</h4>
                        <p>Editor’s pick</p>
                    </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3 class="text-red">Leah Jordan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <div class="section-heading text-center">
                        <span></span>
                        <h4>Client Testimonials</h4>
                        <p>Editor’s pick</p>
                    </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3 class="text-red">Brian McNaught</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <div class="section-heading text-center">
                        <span></span>
                        <h4>Client Testimonials</h4>
                        <p>Editor’s pick</p>
                    </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3 class="text-red">Lee Barker</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls">
                            <label for="slide_2_1"></label>
                            <label for="slide_2_2"></label>
                            <label for="slide_2_3"></label>
                            <label for="slide_2_4"></label>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Some of our Clients</h4>
                        <p>Editor’s pick</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-4"><img src="img/client-logo-1.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="img/client-logo-2.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="img/client-logo-3.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="img/client-logo-6.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="img/client-logo-4.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="img/client-logo-5.jpg" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
   <section class="partnersdiv">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="regular slider">
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/acura.jpg" alt="ACURA" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/alfa-romeo.png" alt="ALFA-ROMEO" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/AMC.jpg" alt="AMC" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/audi.png" alt="AUDI" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/BMW.png" alt="BMW" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/British-Leyland.png" alt="BRITISH-LEYLAND" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/Cooper.png" alt="COOPER" />
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 infooter">
                    <h4>Part Request</h4>
                    <ul>
                        <li><a href="partrequest.html">Find A Part</a></li>
                        <li><a href="carsearchmakes/car-make.html">Search By Car Make</a></li>
                        <li><a href="carsearchmakes/part-type.html">Search By Part Type</a></li>
                        <li><a href="sitemap.html">Sitemap  </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 infooter">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="customerservice.html">Submit A Ticket</a></li>
                        <li><a href="warranty.html">Warranty Policy</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 infooter">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="resources.html">Articles</a></li>
                        <li><a href="reviews.html">Testimonials</a></li>
                        <li><a href="importantlinks.html">Important Links</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 infooter">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="aboutus.html">Why AP?</a></li>
                        <li><a href="privacypolicy.html">Privacy Policy</a></li>
                        <li><a href="termsandconditions.html">Terms and Conditions</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>


  
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
        <script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script></pre>
        <script type="text/javascript">
            new WOW().init();
            $(document).ready(function() {
                
                $(".regular").slick({
                    dots: false,
                    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left"></i></button>',
                    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fa fa-chevron-right"></i></button>',
                    speed: 300,
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                     responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 5,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
                });
                $('.responsive').slick({
                  dots: false,
                  infinite: true,
                  speed: 300,
                  autoplay: true,
                  arrows:false,
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
                });
            });  
        </script>


</body>

</html>