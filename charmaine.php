<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'stalk' ?>
    <?php include 'include/head.php'; ?>
    <title>Charmaine McLean | Hvad fanden er kommunalvalg?</title>
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

  <?php include 'include/searchfunction.php' ?>
  <?php include 'include/search.php' ?>

  <div class="path">
    <div class="path-stalk">
      <a href="stalk.php">Stalk din politiker</a>
      <p> > </p>
    </div>
    <div class="path-venstre">
      <a href="venstre.php">Venstre</a>
      <p> > </p>
    </div>
    <div class="path-politiker">
      <a href="charmaine.php">Charmaine McLean</a>
    </div>
  </div>  


  <div class="politikerhero">
    <div class="hero-content">
      <div class="hero-content-left">
        <div class="hero-content-image" style="background-image: url(images/charmainef.JPG)">
        </div>
      </div>
      <div class="hero-content-right">
        <div class="hero-content-name">
          <h1>Charmaine McLean</h1>
        </div>
        <div class="hero-content-facts">
          <div class="hero-content-facts-left">
            <table>
              <tr>
                <td><img src="images/ikoner/alder.png" alt="Kommunalvalg - Alder"></td>
                <td>24 år</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/hjemby.png" alt="Kommunalvalg - Hjemby"></td>
                <td>Frederiksværk</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/kommune.png" alt="Kommunalvalg - Kommune"></td>
                <td>Gentofte Kommune</td>
              </tr>
            </table>
          </div>
          <div class="hero-content-facts-right">
            <table>
              <tr>
                <td><img src="images/ikoner/sparetime.png" alt="Kommunalvalg - Fritid"></td>
                <td>Jeg maler</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/funfact.png" alt="Kommunalvalg - Funfact"></td>
                <td>Når jeg er fuld laver jeg ballede</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/citat.png" alt="Kommunalvalg - Citat"></td>
                <td>Hoved og stat kommune (Andre kalder det Rudersdal kommune)</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="hero-content-text">
          <table>
            <tr>
              <td><img class="icon-large" src="images/ikoner/politik.png" alt="Kommunalvalg - Politik"></td>
              <td>Jeg synes dyr skal have det bedre. Er global opvarming så stort et issue? Folkeskolerne er lort - det skal der laves om på!</td>
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
  <?php include 'include/analytics.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
