
<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'index' ?>
    <?php include 'include/head.php'; ?>
    <title>Seneste Nyt</title>
  </head>
<body>
<?php include 'include/nav.php' ?>

<div id="skiftkommune" class="box">
  <div class="box-content">
    <h2>Skift din kommune</h2>
    <select id="kommune" name="country">
      <option value="gentofte">Gentofte</option>
      <option value="kbh">København</option>
      <option value="hels">Helsingør</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Vælg" class="close">
  </div>
</div>

<div class="sectionhero_1">
  <div class="grid grid-pad">
    <div class="col-1-2 mobile-col-1-1">
      <img src="images/logo.png" alt="Logo">
      <div class="facts">
        <h1>SLADDER KASSEN</h1>
        <p>At thai-kvinde-glade Ole Wedel blev valgt ind i Halsnæs Kommune i 2013</p>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1">
        <div class="maaling">
          <div class="col-1-1">
            <img src="images/mening1x.png" alt="Meningsmåling">
          </div>
          <div class="col-1-2">
            <h2>EL mener at der er for få hænder i børnehaven - hvad mener du?</h2>
          </div>
          <div class="col-1-2">
        <form class="meningsmaaling" action="index.html" method="post">
          <ul>
          <input type="radio" name="A" value="Meget Enig"><label>Meget Enig</label><br>
          <br>
          <input type="radio" name="A" value="Enig"><label>Enig</label><br>
          <br>
          <input type="radio" name="A" value="Ved ikke"><label>Ved ikke</label><br>
          <br>
          <input type="radio" name="A" value="Uenig"><label>Uenig</label><br>
          <br>
          <input type="radio" name="A" value="Meget uenig"><label>Meget uenig</label><br>
          </ul>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfixtablet">
</div>
<div class="sectionhero_1_1">
<div class="grid grid-pad">
  <div class="col-1-2 mobile-col-1-1">
    <section class="seneste_tekst">
    <h2>Kan skoleelever i sjetteklasse, arbejde ved søen uden at ødelægge naturen?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
      sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
  </div>
  <div class="col-1-2 mobile-col-1-1">
    <section class="sektion_2billede">
      <img src="images/senestenyt3.jpg" alt="Fyld">
      <h2>TEST DIG SELV</h2>
      <p>Hvilken lokalpolitiker ligner du mest?<br>Og her taler vi ikke om politiske holdninger - næn ej her
        tænker vi på personligheden</p>
    </section>
  </div>
  </div>
</div>
<div class="clearfixsmall">
</div>












  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
