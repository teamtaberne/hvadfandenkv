<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'stalk' ?>
    <?php include 'include/head.php'; ?>
    <title>Camilla Voss | Hvad fanden er kommunalvalg?</title>
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
      <a href="camilla.php">Camilla Voss</a>
    </div>
  </div>


  <div class="politikerhero">
    <div class="hero-content">
      <div class="hero-content-left">
        <div class="hero-content-image" style="background-image: url(images/camillaf.JPG)">
        </div>
      </div>
      <div class="hero-content-right">
        <div class="hero-content-name">
          <h1>Camilla Voss</h1>
        </div>
        <div class="hero-content-facts">
          <div class="hero-content-facts-left">
            <table>
              <tr>
                <td><img src="images/ikoner/alder.png" alt="Kommunalvalg - Alder" title="Alder"></td>
                <td>22 år</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/hjemby.png" alt="Kommunalvalg - Hjemby" title="Hjemby"></td>
                <td>Helsingør</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/kommune.png" alt="Kommunalvalg - Kommune" title="Kommune"></td>
                <td>Gentofte Kommune</td>
              </tr>
            </table>
          </div>
          <div class="hero-content-facts-right">
            <table>
              <tr>
                <td><img src="images/ikoner/sparetime.png" alt="Kommunalvalg - Fritid" title="Fritid"></td>
                <td>Jeg leger med Hugo hunden</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/funfact.png" alt="Kommunalvalg - Funfact" title="Funfact"></td>
                <td>Camilla elsker Ikea på lige fod med Simpson, og er et kæmpe hyggedyr til hverdag</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/citat.png" alt="Kommunalvalg - Citat" title="Citat"></td>
                <td>Alt hvad der kommer ud af hendes mund, bør censureres</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="hero-content-text">
          <table>
            <tr>
              <td><img class="icon-large" src="images/ikoner/politik.png" alt="Kommunalvalg - Politik" title="Politiske holdninger"></td>
              <td>Jeg synes det er forkert at blive tvunget til at betale licens. Højere friværdi før vi skal betale skat - det giver ingen mening at betale skat af SU. Mere fokus på at forbedre byen og gaderne.</td>
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
