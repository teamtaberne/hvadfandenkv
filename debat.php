
<?php
require_once('db_con.php');

if (isset($_POST['submit'])) {
    $headline = filter_input(INPUT_POST, 'headline');
    $kommentar = filter_input(INPUT_POST, 'kommentar');
    $stmt = $con->prepare("INSERT INTO comment (headline,kommentar) VALUES (?,?)");
    $stmt->bind_param('ss', $headline, $kommentar);
    $stmt->execute();
    $stmt->close();
}

?>
<?php include 'include/analytics.php'; ?>

<!DOCTYPE html>
<html>
  <head>
  	<?php $active = 'debat' ?>
    <?php include 'include/head.php'; ?>
    <title>Debat | Hvad fanden er kommunalvalg?</title>
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
	<?php
		$sql = "SELECT id, headline, kommentar FROM comment";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while ($row = $result->fetch_assoc()) {
		        echo "<div class='debat-post'>
		                <div class='debat-post-content'>
		                    <h2>" . $row['headline'] . "</h2>
		                    <p>" . $row['kommentar'] . "</p>
		                </div>
		                <div class='debat-post-points'>
							<div class='debat-post-points-up'>
								<img src='images/ikoner/greenArrow.svg'>
								<h3>7</h3>
							</div>
							<div class='debat-post-points-down'>
								<img src='images/ikoner/redArrow.svg'>
								<h3>1</h3>
							</div>
						</div>
		            </div>";
		    }
		}
		$con->close();
	?>
	
	<div class="debatform">
		<form id="debatform" action="debat.php" method="POST">
		    <input type="text" id="headline" name="headline" placeholder="Overskrift" class="input">

		    <textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar" class="input"></textarea>
		    <br>
		    <input type="submit" name="submit" value="Send" class="button">
		</form>
	</div>
</div>

  <?php include 'include/footer.php'; ?>
  <?php include 'include/jquary.php'; ?>
  <script src="script.js"></script>
  </body>
</html>
