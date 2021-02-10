<?php

$sendOutputToNodejs = "<html><body><h1>This html is sent from PHP to Node JS!</h1><h2>Try and experiment!</h2>";
$sendOutputToNodejs .= "This is the output from PHP Script :: <br /><br />";
$sendOutputToNodejs .= " First Name :" . $argv[1] . "  <br /><br />";
$sendOutputToNodejs .= " Last Name :" . $argv[2] . "  <br /><br />";
$sendOutputToNodejs .= "</body></html>";

echo $sendOutputToNodejs;