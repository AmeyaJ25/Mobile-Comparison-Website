<?php
    require"connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart_compare</title>
    <link rel = "icon" href =  
        "/titlelogo.png" 
        type = "image/x-icon"> 
        <link rel="stylesheet" href="ext.css">
    <style>
            .title1{
                color: aliceblue;
                background-color: #1a1a1a;
            }
            #title2{
                border-radius: 10px;
                justify-items: left;
                border-style: none;
                margin-left: 5px;
                margin-right: 80%;
                background-color: black;
                padding: 5px;
                color: white;
            }
            #compare{
                background: rgb(255, 255, 255);
                border-collapse: collapse;
                border-spacing: 0;
                
                box-shadow: -5px 7px 5px rgba(32,32,32,.3);
            }
            table{
                align-items: center;
                justify-items: center;
                justify-content: center;
                margin: auto;
                border-radius: 12px 12px 0 0;
            }
            th{
                background-color: #c2fbff; 
                text-transform: uppercase;
            }
            th,td{
                padding: 1%;
                width: 18%;
                border-radius: 10px;
            }
            marquee a{
                padding: 0px 10px;

            }
            .search{
                z-index: -1;
                text-align: center;
                background-color: rgb(63,94,251);
                background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(70,236,252,1) 100%);
            }
    </style>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

<!-- <script data-ad-client="ca-pub-8409073596333847" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
</head>
<body>
<div class="header">
        <div>
            <div id="hotsearch">
                <ul>
                    <li><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=OnePlus+Nord&phonese=search">oneplus nord</a></li>
                    <li><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+M51&phonese=search">Galaxy M51</a></li>
                    <li><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Realme+X3+SuperZoom+Edition&phonese=search">Realme X3</a></li>
                </ul>
            </div>
            <a href="index.php"><img src="titlelogo.png" alt="logo" id="ourlogo"></a>
            <div id="adjsearch">
            <form method="GET" action="product.php" style="display: contents;">
                <input type="search" name="compphone1" placeholder="search for mobile" class="ani" style="padding: 0px 165px;">
                <input type="submit" name="phonese" value="search">
              </form>
            </div>
        </div>
    </div>
    <div id="navbar">
        <ul>
            <li><a href="index.php" style="text-transform: uppercase;font-weight: bold;">Home</a></li>
            <li><a href="Top5.php" style="text-transform: uppercase;font-weight: bold;">Top-5</a></li>
            <li><a href="bestbudget.php" style="text-transform: uppercase;font-weight: bold;">Best-Budget</a></li>
            <li><a href="company.php" style="text-transform: uppercase;font-weight: bold;">Companies</a></li>
            <li><a href="about.php" style="text-transform: uppercase;font-weight: bold;">About</a></li>
        </ul>
    </div>
    <hr>
    <marquee >
        <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Huawei+Honor+9X+Pro&phonese=search">Huawei Honor 9X Pro</a>
        <a href="https://mobilecomparephp.000webhostapp.com/company.php?mob_comp=Samsung&company=submit">Best Samsung</a>
        <a href="https://mobilecomparephp.000webhostapp.com/Top5.php">Best Processor</a>
    </marquee>
    <?php
        $ph1="Motorola G8 Power Lite";
        $ph2="Xiaomi Redmi 9 Prime";
        $ph3="Tecno Spark Power 2";
        $ph4="Xiaomi Redmi 9";
        $ph5="Realme C15";
        $ph6="Lenovo K10 Note";
        $ph7="Infinix Hot 10";
        $ph8="Tecno Camon 15";
        $ph9="Poco C3";
        $ph10="Motorola E7 Plus";
        $budrange="Below ₹10,000";
        if(isset($_GET["budsub"])){
            $budrange=$_GET["budrange"];
            switch($budrange){
                case "Below ₹10,000":
                    $ph1="Motorola G8 Power Lite";
                    $ph2="Xiaomi Redmi 9 Prime";
                    $ph3="Tecno Spark Power 2";
                    $ph4="Xiaomi Redmi 9";
                    $ph5="Realme C15";
                    $ph6="Lenovo K10 Note";
                    $ph7="Infinix Hot 10";
                    $ph8="Tecno Camon 15";
                    $ph9="Poco C3";
                    $ph10="Motorola E7 Plus";
                break;
                case "₹10,000-₹15,000":
                    $ph1="Realme 6";
                    $ph2="Samsung Galaxy M21";
                    $ph3="Samsung Galaxy A50s";
                    $ph4="Nokia 9 PureView";
                    $ph5="Realme 7";
                    $ph6="Realme Narzo 20 Pro";
                    $ph7="Poco M2 pro";
                    $ph8="Huawei Honor 9x pro";
                    $ph9="OPPO A9";
                    $ph10="Xiaomi Redmi Note 9";
                break;
                case "₹15,000-₹20,000":
                    $ph1="Poco X3";
                    $ph2="Realme 6 Pro";
                    $ph3="Samsung Galaxy F41";
                    $ph4="Realme 7 Pro";
                    $ph5="Samsung Galaxy M31 Prime";
                    $ph6="Xiaomi Redmi Note 9 Pro Max";
                    $ph7="Vivo V17";
                    $ph8="Oppo Reno 2F";
                    $ph9="Samsung Galaxy M31";
                    $ph10="Motorola One Fusion Plus";
                break;
                case "₹20,000-₹30,000":
                    $ph1="Samsung Galaxy M51";
                    $ph2="Samsung Galaxy A71";
                    $ph3="Oppo Reno 3 Pro";
                    $ph4="OnePlus Nord";
                    $ph5="Vivo V20";
                    $ph6="Realme 7 Pro(8 GB)";
                    $ph7="Samsung Galaxy M31s";
                    $ph8="Samsung Galaxy A80";
                    $ph9="Xiaomi Redmi Note 9 Pro Max(8 GB)";
                    $ph10="Realme X3 SuperZoom Edition";
                break;
            }
        }
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($conn, $select1);
        if (mysqli_num_rows($resultph1) > 0) {
            while($row1 = mysqli_fetch_assoc($resultph1)){
                $li1=$row1['imglink'];
                $disp1=$row1['display'];
                $st1=$row1['storage'];
                $ram1=$row1['ram'];
                $cp1=$row1['cpu'];
                $cam1=$row1['camera'];
                $bat1=$row1['battery'];
                $os1=$row1['os'];
                $pr1=$row1['price'];
                $ifli1=$row1['infolink'];
            }
        }
        $select2 = "SELECT * FROM mobiles where name='$ph2'";
        $resultph2 = mysqli_query($conn, $select2);
        if (mysqli_num_rows($resultph2) > 0) {
            while($row2 = mysqli_fetch_assoc($resultph2)){
                $li2=$row2['imglink'];
                $disp2=$row2['display'];
                $st2=$row2['storage'];
                $ram2=$row2['ram'];
                $cp2=$row2['cpu'];
                $cam2=$row2['camera'];
                $bat2=$row2['battery'];
                $os2=$row2['os'];
                $pr2=$row2['price'];
                $ifli2=$row2['infolink'];
            }
        }
        $select3 = "SELECT * FROM mobiles where name='$ph3'";
        $resultph3 = mysqli_query($conn, $select3);
        if (mysqli_num_rows($resultph3) > 0) {
            while($row3 = mysqli_fetch_assoc($resultph3)){
                $li3=$row3['imglink'];
                $disp3=$row3['display'];
                $st3=$row3['storage'];
                $ram3=$row3['ram'];
                $cp3=$row3['cpu'];
                $cam3=$row3['camera'];
                $bat3=$row3['battery'];
                $os3=$row3['os'];
                $pr3=$row3['price'];
                $ifli3=$row3['infolink'];
            }
        }
        $select4 = "SELECT * FROM mobiles where name='$ph4'";
        $resultph4 = mysqli_query($conn, $select4);
        if (mysqli_num_rows($resultph4) > 0) {
            while($row4 = mysqli_fetch_assoc($resultph4)){
                $li4=$row4['imglink'];
                $disp4=$row4['display'];
                $st4=$row4['storage'];
                $ram4=$row4['ram'];
                $cp4=$row4['cpu'];
                $cam4=$row4['camera'];
                $bat4=$row4['battery'];
                $os4=$row4['os'];
                $pr4=$row4['price'];
                $ifli4=$row4['infolink'];
            }
        }
        $select5 = "SELECT * FROM mobiles where name='$ph5'";
        $resultph5 = mysqli_query($conn, $select5);
        if (mysqli_num_rows($resultph5) > 0) {
            while($row5 = mysqli_fetch_assoc($resultph5)){
                $li5=$row5['imglink'];
                $disp5=$row5['display'];
                $st5=$row5['storage'];
                $ram5=$row5['ram'];
                $cp5=$row5['cpu'];
                $cam5=$row5['camera'];
                $bat5=$row5['battery'];
                $os5=$row5['os'];
                $pr5=$row5['price'];
                $ifli5=$row5['infolink'];
            }
        }
        $select6 = "SELECT * FROM mobiles where name='$ph6'";
        $resultph6 = mysqli_query($conn, $select6);
        if (mysqli_num_rows($resultph6) > 0) {
            while($row6 = mysqli_fetch_assoc($resultph6)){
                $li6=$row6['imglink'];
                $disp6=$row6['display'];
                $st6=$row6['storage'];
                $ram6=$row6['ram'];
                $cp6=$row6['cpu'];
                $cam6=$row6['camera'];
                $bat6=$row6['battery'];
                $os6=$row6['os'];
                $pr6=$row6['price'];
                $ifli6=$row6['infolink'];
            }
        }
        $select7 = "SELECT * FROM mobiles where name='$ph7'";
        $resultph7 = mysqli_query($conn, $select7);
        if (mysqli_num_rows($resultph7) > 0) {
            while($row7 = mysqli_fetch_assoc($resultph7)){
                $li7=$row7['imglink'];
                $disp7=$row7['display'];
                $st7=$row7['storage'];
                $ram7=$row7['ram'];
                $cp7=$row7['cpu'];
                $cam7=$row7['camera'];
                $bat7=$row7['battery'];
                $os7=$row7['os'];
                $pr7=$row7['price'];
                $ifli7=$row7['infolink'];
            }
        }
        $select8 = "SELECT * FROM mobiles where name='$ph8'";
        $resultph8 = mysqli_query($conn, $select8);
        if (mysqli_num_rows($resultph8) > 0) {
            while($row8 = mysqli_fetch_assoc($resultph8)){
                $li8=$row8['imglink'];
                $disp8=$row8['display'];
                $st8=$row8['storage'];
                $ram8=$row8['ram'];
                $cp8=$row8['cpu'];
                $cam8=$row8['camera'];
                $bat8=$row8['battery'];
                $os8=$row8['os'];
                $pr8=$row8['price'];
                $ifli8=$row8['infolink'];
            }
        }
        $select9 = "SELECT * FROM mobiles where name='$ph9'";
        $resultph9 = mysqli_query($conn, $select9);
        if (mysqli_num_rows($resultph9) > 0) {
            while($row9 = mysqli_fetch_assoc($resultph9)){
                $li9=$row9['imglink'];
                $disp9=$row9['display'];
                $st9=$row9['storage'];
                $ram9=$row9['ram'];
                $cp9=$row9['cpu'];
                $cam9=$row9['camera'];
                $bat9=$row9['battery'];
                $os9=$row9['os'];
                $pr9=$row9['price'];
                $ifli9=$row9['infolink'];
            }
        }
        $select10 = "SELECT * FROM mobiles where name='$ph10'";
        $resultph10 = mysqli_query($conn, $select10);
        if (mysqli_num_rows($resultph10) > 0) {
            while($row10 = mysqli_fetch_assoc($resultph10)){
                $li10=$row10['imglink'];
                $disp10=$row10['display'];
                $st10=$row10['storage'];
                $ram10=$row10['ram'];
                $cp10=$row10['cpu'];
                $cam10=$row10['camera'];
                $bat10=$row10['battery'];
                $os10=$row10['os'];
                $pr10=$row10['price'];
                $ifli10=$row10['infolink'];
            }
        }
    ?>
    <div class="search">
    <form method="GET" action="">
        <label style="color: white;">Choose Budget Range:</label>
        <select name="budrange">
            <option>Below ₹10,000</option>
            <option>₹10,000-₹15,000</option>
            <option>₹15,000-₹20,000</option>
            <option>₹20,000-₹30,000</option>
        </select>
        <input type="submit" name="budsub" value="submit">
    </form>
    <table border="0" width="100%" bgcolor="white">
        <tr class="title1">
            <td colspan="5"><h2>
            <?php
            echo" Best in Budget :- $budrange";
            ?>
            </h2><hr></td>
        </tr>
        <tr>
            <th>
            <?php 
            echo"<img src='$li1' alt='$ph1' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li2' alt='$ph2' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li3' alt='$ph3' width='140px' height='300px'>";
            ?>
            </th>
            <th> 
            <?php 
            echo"<img src='$li4' alt='$ph4' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li5' alt='$ph5' width='140px' height='300px'>";
            ?>
            </th>
        </tr>
        <tr>
            <th>
                <h3 style="color: darkblue;">
                <?php
                echo" $ph1<br>($pr1)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram1 RAM,$st1 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp1 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam1";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat1";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli1'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph2<br>($pr2)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram2 RAM,$st2 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp2 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam2";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat2";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli2'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
                <h3 style="color: darkblue;">
                <?php
                echo" $ph3<br>($pr3)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram3 RAM,$st3 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp3 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam3";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat3";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli3'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph4<br>($pr4)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram4 RAM,$st4 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp4 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam4";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat4";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli4'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph5<br>($pr5)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram5 RAM,$st5 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp5 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam5";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat5";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli5'><h6>See Full Specs</h6></a>";
                ?>
            </th>
        </tr>
    </table>
    <table border="0" width="100%" bgcolor="white">
        <tr>
        <th>
            <?php 
            echo"<img src='$li6' alt='$ph6' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li7' alt='$ph7' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li8' alt='$ph8' width='140px' height='300px'>";
            ?>
            </th>
            <th> 
            <?php 
            echo"<img src='$li9' alt='$ph9' width='140px' height='300px'>";
            ?>
            </th>
            <th>
            <?php 
            echo"<img src='$li10' alt='$ph10' width='140px' height='300px'>";
            ?>
            </th>
        </tr>
        <tr>
            <th>
                <h3 style="color: darkblue;">
                <?php
                echo" $ph6<br>($pr6)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram6 RAM,$st6 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp6 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam6";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat6";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli6'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph7<br>($pr7)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram7 RAM,$st7 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp7 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam7";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat7";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli7'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
                <h3 style="color: darkblue;">
                <?php
                echo" $ph8<br>($pr8)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram8 RAM,$st8 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp8 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam8";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat8";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli8'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph9<br>($pr9)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram9 RAM,$st9 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp9 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam9";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat9";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli9'><h6>See Full Specs</h6></a>";
                ?>
            </th>
            <th>
            <h3 style="color: darkblue;">
                <?php
                echo" $ph10<br>($pr10)";
                ?>
                </h3>
                <h6>
                <?php
                echo" $ram10 RAM,$st10 ROM";
                ?>
                </h6>
                <h6>
                <?php
                echo"$disp10 display";
                ?>
                </h6>
                <h6>
                <?php
                echo"$cam10";
                ?>
                </h6>
                <h6>
                <?php
                echo"$bat10";
                ?>
                </h6>
                <?php
                echo"<a href='$ifli10'><h6>See Full Specs</h6></a>";
                ?>
            </th>
        </tr>
    </table>
</div>
    <footer>
        <div id="realfooter">
            <div id="social">
                <h3>Follow us on social media:-</h3>
                <img src="fb icon.png" alt="" width="200px" height="200px">
                <img src="insta icon2.png" alt="" width="200px" height="200px">
                <img src="twitter icon.png" alt="" width="200px" height="200px">
            </div>
            <div id="fotmob">
                <h3>Our top</h3>
                <a href="bestbudget.php">Best Best-Budget</a>
                <br>
                <a href="Top5.php">Top-5</a>
                <br>
                <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=OnePlus+Nord&phonese=search">OnePlus Nord</a>
                <br>
                <a href=" https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Apple+iPhone+12+Pro+Max&phonese=search">Apple iPhone 12 Pro Max</a>
            </div>
        </div>
    </footer>
</body>
</html>