<?php

if (!array_key_exists("lat", $_GET)) { exit(1); }
if (!array_key_exists("lon", $_GET)) { exit(1); }

echo $_GET["lat"] . " " . $_GET["lon"];

?>
