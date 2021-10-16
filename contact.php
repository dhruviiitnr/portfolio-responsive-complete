<?php
if($_POST["Message"]) {
mail("dhruvbhati2001@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: dhruvbhati2001@gmail.com");
}
?>