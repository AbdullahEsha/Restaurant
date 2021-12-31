<!DOCTYPE html>
<html lang="en">
<title>Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="../assets/css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-dark-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <a href="consumer/allOrders.php"><img src="https://img.icons8.com/ios-glyphs/344/ffffff/user-male-circle.png" alt="logo" height="40px"></a>
    <h3 class="w3-padding-64"><b>XYZ<br>Restaurant</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#menuList" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu List</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>XYZ Restaurant</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="menuList">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Menu List.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-third">
      <img height="320px" width="380px" src="../assets/img/food1.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img height="320px" width="380px" src="../assets/img/food2.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img height="320px" width="380px" src="../assets/img/food3.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>
    <div class="w3-third">
      <img height="320px" width="380px" src="../assets/img/food4.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img height="320px" width="380px" src="../assets/img/food5.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img height="320px" width="380px" src="../assets/img/food6.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>
    <div class="w3-third">
      <img height="320px" width="380px" src="../assets/img/food7.jpg" style="width:100%" alt="Windows for the atrium">
      <img height="320px" width="380px" src="../assets/img/food8.jpg" style="width:100%" alt="Bedroom and office in one space">
      <img height="320px" width="380px" src="../assets/img/food9.jpg" style="width:100%" alt="Scandinavian design">
    </div>
  </div>
  <br>
  <br>
  <div class="w3-section" align="center">
    <a href="menuList.php" id="mview" class="w3-xxlarge w3-text-grey" style="text-decoration: none;">View All...>></a>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright"></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  
  <!-- about us -->
  <div class="w3-container" id="aboutus" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>About Us.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>The best team in the world.</p>
    <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/chef.jpg" alt="John" height="400px" width="100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">Assistant Chef</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/chef2.jpg" alt="Jane" height="400px" width="100%">
        <div class="w3-container">
          <h3>Jane Doe</h3>
          <p class="w3-opacity">Head Chef</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/chef3.jpg" alt="Mike" height="400px" width="100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Assistant Chef</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-grey w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
<script src="..//assets/js/home.js"></script>
</body>
</html>
