<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Venstre</title>
  </head>
<body>
  <?php include 'include/nav.php' ?>
  <div class="venstrehero">
    <div class="venstrehero-headline">
      <h1>VENSTRE</h1>
    </div>
  </div>

  <div class="maerkesager">
    <div class="maerkesager-headline">
      <h1> MÆRKESAGER </h1>
    </div>
    <div class="maerkesager-items">
      <div class="maerkesager-items-left">
        <table>
          <tr>
            <td><img src="images/ikoner/ungdom.png"></td>
            <td>SU'en skal ned</td>
          </tr>
          <tr>
            <td><img src="images/ikoner/beskæftigelse.png"></td>
            <td>Fuck kontantloftet</td>
          </tr>
          <tr>
            <td><img src="images/ikoner/miljø.png"></td>
            <td>Vi er aaaaalt for grønne</td>
          </tr>
        </table>
      </div>
      <div class="maerkesager-items-right">
        <table>
          <tr>
            <td><img src="images/ikoner/sundhed2.png"></td>
            <td>Behøver vi så mange hospitaler?</td>
          </tr>
          <tr>
            <td><img src="images/ikoner/økonomi.png"></td>
            <td>Lavere skatter!</td>
          </tr>
          <tr>
            <td><img src="images/ikoner/kultur.png"></td>
            <td>Vi gider heller ikke betale for licens!</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="politikere">
    <div class="politikere-left">
      <div class="politikere-politiker">
        <a href="charmaine.php">
          <div class="politikere-politiker-picture politikere-politiker-picture-serious" style="background-image: url(images/charmainef.JPG)">
          </div>
          <div class="politikere-politiker-picture politikere-politiker-picture-fun" style="background-image: url(images/charmainee.JPG)">
          </div>
          <h2> Charmaine McLean</h2>
        </a>
      </div> 
      <div class="politikere-politiker">
        <a href="#">
          <img src="images/larslykke.jpg">
          <h2> Lars Lykke Rasmussen</h2>
        </a>
      </div> 
      <div class="politikere-politiker">
        <a href="#">
          <div class="politikere-politiker-picture politikere-politiker-picture-serious" style="background-image: url(images/camillaf.JPG)">
          </div>
          <div class="politikere-politiker-picture politikere-politiker-picture-fun" style="background-image: url(images/camillae.JPG)">
          </div>
          <h2> Camilla Voss </h2>
        </a>
      </div> 
    </div>
    <div class="politikere-right">
      <div class="politikere-politiker">
        <a href="#">
          <img src="images/larslykke.jpg">
          <h2> Lars Lykke </h2>
        </a>
      </div> 
      <div class="politikere-politiker">
        <a href="#">
          <div class="politikere-politiker-picture politikere-politiker-picture-serious" style="background-image: url(images/tobiasf.JPG)">
          </div>
          <div class="politikere-politiker-picture politikere-politiker-picture-fun" style="background-image: url(images/tobiase.JPG)">
          </div>
          <h2> Tobias Heide </h2>
        </a>
      </div> 
      <div class="politikere-politiker">
        <a href="#">
          <img src="images/larslykke.jpg">
          <h2> Lars Lykke </h2>
        </a>
      </div> 
    </div> 
  </div>

  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
</body>
</html>
