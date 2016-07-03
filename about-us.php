<?php
$var = 'About Us';
include 'template-start.php';
?>

<body id="page2">
<!-- START PAGE SOURCE -->
<div class="wrap">
  
  <header>
    <div class="container">
      <h1><a href="#">Your College's site</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li class="current"><a href="about-us.php" class="m2">About Us</a></li>
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
    

        <h2 class="myh2">Image <span>Gallery</span></h2>

             <div class="image-gallery">
              <div class="image-snippet">
                <img src="nivo-slider/demo/images/image1.jpg">
              </div>
              
              <div class="image-snippet">
                <img src="nivo-slider/demo/images/image2.jpg">
              </div>
              
              <div class="image-snippet">
                <img src="nivo-slider/demo/images/image3.jpg">
              </div>
              
              <div class="image-snippet">
                <img src="nivo-slider/demo/images/image4.jpg">
             </div>
              
              <div style="  clear:both; margin-bottom:  10px"  ></div>

            </div>      



            <div id="banner">
                  <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
              </div> 

      <div class="inside">
        <h2 class="myh2">Our <span>Honorable Teachers</span></h2>
        <ul class="list">
          <li><img src="images/gravatar4.png" width="175px">
            <h4 class=" myh4">Principle</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li><img src="images/gravatar2.png" width="175px">
            <h4 class=" myh4">Vice Principle</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li class="last"><img src="images/gravatar3.png" width="175px">
            <h4 class=" myh4">Registrar</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
        </ul>
        <h2 class="myh2">About <span>Our College</span></h2>
        <div class="img-box"><img src="images/2page-img4.jpg"><span class="txt1">Nemo enim ipsam voluptatem</span> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore aliquam. </div>
        <p class="p0"><span class="txt1">Quis autem vel eum</span> iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptasaut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
      </div>
    </section>
  </div>
  <!-- Footer -->
  <?php include 'footer.php'?>
  <!-- Footer End -->
