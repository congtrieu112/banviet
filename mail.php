<?php
$to = "ittrjeu@gmail.com";
$subject = "Test Mailserver";
$header = "From : mrt@localhost";
$content = "Send from localhost";
$send = mail($to,$subject,$content,$header);
if($send) {
     echo "Success";
}else {
     echo "Fail";
}
?>