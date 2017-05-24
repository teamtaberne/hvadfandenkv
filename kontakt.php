<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Kontakt</title>
  </head>
<body>
<?php include 'include/nav.php' ?>
<div class="kontakthero">
	<div class="kontakthero-headline">
		<h1>KONTAKT OS HVIS DU HAR SPØRGSMÅL ELLER KOMMENTARER TIL SIDEN</h1>
	</div>
</div>

<div class="kontaktform">
    <input type="text" id="name" name="name" placeholder="Navn">

    <input type="email" id="email" name="email" placeholder="Email">

    <textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  </body>
</html>
