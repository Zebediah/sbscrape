<?php

include("wsssl/LIB_http.php");
// Download the target file
$target = "http://games.espn.go.com/ffl/scoreboard?leagueId=350417&seasonId=2012";
$ref = "http://games.espn.go.com";


$return_array = http_get_withheader($target, $ref);

echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);

// echo "ERRORS \n";
// var_dump($return_array["ERROR"]);

// echo "STATUS \n";
// var_dump($return_array['STATUS']);

?>