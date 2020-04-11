<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__."/../header/headlinks.php" ?>
    <title>Stay Hassle Free in Flats, PGs</title>
</head>

<body>
    <?php include __DIR__."/../header/header.php" ?>
    <?php include __DIR__."/filter/filterbar.php" ?>
    <?php 
    	if(isset($_REQUEST['search_location'])){
    		include __DIR__."/searchbar/card.php";
    	} 
    ?>
    <?php
		if(isset($_REQUEST['last_search'])){
		    include __DIR__."/filter/querycarddata.php";
		}
    ?>
    <?php include __DIR__."/../footer/footer.php" ?>
</body>
</html>

