<?php
    require"connect.php";
    if(!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    //$result=mysqli_query($conn,"INSERT INTO support(FirstName, LastName, Email, Mobile, SupportType, Message) VALUES ('$fname','$lname','$email',$mnum,'$supptyp','$message')");

    $select = "SELECT * FROM support";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $fn=$row['FirstName'];
                $ln=$row['LastName'];
                $em=$row['Email'];
                $st=$row['SupportType'];
                $mes=$row['Message'];

                echo"$fn&nbsp&nbsp&nbsp&nbsp";
                echo"$ln&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo"$em&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo"$st&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo"$mes<br>";
  
                
                }
        }
?>