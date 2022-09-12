<?php
require_once "conn.php";
$country_id = $_POST["COUNTRY_ID"];
$result = mysqli_query($conn,"SELECT * FROM states where COUNTRY_ID = $country_id ");

var_dump($result);
?>
<option value="">Select States</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["STATE_ID"];?>"><?php echo $row["STATE_NAME"];?></option>
<?php
}

