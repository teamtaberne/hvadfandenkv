<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'events' ?>
    <?php include 'include/head.php'; ?>
    <title>Events | Hvad fanden er kommunalvalg?</title>
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

  <div class="sectionhero_3">
    <div class="grid grid-pad">
      <div class="livestream">
        <div class="col-1-1 live_1 mobile-col-1-1">
          <h1>FIND ALLE KOMMENDE EVENTS HER</h1>
        </div>
        <div class="col-1-2 live_2 mobile-col-1-1">
          <img src="images/livestream.jpg" alt="Kommunalvalg - Livestream">
        </div>
        <div class="col-1-2 live_3 mobile-col-1-1">
          <h2>LIVE: Venstre holder pressemøde</h2>
          <h3>Klik på livestreamen for at se med!</h3>
        </div>
      </div>
    </div>
  </div>
<div class="live_background">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1 events_1">
      <h1>Kommende Events</h1>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/jatak.jpg" alt="Kommunalvalg - Heide Milo">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Mød Heide Milo</h2>
          <p>Hun er tough og klar til at vinde!</p>
        </div>
        <div class="event-content-left">
          <h2>6.</h2>
          <p>juni</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/kino.JPG" alt="Kommunalvalg - Gentofte Kino">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Meet 'n' greet</h2>
          <p>Mød de lokale politikere i Gentofte Kino</p>
        </div>
        <div class="event-content-left">
          <h2>12.</h2>
          <p>juni</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/hf.JPG" alt="Kommunalvalg - Gentofte HF">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Besøg på HF</h2>
          <p>De Konservative besøger skolen</p>
        </div>
        <div class="event-content-left">
          <h2>24.</h2>
          <p>juni</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/emmerys.JPG" alt="Kommunalvalg - Emmerys">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Gratis kaffe</h2>
          <p>Hos Emmerys til alle der har stemt</p>
        </div>
        <div class="event-content-left">
          <h2>12.</h2>
          <p>november</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <?php include 'include/analytics.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
