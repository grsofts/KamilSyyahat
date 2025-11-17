<?php 

session_start();
$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';
require_once 'language/' . $l . '.php';


if(!isset($_SESSION['ajax_token'])) {
    $_SESSION['ajax_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['ajax_token'];
?>
<main class="container" style="padding: 30px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <h3><span><?= $lang["our_tours"]?></span></h3>
                <p></p>
            </div>
        </div>

        <!-- <div id="loader" style="position: relative; min-height: 200px;">
            <div id="loader" class="loader"></div>
        </div> -->

         <div id="loader-wrapper" style="position: relative; display:flex; justify-content:center; align-items:center; min-height: 200px;">
            <!-- <div id="loader" class="loader"></div> -->
            <img src="assets/loading1.gif" width="120" height="120" alt="Loading..." class="loader-dog" />
        </div>
        
        <div id="tours-container" class="row adoption">
            
        </div>
    </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const AJAX_TOKEN = "<?= $token ?>";
    fetch("data/get-tours.php?lang=<?= $l ?>", 
    {
         method: "POST",
        body: JSON.stringify({ ajax_token: "<?= $token ?>" }),
        headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-Ajax-Token': AJAX_TOKEN } // <-- важный заголовок
    })
    .then(res => {
        if(!res.ok) throw new Error("Ошибка загрузки");
        return res.json(); // получаем JSON
    })
    .then(data => {
        const container = document.getElementById("tours-container");
        container.innerHTML = '';
        data.forEach(tour => {
            const html = `
                <div class="col-md-4">
					<a href="tour?s=${encodeURIComponent(tour.slug)}" title=""><img src="images/${tour.image}" width="360" height="360" style="object-fit: cover;" alt="${tour.title}" /></a>
					<div class="title">
						<h5>
							<span data-hover="${tour.title}">${tour.title}</span>
						</h5>
					</div>
				</div>
            `;
            container.insertAdjacentHTML('beforeend', html);
        });
        document.getElementById("loader-wrapper").style.display = "none";
    })
    .catch(err => {
        document.getElementById("loader-wrapper").innerText = "Ошибка загрузки туров";
        console.error(err);
    });
});
</script>
