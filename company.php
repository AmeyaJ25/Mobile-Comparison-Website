<?php
    require"connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext.css">
    <link rel="stylesheet" href="ourext.css">
    <style>
        marquee a{
             padding: 0px 10px;

        }
        .phview{
            display: block;
            position: relative;
            margin-top: 20px;
        }
        .phview a{
            display: flex;
            border: 2px solid rgb(128, 128, 128);
        }
        .imgp{
            background-color: white;
            padding: 20px;
            flex: 2;
        }
        .desp{
            background-color: #eeeeee;
            flex: 3;
            align-items: center;
            justify-content: center;
            justify-items: center;
            padding: 30px;
        }
        div span{
            font-size: 1rem;
            font-weight: bold;
        }
        h3{
            align-items: center;
            align-content: center;
        }
        #body{
            background-image: url(https://images.unsplash.com/photo-1520375300877-3500f50d069e?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
            background-repeat: repeat-y;
            background-size: cover;
        }

    </style>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
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
    <!-- <div class="container">
        <span class="text1">Welcome to</span>
        <span class="text2">Smart Compare Mobiles</span>
    </div> -->
    
    
    <div style="margin-left: 41%; display: inline; background-color: rgb(255, 225, 225);padding: 5px;">
        <h3 style="display: inline;"><label>Select company</label></h3>
        <form action="company.php" method="get" style="display:inline">
            <select id="cars" name="mob_comp">
                <option value="Samsung">Samsung</option>
                <option value="Xiaomi">Xiaomi</option>
                <option value="Realme">Realme</option>
                <option value="Nokia">Nokia</option>
                <option value="Oppo">Oppo</option>
                <option value="Apple">Apple</option>
            </select>
                <input type="submit" value="submit" name='company'>
        </form>
    </div>
    
    <div id="body">
    <div style="    width: 688px;
        margin: auto;">
    <?php
        if(isset($_GET['company'])){
            $compname=$_GET['mob_comp'];
            echo"$compname";
            $selectcomp="SELECT * FROM mobiles WHERE company='$compname'";
            $resultcomp = mysqli_query($conn, $selectcomp);
            if (mysqli_num_rows($resultcomp) > 0) {
                while($row1 = mysqli_fetch_assoc($resultcomp)){
                    $name=$row1['name'];
                    $li1=$row1['imglink'];
                    $disp1=$row1['display'];
                    $wei1=$row1['weight'];
                    $st1=$row1['storage'];
                    $ram1=$row1['ram'];
                    $cp1=$row1['cpu'];
                    $cam1=$row1['camera'];
                    $bat1=$row1['battery'];
                    $os1=$row1['os'];
                    $pconn1=$row1['connectivity'];
                    $pr1=$row1['price'];
                    $blink1=$row1['buylink'];
                    $prl=$row1['infolink'];
                    echo"<div class='phview'>
                    <a href='$prl' style='border: 2px solid rgb(222,222,222);'>
                    <div class='imgp'>";
                    echo"<img src='$li1' alt='' srcset='' height='300px'>
                        </div>";
                    echo"<div class='desp' style='color: black;'>";
                    echo"<h3>$name</h3>";
                    echo"<hr style='color: rgb(0,255,255);'>";
                    echo"<span>&#8226;</span> $ram1 | $st1 |<br>
                    <span>&#8226;</span> $disp1<br>
                    <span>&#8226;</span> $cam1 Camera<br>
                    <span>&#8226;</span> $bat1 | $wei1 <br>
                    <span>&#8226;</span> $cp1";
                    echo"</div>
                        </a>
                        </div>";
                }
            }
            else{
                echo"<h1>PHONE NOT FOUND</h1>";
            }
        }
        else {
            $compname="Samsung";
            $selectcomp="SELECT * FROM mobiles WHERE company='$compname'";
            $resultcomp = mysqli_query($conn, $selectcomp);
            if (mysqli_num_rows($resultcomp) > 0) {
                while($row1 = mysqli_fetch_assoc($resultcomp)){
                    $name=$row1['name'];
                    $li1=$row1['imglink'];
                    $disp1=$row1['display'];
                    $wei1=$row1['weight'];
                    $st1=$row1['storage'];
                    $ram1=$row1['ram'];
                    $cp1=$row1['cpu'];
                    $cam1=$row1['camera'];
                    $bat1=$row1['battery'];
                    $os1=$row1['os'];
                    $pconn1=$row1['connectivity'];
                    $pr1=$row1['price'];
                    $blink1=$row1['buylink'];
                    echo"<div class='phview'>
                    <a href='product.html' style='border: 2px solid rgb(222,222,222);'>
                    <div class='imgp'>";
                    echo"<img src='$li1' alt='' srcset='' height='300px'>
                        </div>";
                    echo"<div class='desp' style='color: black;'>";
                    echo"<h3>$name</h3>";
                    echo"<hr style='color: rgb(0,255,255);'>";
                    echo"<span>&#8226;</span> $ram1 | $st1 |<br>
                    <span>&#8226;</span> $disp1<br>
                    <span>&#8226;</span> $cam1 Camera<br>
                    <span>&#8226;</span> $bat1 | $wei1 <br>
                    <span>&#8226;</span> $cp1";
                    echo"</div>
                        </a>
                        </div>";
                }
            }
        }
    ?>
        <!-- <div class="phview">
            <a href="product.html" style="border: 2px solid rgb(128, 128, 128);">
                <div class="imgp">
                    <img src="https://rukminim1.flixcart.com/image/416/416/kbi9h8w0/mobile/g/g/c/samsung-galaxy-a21s-sm-a217fzkfins-original-imafsuyajewgnfcg.jpeg?q=70" alt="" srcset="" height="300px">
                </div>
                <div class="desp" style="color: black;">
                    <h3>Samsung Galaxy A21s</h3>
                    <hr style="color: aqua;">
                    <span>&#8226;</span>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB<br>
                    <span>&#8226;</span>16.51 cm (6.5 inch) HD+ Display<br>
                    <span>&#8226;</span>48MP + 8MP + 2MP + 2MP | 13MP Front Camera<br>
                    <span>&#8226;</span>5000 mAh Lithium-ion Battery<br>
                    <span>&#8226;</span>Exynos 850 Octa Core Processor
                </div>
            </a>
        </div>
        <div class="phview">
            <a href="product.html">
                <div class="imgp">
                    <img src="https://rukminim1.flixcart.com/image/416/416/kfzq8i80/mobile/y/j/f/samsung-galaxy-f41-sm-f415fzbdins-original-imafwbnpdafmeuj6.jpeg?q=70" height="300px">
                </div>
                <div class="desp" style="color: black;">
                    <h3>Samsung Galaxy F41</h3>
                    <hr style="color: aqua;">
                    <span>&#8226;</span>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB <br>
                    <span>&#8226;</span>16.26 cm (6.4 inch) Full HD+ Display <br>
                    <span>&#8226;</span>64MP + 8MP + 5MP | 32MP Front Camera <br>
                    <span>&#8226;</span>6000 mAh Lithium-ion Battery <br>
                    <span>&#8226;</span>Exynos Octa Core Processor <br>
                    <span>&#8226;</span>Super AMOLED Display <br>
                </div>
            </a>
        </div>
        <div class="phview">
            <a href="product.html">
                <div class="imgp">
                    <img src="https://rukminim1.flixcart.com/image/416/416/kgsb1jk0/mobile/y/u/g/samsung-fold-2-5g-galaxyfold2-original-imafwy2g3zm6yypj.jpeg?q=70" alt="" srcset="" height="300px">
                </div>
                <div class="desp" style="color: black;">
                    <h3>Samsung Fold 2 5G </h3>
                    <hr style="color: aqua;">
                    <span>&#8226;</span>12 GB RAM | 256 GB ROM <br>
                    <span>&#8226;</span>19.3 cm (7.6 inch) Display <br>
                    <span>&#8226;</span>12MP Rear Camera <br>
                    <span>&#8226;</span>4500 mAh Battery <br>
                    <span>&#8226;</span>Triple camera <br>
                </div>
            </a>
        </div>
        <div class="phview">
            <a href="product.html">
                <div class="imgp">
                    <img src="https://rukminim1.flixcart.com/image/416/416/kg15ocw0/mobile/g/g/g/samsung-galaxy-s20-fe-sm-g780fzbnins-original-imafwd2j4ggevjwq.jpeg?q=70" alt="" srcset="" height="300px">
                </div>
                <div class="desp" style="color: black;">
                    <h3>Samsung Galaxy S20 FE </h3>
                    <hr style="color: aqua;">
                    <span>&#8226;</span>8 GB RAM | 128 GB ROM | Expandable Upto 1 TB <br>
                    <span>&#8226;</span>16.51 cm (6.5 inch) Full HD+ Display <br>
                    <span>&#8226;</span>12MP + 12MP + 8MP Rear Camera | 32MP Front Camera <br>
                    <span>&#8226;</span>4500 mAh Lithium Ion Battery <br>
                    <span>&#8226;</span>Exynos Octa Core Processor <br>
                    <span>&#8226;</span>Super AMOLED Display | 120 Hz Rate <br>
                    <span>&#8226;</span>IP68 Rating
                </div>
            </a>
        </div>
        <div class="phview">
            <a href="product.html">
                <div class="imgp">
                    <img src="https://cdn1.smartprix.com/rx-imI0GMKgu-w240-h290/samsung-galaxy-m51.webp" alt="" srcset="" height="300px">
                </div>
                <div class="desp" style="color: black;">
                    <h3>Samsung Galaxy M51</h3>
                    <hr style="color: aqua;">
                    <span>&#8226;</span>6 GB RAM | 128 GB ROM <br>
                    <span>&#8226;</span>17.02 cm (6.7 inch) Display <br>
                    <span>&#8226;</span>64MP Rear Camera <br>
                    <span>&#8226;</span>7000 mAh Battery
                </div>
            </a>
        </div> -->
    </div>
</div>

<!-- <div class="elfsight-app-893b242f-2779-4625-a040-4a6747e0ab73"></div> -->
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
    <div id="extra">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
<h4 style="text-align: center;background-color: #1a1a1a;color: white">© 2020-2021 - SMART COMPARE ,All rights reserved</h4>
</footer>
</body>
</html>