<?php
require_once("header.php");
session_unset();
session_destroy();
redirect('index.php');
?>

<?php
require_once("footer.php");
