<?php
if($_POST["message"]) {
    mail("akarlapudi03@gmail.com", "everthing-site registration", $_POST["message"], "From: hi@gmail.com");
}
?>
