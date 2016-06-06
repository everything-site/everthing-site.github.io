<?php
if($_POST["message"]) {
    mail("akarlapudi03@gmail.com", "everthing-site registration", $_POST["message"], "From: bot@everything-site.github.io");
}
?>
<!DOCTYPE html>
<script type="text/javascript">
var password = "1234567890";
var string = prompt("Please enter the password", "");
if(string!=password) {
alert("U NOT DEV!");
window.location="/error";
}
</script>
<link rel="shortcut icon" href=http://vignette1.wikia.nocookie.net/uncyclopedia/images/3/35/Pokerface.jpg/revision/latest?cb=20121218010817>
<form method="post" action=/test.php>
    <textarea name="message"></textarea>
    <input type="submit">
</form>