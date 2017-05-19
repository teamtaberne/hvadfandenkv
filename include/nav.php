<nav class="navigation grid-pad">
    <div class="col-3-12 mobile-col-2-3">
      <a href="index.php"><img class="navlogo" src="images/logo.png" alt="hvadfanderkommunalvalglogo"></a>
    </div>
    <div class="col-9-12 mobile-col-0-3">
      <ul class="navbar">
        <a href="index.php"><li class="none">Seneste nyt</li></a>
        <a href="stalk.php"><li class="none">Stalk din politiker</li></a>
        <a href="event.php"><li class="none">Events</li></a>
        <a href="debat.php"><li class="none">Debat</li></a>
        <a href="kontakt.php"><li class="none">Kontakt Os</li></a>
        <a href="#"><li class="none">Skift kommune</li></a>
        <a href="#"><li class="open"><span onclick="openNav()">&#9776;</span></li></a>
      </ul>
    </div>
  </nav>
<div class="sidenav" id="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php"><li>Seneste nyt</li></a>
  <a href="stalk.php"><li>Stalk din politiker</li></a>
  <a href="event.php"><li>Events</li></a>
  <a href="debat.php"><li>Debat</li></a>
  <a href="kontakt.php"><li>Kontakt Os</li></a>
  <a href="#"><li>Skift kommune</li></a>
</div>
<script type="text/javascript">
function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}
</script>
