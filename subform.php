<?php
    require"connect.php";
    if(!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $mnum=$_POST["mnum"];
    $supptyp=$_POST["supptyp"];
    $message=$_POST["message"];
    if($fname && $lname && $email && $mnum && $supptyp && $message ){
        if(isset($_POST["submit"])){
                
            $result=mysqli_query($conn,"INSERT INTO support(FirstName, LastName, Email, Mobile, SupportType, Message) VALUES ('$fname','$lname','$email',$mnum,'$supptyp','$message')");
            if($result){
                echo"<br><p><center><h1>Thank You for filling the form.</h1></p></center>";
            }
            else{
                echo "<br>".mysqli_error($conn);
            }
        }
    }
    else
     {
     echo "<h1>Connected unsuccessfully 3<h1>";
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="about.php">
        <center><button><h1>Return</h1></button></center>
    </form>
</body>
</html>