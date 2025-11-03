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
                <h2 style="font-weight:700; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><?= $lang["slider_title1"] ?></h2>
                <p style="color:var(--primary-blue);"><?= $lang["slider_text1"] ?></p>
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
            <a title="<?= $lang['ashgabat'] ?>" class="roundal" id="kennel"></a>
            <h3><?= $lang['ashgabat'] ?></h3>
            <p class="truncate-2"><?= $lang['ashgabat_description'] ?></p>
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a title="<?= $lang['akhal'] ?>" class="roundal" id="grooming"></a>
            <h3><?= $lang['akhal'] ?></h3>
            <p class="truncate-2"><?= $lang['akhal_description'] ?></p>
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a title="<?= $lang['balkan'] ?>" class="roundal" id="adoption"></a>
            <h3><?= $lang['balkan'] ?></h3>
            <p class="truncate-2"><?= $lang['balkan_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a title="<?= $lang['dashoguz'] ?>" class="roundal" id="walking"></a>
            <h3><?= $lang['dashoguz'] ?></h3>
            <p class="truncate-2"><?= $lang['dashoguz_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a title="<?= $lang['mary'] ?>" class="roundal" id="advice"></a>
            <h3><?= $lang['mary'] ?></h3>
            <p class="truncate-2"><?= $lang['mary_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a title="<?= $lang['lebap'] ?>" class="roundal" id="play"></a>
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
        
        <div id="loader-wrapper" style="position: relative; display:flex; justify-content:center; align-items:center; min-height: 200px;">
            <!-- <div id="loader" class="loader"></div> -->
            <img src="assets/loading1.gif" width="120" height="120" alt="Loading..." class="loader-dog" />
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

            <h3 style="margin-top:20px;"><span><?= $lang['our_tours'] ?> </span></h3>


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
            <h3><span><?= $lang['our_prides'] ?></span></h3>
            <p><?= $lang['prides_subtitle'] ?></p>
        </div>
    </div>
    <div class="row adoption">
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_alabay'] ?>"><img src="images/upload/prides/alabay1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_alabay'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_alabay'] ?>"><?= $lang['pride_alabay'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_ahalteke'] ?>"><img src="images/upload/prides/bedew1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_ahalteke'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_ahalteke'] ?>"><?= $lang['pride_ahalteke'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_carpets'] ?>"><img src="images/upload/prides/haly1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_carpets'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_carpets'] ?>"><?= $lang['pride_carpets'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_kitchen'] ?>"><img src="images/upload/prides/kitchen1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_kitchen'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_kitchen'] ?>"><?= $lang['pride_kitchen'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_kushtdepdi'] ?>"><img src="images/upload/prides/kushtdepdi1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_kushtdepdi'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_kushtdepdi'] ?>"><?= $lang['pride_kushtdepdi'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_ornaments'] ?>"><img src="images/upload/prides/ornament1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_ornaments'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_ornaments'] ?>"><?= $lang['pride_ornaments'] ?></span>
                </h5>
            </div>
        </div>

        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_dutar'] ?>"><img src="images/upload/prides/dutar1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_dutar'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_dutar'] ?>"><?= $lang['pride_dutar'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_closes'] ?>"><img src="images/upload/prides/closes1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_closes'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_closes'] ?>"><?= $lang['pride_closes'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a href="adoption-single.html" title="<?= $lang['pride_festivals'] ?>"><img src="images/upload/prides/bayram1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_festivals'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_festivals'] ?>"><?= $lang['pride_festivals'] ?></span>
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

<script>
      document.getElementById("kennel").addEventListener("click", () => {
        Fancybox.show(
          [
            {
              src: "https://lipsum.app/id/1/1800x1200",
              caption: "Sample image #1",
              thumbSrc: "https://lipsum.app/id/1/150x100",
              thumbAlt: "My custom description #1",
              thumbClass: "my_custom_thumb_class",
            },
            {
              src: "https://lipsum.app/id/2/1800x1200",
              caption: "Sample image #2",
              thumbSrc: "https://lipsum.app/id/2/150x100",
              thumbAlt: "My custom description #2",
              thumbClass: "my_custom_thumb_class",
            },
            {
              src: "https://lipsum.app/id/3/1800x1200",
              caption: "Sample image #3",
              thumbSrc: "https://lipsum.app/id/3/150x100",
              thumbAlt: "My custom description #3",
              thumbClass: "my_custom_thumb_class",
            },
          ],
          {
            Hash: false,
            backFocus: false,
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [
                        "zoomIn",
                        "zoomOut",
                        "rotateCCW",
                        "rotateCW",
                    ],
                    right: ["close"],
                },
            }
          }
        );
      });
    </script>

<!-- 

<div>
                    <a href="images/${tour.image}" title="${tour.title}" data-hover="${tour.title}" data-toggle="lightbox" class="lightbox">
                        <img src="images/${tour.image}" style="width: 100%; height: 100%;object-fit: cover;"  alt="${tour.title}" />
                    </a>
                </div> -->
