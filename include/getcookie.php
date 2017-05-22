<?php
  if(isset($_COOKIE['lastvisit']))
  {
    $last = $_COOKIE['lastvisit'];
    echo "Velkommen tilbage! <br> Sidste gang du besøgte os var ". $last;
  }
  else
  {
    echo "Velkommen til Hvad Fan' Er Kommunalvalg!";
  }
 ?>
