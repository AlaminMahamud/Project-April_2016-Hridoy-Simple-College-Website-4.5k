<?php
$var = 'Articles';
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
          <li class="current"><a href="articles.php" class="m3">Our Articles</a></li>
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
        <h2 class=" myh2">Articles</h2>
        <ul class="articles">
          <li><img src="images/icon1.png">
            <h4><a href="article.php">Article 1</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="images/icon2.png">
            <h4><a href="#">Article 2</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="images/icon3.png">
            <h4><a href="#">Article 3</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="images/icon4.png">
            <h4><a href="#">Article 4</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="images/icon5.png">
            <h4><a href="#">Article 5</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="images/icon6.png">
            <h4><a href="#">Article 6</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
        </ul>
      </div>
    </section>
  </div>
</div>

  <!-- Footer -->
  <?php include 'footer.php'?>
  <!-- Footer End -->   