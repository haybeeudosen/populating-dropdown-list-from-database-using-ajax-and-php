<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
// $sql = "CREATE TABLE continents (
//   CONTINENT_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   continent_name VARCHAR(30) NOT NULL,
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";



// $sql = "INSERT INTO continents (continent_name)
// VALUES ('Africa');";
// $sql .= "INSERT INTO continents (continent_name)
// VALUES ('Asia');";
// $sql .= "INSERT INTO continents (continent_name)
// VALUES ('Antarctica')";
// $sql = "INSERT INTO continents (continent_name)
// VALUES ('Europe');";
// $sql .= "INSERT INTO continents (continent_name)
// VALUES ('North America');";
// $sql .= "INSERT INTO continents (continent_name)
// VALUES ('South America')";

// if (mysqli_multi_query($conn, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
  
// $sql = "CREATE TABLE cities (
//   city_id INT(6) UNSIGNED AUTO_INCREMENT,
//   city_name VARCHAR(30) NOT NULL,
//   DATE     DATETIME, 
//   state_id INT  UNSIGNED REFERENCES states(STATE_ID),
//   PRIMARY KEY (city_id)
// )";


// if (mysqli_query($conn, $sql)) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "INSERT INTO cities (city_name, state_id)
// VALUES ('Uyo',3);";
// $sql .= "INSERT INTO cities (city_name, state_id)
// VALUES ('Ikot Ekpene', 3);";
// $sql .= "INSERT INTO cities (city_name, state_id)
// VALUES ('Abak', 3)";
// // $sql = "INSERT INTO countries (COUNTRY_NAME, COUNTRY_ID)
// VALUES ('Puerto Rico', 2);";
// $sql .= "INSERT INTO countries (COUNTRY_NAME,CONTINENT_ID)
// VALUES ('North America',2);";
// $sql .= "INSERT INTO countries (COUNTRY_NAME, CONTINENT_ID)
// VALUES ('South America')";



// if (mysqli_multi_query($conn, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }



// mysqli_close($conn);
?>
