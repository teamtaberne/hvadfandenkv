<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Kontakt</title>
  </head>
<body>
<?php $active = 'kontakt' ?>
<?php include 'include/nav.php' ?>
<div class="kontakthero">
	<div class="kontakthero-headline">
		<h1>KONTAKT OS HVIS DU HAR SPØRGSMÅL ELLER KOMMENTARER TIL SIDEN</h1>
	</div>
</div>


<div class="kontaktform">
	<form>
	    <input type="text" id="name" name="name" placeholder="Navn" class="input">

	    <input type="email" id="email" name="email" placeholder="Email" class="input">

	    <textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar" class="input textbox"></textarea>
	    <br>
	    <input type="submit" value="Send" class="button">
  	</form>
</div>





  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  </body>
</html>
