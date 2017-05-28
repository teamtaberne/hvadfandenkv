<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Kontakt | Hvad fanden er kommunalvalg?</title>
  </head>
<body>
<?php $active = 'kontakt' ?>
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

<div class="kontakthero">
	<div class="kontakthero-headline">
		<h1>KONTAKT OS HVIS DU HAR SPØRGSMÅL ELLER KOMMENTARER TIL SIDEN</h1>
	</div>
</div>
<?php
  if(isset($_POST['sendmail'])){

	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('missing name');
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('missing e-mail');
	$message = filter_input(INPUT_POST, 'kommentar', FILTER_SANITIZE_STRING) or die('missing message');

	$to = 'teamtaberne@gmail.com';
	$subject = 'Hvad Fanden er kommunalvalg';
	$headers = "From: hvadfandenerkommunalvalg <'" .$email. "'>\r\n";
	$headers .=  'Reply-To: ' . $email . "\r\n";
	$headers .= "X-Mailer: PHP's mail() Function\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

	$authenticate = null;
	$message= $name. ' Har kontaktet dig. Besked: ' ."\n\n". '  '.$message.' '."\n\n".' '.$name.'s Information: ' ."\n". 'email: '.$email;
	$mailsent = mail($to, $subject, $message, $headers, $authenticate);
}
?>
<div class="kontaktform">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    <input type="text" id="name" name="name" placeholder="Navn" class="input" required data-validation="alphanumeric">

	    <input type="email" id="email" name="email" placeholder="Email" class="input" data-validation="email" required>

	    <textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar" class="input textbox" required data-validation-help="Være venlig at give os mere information"></textarea>
	    <br>
	    <input type="submit" value="send" name="sendmail" class="button">
  	</form>
</div>


  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <?php include 'include/analytics.php'; ?>
  <script src="script.js"></script>
  <script>
    $.validate({
    });
  </script>
  </body>
</html>
