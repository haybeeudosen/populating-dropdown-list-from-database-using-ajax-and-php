<?php
require_once "conn.php";
$continent_id = $_POST["CONTINENT_ID"];
$result = mysqli_query($conn,"SELECT * FROM countries where CONTINENT_ID = $continent_id ");
?>
<option value="">Select Countries</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["COUNTRY_ID"];?>"><?php echo $row["COUNTRY_NAME"];?></option>
<?php
}
?>