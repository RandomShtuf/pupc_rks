<div class="pup">
    <img src="{{ asset('images/pup_bg.jpg') }}" alt="Classroom Management" style="width: 100%; height: 100%; " />
</div>
<div class="header">
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('logo/pup_logo.png') }}" alt="PUP Logo">
        </div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li class="dropdown">
                <a href="#">About PUP-Calauan <i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#" style="color: rgb(0, 0, 0);">Vision & Mission</a></li>
                  <li><a href="#" style="color: rgb(0, 0, 0);">Administration</a></li>
                  <li><a href="#" style="color: rgb(0, 0, 0);">School Events</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">Academic ISO  <i class="fas fa-chevron-down" style="margin-left: 5px;"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('home.processes')}}" style="color: rgb(0, 0, 0);">Curriculum</a></li>
                  <li><a href="{{url("/")}}" style="color: rgb(0, 0, 0);">Student process</a></li>
                  <li><a href="#" style="color: rgb(0, 0, 0);">Others</a></li>
                </ul>
              </li>
              <li><a href="/">Archive</a></li>
              <li><a href="dashboard"><i class="fas fa-user"></i> Login</a></li>

            </ul>
    </div>
</div>

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
</script>
