<?php include 'config.php'; ?>
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
<input type = "text" name = "date">
<input type = "submit" name = "submit" value = "SUBMIT">
</form>


</body>
</html>