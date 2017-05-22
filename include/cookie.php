<?php
$month = 2592000 + time();
setcookie("lastvisit", date("F jS - g:i a e"), $month);
 ?>
