<?php 
include 'config.php';
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$password = $_POST['Pass'];

$sql = "INSERT INTO users (name, password, email, phone) VALUES ('$name', '$password', '$email', '$phone')";
if (!mysqli_query($con, $sql))
{
    echo"Not inserted";
    header ("refresh:3; url=index.php" );
}
else{
    echo"Inserted";
    header ("Location: hhome.php" );
}



?>