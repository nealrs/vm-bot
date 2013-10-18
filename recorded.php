<?php

// strip the data for all we need
//$data = array(
//  "From" => $_REQUEST['From'],
//  "FromCity" => $_REQUEST['FromCity'],
//  "FromCountry" => $_REQUEST['FromCountry'],
//  "RecordingUrl" => $_REQUEST['RecordingUrl'],
//  "Time" => date(),
//);

// email us the details
//mail("nealrs@gmail.com", "New vm from ".$_REQUEST['From'], print_r($data, true));

?>
<Response>
  <Say voice="man">Thanks so much!</Say>
  <Gather action="gather.php" numDigits="1">
    <Say voice="man">Press 0 to go back to the main menu, or just hang up.</Say>
  </Gather>
</Response>