<?php

$http = $_SERVER["HTTPS"] ? "https://" : "http://";

header("Location:" . $http . $_SERVER["HTTP_HOST"] . "the-hive/discovery-center");