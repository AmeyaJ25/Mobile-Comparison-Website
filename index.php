<?php
    session_start();
    require"connect.php";
    // $conn = mysqli_connect("localhost","root","","mobilecom");
    // if(!$conn)
    // {
    //     die("Connection failed: ".mysqli_connect_error());
    // }
    
    if(isset($_SESSION['C']) and $_SESSION['C']==2)
    {
    $temp=$_SESSION['Phone1'];
    $temp1=$_SESSION['Phone2'];
    $temp=str_replace('_',' ',$temp);
    $temp1=str_replace('_',' ',$temp1);
    // echo"$temp $temp1";
    $_SESSION['C']=0;
    
    $ph1=$temp;
    $ph2=$temp1;
    // unset($_SESSION['Phone1']);
    // unset($_SESSION['Phone2']);
    }
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
        <link rel="stylesheet" href="slide.css">
        <link rel="stylesheet" href="ourext.css">
    <style>
            #compare{
                /* border: 1px ; */
                background: rgb(255, 255, 255);
                border-collapse: collapse;
                border-spacing: 0;
                
                box-shadow: -5px 7px 5px rgba(32,32,32,.3);
            }
            /* .ph1{
                background-color: rgb(255, 253, 146);
            } */
            table{
                align-items: center;
                justify-items: center;
                justify-content: center;
                margin: auto;
                border-radius: 12px 12px 0 0;
            }
            th{
                /* background-color: #00acc1;  */
                background-color: #b2ebf2; 
                /* padding: 10px; */
                text-transform: uppercase;
            }
            th,td{
                padding: 5px 12px;
            }
            marquee a{
                padding: 0px 10px;

            }
            tr:nth-child(odd){
                background-color:#eeeeee;
            }
            .search{
                z-index: -1;
                text-align: center;
                 /* background-color: rgb(63,94,251);
                background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(70,236,252,1) 100%); */
                background-image: url(https://images.unsplash.com/photo-1520375300877-3500f50d069e?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
                background-repeat: no-repeat;
                background-size: cover;
                background-color: rgba(32,32,32,.7);
                /* background: rgb(255,145,0);
                background: linear-gradient(90deg, rgba(255,145,0,1) 0%, rgba(255,255,255,1) 52%, rgba(44,255,0,1) 100%); */
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
            /*footer start*/
            
            
            /* #review{
                background-color:#eeeeee;
                color: black;
                border: 2px solid black;
                border-radius: 10px;
                display: flex;
                margin: 1% 30%;
                align-content: center;
                align-items: center;
                justify-content: center;
            }
            #review h3{
                text-transform: uppercase;
            }
            #realfooter{
                color: white;
                background-color: #2c2c2c;
                display: flex;
                flex-direction: row;
            }
            #social{
                
                flex-grow: 1;
            }
            #fotmob{
                flex-grow: 1;
                
            } */
    </style>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="ext.css">
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
    
</script>
<script data-ad-client="ca-pub-8409073596333847" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
    <div class="container">
        <span class="text1">Welcome to</span>
        <span class="text2" style="background-color: floralwhite;margin-top: -22px;">Smart Compare Mobiles</span>
    </div>
    <div style="background-color: cyan;">
    <div class="slider">
        <div class="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <!--radio buttons end-->
          <!--slide images start-->
          <div class="slide first">
            <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+M51&phonese=search"><img src="https://images-na.ssl-images-amazon.com/images/I/81h7bygApVL._SL1500_.jpg" alt="" style="height: 679px;"></a>
          </div>
          <div class="slide">
            <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Tecno+Camon+15&phonese=search"><img src="https://images-na.ssl-images-amazon.com/images/I/71ud4RhEF6L._SL1500_.jpg" alt="" ></a>
          </div>
          <div class="slide">
            <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Vivo+Y50&phonese=search"><img src="https://images-na.ssl-images-amazon.com/images/I/61o1XFvDnaL._SX679_.jpg" alt="" ></a>
          </div>
          <div class="slide">
            <a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+9&phonese=search"><img src="https://images-na.ssl-images-amazon.com/images/I/71LGOohMnYL._SL1500_.jpg" alt=""></a>
          </div>
          <!--slide images end-->
          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
    </div>
</div>

<!-- php start -->
<!-- php start -->
<!-- php start -->

<?php
if(!isset($ph1)&& !isset($ph2))
{
    $ph1="Samsung Galaxy M31";
    $ph2="Poco X2";
}
    // if (empty($prev1)) {
    //     $prev1="Samsung M31";
    // }
    // if (empty($prev2)) {
    //     $prev2="Poco X2";
    // }
    
    // search for phone 1

    if(isset($_POST["phone1se"])){// $ph1=poco c3=$prev1 => prev2=poco x2 
        $ph1=$_POST['compphone1'];
        $ph2=$_POST['compphone2'];
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($conn, $select1);
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
            $select1 = "SELECT * FROM mobiles where name='Samsung Galaxy M31'";
            $resultph1 = mysqli_query($conn, $select1);
            echo"<div class='alert-success' role='alert' style='    color: #571515;
    background-color: #feb1b1;
            border-color: #c3e6cb;
            text-align: center;
            padding: 20px;'>
            Wrong phone entered
            </div>";
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
        $select2="SELECT * FROM mobiles where name='$ph2'";
        $resultph2 = mysqli_query($conn, $select2);
        if (mysqli_num_rows($resultph2) > 0) {
            while($row2 = mysqli_fetch_assoc($resultph2)){
                $li2=$row2['imglink'];
                $disp2=$row2['display'];
                $wei2=$row2['weight'];
                $st2=$row2['storage'];
                $ram2=$row2['ram'];
                $cp2=$row2['cpu'];
                $cam2=$row2['camera'];
                $bat2=$row2['battery'];
                $os2=$row2['os'];
                $pconn2=$row2['connectivity'];
                $pr2=$row2['price'];
                $blink2=$row2['buylink'];
            }
        }
        else{
            $ph2='Poco X2';
            $select2="SELECT * FROM mobiles where name='Poco X2'";
            $resultph2 = mysqli_query($conn, $select2);
            echo"<div class='alert-success' role='alert' style='    color: #571515;
    background-color: #feb1b1;
            border-color: #c3e6cb;
            text-align: center;
            padding: 20px;'>
            Wrong phone entered
            </div>";
            if (mysqli_num_rows($resultph2) > 0) {
                while($row2 = mysqli_fetch_assoc($resultph2)){
                    $li2=$row2['imglink'];
                    $disp2=$row2['display'];
                    $wei2=$row2['weight'];
                    $st2=$row2['storage'];
                    $ram2=$row2['ram'];
                    $cp2=$row2['cpu'];
                    $cam2=$row2['camera'];
                    $bat2=$row2['battery'];
                    $os2=$row2['os'];
                    $pconn2=$row2['connectivity'];
                    $pr2=$row2['price'];
                    $blink2=$row2['buylink'];
                }
            }
        }
    }

// search for phone2

    // elseif(isset($_POST["phone1se"])){//$prev1=poco c3 =>$ph2=vivo y50
    //     $ph2=$_POST['compphone2'];
        
    //     // echo"$prev1<br>$prev2";
    //     $select1 = "SELECT * FROM mobiles where name='$ph1'";
    //     $resultph1 = mysqli_query($conn, $select1);
    //     if (mysqli_num_rows($resultph1) > 0) {
    //         while($row1 = mysqli_fetch_assoc($resultph1)){
    //             $li1=$row1['imglink'];
    //             $disp1=$row1['display'];
    //             $wei1=$row1['weight'];
    //             $st1=$row1['storage'];
    //             $ram1=$row1['ram'];
    //             $cp1=$row1['cpu'];
    //             $cam1=$row1['camera'];
    //             $bat1=$row1['battery'];
    //             $os1=$row1['os'];
    //             $pconn1=$row1['connectivity'];
    //             $pr1=$row1['price'];
    //             $blink1=$row1['buylink'];
    //         }
    //     }
    //     $select2="SELECT * FROM mobiles where name='$ph2'";
    //     $resultph2 = mysqli_query($conn, $select2);
    //     if (mysqli_num_rows($resultph2) > 0) {
    //         while($row2 = mysqli_fetch_assoc($resultph2)){
    //             $li2=$row2['imglink'];
    //             $disp2=$row2['display'];
    //             $wei2=$row2['weight'];
    //             $st2=$row2['storage'];
    //             $ram2=$row2['ram'];
    //             $cp2=$row2['cpu'];
    //             $cam2=$row2['camera'];
    //             $bat2=$row2['battery'];
    //             $os2=$row2['os'];
    //             $pconn2=$row2['connectivity'];
    //             $pr2=$row2['price'];
    //             $blink2=$row2['buylink'];
    //         }
    //     }

    // }

// def samsung m31 poco x2 

    else{
        $select1 = "SELECT * FROM mobiles where name='$ph1'";
        $resultph1 = mysqli_query($conn, $select1);
        $select2="SELECT * FROM mobiles where name='$ph2'";
        $resultph2 = mysqli_query($conn, $select2);
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
        if (mysqli_num_rows($resultph2) > 0) {
            while($row2 = mysqli_fetch_assoc($resultph2)){
                $li2=$row2['imglink'];
                $disp2=$row2['display'];
                $wei2=$row2['weight'];
                $st2=$row2['storage'];
                $ram2=$row2['ram'];
                $cp2=$row2['cpu'];
                $cam2=$row2['camera'];
                $bat2=$row2['battery'];
                $os2=$row2['os'];
                $pconn2=$row2['connectivity'];
                $pr2=$row2['price'];
                $blink2=$row2['buylink'];
            }
        }
        //echo"else executed";
    }
    
    // else{
    //     echo"wrong input";
    // }
?>
<!-- php end -->
<!-- php end -->
<!-- php end -->


    <div class="search">
        <table id="compare">
            <tr>
                <th>Specifications</th>
                <td>
                    <form action="" method="post">
                        <input type="search" name="compphone1" placeholder="search phone1" class="ph1">
                        <!--<input type="submit" name="phone1se" value="Phone1">-->
                                   
                        </td>
                        <td>
                        
                        <input type="search" name="compphone2" placeholder="search phone2">
                        <input type="submit" value="Compare" name="phone1se">
                    </form>
                    </td>
            </tr>
            <tr>
                <th>Phone overview</th>
                <td id="dbphov1">
                <?php
                    echo"<img src='$li1' alt='' width='194' height='416' class='ph1'><br>".$ph1;
                ?>    
                </td>
                <td id="dbphov2">
                    <?php
                    echo"<img src='$li2' alt='' width='194' height='416'><br>".$ph2;
                    ?>
                    </td>
            </tr>
            <tr>
                <th>display</th>
                <td id="dbdisp1" class="ph1">
                    <?php
                        echo"$disp1";
                    ?></td>
                <td id="dbdisp2">
                <?php
                        echo"$disp2";
                    ?>
                </td>
            </tr>
            <tr>
                <th>Weight</th>
                <td id="dbwei1" class="ph1">
                <?php
                        echo"$wei1";
                    ?></td>
                <td id="dbwei2">
                <?php
                        echo"$wei2";
                    ?>
                </td>
            </tr>
            <tr>
                <th>Storage</th>
                <td id="dbstr1" class="ph1">
                <?php
                        echo"$st1";
                    ?>
                </td>
                <td id="dbstr2">
                    <?php
                        echo"$st2";
                    ?>
                </td>
            </tr>
            <tr>
                <th>RAM</th>
                <td id="dbram1" class="ph1">
                <?php
                        echo"$ram1";
                    ?></td>
                <td id="dbram2">
                <?php
                        echo"$ram2";
                    ?>
                </td>
            </tr>
            <tr>
                <th>CPU</th>
                <td id="dbproc1" class="ph1">
                <?php
                        echo"$cp1";
                    ?></td>
                <td id="dbproc2">
                <?php
                        echo"$cp2";
                    ?></td>
            </tr>
            <tr>
                <th>Camera</th>
                <td id="dbcam1" class="ph1">
                <?php
                        echo"$cam1";
                    ?></td>
                <td id="dbcam2">
                <?php
                        echo"$cam2";
                    ?></td>
            </tr>
            <tr>
                <th>Battery</th>
                <td id="dbbatt1" class="ph1">
                <?php
                        echo"$bat1";
                    ?></td>
                <td id="dbbatt2">
                <?php
                        echo"$bat2";
                    ?></td>
            </tr>
            <tr>
                <th>OS</th>
                <td id="dbos1" class="ph1">
                <?php
                        echo"$os1";
                    ?></td>
                <td id="dbos2">
                <?php
                        echo"$os2";
                    ?></td>
            </tr>
            <tr>
                <th>Connectivity</th>
                <td id="dbconn1" class="ph1">
                <?php
                        echo"$pconn1";
                    ?></td>
                <td id="dbconn2">
                <?php
                        echo"$pconn2";
                    ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td id="dblinks1" class="ph1">
                <?php
                        echo"$pr1";
                    ?></td>
                <td id="dblinks2">
                <?php
                        echo"$pr2";
                    ?></td>
            </tr>
            <tr>
                <th>Links</th>
                <td id="dblinks1" class="ph1">
                <?php
                        echo"<a href='$blink1'><img src='flipkart.jfif' alt='' width='100' height='50'></a>";
                ?>
                        </td>
                <td id="dblinks2">
                <?php
                echo"<a href='$blink2'><img src='flipkart.jfif' alt='' width='100' height='50'></a>";
                ?>
                </td>
            </tr>
            
        </table>
    </div>
    <footer>
        <div id="review">
            <form action="" name="fr" id="rev_form" method="get" onsubmit="return abc(this);">
                <h3>How do you find these matches</h3>
                <span>Enter your Email</span>
                <input type="email" name="useremail" placeholder="Enter your Email id..." id="useremail">
                <br>
                <span>Enter your Name</span>
                <input type="text" name="usrname" placeholder="Enter your name..." id="usrname">
                <br>
                <label for="mobiles">Choose A Mobile:</label>
                <select id="cars" name="mob">
                    <?php
                    echo"<option value='$ph1'>";
                        echo"$ph1";
                    echo"</option>";
                    echo"<option value='$ph2'>";
                        echo"$ph2";
                    ?>
                    </option>
                </select>
                <br>
                <span>Write something</span>
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
                
                <input type="submit" name="frsubmit" value="submit">
                
            </form>
        </div>
        <?php
        if(isset($_GET['frsubmit']))
        {
            $uemail=$_GET['useremail'];
            $uname=$_GET['usrname'];
            $umsg=$_GET['message'];
            $urate=$_GET['rate'];
            $umobile=$_GET['mob'];//$ph1
            $sinsert="INSERT INTO review(email,name,mobile,message,rate) values ('$uemail','$uname','$umobile','$umsg','$urate')";
            $res=mysqli_query($conn,$sinsert);
            if($res){
            echo"<div class='usrreview'>
            <div class='user1'>
                <img src='https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png' alt=''>
                <h3>$uname</h3>
                <h5>$umobile</h5>
                <hr>
                <p>
                    $umsg
                </p>
                <h5 class='starratedusr'>&#9733 &#9733 &#9733 &#9733</h5>
            </div>
            </div>";
            }
            else{
            echo"error occured in db";
            }
        }
        ?>
        <?php
            $resel1="SELECT * FROM review where mobile='$ph1'"; 
            $resel2="SELECT * FROM review where mobile='$ph2'";
            $rev1 = mysqli_query($conn, $resel1); 
            $rev2 = mysqli_query($conn, $resel2); 
            if (mysqli_num_rows($rev1) > 0){
                while($rowrev = mysqli_fetch_assoc($rev1)) {
                    $revname=$rowrev['name'];
                    $revmsg=$rowrev['message'];
                    $revmob=$rowrev['mobile'];
                    $revrate=$rowrev['rate'];
                    echo"<div class='usrreview'>";
                    echo"<div class='user1'>";
                        echo"<img src='https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png' alt=''>";
                        echo"<h3>$revname</h3>
                        <h5>$revmob</h5>
                        <hr>
                        <p>
                            $revmsg
                        </p>
                        <h5 class='starratedusr'>&#9733 &#9733 &#9733 &#9733</h5>
                    </div>
                    </div><br>";
                }
            }
            if (mysqli_num_rows($rev2) > 0){
                while($rowrev = mysqli_fetch_assoc($rev2)) {
                    $revname=$rowrev['name'];
                    $revmsg=$rowrev['message'];
                    $revmob=$rowrev['mobile'];
                    $revrate=$rowrev['rate'];
                    echo"<div class='usrreview'>";
                    echo"<div class='user1'>";
                        echo"<img src='https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png' alt=''>";
                        echo"<h3>$revname</h3>
                        <h5>$revmob</h5>
                        <hr>
                        <p>
                            $revmsg
                        </p>
                        <h5 class='starratedusr'>&#9733 &#9733 &#9733 &#9733</h5>
                    </div>
                    </div>";
                }
            }
            
        ?>
        <!--<div class="usrreview">-->
        <!--    <div class="user1">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>7seas Gamer</h3>-->
        <!--        <h5>Samsung M31</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, vero!-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--    <div class="user2">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>All rounder Aj</h3>-->
        <!--        <h5>Samsung M31</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, mollitia?-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--    <div class="user1">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>-->
        <!--            Technical Guruji-->
        <!--        </h3>-->
        <!--        <h5>POCO X2</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, neque.-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="usrreview">-->
        <!--    <div class="user1">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>7seas Gamer</h3>-->
        <!--        <h5>Samsung M31</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, vero!-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--    <div class="user2">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>All rounder Aj</h3>-->
        <!--        <h5>Samsung M31</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, mollitia?-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--    <div class="user1">-->
        <!--        <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="">-->
        <!--        <h3>-->
        <!--            Technical Guruji-->
        <!--        </h3>-->
        <!--        <h5>Poco X2</h5>-->
        <!--        <hr>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, neque.-->
        <!--        </p>-->
        <!--        <h5 class="starratedusr">&#9733 &#9733 &#9733 &#9733</h5>-->
        <!--    </div>-->
        <!--</div>-->
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
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
</html>