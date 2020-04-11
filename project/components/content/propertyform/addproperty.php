<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__."/../../header/headlinks.php" ?>
    <title>Register your property here..</title>
</head>

<body>
    
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top justify-content-between">
    <a class="navbar-brand text-center" href="/project/index.php">
        <img src="/project/media/logo.png" alt="Logo" style="height: 70px;">
    </a>
    <ul class="navbar-nav mr-sm-2">
        <li class="nav-item">
            <a class="nav-link" href="#">Login/ SignUp</a>
        </li>
        <li class="nav-item">
            <a href="/project/components/content/propertyform/addproperty.php" class="nav-link my-2 my-sm-0">Register your property here</a>
        </li>
    </ul>
</nav>

<div class="card" style="margin: 200px 300px 150px 300px;">
    <h5 class="card-header bg-warning text-center py-4">
        <strong>Register your Property</strong>
    </h5>
    <div class="card-body px-lg-5 pt-0" style="margin: 20px 20px 20px 20px;">
        <form  action="/project/index.php" method="post">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="propertyName">Property Name:</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="property_name" id="propertyName" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="propertyType">Property Type:</label>
                <div class="col-sm-8">
                    <div class="btn-group">
                        <select class="btn dropdown-toggle" data-toggle="dropdown" onchange="typeChange()" id="typeselect" required>
                            <div class="btn dropdown-menu dropdown-toggle">
                                <option class="btn dropdown-item" value= 1> Flats </option>
                                <option class="btn dropdown-item" value= 2> PG </option>
                                <option class="btn dropdown-item" value= 3> Villa </option>
                            </div>
                        </select>
                    </div>
                </div>
                <input class="form-control" type="hidden" name="property_type" id="propertyType" value="1">
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="rentApplicable">Expected Rent (per month):</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="rent" id="rentApplicable">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="propertyType">BHK:</label>
                <div class="col-sm-8">
                    <div class="btn-group">
                        <select class="btn dropdown-toggle" data-toggle="dropdown" onchange="otherBhk()" id="selectbhk">
                            <div class="btn dropdown-menu dropdown-toggle">
                                <option class="btn dropdown-item" value= 1 selected> 1 BHK </option>
                                <option class="btn dropdown-item" value= 2> 2 BHK </option>
                                <option class="btn dropdown-item" value= 3> 3 BHK </option>
                                <option class="btn dropdown-item" value= 4> Other </option>
                            </div>
                        </select>
                    </div>
                </div>
            </div>
            <div id="otherbhk" style="display: none;">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfBedrooms">No. Of Bedrooms:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_bedrooms" id="noOfBedrooms">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfBathrooms">No. Of Bathrooms:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_bathrooms" id="noOfBathrooms">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfHalls">No. Of Halls:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_halls" id="noOfHalls">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfKitchens">No. Of Kitchens:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_kitchens" id="noOfKitchens">
                </div>
            </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfBalconies">No. Of Balconies:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_balconies" id="noOfBalconies">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfGarages">No. Of Garages:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_garages" id="noOfGarages">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="noOfParkings">No. Of Parkings:</label>
                <div class="col-sm-8">
                    <input required class="form-control" type="number" name="no_of_parkings" id="noOfParkings">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="hasGarden">Do you have a garden?</label>
                <div class="col-sm-1" style="width: 50%;">
                    <input class="form-control"  type="checkbox" name="has_garden" id="hasGarden">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="petsAllowed">Are pets allowed?</label>
                <div class="col-sm-1">
                    <input class="form-control" type="checkbox" name="pets_allowed" id="petsAllowed">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="bachelorsAllowed">Bachelors allowed?</label>
                <div class="col-sm-1">
                    <input class="form-control" type="checkbox" name="bachelors_allowed" id="bachelorsAllowed">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="additionalInfo">Additional Facilities:</label>
                <div class="col-sm-8">
                    <input required class="form-control" style="height: 100px;" type="text" name="additional_info" id="additionalInfo">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="city">City:</label>
                <div class="col-sm-8">
                    <div class="btn-group">
                        <select required class="btn dropdown-toggle" onchange="cityChange()" data-toggle="dropdown" id="cityselect">
                            <div class="btn dropdown-menu dropdown-toggle">
                                <option class="btn dropdown-item" value= 1 selected> Delhi - NCR </option>
                                <option class="btn dropdown-item" value= 2> Gurgaon </option>
                                <option class="btn dropdown-item" value= 3> Chandigarh </option>
                            </div>
                        </select>
                    </div>
                </div>
                <input class="form-control" type="hidden" name="city_id" id="city" value="1">
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="owner">Owner:</label>
                <div class="col-sm-8">
                    <div class="btn-group">
                        <select required class="btn dropdown-toggle" onchange="ownerChange()" data-toggle="dropdown" id="ownerselect">
                            <div class="btn dropdown-menu dropdown-toggle">
                                <option class="btn dropdown-item" value= 1 selected> John Rambo </option>
                                <option class="btn dropdown-item" value= 2> Clark Kent </option>
                                <option class="btn dropdown-item" value= 3> John Carter </option>
                                <option class="btn dropdown-item" value= 4> Harry Potter </option>
                            </div>
                        </select>
                    </div>
                </div>
                <input class="form-control" type="hidden" name="owner_id" id="owner" value="1">
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button onclick="updateFields()" class="btn btn-warning" type="submit">
                        Register Property
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">

    var inp = document.getElementsByTagName("input");
    for(var i=0; i<inp.length; i=i+1){
        if(inp[i].type == "number"){
            inp[i].style.width = "50%";
        }
    }
    document.getElementById("noOfHalls").value = "1";
    document.getElementById("noOfKitchens").value = "1";
    document.getElementById("noOfBedrooms").value = "1";
    document.getElementById("noOfBathrooms").value = "1";

    function typeChange(){
        var tag = document.getElementById("typeselect");
        document.getElementById("propertyType").value = tag.value;
    }
    function otherBhk(){
        var tag = document.getElementById("selectbhk");
        if(tag.value == 4){
            document.getElementById("otherbhk").style.display = "block";
        }else{
            document.getElementById("otherbhk").style.display = "none";
        }
        if(tag.value == 2) {
            document.getElementById("noOfBedrooms").value = "2";
            document.getElementById("noOfBathrooms").value = "2";
        }
        if(tag.value == 3) {
            document.getElementById("noOfBedrooms").value = "3";
            document.getElementById("noOfBathrooms").value = "3";
        }
        document.getElementById("noOfHalls").value = "1";
        document.getElementById("noOfKitchens").value = "1";
    }

    function cityChange(){
        var tag = document.getElementById("cityselect");
        document.getElementById("city").value = tag.value;
    }
    function ownerChange(){
        var tag = document.getElementById("ownerselect");
        document.getElementById("owner").value = tag.value;
    }

</script>

<?php include __DIR__."/../../footer/footer.php" ?>

</body>
</html>