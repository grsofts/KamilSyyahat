<?php

include_once 'data/data.php';

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';
require_once 'language/' . $l . '.php';

$tours = GetTours($l);

?>


<main class="container" style="padding: 30px 0;">
  <h1>Наши туры</h1>
  <div id="tour-list">
    
  </div>
  
    <?php 
        foreach ($tours as $tour) {
            echo "<h3>{$tour['title']}</h3>";
            echo "<a href=" . 'tour?s=' . $tour['slug'] . ">More details</a><hr>";
        } 
    ?>
</main>


<!-- 
$tours = GetTours($l);

