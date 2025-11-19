<?php 
session_start();

$page = $_GET['page'] ?? 'home';

$page = trim($page, '/');

$file = "pages/{$page}.php";

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';

if (!in_array($l, ['en', 'ru', 'tm'])) {
	$l = 'en';
}
require_once 'language/' . $l . '.php';

if(!isset($_SESSION['ajax_token'])) {
    $_SESSION['ajax_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['ajax_token'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kämil syýahat — Туристическая компания</title>
    <meta name="description" content="Оформление виз, авиабилеты, бронирование отелей. Туркменистан. Пр. А. Ниязова.">
    <meta property="og:title" content="Kämil syýahat — Туристическая компания">
    <meta property="og:description" content="Оформление виз, авиабилеты, бронирование отелей">

	<link rel="shortcut icon" type="image/png" href="assets/logoks.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/logoks.png">
	<link rel="apple-touch-icon" href="assets/logoks.png">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/script.js" defer></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


	<!-- <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Nunito+Sans:wght@300;400;600&display=swap&subset=latin-ext,cyrillic" rel="stylesheet">

	<link href="js/fancybox.css" rel="stylesheet">
	<script src="js/fancybox.umd.js"></script>

	</head>
	<body class="<?= $page === 'home' ? 'homepage' : 'contentpage'?>">
<?php 
  include 'header.php'; 

	if (file_exists($file)) {
		include $file;
	} else {
		http_response_code(404);
		echo "<h2>Страница не найдена</h2>";
	}
?>
<button id="scrollTopBtn" title="Наверх">↑</button>

  <?php include 'footer.php'; ?>
  <script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/carouFredSel.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/ekkoLightbox.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/airplanes.js"></script>
	</body>
</html>