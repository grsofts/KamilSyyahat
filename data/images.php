<?php
session_start();
$headers = getallheaders();
$ajaxToken = $headers['X-Ajax-Token'] ?? null;

if (!isset($_SESSION['ajax_token']) || $ajaxToken !== $_SESSION['ajax_token']) {
    http_response_code(403);
    echo json_encode(['error' => 'Access denied']);
    exit;
}

require_once 'data.php';

$slug = $_GET['slug'] ?? '';

if(empty($slug)) {
    http_response_code(400);
    echo json_encode(['error' => 'Bad Request']);
    exit;
}

$images = GetTourImagesBySlug($slug);

header('Content-Type: application/json');
echo json_encode($images);