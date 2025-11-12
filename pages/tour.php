<?php

$slug = $_GET['s'] ?? ''; 

$l = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';


if(!isset($_SESSION['ajax_token'])) {
    $_SESSION['ajax_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['ajax_token'];

?>
<div class="container"  style="padding: 30px 0;">
    <h1 id="tour_title"></h1>

<!-- Slider -->
<div id="home_carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol id="carousel-indicators" class="carousel-indicators"></ol> 
    
    <!-- Wrapper for slides -->
    <div id="carousel-inner" class="carousel-inner" ></div>

    <!-- Controls -->
    <a class="left carousel-control" href="#home_carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#home_carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- Slider end -->

    <div id="loader-wrapper" style="position: relative; display:flex; justify-content:center; align-items:center; min-height: 200px;">
            <img src="assets/loading1.gif" width="120" height="120" alt="Loading..." class="loader-dog" />
    </div>

    <div id="tour_info" style="margin-top:50px">
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const AJAX_TOKEN = "<?= $token ?>";
    const SLUG = "<?= $slug ?>";
    const container = document.getElementById("carousel-inner");
    const containerIndicator = document.getElementById("carousel-indicators");
    const infoContainer = document.getElementById("tour_info");
    const title = document.getElementById("tour_title");
    const loader = document.getElementById("loader-wrapper");

    try {
        const tourInfo = await getTourInfoBySlug(SLUG, AJAX_TOKEN);
        renderInfo(tourInfo, title, infoContainer);

        const images = await getTourImagesBySlug(SLUG, AJAX_TOKEN);
        renderImages(images, container, containerIndicator);
    } catch (err) {
        loader.innerHTML = "<p>Ошибка загрузки изображений</p>";
        console.error(err);
        return;
    }

    loader.style.display = "none";
});

// --- Получение данных ---

// --- Отрисовка ---
function renderImages(images, container, containerIndicator) {
    if (!images.length) {
        container.innerHTML = "<p>📷 Изображений пока нет.</p>";
        container.style.display = "none";
        return;
    }

    const firstImage = images[0];

    container.innerHTML = images.map(img => `
        <div class="item ${img === firstImage ? 'active' : ''}" style="height:600px!important">
                <div class="bg-blur" 
                        style="
                            background-image:url('images/${img.path}');
                            background-size:cover;
                            background-position:center;
                            filter:blur(15px) brightness(0.7);
                            position:absolute;
                            top:0;left:0;width:100%;height:100%;
                            transform:scale(1.1);
                        ">
                    </div>
                <img src="images/${img.path}" loading="lazy" alt="" style="width:100%;object-fit:contain;" onerror="this.src='/no-image.jpg'/>
                <div class="carousel-caption">
                </div>

            </div>
    `).join("");

    images.forEach((img, index) => {
        const indicator = document.createElement("li");
        indicator.setAttribute("data-target", "#home_carousel");
        indicator.setAttribute("data-slide-to", index);
        indicator.style = "margin:0 2px; cursor:pointer;";
        if (index === 0) indicator.classList.add("active");
        containerIndicator.appendChild(indicator);
    });

    document.getElementById("loader-wrapper").style.display = "none";
}

function renderInfo(info, title, infoContainer) {

    if (!info) {
        title.innerHTML = "<p>📷 Информация пока нет.</p>";
        return;
    }

    title.textContent = info.title;

    infoContainer.innerHTML = `
        <h2 style="color: #333;font-weight: bold;">${info.duration}</h2>
        <div style="border-bottom: 1px solid #333; margin: 10px 0;"></div>
        <p>${info.description}</p>
    `;
}


async function getTourImagesBySlug(slug, token) {
    const res = await fetch(`data/images.php?slug=${encodeURIComponent(slug)}`, {
        method: "POST",
        body: JSON.stringify({ ajax_token: "<?= $token ?>" }),
        headers: {
            "X-Requested-With": "XMLHttpRequest",
            "X-Ajax-Token": token
        }
    });
    if (!res.ok) throw new Error("Ошибка загрузки изображений");
    return await res.json();
}

async function getTourInfoBySlug(slug, token) {
    const res = await fetch(`data/single-tour.php?s=${encodeURIComponent(slug)}&lang=<?= $l ?>`, {
        method: "POST",
        body: JSON.stringify({ ajax_token: "<?= $token ?>" }),
        headers: {
            "X-Requested-With": "XMLHttpRequest",
            "X-Ajax-Token": token
        }
    });
    if (!res.ok) throw new Error("Ошибка загрузки данных");
    return await res.json();
}

</script>
