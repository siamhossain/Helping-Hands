<?php include 'config.php';

$username = $_POST['username'];
$amount = $_POST['amount'];
$date = $_POST['date'];

$sql = "INSERT INTO details (username, amount, date) VALUES ('$username', '$amount', '$date')";
if (!mysqli_query($con, $sql))
{
    echo"Not inserted";
}
else{
    //echo"Inserted";
    $retrive_sql = "SELECT * FROM details";
    $result = mysqli_query($con, $retrive_sql);
    while( $row = mysqli_fetch_assoc($result)){
        echo $row['username']. " ".$row['amount']." ".$row['date']."<br>";
    }
}



?>