<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header/headlinks.php" ?>
    <title>Stay Hassle Free in Flats, PGs</title>
</head>
<body>
	<?php include "dbqueries/create/database.php"; ?>
	<?php include "dbqueries/create/properties.php"; ?>
	<?php include "components/header/header.php" ?>
	<?php 
    	if(isset($_REQUEST['property_name'])){
    		include "dbqueries/insert/properties/form.php";
    	} 
    ?>
    <?php include "components/footer/footer.php" ?>
</body>
</html>