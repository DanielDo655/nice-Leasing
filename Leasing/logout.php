<?php
session_start();
session_destroy();
echo "Sie sind ausgeloggt! <meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";

?>