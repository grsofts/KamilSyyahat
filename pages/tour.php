<?php

$slug = $_GET['s'] ?? ''; 

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';


if(!isset($_SESSION['ajax_token'])) {
    $_SESSION['ajax_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['ajax_token'];

?>
<div class="container"  style="padding: 30px 0;">
    <h1>Туры</h1>

        <!-- Лоадер -->
        <div id="loader">Загрузка туров...</div>

        <div id="images-container"></div>
    <!-- <a data-fancybox=\"gallery\"
    href=\"{$tour['image_url']}\" target=\"_self\"
    data-caption=\"{$tour['title']}\">
        <img src=\"{$tour['image_url']}\" height=\"200\" style=\"border:solid 0.1px silver;border-radius:7px\" onerror=\"this.onerror=null;this.src='/no-image.jpg';\" />
    </a> -->

</div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const AJAX_TOKEN = "<?= $token ?>";
    const SLUG = "<?= $slug ?>";
    const container = document.getElementById("images-container");
    const loader = document.getElementById("loader");

    try {
        const images = await getTourImagesBySlug(SLUG, AJAX_TOKEN);
        renderImages(images, container);
    } catch (err) {
        loader.textContent = "Ошибка загрузки изображений";
        console.error(err);
        return;
    }

    loader.style.display = "none";
});

// --- Получение данных ---
async function getTourImagesBySlug(slug, token) {
    const res = await fetch(`data/images.php?slug=${encodeURIComponent(slug)}`, {
        headers: {
            "X-Requested-With": "XMLHttpRequest",
            "X-Ajax-Token": token
        }
    });
    if (!res.ok) throw new Error("Ошибка загрузки изображений");
    return await res.json();
}

// --- Отрисовка ---
function renderImages(images, container) {
    if (!images.length) {
        container.innerHTML = "<p>📷 Изображений пока нет.</p>";
        return;
    }

    container.innerHTML = images.map(img => `
        <figure class="tour-image">
            <img src="images/${img.path}"
                 alt=""
                 loading="lazy"
                 height="200"
                 onerror="this.src='/no-image.jpg'"
            >
            <hr>
        </figure>
    `).join("");
}
</script>
