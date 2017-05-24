<?php include 'include/analytics.php'; ?>
<?php require_once 'include/cookie.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'include/head.php'; ?>
    <title>Seneste Nyt</title>
  </head>
<body>
<?php include 'include/nav.php' ?>

<div class="debathero">
	<div class="debathero-img">
		<img src="images/mening1x.png">
	</div>
	<div class="debathero-vote">
		<h2>EL mener at der er for få hænder i børnehaven - hvad mener du?</h2>
		<table>
		  <tr>
		    <td><img src="images/ikoner/A.svg"></td>
		    <td>Meget enig</td>
		  </tr>
		  <tr>
		    <td><img src="images/ikoner/B.svg"></td>
		    <td>Enig</td>
		  </tr>
		  <tr>
		    <td><img src="images/ikoner/C.svg"></td>
		    <td>Ved ikke</td>
		  </tr>
		  <tr>
		    <td><img src="images/ikoner/D.svg"></td>
		    <td>Uenig</td>
		  </tr>
		  <tr>
		    <td><img src="images/ikoner/E.svg"></td>
		    <td>Meget uenig</td>
		  </tr>
		</table>
	</div>
</div>

<div class="debat">
	<h1> EL mener at der er for få hænder i børnehaven - hvad mener du? </h1>
	<div class="debat-post">
		<div class="debat-post-content">
			<h2> Stakkels dem!</h2>
			<p>Jeg er enig!
				Puha, det må være hårdt at være pædagog i vore dage. Aldrig har der været så lidt personale til så mange børn.
			</p>
		</div>
		<div class="debat-post-points">
			<div class="debat-post-points-up">
				<img src="images/ikoner/greenArrow.svg">
				<h3>7</h3>
			</div>
			<div class="debat-post-points-down">
				<img src="images/ikoner/redArrow.svg">
				<h3>1</h3>
			</div>
		</div>
	</div>
	<div class="debat-post">
		<div class="debat-post-content">
			<h2> Stakkels dem!</h2>
			<p>Jeg er enig!
				Puha, det må være hårdt at være pædagog i vore dage. Aldrig har der været så lidt personale til så mange børn.
			</p>
		</div>
		<div class="debat-post-points">
			<div class="debat-post-points-up">
				<img src="images/ikoner/greenArrow.svg">
				<h3>7</h3>
			</div>
			<div class="debat-post-points-down">
				<img src="images/ikoner/redArrow.svg">
				<h3>1</h3>
			</div>
		</div>
	</div>
	<div class="debat-post">
		<div class="debat-post-content">
			<h2> Stakkels dem!</h2>
			<p>Jeg er enig!
				Puha, det må være hårdt at være pædagog i vore dage. Aldrig har der været så lidt personale til så mange børn.
			</p>
		</div>
		<div class="debat-post-points">
			<div class="debat-post-points-up">
				<img src="images/ikoner/greenArrow.svg">
				<h3>7</h3>
			</div>
			<div class="debat-post-points-down">
				<img src="images/ikoner/redArrow.svg">
				<h3>1</h3>
			</div>
		</div>
	</div>
	<div class="debatform">
		<form>
		    <input type="text" id="headline" name="headline" placeholder="Overskrift" class="input">

		    <textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar" class="input textbox"></textarea>
		    <br>
		    <input type="submit" value="Send" class="button">
		</form>
	</div>
</div>



  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  </body>
</html>
