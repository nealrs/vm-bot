<?php

include("config.php");

// strip the data for all we need
$data = array(
  "From" => $_REQUEST['From'],
  "TranscriptionText" => $_REQUEST['TranscriptionText'],
  "RecordingUrl" => $_REQUEST['RecordingUrl'],
  "Time" => date(),

);

// email us the details
mail($recipient, "New vm from ".$_REQUEST['From'], print_r($data, true));

?>
