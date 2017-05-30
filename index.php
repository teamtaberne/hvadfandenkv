
<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'index' ?>
    <?php include 'include/head.php'; ?>
    <title>Seneste nyt | Hvad fanden er kommunalvalg?</title>
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
      <img src="images/logo.png" alt="Kommunalvalg - Hvad fanden er kommunalvalg?">
      <div class="facts">
        <h2>SLADDER KASSEN</h2>
        <p>Vidste du at thai-kvinde-glade Ole Wedel blev valgt ind i Halsnæs Kommune i 2013</p>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1">
        <div class="maaling">
          <div class="col-1-1">
            <img src="images/mening1x.png" alt="Kommunalvalg - Meningsmåling">
          </div>
          <div class="col-1-2">
            <h3>EL mener at der er for få hænder i børnehaven - hvad mener du?</h3>
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
    <h2>Hvad er kommunalvalget, og Hvem kan stemme?</h2>
    <p>Kommunalvalget i Danmark afholdes hvert fjerde år af medlemmerne af kommunalbestyrelser,  Kommunalbestyrelser benævnes også i nogle kommuner byråd, og Københavns kommune vælger medlemmer af Borgerrepræsentationen. Afstemningen ved valgene er frie og hemmelige.
     Det sidste kommunalvalg var i 2013 for de 98 danske kommuner. Det næste Valg den 21. november 2017. </p>
    </section>
  </div>
  <div class="col-1-2 mobile-col-1-1">
    <section class="sektion_2billede">
      <img src="images/senestenyt3.jpg" alt="Kommunalvalg - Test dig selv">
      <h3>TEST DIG SELV</h3>
      <p>Hvilken lokalpolitiker ligner du mest?<br>Og her taler vi ikke om politiske holdninger - næn ej her
        tænker vi på personligheden.</p>
    </section>
  </div>
  </div>
</div>



  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  <?php include 'include/analytics.php'; ?>
  </body>
</html>
