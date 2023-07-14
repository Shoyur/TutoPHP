<?php
session_start();
// pour effacer du serveur et donc des échanges, 
// ce qui a été sauvegardé dans $_SESSION
session_destroy();
header("Location: /tutophp/13_sessions.php");

?>
