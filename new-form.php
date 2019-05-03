<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Autoparts Wolf  | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <link href="css2/custom.css" rel="stylesheet">
    <link href="css2/animate.css" rel="stylesheet">
    
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">

    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

    <style type="text/css">
    .section1{
        position:relative;
        max-height: 30%;
        background-color: #EEE;
        
    }
    .container1{
        margin:auto;
        width:  250px;
        height: 0px;
        position:relative;
        -webkit-perspective: 1800px;
        z-index:999;    
    }
    #carousel{
        width: 80%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        animation: rotation 40s infinite linear;

    }
    #carousel:hover{
        animation-play-state: paused;
    }
    #carousel figure{
        display: block;
        position: absolute;
        width: 80%;
        height: 100%;
        left: -10px;
        right: -10px;

    }
    #carousel figure:nth-child(1) { -webkit-transform:  rotateY(0deg)  translateZ(700px);}
    #carousel figure:nth-child(2) { -webkit-transform: rotateY(40deg) translateZ(700px);}
    #carousel figure:nth-child(3) { -webkit-transform: rotateY(80deg) translateZ(700px);}
    #carousel figure:nth-child(4) { -webkit-transform: rotateY(120deg) translateZ(700px);}
    #carousel figure:nth-child(5) { -webkit-transform: rotateY(160deg) translateZ(700px);}
    #carousel figure:nth-child(6) { -webkit-transform: rotateY(200deg) translateZ(700px);}
    #carousel figure:nth-child(7) { -webkit-transform: rotateY(240deg) translateZ(700px);}
    #carousel figure:nth-child(8) { -webkit-transform: rotateY(280deg) translateZ(700px);}
    #carousel figure:nth-child(9) { -webkit-transform: rotateY(320deg) translateZ(700px);}

    .img1{
        cursor: pointer;
        transition: all .2s linear;
        width: 100%;
    }
    .img1:hover{
      transform: scale(1.2,1.2);
    }

    @keyframes rotation{
        from{
            transform: rotateY(360deg);
        }
        to{
            transform: rotateY(0deg);
        }
    }
    input[type="text"]::placeholder {  
                  
                /* Firefox, Chrome, Opera */ 
                text-align: center; 
            }
    </style>
</head>

<body >
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
    <?php include_once 'includes/header.php'?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <!-- Hero Social Btn -->
        <canvas id="effect-js"></canvas><h1 style="text-align: center; color:#f3f3f3; margin-top:-52px; font-family:'Orbitron',cursive; font-size: 30px">“Our Motto; <span style="color:white;">Right Part</span> at the <span style="color:white;">Right Price</span>, every time for everyone”</h1> 
        <div class="glowing"> <button class="btn btn1"> Call Now : 1-888-892-9092</button></div>
        <div id="particles-js"></div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <div class="hero-search-form" style="margin-top: -160px;">
                                <!-- Tabs -->
                                <div class="nav nav-tabs" id="heroTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Choose type</a>
                                </div>
                                <!-- Tabs Content -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                        <center>
                                            <form action="final.php" method="get">
                                                <ul>
                                                    <li>
                                                <select name="body_style" id="body_style" class="custom-select" required>
                                                            <option disabled selected value="" >Select Body Style</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[0]!=NULL) echo "<option value=\"".$data[0]."\">".$data[0]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select>
                                                <select name="engine_liter" id="engine_liter" class="custom-select" required="">
                                                            <option disabled selected value="" >Select Engine Liter</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[1]!=NULL) echo "<option value=\"".$data[1]."\">".$data[1]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select>
                                               <select name="engine_size" id="engine_size" class="custom-select" required>
                                                            <option disabled selected value="" >Select Engine Size</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[2]!=NULL) echo "<option value=\"".$data[2]."\">".$data[2]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select>
                                                <select name="turbo_charge" id="turbo_charge" class="custom-select" required>
                                                            <option disabled selected value="" >Select Turbo Charge</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[3]!=NULL) echo "<option value=\"".$data[3]."\">".$data[3]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select></li><li>
                                                        <select name="transmission_type" id="transmission_type" class="custom-select" required>
                                                            <option disabled selected value="" >Select Transmission Type</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[4]!=NULL) echo "<option value=\"".$data[4]."\">".$data[4]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select>
                                                        <select name="fuel_type" id="fuel_type" class="custom-select" required>
                                                            <option disabled selected value="" >Select Fuel Type</option>
                                                            <?php
                                                                // include_once "includes/database.php";
                                                                if (($handle = fopen("partstype.csv", "r")) !== FALSE) {
                                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                                        if($data[5]!=NULL) echo "<option value=\"".$data[5]."\">".$data[5]."</option>";
                                                                    }
                                                                    fclose($handle);
                                                                }
                                                            ?>
                                                        </select>
                                                        <input type="hidden" name="maker" id="maker" value="<?php echo $_GET['maker']; ?>">
                                                        <input type="hidden" name="model" id="model" value="<?php echo $_GET['model']; ?>">
                                                        <input type="hidden" name="part" id="part" value="<?php echo $_GET['part']; ?>">
                                                        <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
                                                        <input class="text_box" size="25" class="custom-select" name="" style="height: 52px; border-radius: 5px; margin-top: 10px; margin-right: 10px; color: #72728c; font-size: 12px; font-weight: 600;" class="custom-select" placeholder="VIN Number (optional)" type="text"></li><li>
                                                        <input class="text_box" size="25" class="custom-select"  style="height: 52px; border-radius: 5px; margin-top: 10px; margin-right: 10px; color: #72728c; font-size: 12px; font-weight: 600;" name="" placeholder="Message (optional)" type="text">
                                                <button type="submit" class="btn dorne-btn" style="    margin-top: 10px;"><i></i> Get Quote</button></li></ul>
                                            </form>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>AUTO PARTS WOLF FAMILY<br>WARMLY WELCOMES YOU<br>TO<br><span>Our Store</span></h2>
                        <div class="content" style="color: black; font-size: 25px">
                        <p style="color: black;">Your search for high quality used OEM automotive parts and accessories ends here. For a couple of years we have catered to the needs of hundreds of customers across the length and breadth of America, working unceasingly together with our team of suppliers spread across North America stopping at nothing until our each and every customer has got the right part. Our aim is to find you the correct part at the correct price, within a close proximity of your Residential or Business Address. We can assist you in locating those hard-to-find parts. We ship your order directly to your designated address so that you can get back onto the road as quickly as possible.</p>                      
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
   <!--  <section class="dorne-editors-pick-area bg-img bg-overlay-9-services section-padding-100" style="background-image: url(img/services.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>SERVICES</h4>
                        <p>Millions of Quality Used OEM Parts</p>
                    </div>
                </div>
            </div>  
           <div class="row">
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext  ">
                        <div class="rounddivtexth1">Competitive Prices<br>to suit your budget</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext ">
                        <div class="rounddivtexth1">Thousands of Late Model Parts<br>Vehicles in Stock</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext">
                        <div class="rounddivtexth1">Environmentally Green<br>Conscious Recycling</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext">
                        <div class="rounddivtexth1">Quality used parts<br>from prequalified Junkyards</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext">
                        <div class="rounddivtexth1">You get to choose<br>the price and Warranty</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 at wow fadeInLeft text-center">
                    <div class="col-12 rounddiv rounddivtext">
                        <div class="rounddivtexth1">We connect you with dealers<br>and junkyards all over America.</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Products Area Start ***** -->
     <!-- <section class="dorne-features-restaurant-area bg-default">
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
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <a href="parts.php?part=Engine"><img src="images/parts/Engine.png" alt="Engine" />
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Engine</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                       <a href="parts.php?part=Transmission"> <img src="images/parts/Transmission.png" alt="Transmission" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Transmission</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <a href="parts.php?part=ECM or ECU Engine"><img src="images/parts/ECM or ECU Engine.png" alt="Electronic-Control-Module" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">ECM/ECU Engine</div>                    
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                       <a href="parts.php?part=Temperature Control Module"><img src="images/parts/Temperature Control Module.png" alt="Temperature-Control-Module" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Temperature Control Module</div>                    
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <a href="parts.php?part=Front Bumper"><img src="images/parts/Front Bumper.png" alt="Front-Bumper" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Front Bumper</div>                 
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                        <a href="parts.php?part=Front End Assembly"><img src="images/parts/Front End Assembly.png" alt="Front-End-Assembly" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Front End Assembly</div>                   
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                    <a href="parts.php?part=Axle Shaft"><img src="images/parts/Axle Shaft.png" alt="Axle-Shaft" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Axle Shaft</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                         
                        <div>
                            <div class="col-md-12 col-sm-12 pdtdiv cursor">
                                <div class="popularpdt">
                                    <div class="popularpdt-image">
                                      <a href="parts.php?part=Strut">  <img src="images/parts/Strut.png" alt=" Strut" /></a>
                                    </div>
                                    <div class="popularpdt-content">
                                        <div class="pdtname">Strut</div>                  
                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                  
                  </div>
              </div>
                
            </div>
        </div>
    </section> -->
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <!-- <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2><br><span><i>“Your search for used Auto Part ends here!!”</i></span></h2> -->
                                    <!-- <h3 style="color:blue;">Welcome</h3> -->
                                        <!-- <div class="content" style="color: black; font-size: 25px">
                        <p style="color: white;">Auto Parts Wolf is aimed at being your one-stop destination for quality used OEM parts. We are connected with hundreds of Junkyards who have a huge selection of used OEM Parts and Accessories at the best prices. If you need to repair your vehicle, do it right the first time with OEM parts and accessories salvaged by professionals. 
                        <br><br>
                        We as a company are all about helping you get the most enjoyment and convenience possible out of your vehicle by connecting you with the right seller.
                        </p>
                       </div>
                </div>
                <div class="about-content text-center">
                        <h2><br><span><i>“Our Motto; Right Part at the Right Price, every time for everyone”</i></span></h2>
                                        <div class="content" style="color: black; font-size: 25px">
                        <p style="color: white;">The disadvantage of the traditional method of visiting a junkyard to find your part is; you might spend gallons of fuel visiting Junk yards but end up without getting the right part, your time is wasted, dollars are wasted and most importantly precious fuel is wasted.    
                        <br><br>
                        Everyday our team works hard searching through our vast network of Junkyards and Dealers to offer you the best salvaged OEM part at the best possible price.
                        </p>
                       </div>

            </div> -->
<!-- 
            <div class="row">
                <div class="col-md-6"> -->
                    <!-- Testimonial Slider from Baamboo Studio modified for The Mentor Group (http://www.mentor-group.com/clients--testimonials.html) -->

                    <!-- TestimonialS Slider - Free Weebly Widget by Baamboo Studio - Style 2 -->
                    <!-- <div class="testimonial_slider_2">
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
                                       <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
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

                                        <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
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
                                       <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
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
                                       <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
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
        </div>-->
    </section> 
    <!-- ***** Features Events Area End ***** -->
    <!-- ***** Clients Area Start ***** -->
    <!--<section class="partnersdiv">
        <div class="container-fluid">
            <div class="row"> -->         
            <section class="section1">
                	<div class="container1">
        <div class="carousel">         
            <figure><img class="img1" src="images/maker/acura.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/alfa-romeo.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/Allard.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/Alpina.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/amc.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/Ariel.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/Aston-martin.png" alt=""></figure>
            <figure><img class="img1" src="images/maker/audi.webp" alt=""></figure>
            <figure><img class="img1" src="images/maker/austin.png" alt=""></figure>
        </div>       
    </div>
                   <!--<div class="regular slider">

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
                   </div>-->
                </div>
            <!--</div>
        </div>-->
    </section> 
    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <?php include_once 'includes/footer.php'; ?>
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script></pre>
</body>
</html>