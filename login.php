<?php include 'config.php';

$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "SELECT * FROM users WHERE name = '$username' and password = '$password'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

if( $row['name'] == $username && $row['password'] == $password ){
    echo "Welcome".$row['name'];
    header('location: home.php');
}
else{
    echo "Failed to login";
}

// if (isset($_POST['log'])){
//     header('location: home.php');
// }

if (isset($_POST['reg'])){
    header('location: registration.php');
}
?>
