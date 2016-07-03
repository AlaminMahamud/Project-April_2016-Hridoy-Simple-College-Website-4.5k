<?php
$var = 'Results';
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
          <li class="current"><a href="results.php" class="m3">Results</a></li>
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

      <button class="btn" id="add">Add Result</button>
      <button class="btn" id="search">Search Result</button>


        <div class = "add-result">
          <form action="save_results.php" method="post">
            <p><span class="firstspan">Name </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Father's Name </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Mother's Name </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">College </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Role </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Year </span> <span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Board </span> <span class="secondspan"><input type="text"></input></span></p>
            <button type="submit" class="btn"  value="submit">Submit</button>
          </form>

        </div>

        <div class= "search-result">
          <form action="results_query.php" method="post">            
            <p><span class="firstspan">Role </span><span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Year </span><span class="secondspan"><input type="text"></input></span></p>
            <p><span class="firstspan">Board </span><span class="secondspan"><input type="text"></input></span></p>
            <button type="submit" class="btn" value="submit">Submit</button>
          </form>
        </div>
        <div class="cleardiv"></div>

    </section>
  </div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $(".add-result,.search-result").hide();
    $(".search-result").show();
    $("#search").addClass("highlight");
        $('#add').click(function(){
          $(".search-result").hide();
          $("#search").removeClass("highlight");  
          $(".add-result").show();
          $("#add").addClass("highlight");  
        });
        $('#search').click(function(){
          $(".add-result").hide();
          $("#add").removeClass("highlight"); 
          $(".search-result").show();
          $("#search").addClass("highlight");

        });
    });
</script> 

  <!-- Footer -->
  <?php include 'footer.php'?>
  <!-- Footer End -->
