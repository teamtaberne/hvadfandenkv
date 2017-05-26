<?php include 'include/analytics.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Template | Hvad fanden er kommunalvalg?</title>
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

</div>

<div class="sectionhero_1">

</div>


  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
