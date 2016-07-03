<?php
$var = "Home Page";
include 'template-start.php';
?>

<body id="page1">
<!-- START PAGE SOURCE -->

  <div class="wrap">
   
    <header>
      <div class="container">
        <h1><a href="#">Your College's site</a></h1>
        <nav>
          <ul>
            <li class="current"><a href="index.php" class="m1">Home Page</a></li>
            <li><a href="about-us.php" class="m2">About Us</a></li>
            <li><a href="articles.php" class="m3">Our Articles</a></li>
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
    
        <!-- Slides -->

        <div class="slide">
          <?php include 'slide.php';?> 
        </div>


            <!--    
            <div id="banner">
                  <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
              </div> 
            -->


        <div class="inside">
          <h2 class="myh2">Recent <span>Articles</span></h2>
          <ul class="list">
            <li><span><img src="images/icon1.png"></span>
              <h4>About Template</h4>
              <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
            </li>
            <li><span><img src="images/icon2.png"></span>
              <h4>Branch Office</h4>
              <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
            </li>
            <li class="last"><span><img src="images/icon3.png"></span>
              <h4>Student’s Time</h4>
              <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
            </li>
          </ul>
          <h2 class="myh2">Principal's Message</h2>
          <blockquote class="myblockquote">Move Forward <span>With Your Education</span></blockquote>
          <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
          <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
          <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p>
        </div>
      </section>
    </div>
  </div>


  <!-- Footer -->
  <?php include 'footer.php'?>
  <!-- Footer End -->