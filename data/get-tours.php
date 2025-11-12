<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);
$ajaxToken = $data['ajax_token'] ?? null;

if (!isset($_SESSION['ajax_token']) || $ajaxToken !== $_SESSION['ajax_token']) {
    http_response_code(403);
    echo json_encode(['error' => 'Access denied']);
    exit;
}

require_once 'data.php';

$l = $_GET['lang'] ?? 'en';

$tours = GetTours($l);

// Отдаём как JSON
header('Content-Type: application/json');
echo json_encode($tours);