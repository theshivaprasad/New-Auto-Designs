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
// if (isset($_GET["year"])) {
//     if (!empty($_GET["year"])) {
//       header("Location: final.php?year=".$_GET["year"]."&maker=".$_GET["maker"]."&model=".$_GET["model"]."&part=".$_GET["part"]." ");
//   }
// }

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
                    <form action="maker2.php" method="get">
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
    <section class="dorne-explore-area d-md-flex">
        <!-- Explore Search Area -->
        <div class="explore-search-area d-md-flex">
            <!-- Explore Search Form -->
            <div class="explore-search-form scroll">
                <h6>
                    <?php 
                        if(isset($_GET['maker'])) { 
                            echo "FIND THE PART FOR ".strtoupper($_GET['maker']); 
                        }
                        elseif (isset($_GET['maker_name'])) {
                            echo "FIND THE PART FOR ".strtoupper($_GET['maker_name']); 
                        }
                        elseif (isset($_GET['maker_model'])) {
                            echo "FIND THE PART FOR ".strtoupper($_GET['maker_model']);
                        }
                        else{
                            echo "FIND THE PART NOW";
                        }
                    ?>
                </h6>
                <!-- Tabs -->
                <!-- Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">

                        <?php
                            if (isset($_GET['maker']) || isset($_GET['maker_model']) || isset($_GET['part']) && !isset($_GET['year'])){
                        ?>

                        <form action="maker1.php" method="GET">
                           <select name="maker_name" class="custom-select" id="maker_name" required>
                                <option disabled selected value="">Select Model</option>
                                <?php
                                //$sql="SELECT model_name as model FROM tbl_car_model WHERE maker_id=\"".extractId($conn,'maker',$_GET["maker"])."\"";
                                
                                if(isset($_GET['maker_model'])){
                                    $sql = "SELECT CONCAT(maker_name, ' ', model_name) as maker_name FROM tbl_temp_make_model ORDER BY maker_name ASC";
                                }

                                elseif(isset($_GET['maker'])) {
                                    $sql = "SELECT CONCAT(maker_name, ' ', model_name) as maker_name FROM tbl_temp_make_model WHERE maker_name = \"".$_GET['maker']."\" ORDER BY maker_name ASC";
                                }
                                else{
                                    $sql = "SELECT CONCAT(maker_name, ' ', model_name) as maker_name FROM tbl_temp_make_model ORDER BY maker_name ASC";
                                }

                                $result=$conn->query($sql);
                                while ($row=$result->fetch_assoc()) {
                                  //   if ($row["model"]==$_GET["model"]) {
                                  //     echo "<option selected value=\"".$row['model']."\">".$row['model']."</option>";
                                  // } else {
                                    if(isset($_GET['maker_model'])){
                                        if($_GET['maker_model'] == $row['maker_name'] ){
                                            echo "<option value=\"".$row['maker_name']."\" selected>".$row['maker_name']."</option>";
                                            continue;
                                        }
                                    }
                                    echo "<option value=\"".$row['maker_name']."\">".$row['maker_name']."</option>";
                                    
                                  // }
                              }
                              ?>
                          </select>

                          <select name="part" class="custom-select" id="part" required>
                             <option disabled selected value="">Select Part</option>
                             <?php
                             include_once "includes/database.php";

                                                            // $sql="SELECT maker_name FROM tbl_car_maker ORDER BY maker_name";
                             $sql = "SELECT  part_name_ui FROM tbl_car_part_new ORDER BY part_name_ui ASC";
                             $result=$conn->query($sql);

                             while ($row=$result->fetch_assoc()) {
                                if(isset($_GET['part'])){
                                    if($_GET['part'] == $row['part_name_ui']){
                                        echo "<option value=\"".$row['part_name_ui']."\" selected>".$row['part_name_ui']."</option>";
                                        continue;
                                    }
                                }
                                echo "<option value=\"".$row['part_name_ui']."\">".$row['part_name_ui']."</option>";
                            }
                            ?>
                        </select>

                        <select name="year" class="custom-select" id="year" required>
                           <option disabled selected value="">Select Year</option>
                           <?php
                           for($year = 1970; $year <= 2019 ; $year++) {
                            echo "<option value=\"".$year."\">".$year."</option>";
                        }
                        ?>
                    </select>
                    <?php
                        }

                        if( isset($_GET['maker_name']) && isset($_GET['part']) && isset($_GET['year']) && !isset($_GET['body_style']) && !isset($_GET['engine_liter']) && !isset($_GET['transmission_type']) && !isset($_GET['turbo_charge']) && !isset($_GET['fuel_type']) && !isset($_GET['engine_size']) ){

                    ?>
                    <form action="maker1.php" method="GET">
                    <input type="hidden" name="maker_name" id="maker_name" value="<?php echo $_GET['maker_name']; ?>">
                    <input type="hidden" name="part" id="part" value="<?php echo $_GET['part']; ?>">
                    <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">


                    <select name="body_style" id="body_style" class="custom-select" required>
                        <option disabled selected value="">Select Body Style</option>
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


                    <select name="engine_liter" id="engine_liter"  class="custom-select" required>
                        <option disabled selected value="">Select Engine Liter</option>
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
                    </select>


                    <select name="fuel_type" id="fuel_type" class="custom-select" required>
                        <option disabled selected value="">Select Fuel Type</option>
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


                    <select name="engine_size" id="engine_size" class="custom-select" required>
                        <option disabled selected value="">Select Engine Size</option>
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


                    <select name="transmission_type" id="transmission_type" class="custom-select" required>
                        <option disabled selected value="">Select Transmission</option>
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
                    <input class="custom-select" size="25" name="vin_num" placeholder="VIN Number (optional)" type="text">

                    <input class="custom-select" size="25" name="message" placeholder="Message (optional)" type="text">

                    <?php
                        }

                        if( isset($_GET['maker_name']) && isset($_GET['part']) && isset($_GET['year']) && isset($_GET['body_style']) && isset($_GET['engine_liter']) && isset($_GET['transmission_type']) && isset($_GET['turbo_charge']) && isset($_GET['fuel_type']) && isset($_GET['engine_size']) && !isset($_GET['email']) && !isset($_GET['name'])){

                    ?>
                    <form action="finish.php" method="GET">
                    <input type="hidden" name="maker" id="maker" value="<?php echo $_GET['maker_name']; ?>">
                    <input type="hidden" name="part" id="part" value="<?php echo $_GET['part']; ?>">
                    <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
                    <input type="hidden" name="body_style" id="body_style" value="<?php echo $_GET['body_style']; ?>">
                    <input type="hidden" name="engine_liter" id="engine_liter" value="<?php echo $_GET['engine_liter']; ?>">
                    <input type="hidden" name="transmission_type" id="transmission_type" value="<?php echo $_GET['transmission_type']; ?>">
                    <input type="hidden" name="turbo_charge" id="turbo_charge" value="<?php echo $_GET['turbo_charge']; ?>">
                    <input type="hidden" name="fuel_type" id="fuel_type" value="<?php echo $_GET['fuel_type']; ?>">
                    <input type="hidden" name="engine_size" id="engine_size" value="<?php echo $_GET['engine_size']; ?>">

                    <?php
                        if (isset($_GET['vin_num'])){
                    ?>
                    <input type="hidden" name="vin_number" id="vin_number" value="<?php echo $_GET['vin_num']; ?>">

                    <?php
                        }

                        if (isset($_GET['message'])){
                    ?>
                    <input type="hidden" name="message" id="message" value="<?php echo $_GET['message']; ?>">

                    <?php } ?>

                    <div>
                    <input class="form-control" type="text" id="name" name="name"  placeholder="Enter Your Name" required>
                    </div>

                    <br>

                    <div>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email" required>
                    </div>

                    <br>

                    <div>
                        <input class="form-control" type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="10 digit Phone" required />
                    </div>


                    <br>

                    <div>
                        <input class="form-control" type="text" id="zip" name="zip" pattern="[0-9]{5}" placeholder="5 digit ZIP" required />
                    </div>


                    <br>
                <?php } ?>

                  


                <button type="submit" class="btn dorne-btn mt-501 bg-white text-dark part2"><i class="fa fa-search pr-2" aria-hidden="true"></i>Get Quote</button>
            </form>
        </div>
    </div>
</div>

<!-- Explore Search Result -->
<div class="explore-search-result">
  <section class=" mt-5 mb-5">
    <div class="container">
        <div class="row">

            <!-- flag101 -->

            <div class="col-md-12 col-sm-12">
                <div class="reelative"><h2 class="subtitle">
                    <?php 
                        if(isset($_GET['maker_name'])) {
                            echo $_GET['maker_name']." Used OEM Parts - Buy Quality Parts for ".$_GET['maker_name'];
                            if(isset($_GET['part'])){
                                echo " | ".$_GET['part'];
                            }
                        } 
                        elseif(isset($_GET['maker'])){
                            echo $_GET['maker']." Used OEM Parts - Buy Quality Parts for ".$_GET['maker'];
                            if(isset($_GET['part'])){
                                echo " | ".$_GET['part'];
                            }
                        }
                        elseif (isset($_GET['maker_model'])) {
                            echo $_GET['maker_model']." Used OEM Parts - Buy Quality Parts for ".strtoupper($_GET['maker_model']);
                            if(isset($_GET['part'])){
                                echo " | ".$_GET['part'];
                            }
                        }
                        elseif (isset($_GET['part'])) {
                            echo " Used OEM ".$_GET['part']." Part - Buy Quality Parts for ".strtoupper($_GET['part']);
                        }
                            ?></h2></div>
                <div class="makecontent">
                    <div class="subbannerproduct cstbanner2">
                        <?php
                        if(isset($_GET['maker_model'])){
                            $maker_model_arr = explode(" ", $_GET['maker_model']);
                        }
                        else{
                            $maker_model_arr = array();
                        }
                        if(isset($_GET["part"])&&glob("images/parts/".$_GET["part"].".png")) {
                            echo "<img src=\"images/parts/".$_GET["part"].".png\">";
                            if(glob("images/parts/".$_GET["part"].".txt")){
                                echo "</div></div></div><div class=\"col-md-12 col-sm-12\">
                <div class=\"reelative\"><div class=\"makecontent\"><p>";
                                $fh = fopen("images/parts/".$_GET["part"].".txt",'r');
                                while (! feof($fh)) {
                                    $s = fgets($fh);
                                    if (("\n" == $s) || ("\r\n" == $s)) {
                                        echo "<br>";
                                    }
                                    echo "$s";
                                }
                                echo "</p>";
                                fclose($fh);
                            }
                        } else if(isset($_GET["maker_model"])) {
                            echo "<img src=\"images/model/".strtolower($maker_model_arr[0])."/".strtolower($maker_model_arr[1]).".png\">";
                            if(glob("images/model/".strtolower($_GET["maker_model"]).".txt")){
                                echo "</div></div></div><div class=\"col-md-12 col-sm-12\">
                <div class=\"reelative\"><div class=\"makecontent\"><p>";
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
                                echo "</div></div></div><div class=\"col-md-12 col-sm-12\">
                <div class=\"reelative\"><div class=\"makecontent\"><p>";
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

                <div class="reelative" style="margin-top: 10px;">
                <?php
                // if(isset($_GET['maker_model']) && !isset($_GET['year']) && !isset($_GET['part'])){
                //     echo "margin-top: 50px";
                // }
                // elseif (isset($_GET['maker'])) {
                //     if($_GET['maker'] == "Toyota" || $_GET['maker'] == "Saab" ){
                //         echo "margin-top: 500px";
                //     }
                //     else{
                //         echo "margin-top: 400px";
                //     }
                // }
                // else{
                //     echo "margin-top: 400px";
                // }
                ?>


                <div class="subtitle"><p><?php if(!isset($_GET["model"])&&isset($_GET["maker"])){
                   echo "Popular ".$_GET['maker']." Used Parts - Auto Parts - Buy Quality Parts for a ".$_GET['maker']." Model"; ?></p></div></div>

                   <div class="make-listpart">
                    <ul>
                        <?php
                        $sql="SELECT model_name as model FROM tbl_car_model WHERE maker_id=\"".extractId($conn,'maker',$_GET['maker'])."\"";
                        $result=$conn->query($sql);
                        $numOfRowElements=0;
                        while ($row=$result->fetch_assoc()) {
                            echo "<li><a href=\"maker1.php?maker_model=".$_GET["maker"]."&model=".$row["model"]."\">".$row["model"]."</a></li>";
                        }
                    } 
                    ?>
                </ul>
            </div>
        </div>
        <!--#partshidetrow-->
        <div class="col-md-12 col-sm-12">
            <div class="reelative" ><div class="subtitle"><?php if (!isset($_GET["part"])) {
               echo "Popular ".$_GET['maker']." Used Parts - Auto Parts";?></div></div>
               <div class="col-md-12 col-sm-12" style="color: black;">
                <div class="listdivpart">
                    <ul style="color: #000000;">


                       <?php
                       $sql="SELECT CONCAT(maker_name, ' ', model_name) as maker_name FROM tbl_temp_make_model WHERE maker_name = \"".$_GET['maker']."\" ORDER BY maker_name ASC";
                       $result=$conn->query($sql);
                       while ($row=$result->fetch_assoc()) {
                                //if (glob('images/parts/'.strtolower($row["img"]).'.png')) {
                        echo "<li><a href=\"maker1.php?maker_model=".$row["maker_name"]."\"  title=\"".$row["maker_name"]."\">".$row["maker_name"]."</a></li>";
                                //}
                    } 
                    ?></ul>
                </div></div>
            </div>








            <div class="reelative" ></div>

            <div class="subtitle" style="margin-left: 19px; margin-top: 30px;">Search by Part Type</div>
        </div>
        <div class="col-md-12 col-sm-12" style="color: black;">
            <div class="reelative" ></div>
            <div class="listdivpart">
                <ul style="color: #000000;">


                    <?php
                    $sql="SELECT part_name_ui as part FROM tbl_car_part_new ORDER BY part_name_ui ASC";
                    $result=$conn->query($sql);
                    while ($row=$result->fetch_assoc()) {
                                //if (glob('images/parts/'.strtolower($row["img"]).'.png')) {
                        echo "<li><a href=\"maker1.php?";
                        if(isset($_GET['maker_model'])){
                            echo "maker_model=".$_GET['maker_model']."&";
                        }
                        if(isset($_GET['maker'])){
                            echo "maker=".$_GET['maker']."&";
                        }

                        echo "part=" .$row["part"]."\"  title=\"Used OEM ".$row["part"]."\">Used OEM ".$row["part"]."</a></li>";
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
                echo "<li><a href=\"maker1.php?maker=".$_GET["maker"]."&model=".$_GET["model"]."&part=".$row["part"]."\">".$row["part"]."</a></li>";
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