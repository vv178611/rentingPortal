<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/project/config.php";

$sql = "SELECT * FROM property p, property_stats ps, city c, owner o
        WHERE p.property_id = ps.property_id
        AND c.city_id = ps.city_id
        AND o.owner_id = ps.owner_id";

// Escape user inputs for security
if(isset($_REQUEST['last_search'])){
    $last_search = $_REQUEST['last_search'];
    $sql = $sql." AND ps.city_id IN $last_search";
}
        
if(isset($_REQUEST['flat'])){
    $flat = $mysqli->real_escape_string($_REQUEST['flat']);
    $sql = $sql." AND p.property_type = 1";
}
else 
    $flat = 0;
if(isset($_REQUEST['pg'])){
    $pg = $mysqli->real_escape_string($_REQUEST['pg']);
    $sql = $sql." AND p.property_type = 2";
}
else
    $pg = 0;
if(isset($_REQUEST['villa'])){
    $villa = $mysqli->real_escape_string($_REQUEST['villa']);
    $sql = $sql." AND p.property_type = 3";
}
else 
    $villa = 0;
if(isset($_REQUEST['bhk1'])){
    $bhk1 = $mysqli->real_escape_string($_REQUEST['bhk1']);
    $sql = $sql." AND p.no_of_bedrooms = 1 AND p.no_of_halls = 1 AND p.no_of_kitchens = 1";
}
else
    $bhk1 = 0;
if(isset($_REQUEST['bhk2'])){
    $bhk2 = $mysqli->real_escape_string($_REQUEST['bhk2']);
    $sql = $sql." AND p.no_of_bedrooms = 2 AND p.no_of_halls = 1 AND p.no_of_kitchens = 1";
}
else 
    $bhk2 = 0;
if(isset($_REQUEST['bhk3'])){
    $bhk3 = $mysqli->real_escape_string($_REQUEST['bhk3']);
    $sql = $sql." AND p.no_of_bedrooms = 3 AND p.no_of_halls = 1 AND p.no_of_kitchens = 1";
}
else
    $bhk3 = 0;

echo "
    <script>
        document.getElementById(\"last_search_location\").value = \"$last_search\";
    </script>
";

$sql = $sql . " ORDER BY ps.registered_on DESC ";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<aside class=\"col\">";
        $counter = 0;
        while($row = $result->fetch_array()){
            echo "
                <div class=\"card mb-3\" style=\"max-width: 100%\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-4\" style=\"padding: 10px;\">
                            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                              <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$counter + 0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$counter + 1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$counter + 2\"></li>
                              </ol>
                              <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                  <img class=\"d-block w-100 center\" src=\"/project/media/property/hall.jpg\" alt=\"First slide\">
                                </div>
                                <div class=\"carousel-item\">
                                  <img class=\"d-block w-100\" src=\"/project/media/property/bedroom.png\" alt=\"Second slide\">
                                </div>
                                <div class=\"carousel-item\">
                                  <img class=\"d-block w-100\" src=\"/project/media/property/kitchen.jpg\" alt=\"Third slide\">
                                </div>
                              </div>
                              
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <a href=\"#\"><h5 class=\"card-title\">". $row['property_name'] ."</h5></a>
                                <h6 class=\"card-title\">". "Rent: $" . $row['rent'] ."/Month</h6>
                                <h6 class=\"card-title\">". "Additional Facilities" ."</h6>
                                <p class=\"card-text\">". $row['additional_info'] ."</p>
                                <p class=\"card-text\">
                                    <small class=\"text-muted\">". $row['registered_on'] ."</small>
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">". "Owner Details" ."</h6>
                                <p class=\"card-text\">". $row['owner_name'] ."</p>
                                <p class=\"card-text\">". $row['address'] ."</p>
                                <p class=\"card-text\">". $row['email'] ."</p>
                                <p class=\"card-text\">". $row['phone_no'] ."</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        echo "</aside></div>";
        $result->free();
    }
    else{
        echo "<aside class=\"col\">No records were found. </aside></div>";
    }
} 
else{
    echo "
    <br></div>
    <div class=\"alert alert-danger alert-dismissible\" style=\"position: absolute;top: 45%;width: 50%;left: 25%;\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      <strong>Invalid Filter: </strong>
      Could not process your filter request. Please refresh and try again with proper values! Any inconvenience is regretted. Thank You.
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