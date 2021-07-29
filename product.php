<?php
  $connect = mysqli_connect("localhost","id15395006_ani","Ani@9920959596","id15395006_mobilecom");
    if (!$connect)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

  if(isset($_GET["phonese"])){// $ph1=poco c3=$prev1 => prev2=poco x2 
        $ph1=$_GET['compphone1'];
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($connect, $select1);
        if (mysqli_num_rows($resultph1) > 0) {
            while($row1 = mysqli_fetch_assoc($resultph1)){
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
                
            }
        }
        else{
        $ph1='Samsung Galaxy M31';
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($connect, $select1);
        if (mysqli_num_rows($resultph1) > 0) {
            while($row1 = mysqli_fetch_assoc($resultph1)){
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
                
            }
        }
        echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Phone not found
  </div>";
      }
      }
      else{
        $ph1='Samsung Galaxy M31';
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($connect, $select1);
        if (mysqli_num_rows($resultph1) > 0) {
            while($row1 = mysqli_fetch_assoc($resultph1)){
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
                
            }
        }
      }
?>

<!DOCTYPE html>
<html>
<head charset="UTF-8">
 	<title>Smart Compare</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=RLBZT2uZY9qxFZeA62rrzdiLaMBz1pC6G4iYFcK9XhVrFjwNxiVl6URhhfBGm0wx5HN3G-MQpJ7vBvYPrwk2UIM1FDHCINHIlFCHzwbOhcMcXbACJiMuv7vqovZ1mDYfbSYwc7VgoAXSRt48zIds0A" charset="UTF-8"></script><style>
/* h3   {color: blue;}
p    {color: red;} */
marquee a{
  padding: 0px 10px;
}
.img {
    
    height: 250px;
    background-size: cover;
    margin: 73px;
}
.usrreview{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
                margin-top: -25px;
            }
            .user1{
                width: 250px;
                background-color: #2c2c2c;
                color: white;
                padding: 20px;
            }
            .user2{
                width: 250px;
                margin-top: 50px;
                background-color: #2c2c2c;
                color: white;
                padding: 20px;
                margin-left: 10px;
                margin-right: 10px;
            }
            .usrreview img{
                height: 20px;
            }
            .usrreview h3{
                display: inline;
            }
            .starratedusr{
                color: rgb(235, 195, 63);
            }
</style>
<script>
  function abc(){
      let he=document.getElementById('usrname').value;
      let nkey=/^[A-Za-z]+$/
      let sum=document.getElementById('message').value;
      let ekey=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
      let emails=document.getElementById('useremail').value;
      if(he==''){
          alert("Please enter all the fields");
          document.fr.usrname.focus();
          return false;
      }
      else if(sum==''){
          alert("Please enter all the fields");
          document.fr.message.focus();
          return false;
      }
      else if(emails==''){
          alert("Please enter all the fields");
          document.fr.useremail.focus();
          return false;
      }
      else{
                if(he.match(nkey))
                {
                    if(he.length>1 && he.length<=20)
                    {  
                        if(emails.match(ekey))
                        {
                          return true;
                        }
                        else
                        {  alert("wrong email id");
                            return false;
                        }
                    }
                    else{
                        alert("wrong name length");
                        return false;
                    }

                }
                else{
                    alert("name should not contain sym and no");
                    return false;
                }
            }
        }
    </Script>


</head>
	<body >
    <link href="style.css" rel="stylesheet">
    <link href="ext.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

		<!--header-->

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
            <form method="GET" action="product.php" style="display: contents;margin-left: 475px;margin-top: -65px;">
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
    <!-- main page starts-->
    <div id="grad">
		<table style="margin-left: 25%">
    <tr>
      <td id="timg">
      	<h3>
        <?php
        echo "$ph1";
        ?>
        </h3>
        <?php
                    echo"<img src='$li1' alt='' width='194' height='416' class='ph1'><br>";
                ?>
      </td>
      <td valign="top" id="tinfo">
        <table style="padding: 10px">
          <caption style="margin-bottom:10px;"><b><i>Specification</i></b></caption>
        <tr>
            <td id="specs" style="border-top-left-radius: 10px;">
              Display
            </td>
            <td class="value">
              <?php
                        echo"$disp1";
              ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Weight
            </td>
            <td class="value">
              <?php
                        echo"$wei1";
              ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Storage
            </td>
            <td class="value">
              <?php
                        echo"$st1";
                    ?>
                </td>
                <!-- <td id="dbstr2">
                    <?php
                       // echo"$st2";
                    ?>
            </td> -->
          </tr>
          <tr>
            <td id="specs">
              RAM
            </td>
            <td class="value">
              <?php
                        echo"$ram1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              CPU
            </td>
            <td class="value">
              <?php
                        echo"$cp1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Camera
            </td>
            <td class="value">
              <?php
                        echo"$cam1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Battery
            </td>
            <td class="value">
              <?php
                        echo"$bat1";
                    ?>
            </td>
          </tr> 
          <tr>
            <td id="specs">
              OS
            </td>
            <td class="value">
              <?php
                        echo"$os1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Connectivity
            </td>
            <td class="value">
              <?php
                        echo"$pconn1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs">
              Price
            </td>
            <td class="value">
              <?php
                        echo"$pr1";
                    ?>
            </td>
          </tr>
          <tr>
            <td id="specs" style="border-bottom-left-radius: 10px;">
              BUY It Now
            </td>
            <td class="value">
              <?php
                        echo"<a href='$blink1'><img src='flipkart.jfif' alt='' width='100' height='50'></a>";
                ?>
                </td>
          </tr>
        </table>
      </td>
  </tr>
</div>
  </table>
  <div id="sugg">
    <table id="lastt" cellspacing="500px">
      <tr>
      <th colspan="5" style="background-color:#5effd1; padding: 10px; text-align: left; border-radius: 10px ">
        <h4>Our Suggestion</h4>
      </th>
    </tr>
    <tr></tr>   <!--Used to add space vertically-->

    <tr>


<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+M21&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/GpEawXuk7P0q4u0OTVE8dMG6tIc-yBSqYnlUM_NDHPQRPZhI2lv8lkUvcrkGUckLl1-gRI8n9y45Nhb4J6wkpumY_xZRrMEpewFbPrmYVhl4m6mEKZuBd5BR6s1flRSb6MFq5dbYkA=w2400" alt=""><br>Samsung Galaxy M21</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+9&phonese=search"><img class="img"     src="https://lh3.googleusercontent.com/_MFMXvHN1jnAOLz9BiOf8bMsBAdMLYzACVohTVrpvIXbNXHOpyIZTHdTS8DfcN2QAfvoY26VkNa85oxyi-VhAZBqXwfrbZsNB-YKJ-FjcJbcDBJlxq2t2PGKIllif3OCMiTOoPlS=w2400" alt=""><br>Xiaomi Redmi 9</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+Note+9+Pro+Max&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/h7R54y5_Mi1e9v4Whh77Ym7Wwek9YseLoVBMHuP7nZA6FlYAsIVxPI-ds9kXmfnW3BQyfePMtkc9E5dlRCDGGTY_vV7gUtrgKcqTgiRH7n-wsY8WSGDu-8ZfQ13UreNhSZZWDdzSVw=w2400" alt=""><br>Xiaomi Redmi Note 9 Pro Max</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+9+Prime&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/oTH3wdgxkxcLhCGhboRlr6DtoFFW4LttOlvoYs5lY_We83YR8LsuIeDIqzzoWoIJj0X6P81Lx_P1W1vh_JsbfNDfPRdg2lHe2eykXnqMubPjTIoJ3BGJy30zoXoqslwHJ-E_LPra=w2400"   alt=""><br>Xiaomi Redmi 9 Prime</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+M31&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/qJD1T704fc5Hdw_yva7bge1AQ_5cu0kc_TpbzpsVHzsBgRm1SkINqQPYJF-56iDzi0ik3zLkeVHLsglrWtgmLqzKfJR1KpkF1WL9ZgP8FjyHtsO25d0gcWMJQZrysarqDQ8wOW1y9w=w2400" alt=""><br>Samsung Galaxy M31</a> </td>


</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>    <!--Used to add space vertically-->
<tr>
<th colspan="5" style="background-color:#5effd1; padding: 10px; text-align: left; border-radius: 10px ">
  <h4>Best in RAM</h4>
</th>
</tr>
<tr></tr>   <!--Used to add space vertically-->

<tr>


<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+Note+9&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/gZ8tlHSPkNgvXS2Y9hJrP6qQbUfV_ffVTTqZf3Ip0jgGKnsG-zvekyL1rCwTGtxSPsYAfgNFVPQdqMN9xEbzb_macEeLwKyEyI_dvYlRZEuvAQIpywYx96v5G5Z-Lrkl0ulPQzlXMw=w2400" alt=""><br>Xiaomi Redmi Note 9</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+K20+Pro&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/hftVEf64MeCLrN_A8ui7ENVqI-8iVDjCcB23OJjeqJdt7LqwTiIlVdro3wnctOItyzfWalRA8VLq2W7AZIFSisIEpaptdIfUocaaXUx2IZRDKPRf3peG5eCnPUn9X7Np4sQdLtsK=w2400" alt=""><br>Xiaomi Redmi K20 Pro</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Vivo+Y50&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/nB5aN7zUztFazuuO6v6g5f01CXrmEp-sWHA4L9KMJESE4t5E80a1BV_l618b8wLoYCuWbE-SaIGV5EClbNE5Wkfs3cVApK3wlf2OIstcbVXiupK6RT-kXJ7EGWj_36fU_uxKafxi=w2400" alt=""><br>Vivo Y50</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=OnePlus+Nord&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/L5lQC04CHXASlayz38hHljB5c1fnn2QHg5NcCMLjsLzHM80LjCtd-SeJhX0jNF9kwxCpZEsACN8OVkURgd4Wcfnr0hq4Umg3qTmGARCLZqbpUEH13MsHoxYxKPOCmq2_oIK8GvdDrQ=w2400" alt=""><br>OnePlus Nord</a> </td>

<td id="suggestion"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Oppo+A9&phonese=search"><img class="img" src="https://lh3.googleusercontent.com/ThcIff58WLp1--G1ju0KoWnRgX47Et3ksGTGsqOgfsAY68a2e6N30iHGBBXEl5yrhjKi5JNGqSyZIPlsUSn7Wz56JPiyi4joG6XKLuynTZ2PNsHpJ5uRrPEn3eeEpnte4zzGHiLxFw=w2400" alt=""><br>Oppo A9</a> </td>


</tr>
  </table>
</div>
<!-- footer -->
<footer>
  <!-- <div id="review">
    <form action="rate.php" name="fr" id="rev_form" onsubmit="return abc(this);">
        <h3>How do you found this phone</h3>
        <span>Enter your Email</span>
        <input type="email" name="useremail" placeholder="Enter your Email id..." id="useremail">
        <br>
        <span>Enter your Name</span>
        <input type="text" name="usrname" placeholder="Enter your name..." id="usrname">
        <br> -->
        <!-- <label for="mobiles">Choose A Mobile:</label>
        <select id="cars" name="cars">
            <option value="mobile1">a</option>
            <option value="mobile2">b</option>
        </select>
        <br> -->
        <!-- <span>Write something</span>
        <br>
        <textarea name="message" id="message" cols="30" rows="3"></textarea>
        <br>
        <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
        </div>
        
        <input type="submit" value="submit">
        
    </form>
</div>
  <div class="usrreview">
    <div class="user1">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>Mortal</h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, vero!
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>
    </div>
    <div class="user2">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>Bill Gates</h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, mollitia?
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733 &#9733</h5>
    </div>
    <div class="user1">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>
          MKBHD
        </h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, neque.
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>
    </div>
</div>
<div class="usrreview">
    <div class="user1">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>TECH Burner</h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, vero!
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>
    </div>
    <div class="user2">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>abc Technical</h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, mollitia?
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733 &#9733</h5>
    </div>
    <div class="user1">
        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">
        <h3>
          Carry
        </h3>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, neque.
        </p>
        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>
    </div>
</div> -->
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
