<?php require_once('db_con.php'); ?>

<?php $polname = ''; ?>
<?php $party = ''; ?>
<?php $url = ''; ?>
<?php $output = ''; ?>
<?php
  if (isset($_POST['search'])) {
  $searchq = $_POST['search'];


  $query = mysqli_query($con, "SELECT * FROM politicians WHERE polname LIKE '%" .$searchq. "%' OR party LIKE '%" . $searchq . "%' OR url LIKE '%" . $searchq . "%'") or die(mysqli_error($con));
  $count = mysqli_num_rows($query);
  if ($count == 0) {
    $output = "Der var ingen søgeresultater prøv igen! Husk du kan kun søge på Politiker navne eller partier";
  } else {
    while($row = mysqli_fetch_array($query)) {
      $polname = $row['polname'];
      $party = $row['party'];
      $url = $row['url'];
    }
  }
}
?>
