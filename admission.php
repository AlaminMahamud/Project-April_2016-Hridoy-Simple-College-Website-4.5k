<?php
$var = 'Admission';
include 'template-start.php';
?>

<body id="page3">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="about-us.php" class="m2">About Us</a></li>
          <li class="current"><a href="admission.php" class="m3">Admission</a></li>
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
        <h2 class="myh2">Info About Admission</h2>
        <ul class="articles">
          <li><a href="#">H.S.C First Year Admission Link 2016</a></li>
        </ul>

        <div class="cleardiv"></div>

        <h2 class=" myh2">Info About Courses Running On</h2>
        
        <table id="customers">
            <tr>
                <th>No.</th>
                <th>Dept. Name</th>
                <th>Seat Capacity</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Dept. of Mathematics</td>
                <td>30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Dept. of Physics</td>
                <td>30</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dept. of Chemistry</td>
                <td>30</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dept. of Zoology</td>
                <td>30</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Dept. of Botany</td>
                <td>30</td>
            </tr>
        </table>

      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
