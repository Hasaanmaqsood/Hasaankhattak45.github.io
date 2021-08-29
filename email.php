<?php
$to = $_POST["email"];
$subject = $_POST["subject"].$_POST["name"];
$txt = $_POST["body"];
$headers = "From: Hasaankhattak159@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>


