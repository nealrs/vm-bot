<?php
include("config.php");
?>
<Response>
  <Sms><?php echo "Email Neal at ".$recipient; ?></Sms>
  <Say voice="man">Thank you! You should receive a text from us soon.</Say>
</Response>