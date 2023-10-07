<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("Connection failed due to ".mysqli_connect_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$date = $_POST['date'];
$source = $_POST['source'];
$destination = $_POST['destination'];


$sql = "INSERT INTO `travel`.`travelers` (`Name`, `Age`, `Gender`, `Mobile`, `Email`, `Travel_date`, `Source`, `Destination`, `Reservation`)
    VALUES ('$name', '$age', '$gender', '$mobile', '$email', '$date', '$source', '$destination', current_timestamp())"; 

    // echo "YOU'RE FLIGHT HAS BEEN BOOKED!";
    
    if($con->query($sql) == true)
    {
        echo "SUCCESFULL";
    }
    else{
        echo "ERROR";
    }
    $con->close();

    if($source == $destination)
    {
        echo "Source city and Destination city can't be same!"
    }
?>
<html>
    <link rel="stylesheet" href="travel.css">
    <head>
        <body>
        <p class='success'>YOUR FLIGHT HAS BEEN BOOKED!</p>
        </body>
    </head>
</html>

