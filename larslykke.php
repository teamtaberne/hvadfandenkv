<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Seneste Nyt</title>
  </head>
<body>
<?php include 'include/nav.php' ?>
<div class="search_1">
  <div class="col-1-1 mobile-col-1-1">
    <input type="search" name="Search" value="SØG">
  </div>
</div>
<div class="sectionhero_2_1">
  <div class="grid grid-pad profile">
    <div class="col-1-1">
      <div class="col-3-12 profilepic">
      <img src="images/larslykke.jpg" alt="lars lykke min ven">
      </div>
      <div class="col-9-12 navn">
      <h1>Lars lykke Rasmussen</h1>
      <div class="col-1-2 icons">
        <ul>
          <li><img src="images/ikoner/alder.png" alt="Ikon Alder"> Su'en skal ned!</li>
          <li><img src="images/ikoner/hjemby.png" alt="Ikon Hjemby"> Fuck kontantloftet</li>
          <li><img src="images/ikoner/kommune.png" alt="Ikon Kommune"> Hulk har også følelser</li>
        </ul>
      </div>
      <div class="col-1-2 icons">
        <ul>
          <li><img src="images/ikoner/sparetime.png" alt="Ikon Fritid"> Hospitaler er for de svage</li>
          <li><img src="images/ikoner/funfact.png" alt="Ikon Sjov fact"> Skat er til mænd</li>
          <li><img src="images/ikoner/citat.png" alt="ikon Citat"> Gratis tv</li>
        </ul>
      </div>
      </div>
      <div class="col-1-1 politiktekst">
        <div class="col-1-2 icons_1">
          <img src="images/ikoner/politik.png" alt="Ikon Politik">
        </div>
        <div class="col-1-2 tekst">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="col-1-1 mobile-col-1-1 instafeed">
      <img src="images/instagramfeed.jpg" alt="Instragram Feed">
    </div>
  </div>
</div>


  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  </body>
</html>
