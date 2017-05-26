<?php include 'include/analytics.php'; ?>
<?php include 'include/searchfunction.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'stalk' ?>
    <?php include 'include/head.php'; ?>
    <title>Tobias Heide | Hvad fanden er kommunalvalg?</title>
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

  <?php include 'include/search.php' ?>

  <div class="politikerhero">
    <div class="hero-content">
      <div class="hero-content-left">
        <div class="hero-content-image" style="background-image: url(images/tobiasf.JPG)">
        </div>
      </div>
      <div class="hero-content-right">
        <div class="hero-content-name">
          <h1>Tobias Heide</h1>
        </div>
        <div class="hero-content-facts">
          <div class="hero-content-facts-left">
            <table>
              <tr>
                <td><img src="images/ikoner/alder.png"></td>
                <td>21 år</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/hjemby.png"></td>
                <td>Nykøbing Falster</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/kommune.png"></td>
                <td>Gentofte Kommune</td>
              </tr>
            </table>
          </div>
          <div class="hero-content-facts-right">
            <table>
              <tr>
                <td><img src="images/ikoner/sparetime.png"></td>
                <td>Leger klatretøsen</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/funfact.png"></td>
                <td>Tobias elsker dølle-pøller. dank memes og siger aldrig nej til en øl med vennerne </td>
              </tr>
              <tr>
                <td><img src="images/ikoner/citat.png"></td>
                <td>*Peger på Martin Krasnik* Det er ham som der æder lort</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="hero-content-text">
          <table>
            <tr>
              <td><img class="icon-large" src="images/ikoner/politik.png"></td>
              <td>Alle muslimer skal ud af Danmark. Rød politik er for homoseksuelle. Der skal lavere skatter på biler</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="instagram">
    <img src="images/instagramcol.png" alt="Embedded instagram feed">
  </div>

  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
