<?php
error_reporting(0);
session_start();
// echo $_SESSION['C'];
if(isset($_GET['Infinix_Hot_9_Pro']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Infinix_Hot_9_Pro';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Infinix_Hot_9_Pro';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Realme_6']))
{
   if($_SESSION['C']==1)
   {
    $_SESSION['Phone2']='Realme_6';
    $_SESSION['C']=2;
    header('Location: index.php');
  }
   else
   {
    $_SESSION['Phone1']='Realme_6';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
      $_SESSION['C']=1;
    }
}
if(isset($_GET['Poco_X2']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Poco_X2';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Poco_X2';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Vivo_Y20']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Vivo_Y20';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Vivo_Y20';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Oppo_Reno_2F']))
{
   if($_SESSION['C']==1)
   {
    $_SESSION['Phone2']='Oppo_Reno_2F';
    $_SESSION['C']=2;
    header('Location: index.php');
   }
   else
   {
    $_SESSION['Phone1']='Oppo_Reno_2F';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
      $_SESSION['C']=1;
   }
}
if(isset($_GET['Samsung_Galaxy_A51']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Samsung_Galaxy_A51';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Samsung_Galaxy_A51';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Vivo_Y50']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Vivo_Y50';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Vivo_Y50';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Poco_M2_Pro']))
{
   if($_SESSION['C']==1)
   {
    $_SESSION['Phone2']='Poco_M2_Pro';
    $_SESSION['C']=2;
    header('Location: index.php');
   }
   else
   {
    $_SESSION['Phone1']='Poco_M2_Pro';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
      $_SESSION['C']=1;
   }
}
if(isset($_GET['Samsung_Galaxy_A21s']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Samsung_Galaxy_A21s';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Samsung_Galaxy_A21s';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Xiaomi_Redmi_9_Prime']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Xiaomi_Redmi_9_Prime';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Xiaomi_Redmi_9_Prime';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Nokia_9_PureView']))
{
   if($_SESSION['C']==1)
   {
    $_SESSION['Phone2']='Nokia_9_PureView';
    $_SESSION['C']=2;
    header('Location: index.php');
   }
   else
   {
    $_SESSION['Phone1']='Nokia_9_PureView';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
      $_SESSION['C']=1;
   }
}
if(isset($_GET['Realme_7']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Realme_7';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Realme_7';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Realme_Narzo_20_Pro']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Realme_Narzo_20_Pro';
   $_SESSION['C']=2;
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Realme_Narzo_20_Pro';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
if(isset($_GET['Samsung_Galaxy_M31']))
{
   if($_SESSION['C']==1)
   {
    $_SESSION['Phone2']='Samsung_Galaxy_M31';
    $_SESSION['C']=2;
    header('Location: index.php');
   }
   else
   {
    $_SESSION['Phone1']='Samsung_Galaxy_M31';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
      $_SESSION['C']=1;
   }
}
if(isset($_GET['Xiaomi_Redmi_K20_Pro']))
{
  if($_SESSION['C']==1)
  {
   $_SESSION['Phone2']='Xiaomi_Redmi_K20_Pro';
   $_SESSION['C']=2; 
   header('Location: index.php');
  }
  else
  {
    $_SESSION['Phone1']='Xiaomi_Redmi_K20_Pro';
    echo"<div class='alert-success' role='alert' style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    padding: 20px;'>
    Select second phone for comparison
  </div>";
    $_SESSION['C']=1;
  }
}
?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<head>
  <title>smart_compare</title>

  <style>
    body{
      /* background-color: rgb(216, 214, 218); */
      background-image: url(https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-White-Gradient-Background-Image.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .text1 {
      color: rgba(20, 6, 34, 0.767);
      background-color: rgba(241, 211, 239, 0.705);
    }

    .imag {
      padding: 5px;
      height: 300px;
      
    }

    
    .imag:hover {
      transform: scale(1.2);
      padding: -5px;
    }

    marquee a {
      padding: 0px 10px;
    }
  </style>
  <link rel="stylesheet" href="project.css">
  <link rel="stylesheet" href="ext.css">
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
<form method="GET" action="Top5.php">
  <table border="0" width="100%">
    <tr>
      <td colspan="5">
        <h1 class="text1" style="margin: 20px 0px 0px 0px;">Top Processor</h1>
        <hr>
      </td>
    <tr>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Infinix+Hot+9+Pro&phonese=search"><img src="https://lh3.googleusercontent.com/XKdFa96HlINNY4bHHks8YpX65HUSc8Io7ciup-fYvvpcjxRdiZjJLOtDRQ9V1XiI66fwZ_EH23DgBwLmuCV7OphujY_xr0ifcCGH6FfsrRx7twSonxb-vC-itd9e29csjVOWmg4p=w2400" class="imag"><br>Infinix Hot 9 Pro</a><br><button 
          class="compare" name="Infinix_Hot_9_Pro">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Realme+6&phonese=search"><img src="https://lh3.googleusercontent.com/BMxAhEwLK42zkN01MPd43gozoSN5BsgYs6APX9obKVTpiSBRATfE6UX5hvPtawefDG0tWS4hChOYE4YZ3P8rKglM7uVkEL6ObBgM0-s2vwaPJ5ism4LiO354UWNPn0IaUGM6oKED=w2400" class="imag"><br>Realme 6</a><br><button 
          class="compare" name="Realme_6">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Poco+X2&phonese=search"><img src="https://lh3.googleusercontent.com/7od-lHI7VWk5lq18ai1ZV-EHgsMqMkyvZzw-lPo_1SVmCT1fkuICwrh242FqZel0jECufLPvu5l8qPI6Jeocoe3Syi5soThWJoHZNEdRhOaJ7V5GXh96x98-QGI5XNU5C4apHtVS=w2400" class="imag"><br>Poco X2</a><br><button 
          class="compare" name="Poco_X2">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Vivo+Y20&phonese=search"><img src="https://lh3.googleusercontent.com/G2Ch9JKGX0HEVqcT-6kPRDOF0DGA1fu1FMuto9TT_g9pDMowvTX1vR8MUGbmcsZT4WECMxeyUhxhGgpdQgxENM2R5UkqoZakLdht1N7V60tMLRmmymaUWWPt1DJGo-p4uzME0cyi=w2400" class="imag"><br>Vivo Y20</a><br><button 
          class="compare" name="Vivo_Y20">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Oppo+Reno+2F&phonese=search"><img src="https://lh3.googleusercontent.com/pPUc0qfA_YmcqSKcFEW4y_UGna_5q-YhRTwenl7Qw1dbsKuJeP-kIsWQfO2jd3mzNtnWiuFNPqSjILixBF1BbiA7d7i67kwZvAFGIifBsQIJ6Seufsfu9iMKbi9MWOt7duHNWc-x=w2400" class="imag"><br>Oppo Reno 2F</a><br><button 
          class="compare" name="Oppo_Reno_2F">Compare</button></th>
    </tr>
  </table>
  <table border="0" width="100%">

    <tr>
      <td colspan="5">
        <h1 class="text1" style="margin: 20px 0px 0px 0px;">Best Battery</h1>
        <hr>
      </td>
    <tr>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+A51&phonese=search"><img src="https://lh3.googleusercontent.com/840argv-fIfnTR70OyZjN5GVRh_fNoIecg97OUnKCNZbXh7JpQlXeHbb6ROTSzmev2uxC-Cdur7daiD1_05K2F--oYSsngOYm1z8ZAU6sX5SrK_wzE80BWJrb1Bej0zIMxj4r2M4=w2400" class="imag"><br>Samsung Galaxy A51</a><br>
        <button  class="compare" name="Samsung_Galaxy_A51">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Vivo+Y50&phonese=search"><img src="https://lh3.googleusercontent.com/nB5aN7zUztFazuuO6v6g5f01CXrmEp-sWHA4L9KMJESE4t5E80a1BV_l618b8wLoYCuWbE-SaIGV5EClbNE5Wkfs3cVApK3wlf2OIstcbVXiupK6RT-kXJ7EGWj_36fU_uxKafxi=w2400" class="imag"><br>Vivo Y50</a><br><button 
          class="compare" name="Vivo_Y50">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=POCO+M2+Pro&phonese=search"><img src="https://lh3.googleusercontent.com/kGDADAi3Gkq79JQhP5AC8dTCK11fDSQTvGtLM7IZK5rFXCVvUhKiUSa94fd9MkfqB-y1VbalKGiB0LZhgh6qsHloRd_Q0HMc4FUaUgPziZc4oYeJKSe8cKPm6bs6TMrDHjrr5rxl=w2400" class="imag"><br>Poco M2 Pro</a><br><button 
          class="compare" name="Poco_M2_Pro">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+A21s&phonese=search"><img src="https://lh3.googleusercontent.com/CAV4rb8LUBysluhCRYzTNdm-ntOAS9JOMDwqBLDmsi8HkShXZZ2XmvnuQmdbCLaF4ltKTHjKGDlxX4V7j-HdqzQbC3BrDO_nYmRDc33hu_FnnJ7xYUChMeWanWxTEzLkFtzslcl8=w2400" class="imag"><br>Samsung Galaxy A21s</a><br><button
           class="compare" name="Samsung_Galaxy_A21s">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+9+Prime&phonese=search"><img src="https://lh3.googleusercontent.com/oTH3wdgxkxcLhCGhboRlr6DtoFFW4LttOlvoYs5lY_We83YR8LsuIeDIqzzoWoIJj0X6P81Lx_P1W1vh_JsbfNDfPRdg2lHe2eykXnqMubPjTIoJ3BGJy30zoXoqslwHJ-E_LPra=w2400" class="imag"><br>Redmi 9 Prime</a><br><button 
          class="compare" name="Xiaomi_Redmi_9_Prime">Compare</button></th>
    </tr>
  </table>
  <table border="0" width="100%">

    <tr>
      <td colspan="5">
        <h1 class="text1" style="margin: 20px 0px 0px 0px;">Best in Ram</h1>
        <hr>
      </td>
    <tr>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Nokia+9+PureView&phonese=search"><img src="https://lh3.googleusercontent.com/7tHSn-o82tlMqkYsWn0Lp6eIojo-Ex1voH19OWmkB2KH0TyZftSad5m0gaUhOsDWbvxLvfe1DWbeq2qKyX8hEWgz797PQMr9JgegysgXKhAo0GwYk1MEVITdsEPaGePwFryccsQNPA=w2400" class="imag"><br>Nokia 9 PureView</a><br><button 
          class="compare" name="Nokia_9_PureView">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Realme+7&phonese=search"><img src="https://lh3.googleusercontent.com/pnlBUCPdUV2jmArMAP0FK2oP2VAXUTktq46VGOFz-UP4-k9fM1Ur_ULwmJQSCh4vCiYmFnPPnNW7R36ufBqsbI-gMi-0iORV2OlhZYBGMkLu_dGze3uyOEYWyZb1HDV9fVtedh0dXw=w2400" class="imag"><br>Realme 7</a><br><button 
          class="compare" name="Realme_7">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Realme+Narzo+20+Pro&phonese=search"><img src="https://lh3.googleusercontent.com/0komHFUoN1iLQ4g2E_ElJ_2voPZOnzGoKABKlF-x_sXE2mBF8rQnjB09WL1V4_sbt9Qny100p-3VLAaqQiIn5R-MaNs-ixVNMTJ_DUoPXbDNHphq01wd1wMZRdIA8Roq-6K6FDwCgA=w2400" class="imag"><br>Realme Narzo 20 Pro</a><br><button 
          class="compare" name="Realme_Narzo_20_Pro">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Samsung+Galaxy+M31&phonese=search"><img src="https://lh3.googleusercontent.com/qJD1T704fc5Hdw_yva7bge1AQ_5cu0kc_TpbzpsVHzsBgRm1SkINqQPYJF-56iDzi0ik3zLkeVHLsglrWtgmLqzKfJR1KpkF1WL9ZgP8FjyHtsO25d0gcWMJQZrysarqDQ8wOW1y9w=w2400" class="imag"><br>Samsung Galaxy M31</a><br><button 
          class="compare" name="Samsung_Galaxy_M31">Compare</button></th>
      <th class="imag1"><a href="https://mobilecomparephp.000webhostapp.com/product.php?compphone1=Xiaomi+Redmi+K20+Pro&phonese=search"><img src="https://lh3.googleusercontent.com/hftVEf64MeCLrN_A8ui7ENVqI-8iVDjCcB23OJjeqJdt7LqwTiIlVdro3wnctOItyzfWalRA8VLq2W7AZIFSisIEpaptdIfUocaaXUx2IZRDKPRf3peG5eCnPUn9X7Np4sQdLtsK=w2400" class="imag"><br>Redmi K20 Pro</a><br><button 
          class="compare" name="Xiaomi_Redmi_K20_Pro">Compare</button></th>
    </tr>
  </table>
  </form>
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