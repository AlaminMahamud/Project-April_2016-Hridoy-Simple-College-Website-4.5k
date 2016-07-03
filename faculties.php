<?php
$var = 'Faculties';
include 'template-start.php';
?>

<body id="page3">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Your College's site</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="about-us.php" class="m2">About Us</a></li>
          <li class="current"><a href="faculties.php" class="m3">Faculties</a></li>
          <li><a href="contact-us.php" class="m4">Contact Us</a></li>
          <li class="last"><a href="sitemap.php" class="m5">Sitemap</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
     <?php include 'aside.php';?>

    <section id="content">
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      <div class="inside">
        <h2 class=" myh2">Faculties</h2>
  <ol class="myol">
          <li>Faculty Of Civil Engineering
            <ol>
              <li>Civil Engineering</li>
              <li> Disaster & Environmental Engineering</li>
              <li>Civil & Water Resources Engineering</li>
            </ol>
          </li>
          <li>Faculty Of Mechanical Engineering
            <ol>
              <li>Mechanical Engineering</li>
              <li>Petroleum and Mining Engineering</li>
              <li>Mechatronics Engineering</li>
            </ol>
          </li>
          <li>Faculty Of Electrical Engineering
            <ol>
              <li>Electrical & Electronics Engineering</li>
              <li>Electrical & Telecommunications Engineering</li>
            </ol>
          </li>
          <li>Faculty Of Architechture
            <ol>
              <li>Department of Architechture</li>
            </ol>
          </li>
          <li>Faculty Of Urban And Regional Planning
            <ol>
              <li>Urban & Rexgional Planning</li>
            </ol>
          </li>
        </ol>
      </div>
    </section>
  </div>
</div>

  <!-- Footer -->
  <?php include 'footer.php'?>
  <!-- Footer End -->   