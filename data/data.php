<?php

require_once __DIR__ . '/../conf/config.php';

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';

function GetTours(){
    global $pdo;
    global $l;
    $sql = "SELECT t.id, t.slug, t.image, tt.title FROM tours t 
            INNER JOIN tour_translations tt ON t.id = tt.tour_id 
            WHERE tt.lang = :lang";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['lang' => $l]);
    return $stmt->fetchAll();
}

function GetTourById($slug){
    global $pdo;
    global $l;

    $sql = "SELECT t.id, t.slug, t.image, tt.title, tt.description, tt.duration FROM tours t 
            INNER JOIN tour_translations tt ON t.id = tt.tour_id 
            WHERE tt.lang = :lang and t.slug = :slug";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['lang' => $l, 'slug' => $slug]);
    return $stmt->fetch();
}

function GetTourImagesBySlug($slug){
    global $pdo;
    global $l;

    $sql = "SELECT i.id, i.path FROM tour_images i inner join tours t on t.id = i.tour_id WHERE t.slug = :slug";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['slug' => $slug]);
    return $stmt->fetchAll();
}

?>