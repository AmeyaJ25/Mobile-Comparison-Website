<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart_compare</title>
    <link rel = "icon" href =  
        "/titlelogo.png" 
        type = "image/x-icon"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext.css">
    <style>
        #abt{
            /* height: 100px; */
            background: rgb(0,224,255);
            background: linear-gradient(311deg, rgba(0,224,255,1) 0%, rgba(255,255,255,0.30885857761073177) 49%, rgba(115,116,255,1) 100%);
        }
        #box{
            background-color: #ffe600;
            width: 20%;
            margin: auto;
            text-align: center;
        }
        marquee a{
            padding: 0px 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tc').click(function () {
                if ($(this).is(':checked')) {
                    $('#sub').attr("disabled", false);
                }
                else {
                    $('#sub').attr("disabled", true);

                }
            });
            $('#reset').click(function () {
                $('#rev_form').get(0).reset();
            });
            $('#sub').click(function () {
                $('#rev_form').attr("action", "subform.php");
            });
        });
        
        function abc() {
            let fn = document.getElementById('fname').value;
            let ln = document.getElementById('lname').value;
            let nkey = /^[A-Za-z]+$/
            let sum = document.getElementById('message').value;
            let ekey = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
            let emails = document.getElementById('email').value;
            let mnum = document.getElementById('mnum').value;
            if (fn == '') {
                alert("Please enter all the fields");
                document.fr.fname.focus();
                return false;
            }
            else if (ln == '') {
                alert("Please enter all the fields");
                document.fr.lname.focus();
                return false;
            }
            else if (sum == '') {
                alert("Please enter all the fields");
                document.fr.message.focus();
                return false;
            }
            else if (emails == '') {
                alert("Please enter all the fields");
                document.fr.email.focus();
                return false;
            }
            else if (mnum == '') {
                alert("Please enter all the fields");

                document.fr.mnum.focus();
                return false;
            }
            else {
                if (fn.match(nkey)) {
                    if (fn.length > 1 && fn.length <= 20) {
                        if (ln.match(nkey)) {
                            if (ln.length > 1 && ln.length <= 20) {
                                if (emails.match(ekey)) {
                                    if (mnum.length == 10) {
                                        return true;
                                    }
                                    else {
                                        alert("wrong phone no");
                                        return false;
                                    }
                                }
                                else {
                                    alert("wrong email pattern");
                                    return false;
                                }
                            }
                            else {
                                alert("wrong last name length");
                                return false;
                            }
                        }
                        else {
                            alert("name should contain letters only");
                            return false;
                        }
                    }
                    else {
                        alert("wrong first name length");
                        return false;
                    }
                }
                else {
                    alert("name should contain letters only");
                    return false;
                }
            }
        }
    </script>
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
    <link href="support.css" rel="stylesheet">
    <div id="abt">
        <div id="box">
            <h3>SMART PHONE COMPARE MADE BY:-</h3>
            <p>1.Gondalia Dhruvang<br>2.OMKAR GURAV<br>3.Joshi Ameya<br>4.Aniruddha Joshi</p>
        </div>
    <h2 style="text-align: center;">Support Form</h2>
    <form method="POST" action="subform.php" name="fr" id="rev_form" onsubmit="return abc(this);">

        <div id="container">
            <label for="name">First Name </label><br>
            <input placeholder="Enter first name" type="text" name="fname" id="fname"><br><br>

            <label for="name">Last Name </label><br>

            <input placeholder="Enter last name" type="text" name="lname" id="lname"><br><br>

            <label for="email">Email </label><br>
            <input placeholder="Enter email address" type="email" name="email" id="email"><br><br>

            <label for="mnum">Mobile Number </label><br>
            <input placeholder="Enter 10 digit mobile number" type="tel" name="mnum" id="mnum"><br><br>

            <label>Select type of ticket</label>
            <select name="supptyp">
                <option>Technical Error</option>
                <option>MisInformation</option>
                <option>Suggestion</option>
            </select>
            <br>
            <br>
            <textarea name="message" id="message" placeholder="Enter the Issue"
                style="width:300px; height:300px;"></textarea>
            <br>
            <input type="checkbox" id="tc"><span>I read & agree to all terms and conditions</span>
            <br>
            <input type="submit" name="submit" value="SUBMIT" id="sub" disabled>
            <button type="reset" id="reset">RESET</button>
        </div>
    </form>
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