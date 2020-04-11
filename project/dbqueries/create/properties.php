<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/project/config.php";

$status = 0;
 
// Attempt create tables for properties and their locations
// Table 1: Country (country_id, country_name)
// Table 2: City (city_id, city_name, country_id)
// Table 3: Property_Type (type_id, type_name)
// Table 4: Property (property_id, property_name, property_type, rent, no_of_bedrooms, no_of_bathrooms, no_of_hall, no_of_kitchen, no_of_balconies, no_of_garages, no_of_parkings, has_garden, pets_allowed, bachelors_allowed, additional_info)
// Table 5: Status (status_id, status_name)
// Table 6: Owner (owner_id, owner_name, phone_no, email, address)
// Table 7: Property_Stats (property_id, city_id, status_id, owner_id, registered_on)


// Table 1: Country (country_id, country_name)

$sql = "CREATE TABLE country(
    country_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    country_name VARCHAR(30) NOT NULL
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'country' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 2: City (city_id, city_name, country_id)

$sql = "CREATE TABLE city(
    city_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    city_name VARCHAR(30) NOT NULL,
    country_id INT,
    FOREIGN KEY (country_id) REFERENCES country(country_id)
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'city' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 3: Property_Type (type_id, type_name)

$sql = "CREATE TABLE property_type(
    type_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(30) NOT NULL
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'property_type' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 4: Property (property_id, property_name, property_type, rent, no_of_bedrooms, no_of_bathrooms, no_of_halls, no_of_kitchens, no_of_balconies, no_of_garages, no_of_parkings, has_garden, pets_allowed, bachelors_allowed, additional_info)

$sql = "CREATE TABLE property(
    property_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    property_name VARCHAR(30) NOT NULL,
    property_type INT,
    rent INT,
    no_of_bedrooms INT,
    no_of_bathrooms INT,
    no_of_halls INT,
    no_of_kitchens INT,
    no_of_balconies INT,
    no_of_garages INT,
    no_of_parkings INT,
    has_garden BOOLEAN,
    pets_allowed BOOLEAN,
    bachelors_allowed BOOLEAN,
    additional_info VARCHAR(200) NOT NULL,
    FOREIGN KEY (property_type) REFERENCES property_type(type_id)
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'property' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 5: Status (status_id, status_name)

$sql = "CREATE TABLE status(
    status_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    status_name VARCHAR(30) NOT NULL
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'status' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 6: Owner (owner_id, owner_name, phone_no, email, address)

$sql = "CREATE TABLE owner(
    owner_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    owner_name VARCHAR(30) NOT NULL,
    phone_no VARCHAR(20) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    address VARCHAR(200)
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'owner' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 7: Property_Stats (property_id, city_id, status_id, owner_id, registered_on)

$sql = "CREATE TABLE property_stats(
    property_id INT,
    city_id INT,
    status_id INT,
    owner_id INT,
    registered_on TIMESTAMP DEFAULT NOW()
)";
if($mysqli->query($sql) === true){
    // echo "Table created successfully.";
    $status++;
} else if($mysqli->error != "Table 'property_stats' already exists"){
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

if($status == 7) {
    include __DIR__ ."/../insert/properties/manual.php";
}
 
// Close connection
// $mysqli->close();

// if($status == 7) {
// 	include __DIR__ ."/../insert/properties/manual.php";
// }

?>