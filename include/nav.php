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
        <a href="#"><li id="opens" class="open"><span>&#9776;</span></li></a>
      </ul>
    </div>
  </nav>
<div class="sidenav" id="sidenav">
  <a href="index.php"><li>Seneste nyt</li></a>
  <a href="stalk.php"><li>Stalk din politiker</li></a>
  <a href="event.php"><li>Events</li></a>
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
            $('#sidenav').animate({ 'width': '250px' }, 'slow');
        }
    });
});
</script>
