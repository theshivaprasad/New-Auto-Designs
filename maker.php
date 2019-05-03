<?php
    include_once "includes/database.php";
    
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
  if (isset($_GET["year"])) {
    if (!empty($_GET["year"])) {
      header("Location: final.php?year=".$_GET["year"]."&maker=".$_GET["maker"]."&model=".$_GET["model"]."&part=".$_GET["part"]." ");
    }
  }
  if (isset($_GET["maker"])) {

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
    <title>Autoparts Wolf | Parts List</title>

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
                    xmlhttp.open("GET", "show.php?part=" + e.target.value + "&model=" + document.getElementById("model").value, true);
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
    <?php include_once 'includes/header.php'?>
    <!-- ***** Header Area End ***** --> 

    <!-- flag102 -->

      <section class="pagebanner layer-overlay overlay-dark-5" style="background-image: url(images/cars/AMC-Rebel.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="invisible" style="height:70px">height</div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 pagebannerh1">
                    <h1>USED
                        <?php echo $_GET['maker']; ?> OEM PARTS
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- Explore Area -->
    <!-- <section class="dorne-explore-area d-md-flex"> -->
        <!-- Explore Search Area -->
        <div class="explore-search-area d-md-flex">
            <!-- Explore Search Form -->
            
            <!-- Explore Search Result -->
            <div class="explore-search-result">
              <section class=" mt-5 mb-5">
        <div class="container">
            <div class="row">
                
                <!-- flag101 -->

                <div class="col-md-12 col-sm-12">
                    <div class="reelative"><h2 class="subtitle"><?php echo $_GET['maker']." Used OEM Parts - Buy Quality Parts for ".$_GET['maker']; ?></h2></div>
                    <div class="makecontent">
                        <div class="subbannerproduct cstbanner2">
                            <?php
                            if(isset($_GET["part"])&&glob("images/parts/".$_GET["part"].".png")) {
                                echo "<img src=\"images/parts/".$_GET["part"].".png\">";
                                if(glob("images/parts/".$_GET["part"].".txt")){
                                    echo "<p>";
                                    $fh = fopen("images/parts/".$_GET["part"].".txt",'r');
                                      while (! feof($fh)) {
                                        $s = fgets($fh);
                                        if (("\n" == $s) || ("\r\n" == $s)) {
                                            echo "<br><br>";
                                        }
                                        echo "$s";
                                      }
                                    echo "</p>";
                                    fclose($fh);
                                }
                            } else if(isset($_GET["model"])&&glob("images/model/".strtolower($_GET["model"]).".png")) {
                                echo "<img src=\"images/model/".strtolower($_GET["model"]).".png\">";
                                if(glob("images/model/".strtolower($_GET["model"]).".txt")){
                                    echo "<p>";
                                    $fh = fopen("images/model/".strtolower($_GET["model"]).".txt",'r');
                                      while (!feof($fh)) {
                                        $s = fgets($fh);
                                        if (("\n" == $s) || ("\r\n" == $s)) {
                                            echo "<br><br>";
                                        }
                                        echo "$s";
                                      }
                                    echo "</p>";
                                    fclose($fh);
                                }
                            } 
                            else if (glob("images/maker/".strtolower($_GET["maker"]).".png")&&!isset($_GET["model"])&&!isset($_GET["part"])) {
                                echo "<img src=\"images/maker/".strtolower($_GET["maker"]).".png\">";
                                if(glob("images/maker/".strtolower($_GET["maker"]).".txt")){
                                    echo "<p>";
                                    $fh = fopen("images/maker/".strtolower($_GET["maker"]).".txt",'r');
                                      while (! feof($fh)) {
                                        $s = fgets($fh);
                                        if (("\n" == $s) || ("\r\n" == $s)) {
                                            echo "<br><br>";
                                        }
                                        echo "$s";
                                      }
                                    echo "</p>";
                                    fclose($fh);
                                }
                            } else  { echo "No Image"; }
                            ?>
                        </div>
                    </div>
                </div>



                
                <div class="col-md-12 col-sm-12">

                    <div class="reelative"style="margin-top: 500px"><div class="subtitle"><p><?php if(!isset($_GET["model"])&&isset($_GET["maker"])){
                     echo "Popular ".$_GET['maker']." Used Parts - Auto Parts - Buy Quality Parts for a ".$_GET['maker']." Model"; ?></p></div></div>
                
                    <div class="make-listpart">
                        <ul>
                            <?php
                              $sql="SELECT model_name as model FROM tbl_car_model WHERE maker_id=\"".extractId($conn,'maker',$_GET['maker'])."\"";
                              $result=$conn->query($sql);
                              $numOfRowElements=0;
                              while ($row=$result->fetch_assoc()) {
                                echo "<li><a href=\"maker.php?maker=".$_GET["maker"]."&model=".$row["model"]."\">".$row["model"]."</a></li>";
                                 }
                               } 
                            ?>
                        </ul>
                    </div>
                

                <!--#partshidetrow-->

                <div class="col-md-12 col-sm-12">
                    <div class="reelative" ><div class="subtitle"><?php if (!isset($_GET["part"])) {
                     echo "Popular ".$_GET['maker']." Used Parts - Auto Parts";?></div></div>
                    <div class="col-md-12 col-sm-12" style="color: black;">
                    <div class="listdivpart">
                        <ul style="color: #000000;">


 <?php
                              $sql="SELECT model_name FROM tbl_temp_make_model WHERE maker_name='".$_GET['maker']."'";
                              $result=$conn->query($sql);
                              while ($row=$result->fetch_assoc()) {
                                //if (glob('images/parts/'.strtolower($row["img"]).'.png')) {
                                echo "<li><a href=\"index.php?maker=".$_GET['maker']." ".$row["model_name"]."\"  title=\"".$row["model_name"]."\">".$_GET['maker']." ".$row["model_name"]."</a></li>";
                                //}
                               } 
                            ?></ul>
                        </div></div>
                    </div>

                </div>

                                   <div> <p style="font-weight: bold; margin-left: 34px; margin-top: 34px;">Search by Part Type</p></div>

                <div class="col-md-12 col-sm-12" style="color: black; margin-left: 30px;">
                    <div class="reelative" ></div>
                    <div class="listdivpart">
                        <ul style="color: #000000;">
                        

                        <?php
                              $sql="SELECT part_name_ui as part, part_name_ui as img FROM tbl_car_part_new ORDER BY part_name_ui ASC";
                              $result=$conn->query($sql);
                              while ($row=$result->fetch_assoc()) {
                                //if (glob('images/parts/'.strtolower($row["img"]).'.png')) {
                                echo "<li><a href=\"parts.php?part=" .$row["part"]."\"  title=\"".$row["part"]."\">Used OEM ".$row["part"]."</a></li>";
                                //}
                               } 
                            ?>
                        </ul>
                    </div>
                </div>  
            <!-- </div> -->
  






                        <ul>
                           <?php 
                                $sql="SELECT DISTINCT p.part_name as part FROM tbl_car_maker m, tbl_car_model mo, tbl_inventory i, tbl_car_part p WHERE m.maker_id=\"".extractId($conn,'maker',$_GET['maker'])."\" AND mo.model_id=i.model_id AND i.part_id=p.part_id ORDER BY p.part_name";
                                $result=$conn->query($sql);
                                while ($row=$result->fetch_assoc()) {
                                    if(isset($_GET['model'])) {
                                        echo "<li><a href=\"maker.php?maker=".$_GET["maker"]."&model=".$_GET["model"]."&part=".$row["part"]."\">".$row["part"]."</a></li>";
                                    } else {
                                        echo "<li><a href=\"maker.php?maker=".$_GET["maker"]."&part=".$row["part"]."\">".$row["part"]."</a></li>";
                                    }
                                 }
                                } 
                            ?>
                        </ul>
                    </div>
                </div>
                <!--partshidetrow#-->
            </div>
        </div>
    </section>  <!-- Single Features Area -->

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
                   <!--  <div class="testimonial_slider_2">
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
        </div> -->
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
                                <img src="img/partnerslogos/Ford-logo.png" alt="FORD" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/Chevrolet-logo.png" alt="CHEVROLET" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/volkswagen-logo.jpeg" alt="VOLKSWAGON" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/Toyota-Logo.jpg" alt="TOYOTA" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/audi.png" alt="AUDI" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/dodge-logo.png" alt="DODGE" />
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <img src="img/partnerslogos/BMW.png" alt="BMW" />
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
<?php
  } else {
    header("Location: partslist.php");
  }
?>
