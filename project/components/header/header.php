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
<div class="container1">
    <img src="/project/media/background-nav.jpg" alt="Background" style="width: 100%; opacity: 0.9;">
    <div class="centered" style="width: 50%; height: 50px; ">
        <form class="form-inline" action="/project/components/content/content.php" align="center" method="post">
            <input class="form-control mr-sm-2" style="width: 90%; height: 50px;" type="text" placeholder="Type your location here.." name = "search_location">
            <button class="btn btn-light" type="submit" style="height: 50px;" id="searchbtn">
                <a href="/project/components/content/content.php" style="color: gray; text-decoration: none;">
                    <i class="fa fa-map-marker" style="font-size:30px;color:orange"></i> 
                </a>
            </button>
        </form>
    </div>
</div>