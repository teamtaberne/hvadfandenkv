<nav class="navigation grid-pad">
  <div class="navigation-left">
    <a href="index.php"><img class="navlogo" src="images/logo.png" alt="hvadfanderkommunalvalglogo"></a>
  </div>
  <div class="navigation-right">
    <ul class="navbar">
      <li class="none"><a href="index.php" class="<?= $active == 'index' ? 'active' : '' ?>">Seneste nyt</a></li>
      <li class="none"><a href="stalk.php" class="<?= $active == 'stalk' ? 'active' : '' ?>">Stalk din politiker</a></li>
      <li class="none"><a href="events.php" class="<?= $active == 'events' ? 'active' : '' ?>">Events</a></li>
      <li class="none"><a href="debat.php" class="<?= $active == 'debat' ? 'active' : '' ?>">Debat</a></li>
      <li class="none"><a href="kontakt.php" class="<?= $active == 'kontakt' ? 'active' : '' ?>">Kontakt os</a></li>
      <li class="none" id="skift"><a href="#">Skift kommune</a></li>
      <li id="opens" class="open"><a href="#"><span>&#9776;</span></a></li>
    </ul>
  </div>
</nav>

<div class="sidenav" id="sidenav">
  <ul>
  <li><a href="index.php" class="<?= $active == 'index' ? 'active' : '' ?>">Seneste nyt</a></li>
  <li><a href="stalk.php" class="<?= $active == 'stalk' ? 'active' : '' ?>">Stalk din politiker</a></li>
  <li><a href="events.php" class="<?= $active == 'events' ? 'active' : '' ?>">Events</a></li>
  <li><a href="debat.php" class="<?= $active == 'debat' ? 'active' : '' ?>">Debat</a></li>
  <li><a href="kontakt.php" class="<?= $active == 'kontakt' ? 'active' : '' ?>">Kontakt Os</a></li>
  <li id="skifte"><a href="#">Skift Kommune</a></li>
  </ul>
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script type="text/javascript">
$(window).on('load', function(){
    var toggle = false;
    $('#opens').click(function() {
        toggle = !toggle;
        if(toggle){
            $('#sidenav').animate({width: 200});
        }
        else{
            $('#sidenav').animate({width: 0});
        }
    });
});
</script>
