<?php
require_once "conn.php";
$state_id= $_POST["STATE_ID"];
$result = mysqli_query($conn,"SELECT * FROM cities where state_id = $state_id ");

var_dump($result);
?>
<option value="">Select Cities</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["city_id"];?>"><?php echo $row["city_name"];?></option>
<?php
}