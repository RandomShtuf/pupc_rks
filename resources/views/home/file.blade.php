<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PUP - Calauan Branch</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/files.css') }}">
</head>
<style>
body, html {
    height: 100%;
    margin: 0;
}
.header {
    
    z-index: 999; /* Ensure the header stays on top */
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    margin-top: 15%
}

.card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 1000px; /* Adjust width as needed */
    height: 800px; /* Adjust height as needed */
    overflow: hidden; /* Hide content overflowing from card */
}

.card-content {
    height: 100%; /* Ensure the content fills the card */
}

.pdf-embed {
    width: 100%;
    height: 100%;
}
</style>
<body >
  <div class="pup">
    <img src="{{ asset('img/pup.jpg') }}" alt="Classroom Management" style="width: 100%; height: 100%; " />  </div>
  <div class="header">
    <div class="navbar">
      <div class="logo">
        <img src="{{ asset('img/PUPLogo.png') }}" alt="PUP Logo">
        <span class="logo-text">PUP-Calauan Branch</span>
      </div>
      <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li class="dropdown">
          <a href="#">About PUP-Calauan  <i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: rgb(0, 0, 0);">Vision & Mission</a></li>
            <li><a href="#" style="color: rgb(0, 0, 0);">Administration</a></li>
            <li><a href="#" style="color: rgb(0, 0, 0);">School Events</a></li>
          </ul>
        </li>
        <li><a href="#">Student Process </a></li>
        <li class="dropdown">
          <a href="#">Academic Process  <i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
          <ul class="dropdown-menu">
            <li><a href="{{url("/classroommanagement")}}" style="color: rgb(0, 0, 0);">Class Room Management</a></li>
            <li><a href="#" style="color: rgb(0, 0, 0);">Curriculum</a></li>
            <li><a href="#" style="color: rgb(0, 0, 0);">Documents</a></li>
          </ul>
        </li>
     
      </ul>
    </div>
  </div>
  <div class="title-section">
    <h1>Teacher Assignment</h1>
  </div>
  <div class="container">
    <div class="card">
        <embed src="{{ asset('pdf/test.pdf') }}" type="application/pdf" class="pdf-embed" />
    </div>
</div>
 </body>
<script>
  window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    var navLinks = document.querySelectorAll('.nav-links a');
    var logoText = document.querySelector('.logo-text');
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollPosition > 0) {
      header.classList.add('scroll');
      navLinks.forEach(function(link) {
        if (!link.parentNode.classList.contains('dropdown-menu')) { // Exclude dropdown-menu items
          link.style.color = '#000';
        }
      });
      logoText.style.color = '#000';
    } else {
      header.classList.remove('scroll');
      navLinks.forEach(function(link) {
        if (!link.parentNode.classList.contains('dropdown-menu')) { // Exclude dropdown-menu items
          link.style.color = '#fff';
        }
      });
      logoText.style.color = '#fff';
    }
  });

  var header = document.querySelector('.header');
  header.addEventListener('mouseover', function() {
    this.classList.add('hover');
  });

  header.addEventListener('mouseout', function() {
    this.classList.remove('hover');
  });

  document.addEventListener('DOMContentLoaded', function() {
    var scrollableContent = document.getElementById('scrollableContent');

    scrollableContent.addEventListener('wheel', function(e) {
        var deltaY = e.deltaY;
        var currentScroll = scrollableContent.scrollTop;

        if (deltaY < 0 && currentScroll === 0) {
            e.preventDefault();
        } else if (deltaY > 0 && currentScroll >= (scrollableContent.scrollHeight - scrollableContent.offsetHeight)) {
            e.preventDefault();
        }
    });
});

</script>

</html>