<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    die;
}
include 'config.php'; ?>
<html>
<!DOCTYPE html>
<body>
<form action = "details_insert.php" method = "post">
<lebel>Donors</lebel>
<select name = "username">
<?php 
$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result))
{
?>
<option> <?php echo $row['name']; ?> </option>
<?php
}
?> 
</select>
<lebel>Amount</lebel>
<input type = "text" name = "amount" value = "300">
<lebel>Date</lebel>
<input type = "date" name = "date">
<input type = "submit" name = "submit" value = "SUBMIT">
</form>
<a href="logout.php">Logout</a>


</body>
</html>