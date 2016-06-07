<?php
if($_POST["post"]) {
    mail("akarlapudi03@gmail.com", "everthing-site registration", $_POST["post"], "From: hi@gmail.com");
}
else{
    echo("THIS NO WORK")
}
?>
