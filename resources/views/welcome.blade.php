<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PUP - Calauan Branch</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<style>
   body, html {
  margin: 0;
  padding: 0;

}

.header {
  color: white;
}

.navbar {
  background-color: rgba(0, 0, 0, 0.5); /* Adjust transparency as needed */
  padding: 10px 0;
  display: flex;
  align-items: center;
  justify-content: space-around;
  font-family: Arial, Helvetica, sans-serif;

}

.logo img {
  height: 50px; /* Adjust size as needed */
}

.nav-links {
  list-style: none;
  font-size: 17px;
}

.nav-links li {
  display: inline;
  margin: 0 15px;
}

.nav-links a {
  text-decoration: none;
  color: rgb(255, 255, 255); |}
  .title-section {
    width: 80%;
    margin: 13% auto;
    border-bottom: 10px solid yellow;
    margin-bottom: 20px;

  }
  .title-text {
    font-size: 32px;
    color: yellow;
    margin-bottom: 20px;
  }
  .header {
  position: relative; /* Ensure header has relative positioning */
}

.dropdown {
  position: relative; /* Ensure dropdown container has relative positioning */
}

.dropdown-menu {
  margin-top: 30px;
  display: none; /* Hide dropdown menu by default */
  position: absolute; /* Position the dropdown menu absolutely */
  top: 100%; /* Position the dropdown menu below the parent */
  left: 0; /* Position the dropdown menu flush with the left edge of the header */
  background-color: rgb(255, 255, 255); /* Optional: Set background color */
  padding: 10px; /* Optional: Add padding for better readability */
  border: 1px solid #ccc; /* Optional: Add border for better appearance */
  z-index: 1000; /* Set a high z-index to ensure the dropdown appears over other elements */
border-radius: 5px;
font-family: Arial, Helvetica, sans-serif;

}

.dropdown-menu li {
  display: block; /* Display each list item as a block */
  margin-bottom: 20px; /* Add margin between each list item */
  width: 150px; /* Set the width of each list item */

}

.dropdown-menu li a {
  display: block; /* Display each link as a block to occupy full width */
}

.dropdown:hover .dropdown-menu {
  display: block; /* Show dropdown menu when parent (Classroom Management) is hovered */
}
h1 {
  font-size:40px;
  font-family: Copperplate; /* Specify Copperplate as the preferred font family */
  color: #ffffff

}
h2{
  font-size:40px;
  font-family: Copperplate, sans-serif; /* Specify Copperplate as the preferred font family */
  margin-left: 34%;
  color: #ffffff
}
.logo {
  display: flex; /* Use flexbox for easy alignment */
  align-items: center; /* Vertically center the items */
}

.logo-text {
  margin-left: 10px; /* Add some space between the image and text */
  font-family: Arial, Helvetica, sans-serif;
}

</style>

<body style="background-image: url('{{asset('images/pup_bg.jpg')}}'); background-size: cover; background-position: center; position: relative;">

</body>
  <div class="header">
    <div class="navbar">
      <div class="logo">
        <img src="{{ asset('logo/pup_logo.png') }}" alt="PUP Logo">
        <span class="logo-text">PUP-Calauan Branch</span>
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#">About PUP-Calauan  <i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">Vision & Mission</a></li>
            <li><a href="#" style="color: black;">Administration</a></li>
            <li><a href="#" style="color: black;">School Events</a></li>
          </ul>
        </li>
        <li><a href="#">Student Process </a></li>
        <li class="dropdown">
          <a href="#">Academic Process<i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">Curriculum</a></li>
            <li><a href="#" style="color: black;">Class Room Management</a></li>
            <li><a href="#" style="color: black;">Documents</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <div class="title-section">
    <h1>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h1>
    <h2>Calauan Branch</h2>
  </div>
</div>
</body>
</html>
