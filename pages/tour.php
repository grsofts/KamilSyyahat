<?php

include_once 'data/data.php';

$slug = $_GET['s'] ?? ''; 

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';

$tour = GetTourById($slug);

echo "<h2>{$tour['title']}</h2>";


?>