<?php
if($_GET["message"]) {
    mail("akarlapudi03@gmail.com", "everthing-site registration", $_GET["message"], "From: bot@everything-site.github.io");
}
?>