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
                <td><img src="images/ikoner/alder.png"></td>
                <td>SU'en skal ned</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/hjemby.png"></td>
                <td>Fuck kontantloftet</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/kommune.png"></td>
                <td>Vi er aaaaalt for grønne</td>
              </tr>
            </table>
          </div>
          <div class="hero-content-facts-right">
            <table>
              <tr>
                <td><img src="images/ikoner/sparetime.png"></td>
                <td>Behøver vi så mange hospitaler?</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/funfact.png"></td>
                <td>Lavere skatter!</td>
              </tr>
              <tr>
                <td><img src="images/ikoner/citat.png alt="Ikon Citat""></td>
                <td>Vi gider heller ikke betale for licens!</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="hero-content-text">
          <table>
            <tr>
              <td><img class="icon-large" src="images/ikoner/politik.png"></td>
              <td>Behøver vi så mange hospitaler? Behøver vi så mange hospitaler? Behøver vi så mange hospitaler? Behøver vi så mange hospitaler? Behøver vi så mange hospitaler? Behøver vi så mange hospitaler?</td>
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
  </body>
</html>
