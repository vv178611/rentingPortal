<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/project/config.php";
 
// Escape user inputs for security
$property_name = $mysqli->real_escape_string($_REQUEST['property_name']);
$property_type = $mysqli->real_escape_string($_REQUEST['property_type']);
$rent = $mysqli->real_escape_string($_REQUEST['rent']);
$no_of_bedrooms = $mysqli->real_escape_string($_REQUEST['no_of_bedrooms']);
$no_of_bathrooms = $mysqli->real_escape_string($_REQUEST['no_of_bathrooms']);
$no_of_halls = $mysqli->real_escape_string($_REQUEST['no_of_halls']);
$no_of_kitchens = $mysqli->real_escape_string($_REQUEST['no_of_kitchens']);
$no_of_balconies = $mysqli->real_escape_string($_REQUEST['no_of_balconies']);
$no_of_garages = $mysqli->real_escape_string($_REQUEST['no_of_garages']);
$no_of_parkings = $mysqli->real_escape_string($_REQUEST['no_of_parkings']);
if(isset($_REQUEST['has_garden'])){
	$has_garden = $mysqli->real_escape_string($_REQUEST['has_garden']);
}else {
	$has_garden = 0;
}
if(isset($_REQUEST['pets_allowed'])){
	$pets_allowed = $mysqli->real_escape_string($_REQUEST['pets_allowed']);
}else {
	$pets_allowed = 0;
}
if(isset($_REQUEST['bachelors_allowed'])){
	$bachelors_allowed = $mysqli->real_escape_string($_REQUEST['bachelors_allowed']);
}else {
	$bachelors_allowed = 0;
}
$additional_info = $mysqli->real_escape_string($_REQUEST['additional_info']);
$city_id = $mysqli->real_escape_string($_REQUEST['city_id']);
$owner_id = $mysqli->real_escape_string($_REQUEST['owner_id']);

if($has_garden == 'on') {
	$has_garden = 1;
}else{
	$has_garden = 0;
}

if($pets_allowed == 'on') {
	$pets_allowed = 1;
}else{
	$pets_allowed = 0;
}

if($bachelors_allowed == 'on') {
	$bachelors_allowed = 1;
}else{
	$bachelors_allowed = 0;
}
 
// Attempt insert query execution

// Table 1: Property (property_id, property_name, property_type, rent, no_of_bedrooms, no_of_bathrooms, no_of_halls, no_of_kitchens, no_of_balconies, no_of_garages, no_of_parkings, is_garden, pets_allowed, bachelors_allowed, additional_info)

$sql = "INSERT INTO property (property_name, property_type, rent, no_of_bedrooms, no_of_bathrooms, no_of_halls, no_of_kitchens, no_of_balconies, no_of_garages, no_of_parkings, has_garden, pets_allowed, bachelors_allowed, additional_info) 
VALUES ('$property_name', '$property_type', '$rent', '$no_of_bedrooms', '$no_of_bathrooms', '$no_of_halls', '$no_of_kitchens', '$no_of_balconies', '$no_of_garages', '$no_of_parkings', '$has_garden', '$pets_allowed', '$bachelors_allowed', '$additional_info')";
if($mysqli->query($sql) === true){
	$last_id = $mysqli->insert_id;
}

// Table 2: Property_Stats (property_id, city_id, status_id, owner_id, registered_on)

$sql = "INSERT INTO property_stats (property_id, city_id, status_id, owner_id)
VALUES ('$last_id','$city_id', 1, '$owner_id')";
if($mysqli->query($sql) === true){
    echo "
    <div class=\"alert alert-success alert-dismissible\" style=\"position: absolute;top: 45%;width: 50%;left: 25%;\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      <strong>Success! </strong>
      We have successfully registered your property with us! Your registration number is <strong><i>$last_id</i></strong>
      <br>
      <p class=\"card-text\" style=\"float: right\">
        <small class=\"text-muted\">
            Close this popup with '&times;' button at the top right of this popup.
        </small>
      </p>
    </div>";
} else{
    echo "
    <br></div>
    <div class=\"alert alert-danger alert-dismissible\" style=\"position: absolute;top: 45%;width: 50%;left: 25%;\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      <strong>Could not register: </strong>
      Please resubmit the form with proper values to register your property with us. Thank You.
      <br>
      <p class=\"card-text\" style=\"float: right\">
        <small class=\"text-muted\">
            Close this popup with '&times;' button at the top right of this popup.
        </small>
      </p>
    </div>";
}

// Close connection
$mysqli->close();
?>