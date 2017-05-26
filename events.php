<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'events' ?>
    <?php include 'include/head.php'; ?>
    <title>Events</title>
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
      <img src="images/livestream.png" alt="livestream-dansk-politk">
    </div>
    <div class="col-1-2 live_3 mobile-col-1-1">
      <h1>LIVE: Venstre holder pressemøde</h1>
      <p>BRØDTEKST</p>
    </div>
  </div>
</div>
<div class="live_background">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1 events_1">
      <h1>Kommende Events</h1>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/jatak.jpg" alt="Heide Milo">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Heide Milo siger:</h2>
          <p>Busstopsteder skal fjernes</p>
        </div>
        <div class="event-content-left">
          <h2>6.</h2>
          <p>maj</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/jatak.jpg" alt="Heide Milo">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Heide Milo siger:</h2>
          <p>Busstopsteder skal fjernes</p>
        </div>
        <div class="event-content-left">
          <h2>6.</h2>
          <p>maj</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/jatak.jpg" alt="Heide Milo">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Heide Milo siger:</h2>
          <p>Busstopsteder skal fjernes</p>
        </div>
        <div class="event-content-left">
          <h2>6.</h2>
          <p>maj</p>
        </div>
      </div>
    </div>
    <div class="col-1-2 mobile-col-1-1 events_2">
      <img src="images/jatak.jpg" alt="Heide Milo">
      <div class="event-content">
        <div class="event-content-right">
          <h2>Heide Milo siger:</h2>
          <p>Busstopsteder skal fjernes</p>
        </div>
        <div class="event-content-left">
          <h2>6.</h2>
          <p>maj</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
