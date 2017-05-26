<nav class="navigation grid-pad">
  <div class="navigation-left">
    <a href="index.php"><img class="navlogo" src="images/logo.png" alt="hvadfanderkommunalvalglogo"></a>
  </div>
  <div class="navigation-right">
    <ul class="navbar">
      <a href="index.php" class="<?= $active == 'index' ? 'active' : '' ?>"><li class="none">Seneste nyt</li></a>
      <a href="stalk.php" class="<?= $active == 'stalk' ? 'active' : '' ?>"><li class="none">Stalk din politiker</li></a>
      <a href="events.php" class="<?= $active == 'events' ? 'active' : '' ?>"><li class="none">Events</li></a>
      <a href="debat.php" class="<?= $active == 'debat' ? 'active' : '' ?>"><li class="none">Debat</li></a>
      <a href="kontakt.php" class="<?= $active == 'kontakt' ? 'active' : '' ?>"><li class="none">Kontakt Os</li></a>
      <a href="#"><li class="none" id="skift">Skift kommune</li></a>
      <a href="#"><li id="opens" class="open"><span>&#9776;</span></li></a>
    </ul>
  </div>
</nav>

<div class="sidenav" id="sidenav">
  <a href="index.php"><li>Seneste nyt</li></a>
  <a href="stalk.php"><li>Stalk din politiker</li></a>
  <a href="events.php"><li>Events</li></a>
  <a href="debat.php"><li>Debat</li></a>
  <a href="kontakt.php"><li>Kontakt Os</li></a>
  <a href="#"><li>Skift kommune</li></a>
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script type="text/javascript">
$(function(){
    $('#opens').on('click', function(){
        if( $('#sidenav').is(':visible') ) {
            $('#sidenav').animate({ 'width': '0px' }, 'slow', function(){
                $('#sidenav').hide();
            });
        }
        else if( $('#sidenav').is(':hidden') ) {
            $('#sidenav').show();
            $('#sidenav').animate({ 'width': '250px' }, 'fast');
        }
    });
});
</script>
