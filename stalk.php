<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'stalk' ?>
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
  <div class="sectionhero_2">
    <div class="grid grid-pad pollogos">
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/venstre.jpg" alt="Venstre logo"></a>
      </div>
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/alter.png" alt="Venstre logo"></a>
      </div>
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/SF.jpg" alt="Venstre logo"></a>
      </div>
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/Ø.jpg" alt="Venstre logo"></a>
      </div>
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/LA.jpg" alt="Venstre logo"></a>
      </div>
      <div class="col-1-2 mobile-col-1-1 pollogo">
        <a href="venstre.php"><img src="images/pollogos/DF.jpg" alt="Venstre logo"></a>
    </div>
    </div>
  </div>
  <div class="sectionhero_2">
    <div class="grid grid-pad pollogos_2">
  </div>
  </div>
  <div class="clearfixlarge">

  </div>


  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  </body>
</html>
