<?php 


?>

<!-- Slider -->
<div id="home_carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home_carousel" data-slide-to="1"></li>
        <li data-target="#home_carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/slider1.jpg" alt="" />
            <div class="carousel-caption">
                <h2 style="font-weight:700"><?= $lang["slider_title1"] ?></h2>
                <p style="color:var(--primary-blue)"><?= $lang["slider_text1"] ?></p>
                <!-- <form method="get" action="index.html">
                    <button type="submit" class="btn btn-lg btn-default">Learn more</button>
                    </form> -->
            </div>

        </div>


        <div class="item">
            <img src="images/travel2.jpg" alt="" />
            <div class="carousel-caption">
                <h2>Lorem ipsum delor sit amet</h2>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</p>
                <form method="get" action="index.html">
                    <button type="submit" class="btn btn-lg btn-default">Learn more</button>
                </form>
            </div>
        </div>

        <div class="item">
            <img src="images/travel3.jpg" alt="" />
            <div class="carousel-caption">
                <h2>Lorem ipsum delor sit amet 3</h2>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</p>
                <form method="get" action="index.html">
                    <button type="submit" class="btn btn-lg btn-default">Learn more</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#home_carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#home_carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- Slider end -->

<!-- Services -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Dog boarding kennels" class="roundal" id="kennel"></a>
            <h3><?= $lang['ashgabat'] ?></h3>
            <p class="truncate-2"><?= $lang['ashgabat_description'] ?></p>
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Doggy grooming" class="roundal" id="grooming"></a>
            <h3><?= $lang['akhal'] ?></h3>
            <p class="truncate-2"><?= $lang['akhal_description'] ?></p>
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Adoption centre" class="roundal" id="adoption"></a>
            <h3><?= $lang['balkan'] ?></h3>
            <p class="truncate-2"><?= $lang['balkan_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Dog walking" class="roundal" id="walking"></a>
            <h3><?= $lang['dashoguz'] ?></h3>
            <p class="truncate-2"><?= $lang['dashoguz_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Care advice" class="roundal" id="advice"></a>
            <h3><?= $lang['mary'] ?></h3>
            <p class="truncate-2"><?= $lang['mary_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a href="services-single.html" title="Puppy play" class="roundal" id="play"></a>
            <h3><?= $lang['lebap'] ?></h3>
            <p class="truncate-2"><?= $lang['lebap_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span><?= $lang['our_tours'] ?> </span></h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
        </div>
    </div>
</div>
<!-- Services end -->
 <!-- Carousel -->

 <div id="c-carousel">
    <div id="wrapper">
        
        <div id="loader-wrapper" style="position: relative; min-height: 200px;">
            <div id="loader" class="loader"></div>
        </div>

        <div id="carousel">
             
        </div>
        <div id="pager" class="pager"></div>
    </div>
</div>
<!-- Carousel end -->
<!-- Rehome -->
<div class="rehome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <p><a href="#" title="Dougie" class="roundal"></a></p>
                <h4>Could you give <a href="adoption-single.html" title="Could you give Dougie a new home?">Dougie</a> a new home?</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                <form method="get" action="adoption-single.html">	
                    <button type="submit" class="btn btn-default btn-green">Learn more</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Rehome end -->
<!-- Testimonials -->
<div class="testimonials" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <!-- Slider -->
                <div id="home_testimonial" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#home_testimonial" data-slide-to="0" class="active"></li>
                        <li data-target="#home_testimonial" data-slide-to="1"></li>
                        <li data-target="#home_testimonial" data-slide-to="2"></li>
                        <li data-target="#home_testimonial" data-slide-to="3"></li>
                    </ol>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum."</p>
                        </div>
                        <div class="item">
                            <p>"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui."</p>
                        </div>
                        <div class="item">
                            <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum."</p>
                        </div>
                        <div class="item">
                            <p>"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui."</p>
                        </div>
                    </div>
                </div>
                <!-- Slider end -->

            </div>
        </div>
    </div>
</div>
<!-- Testimonials end -->
<!-- Adoption -->
<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span>Find your perfect companion</span></h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
        </div>
    </div>
    <div class="row adoption">
        <div class="col-md-4">
            <a href="adoption-single.html" title=""><img src="images/dog-4.png" alt="Saint Bernard" /></a>
            <div class="title">
                <h5>
                    <span data-hover="Saint Bernard">Saint Bernard</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="Beagle"><img src="images/dog-5.png" alt="Beagle" /></a>
            <div class="title">
                <h5>
                    <span data-hover="Beagle">Beagle</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="Staffordshire Bull Terrier"><img src="images/dog-6.png" alt="Staffordshire Bull Terrier" /></a>
            <div class="title">
                <h5>
                    <span data-hover="Staffordshire Bull Terrier">Staffordshire Bull Terrier</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="King Charles Cavalier"><img src="images/dog-7.png" alt="King Charles Cavalier" /></a>
            <div class="title">
                <h5>
                    <span data-hover="King Charles Cavalier">King Charles Cavalier</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="Dachshund"><img src="images/dog-8.png" alt="Dachshund" /></a>
            <div class="title">
                <h5>
                    <span data-hover="Dachshund">Dachshund</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="French Bulldog"><img src="images/dog-9.png" alt="French Bulldog" /></a>
            <div class="title">
                <h5>
                    <span data-hover="French Bulldog">French Bulldog</span>
                </h5>
            </div>
        </div>
    </div>
</div>
<!-- Adoption end -->


<script>
document.addEventListener("DOMContentLoaded", function() {
    const AJAX_TOKEN = "<?= $token ?>";
    fetch("data/get-tours.php?lang=<?= $l ?>", {
        headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-Ajax-Token': AJAX_TOKEN } // <-- важный заголовок
    })
    .then(res => {
        if(!res.ok) throw new Error("Ошибка загрузки");
        return res.json(); // получаем JSON
    })
    .then(data => {
        const container = document.getElementById("carousel");
        container.innerHTML = '';
        data.forEach(tour => {
            const html = `
                <div>
                    <a data-fancybox="gallery" target="_self" data-caption="${tour.title}" href="images/${tour.image}" title="${tour.title}" data-hover="${tour.title}" >
                        <img src="images/${tour.image}" alt="${tour.title}" />
                    </a>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
              
        });
        
        initCarouFredSel();
         
        document.getElementById("loader-wrapper").style.display = "none";
    })
    .catch(err => {
        document.getElementById("loader-wrapper").innerText = "Ошибка загрузки туров";
        console.error(err);
    });
});

    
</script>
<!-- 

<div>
                    <a href="images/${tour.image}" title="${tour.title}" data-hover="${tour.title}" data-toggle="lightbox" class="lightbox">
                        <img src="images/${tour.image}" style="width: 100%; height: 100%;object-fit: cover;"  alt="${tour.title}" />
                    </a>
                </div> -->
