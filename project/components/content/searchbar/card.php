<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/project/config.php";

// Escape user inputs for security
$search_location = $mysqli->real_escape_string($_REQUEST['search_location']);

$sql = "SELECT * FROM city
        WHERE LOWER(city_name) like LOWER(\"$search_location"."%"."\")";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        $search_location = '(';
        $counter = 0;
        while($row = $result->fetch_array()){
            if (++$counter == $result->num_rows) {
                $search_location = $search_location . $row['city_id'];
            } else {
                $search_location = $search_location . $row['city_id'] . ",";
            }
            
        }
        $search_location = $search_location . ")";
        $result->free();
    }
    else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

echo "
<script>
    document.getElementById(\"last_search_location\").value = \"$search_location\";
</script>
";

        // Attempt select query execution
$sql = "SELECT * FROM property p, property_stats ps, city c, owner o
        WHERE p.property_id = ps.property_id
        AND c.city_id = ps.city_id
        AND o.owner_id = ps.owner_id
        AND ps.city_id IN $search_location
        ORDER BY ps.registered_on DESC";

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
      <strong>Invalid Search: </strong>
      Currently, we do not serve your location! Hope to start soon..
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