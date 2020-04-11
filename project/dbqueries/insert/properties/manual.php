<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/project/config.php";

$status = 0;

// Attempt insert query execution
// Table 1: Country (country_id, country_name)
// Table 2: City (city_id, city_name, country_id)
// Table 3: Property_Type (type_id, type_name)
// Table 4: Status (status_id, status_name)
// Table 5: Owner (owner_id, owner_name, phone_no, email, address)

// Table 1: Country (country_id, country_name)

$sql = "INSERT INTO country (country_name) VALUES
            ('India'),
            ('Bangladesh')";
if($mysqli->query($sql) === true){
    // echo "Records inserted successfully.";
    $status++;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 2: City (city_id, city_name, country_id)

$sql = "INSERT INTO city (city_name, country_id) VALUES
            ('Delhi-NCR', 1),
            ('Gurgaon', 1),
            ('Chandigarh', 1)";
if($mysqli->query($sql) === true){
    // echo "Records inserted successfully.";
    $status++;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 3: Property_Type (type_id, type_name)

$sql = "INSERT INTO property_type (type_name) VALUES
            ('Flat'),
            ('PG'),
            ('Villa')";
if($mysqli->query($sql) === true){
    // echo "Records inserted successfully.";
    $status++;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 4: Status (status_id, status_name)

$sql = "INSERT INTO status (status_name) VALUES
            ('Active'),
            ('Expired'),
            ('Rented'),
            ('In Progress')";
if($mysqli->query($sql) === true){
    // echo "Records inserted successfully.";
    $status++;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Table 5: Owner (owner_id, owner_name, phone_no, email, address)

$sql = "INSERT INTO owner (owner_name, phone_no, email) VALUES
            ('John', '8360337116', 'johnrambo@mail.com'),
            ('Clark', '8968388817', 'clarkkent@mail.com'),
            ('John', '7661993428', 'johncarter@mail.com'),
            ('Harry', '7661993426', 'harrypotter@mail.com')";
if($mysqli->query($sql) === true){
    // echo "Records inserted successfully.";
    $status++;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

if($status == 5) {
	echo "Database Setup Successful !!";
}else {
	echo "Error occurred while setting up database.";
}
 
// Close connection
$mysqli->close();
?>