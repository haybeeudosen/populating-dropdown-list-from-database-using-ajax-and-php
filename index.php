<?php
require_once("new.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>

  
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <div class="card-header">
                <h2 class="text-success">Dropdown List in PHP MySQL Ajax</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="continent">Continent</label>
                            <select class="form-control"  id="continent" onchange="getCountries(this.value);">
                                <option value="0" >– Select Continent –</option>
                                <?php
                                    while ($row = $result->fetch_assoc() ){
                                        $id = $row['CONTINENT_ID'];
                                        $name = $row['continent_name'];
                                        echo "<option value='".$id."' >".$name."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="country" onchange="getStates(this.value);" >
                                <option value="0" >– Select country –</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <select class="form-control" id="state" onchange="getCity(this.value);" >
                                <option value="0" >– Select state –</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control" id="city" >
                                <option value="0" >– Select city –</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






<script>
$(document).ready(function() {
    $('#continent').on('change', function() {
        var CONTINENT_ID = this.value;
        $.ajax({
        url: "country.php",
        type: "POST",
        data: {
        CONTINENT_ID: CONTINENT_ID
        },
        cache: false,
        success: function(result){
        $("#country").html(result);
        $('#state').html('<option value="">Select country First</option>'); 
        $('#city').html('<option value="">Select country First</option>'); 
        }
        });
    });    
    $('#country').on('change', function() {
        var COUNTRY_ID = this.value;
        $.ajax({
        url: "state.php",
        type: "POST",
        data: {
        COUNTRY_ID: COUNTRY_ID
        },
        cache: false,
        success: function(result){
        $("#state").html(result);
        $('#city').html('<option value="">Select state First</option>'); 
        }
        });
    });

    $('#state').on('change', function() {
        var STATE_ID = this.value;
        $.ajax({
        url: "city.php",
        type: "POST",
        data: {
        STATE_ID: STATE_ID
        },
        cache: false,
        success: function(result){
        $("#city").html(result);
        // $('#city').html('<option value="">Select state First</option>'); 
        }
        });
    });
});
</script>









<!-- <script>

function getCountries(CONTINENT_ID){

// Empty the dropdown
var countryOval = document.getElementById('country');
var stateOval = document.getElementById('state');

countryOval.innerHTML = "";
stateOval.innerHTML = "";

var countryopt = document.createElement('option');
countryopt.value = 0;
countryopt.innerHTML = '-- Select country --';
countryOval.appendChild(countryopt);

var stateopt = document.createElement('option');
stateopt.value = 0;
stateopt.innerHTML = '-- Select state --';
stateOval.appendChild(stateopt);

// AJAX request
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajaxfile.php", true); 
xhttp.setRequestHeader("Content-Type", "application/json");
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
      // Response
      var response = JSON.parse(this.responseText);

      var len = 0;
      if(response != null){
         len = response.length;
      }

      if(len > 0){
         // Read data and create <option >
         for(var i=0; i<len; i++){

            var id = response[i].id;
            var name = response[i].name;

            // Add option to state dropdown
            var opt = document.createElement('option');
            opt.value = id;
            opt.innerHTML = name;
            countryOval.appendChild(opt);

         }
      }
   }
};
var data = {request:'getCountries',CONTINENT_ID: CONTINENT_ID};
xhttp.send(JSON.stringify(data));

}







function getCities(state_id){

// Empty the dropdown
var stateOval = document.getElementById('city');

stateOval.innerHTML = "";

var cityopt = document.createElement('option');
cityopt.value = 0;
cityopt.innerHTML = '-- Select City --';
stateOval.appendChild(cityopt);

// AJAX request
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajaxfile.php", true); 
xhttp.setRequestHeader("Content-Type", "application/json");
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
      // Response
      var response = JSON.parse(this.responseText);

      var len = 0;
      if(response != null){
         len = response.length;
      }

      if(len > 0){
         // Read data and create <option >
         for(var i=0; i<len; i++){

            var id = response[i].id;
            var name = response[i].name;

            // Add option to city dropdown
            var opt = document.createElement('option');
            opt.value = id;
            opt.innerHTML = name;
            stateOval.appendChild(opt);

         }
      }
   }
};
var data = {request:'getCities',state_id: state_id};
xhttp.send(JSON.stringify(data));
}
</script> -->
</body>
</html>