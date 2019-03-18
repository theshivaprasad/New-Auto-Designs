<?php
        function ifExists($conn, $inv_id, $year_id) {
        $sql = "SELECT opt_id FROM tbl_part_details WHERE inv_id=\"".$inv_id."\" AND year_id=\"".$year_id."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                return 1;
            }
            else {
                return 0;
            }
        }
    }

    function ifOptExists($conn, $inv_id, $opt_id, $year_id) {
        $sql = "SELECT opt_id FROM tbl_part_details WHERE inv_id=\"".$inv_id."\" AND opt_id=\"".$opt_id."\" AND year_id=\"".$year_id."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                return 1;
            }
            else {
                return 0;
            }
        }
    }

    function extractId($conn, $node, $item) {
        $sql = "SELECT ".$node."_id FROM tbl_car_".$node." WHERE ".$node."_name=\"".$item."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                $row = $result->fetch_assoc();
                return $row[$node.'_id'];
            }
            else {
                return 0;
            }
        }
    }

    function extractOptId($conn, $item) {
        $sql = "SELECT opt_id FROM tbl_part_options WHERE opt_name=\"".$item."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                $row = $result->fetch_assoc();
                return $row['opt_id'];
            }
            else {
                return 0;
            }
        }
    }

    function extractYearId($conn, $item) {
        $sql = "SELECT year_id FROM tbl_year WHERE year=\"".$item."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                $row = $result->fetch_assoc();
                return $row['year_id'];
            }
            else {
                return 0;
            }
        }
    }

    function checkInventory($conn, $part_id, $model_id) {
        $sql = "SELECT inv_id FROM tbl_inventory WHERE part_id=\"".$part_id."\" AND model_id=\"".$model_id."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                return 1;
            }
            else {
                return 0;
            }
        }
    }

    function extractInvId($conn, $part_id, $model_id) {
        $sql = "SELECT inv_id FROM tbl_inventory WHERE part_id=\"".$part_id."\" AND model_id=\"".$model_id."\"";
        $result = $conn->query($sql);
        if($result) {
            if (mysqli_num_rows($result)>0) {
                $row = $result->fetch_assoc();
                return $row['inv_id'];
            }
            else {
                return 0;
            }
        }
    }

?>

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
    <link rel="stylesheet" href="wm-zoom/jquery.wm-zoom-1.0.min.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

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
    <?php include_once 'includes/header.php'?>
    <!-- ***** Header Area End ***** -->

      <section class="pagebanner layer-overlay overlay-dark-5" style="background-image: url(images/cars/AMC-Rebel.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="invisible" style="height:70px">height</div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 pagebannerh1">
                    <div class="caption d-none d-md-block d-lg-block">
                            <center><h1 class='captionh5 text-black text-left'><strong>You have selected a <span class='text-red'><strong><?php echo $_GET['year']." ".$_GET['maker']." ".$_GET['model']." ".$_GET['part']; ?></strong></span> Complete the fields to get an Instant Quote </strong></h1></center>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- Explore Area -->
    <section class="dorne-explore-area d-md-flex">
        <!-- Explore Search Area -->
        <div class="explore-search-area d-md-flex">
            <!-- Explore Search Form -->
            <div class="explore-search-form">
                <h6>FIND THE PART NOW</h6>
                <!-- Tabs -->
                <!-- Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                        <!-- <form action="#" method="get">
                            <select class="custom-select" id="destinations">
                                 <option selected>Make</option>
                                <option value="1">AMC</option>
                                <option value="2">Acura</option>
                                <option value="3">Alfa-Romeo</option>
                                <option value="4">Audi</option>
                                <option value="5">BMW</option>
                            </select>
                            <select class="custom-select" id="catagories">
                                <option selected>Model</option>
                                <option value="1">Ambassador</option>
                                <option value="2">American</option>
                                <option value="3">Amx</option>
                                <option value="4">Classic</option>
                            </select>
                            <select class="custom-select" id="price-range">
                               <option selected>Part</option>
                                <option value="1">AC Compressor</option>
                                <option value="2">AC Condensor</option>
                                <option value="3">AC Evaporator</option>
                                <option value="4">Air Injection Pump</option>
                            </select>
                            <select class="custom-select" id="proximity">
                                <option selected>Year</option>
                                <option value="1">1974</option>
                                <option value="2">1973</option>
                                <option value="3">1972</option>
                                <option value="3">1971</option>
                                <option value="3">1970</option>
                            </select>
                        </form> -->

                            
            <div class="contact-form">
                <form action="finish.php">
                    <div class="row">
                            <?php
                                include_once "includes/database.php";

                                $inv_id = extractInvId($conn, extractId($conn, "part", $_GET['part']), extractId($conn, "model", $_GET['model']));
                                $year_id = extractYearId($conn, $_GET['year']);

                                if(ifExists($conn, $inv_id, $year_id)) {?>
                                    <div class="col-12">
                                        <select class="custom-select" id="opt1">
                                            <option disabled selected>Select Option</option>
                                        <?php
                                        $sql = "SELECT o.opt_name as opt FROM tbl_part_details p INNER JOIN tbl_part_options o ON p.opt_id = o.opt_id WHERE inv_id=\"".$inv_id."\" AND year_id=\"".$year_id."\"";
                                        $result = $conn->query($sql);
                                        while ($row=$result->fetch_assoc()) {
                                            echo "<option>".$row['opt']."</option>";
                                        }
                                }
                            ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                         <div class="col-12">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone">
                        </div>
                         <div class="col-12">
                            <input type="text" name="zip" class="form-control" placeholder="ZIP">
                        </div>
                        <input type="hidden" name="maker" id="qap_make" value=<?php echo "\"".$_GET["maker"]."\""?>>
                        <input type="hidden" name="model" id="qap_model" value=<?php echo "\"".$_GET["model"]."\""?>>
                        <input type="hidden" name="part" id="qap_part" value=<?php echo "\"".$_GET["part"]."\""?>>
                        <input type="hidden" name="qap_part_url" id="qap_part_url" value=''>
                        <input type="hidden" name="year" id="qap_year" value=<?php echo "\"".$_GET["year"]."\""?>>
                    </div>
            </div>
                            <button type="submit" class="btn dorne-btn mt-50 bg-white text-dark part2"><i class="fa fa-search pr-2" aria-hidden="true"></i>Get Quote</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Explore Search Result -->
            <div class="explore-search-result">
               
           <section class=" mt-5 mb-5">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 col-sm-12">

                    <div class="makecontent">
                        <p><u>Used AC condenser</u></p>
<p>AC condenser is an system used by cooling a substance gaseous liquid state. In this way, the latent heat is released from the substance and transferred to the environment around it. The condenser is occupied by heat transfer blades from outside to inside the unit through which cooling air can circulate. Condenser made up of copper is good when compared to aluminium.</p>
<p>Locate the AC Condenser online and improve your car's performance. </p>
<p>Air conditioning is an important part of vehicles that is responsible to maintain the cooling level. A car should have a proper ventilation system so that you can travel comfortably. It consists of several parts such as condenser, compressor and not to forget the accumulator. You should <b>buy used AC Condenser</b> as it is uses the refrigerant gas Freon and take in the water and other contaminants out of the AC system. If the AC system has stopped providing cool air, then you should definitely think of purchasing the <b>online AC Condenser. </b></p>
<p>You should examine the AC Condenser from time to time to identify the exact problem. Sometimes you feel warm air coming out from the AC as soon as you turn it on, it may happen due to the low level of refrigerant. The AC Condenser is placed between the grille and car radiator and generates a proper airflow whenever the vehicle is moving. The refrigerant travels through the path directly into the evaporator. Before placing the order for the used auto parts make sure to check the warranty statement.  </p>
<p>The OEM parts should be installed in case there is a leak in the refrigerant. You can find a variety of auto parts at the online store. You can also buy the salvage parts in bulk quantity and get them replaced or repaired free of cost. </p>
<p>Visit the online site of QAP to get the cost-effective used car parts</p>
<p>If you are looking for the used OEM parts for your vehicle, then QAP is the perfect platform for you. The site allows the customers to view the different car parts. Each car part sold online has the product description that allows the customers to learn more about the product dimensions and the kind of material used to manufacture it. All the auto parts can be installed in the car easily without any modifications. </p>
                </div>
 <div class="authimg">
                            <img src="img/auth.jpg" alt="Authorized" />
                        </div>
                <!--#partshidetrow-->
                <!--partshidetrow#-->
            </div>
        </div>
    </section> <!-- Single Features Area -->

            </div>
        </div>

        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
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
        <script type="text/javascript" src="assets/js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="wm-zoom/jquery.wm-zoom-1.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.my-zoom-1').WMZoom();
                $('.my-zoom-2').WMZoom({
                    config : {
                        inner : true
                    }
                });
            });
        </script>

  
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