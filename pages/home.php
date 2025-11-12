<?php 


?>

<!-- Slider -->
<div id="home_carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home_carousel" data-slide-to="1"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="carousel-home">
        <div class="item active">
            <img src="images/slider1.jpg" alt="" />
            <div class="carousel-caption">
                <h2 style="font-weight:700;"><?= $lang["slider_title1"] ?></h2>
                <p><?= $lang["slider_text1"] ?></p>
                <!-- <form method="get" action="index.html">
                    <button type="submit" class="btn btn-lg btn-default">Learn more</button>
                    </form> -->
            </div>

        </div>


        <div class="item">
            <img src="images/travel2.jpg" alt="" />
            <div class="carousel-caption">
                <h2 style="font-weight:700;"><?= $lang["slider_title2"] ?></h2>
                <p><?= $lang["slider_text2"] ?></p>
                
            </div>
        </div>

    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" style="z-index:2" href="#home_carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" style="z-index:2" href="#home_carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- Slider end -->

<!-- Services -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col3">
            <a  data-gallery="asgabat" title="<?= $lang['ashgabat'] ?>" class="roundal" id="kennel"></a>
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
            <a data-gallery="dasoguz" title="<?= $lang['dashoguz'] ?>" class="roundal" id="walking"></a>
            <h3><?= $lang['dashoguz'] ?></h3>
            <p class="truncate-2"><?= $lang['dashoguz_description'] ?></p>
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a data-gallery="mary" title="<?= $lang['mary'] ?>" class="roundal" id="advice"></a>
            <h3><?= $lang['mary'] ?></h3>
            <p class="truncate-2"><?= $lang['mary_description'] ?></p>
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
            <p><?= $lang['slider_text1'] ?></p>
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
   
</div>
<!-- Rehome end -->

<!-- Testimonials -->
<div class="testimonials" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">

            <h3 style="margin-top:20px;"><span><?= $lang['reviews'] ?> </span></h3>


                <!-- Slider -->
                <div id="home_testimonial" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#home_testimonial" data-slide-to="0" class="active"></li>
                        <li data-target="#home_testimonial" data-slide-to="1"></li>
                        <li data-target="#home_testimonial" data-slide-to="2"></li>
                        <li data-target="#home_testimonial" data-slide-to="3"></li>
                        <li data-target="#home_testimonial" data-slide-to="4"></li>
                    </ol>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <p>"Поездка была просто великолепной! Всё организовано чётко — от трансфера до гида. Особенно понравился Ашхабад ночью, впечатления незабываемые!"</p>
                            <p style="font-weight: bold;">- Анна, Москва</p>
                        </div>
                        <div class="item">
                            <p>"I had an amazing experience in Turkmenistan! The desert tour was something out of this world. Very professional team and friendly guide!"</p>
                            <p style="font-weight: bold;">- Michael, London</p>
                        </div>
                        <div class="item">
                            <p>"Gidimiz örän mylakatlydy, ähli ýerleri düşündirdi. Mary şäheriniň taryhy ýerleri gaty täsirli boldy. Sag boluň, “Kamil Syýahat” topary!"</p>
                            <p style="font-weight: bold;">- Aýlar, Türkmenbaşy</p>
                        </div>
                        <div class="item">
                            <p>"Eine sehr gut organisierte Reise! Ich war überrascht, wie modern und sauber Ashgabat ist. Vielen Dank für die großartige Betreuung."</p>
                            <p style="font-weight: bold;">- Sabine, Berlin</p>
                        </div>
                         <div class="item">
                            <p>"J’ai adoré la culture, les gens, et la gastronomie turkmène. Merci pour cette aventure exceptionnelle, tout était parfait !"</p>
                            <p style="font-weight: bold;">- Claire, Paris</p>
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
            <a data-gallery="alabay" title="<?= $lang['pride_alabay'] ?>" style="cursor: pointer;"><img src="images/upload/prides/alabay1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_alabay'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_alabay'] ?>"><?= $lang['pride_alabay'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="ahalteke" title="<?= $lang['pride_ahalteke'] ?>" style="cursor: pointer;"><img src="images/upload/prides/bedew1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_ahalteke'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_ahalteke'] ?>"><?= $lang['pride_ahalteke'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a  data-gallery="carpets" title="<?= $lang['pride_carpets'] ?>" style="cursor: pointer;"><img src="images/upload/prides/haly1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_carpets'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_carpets'] ?>"><?= $lang['pride_carpets'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="kitchen" title="<?= $lang['pride_kitchen'] ?>" style="cursor: pointer;"><img src="images/upload/prides/kitchen1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_kitchen'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_kitchen'] ?>"><?= $lang['pride_kitchen'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="kushtdepdi" title="<?= $lang['pride_kushtdepdi'] ?>" style="cursor: pointer;"><img src="images/upload/prides/kushtdepdi1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_kushtdepdi'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_kushtdepdi'] ?>"><?= $lang['pride_kushtdepdi'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="ornaments" title="<?= $lang['pride_ornaments'] ?>" style="cursor: pointer;"><img src="images/upload/prides/ornament1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_ornaments'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_ornaments'] ?>"><?= $lang['pride_ornaments'] ?></span>
                </h5>
            </div>
        </div>

        <div class="col-md-4">
            <a data-gallery="dutar" title="<?= $lang['pride_dutar'] ?>" style="cursor: pointer;"><img src="images/upload/prides/dutar1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_dutar'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_dutar'] ?>"><?= $lang['pride_dutar'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="closes" title="<?= $lang['pride_closes'] ?>" style="cursor: pointer;"><img src="images/upload/prides/closes1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_closes'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_closes'] ?>"><?= $lang['pride_closes'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="festivals" title="<?= $lang['pride_festivals'] ?>" style="cursor: pointer;"><img src="images/upload/prides/bayram1.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_festivals'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_festivals'] ?>"><?= $lang['pride_festivals'] ?></span>
                </h5>
            </div>
        </div>
    </div>
</div>
<!-- Adoption end -->

<!-- Rehome -->
<div class="rehome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <div id="canvas-container" >
                <canvas id="sineCanvas"  width="1024" height="300"></canvas>
            </div>
                <p><a href="#" title="<?= $lang['rehome_title'] ?>" ></a></p>
                <h4><?= $lang['rehome_title'] ?></h4>
                <p><?= $lang['rehome_text'] ?></p>
            </div>
            
        </div>
    </div>
</div>
<!-- Rehome end -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const AJAX_TOKEN = "<?= $token ?>";
    fetch("data/get-tours.php?lang=<?= $l ?>", {
        method: "POST",
        body: JSON.stringify({ ajax_token: "<?= $token ?>" }),
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
                    <a href="tour?s=${tour.slug}" target="_self" title="${tour.title}" data-hover="${tour.title}" >
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

const galleries = {
    alabay: [
        {
        src: "images/upload/prides/alabay1.jpg",
        caption: "<?= $lang['pride_alabay_description'] ?>",
        },
        {
        src: "images/upload/prides/alabay2.jpg",
        caption: "<?= $lang['pride_alabay_description'] ?>",
        },
        {
        src: "images/upload/prides/alabay3.jpg",
        caption: "<?= $lang['pride_alabay_description'] ?>",
        },
    ],
    ahalteke: [
        {
        src: "images/upload/prides/bedew1.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/bedew2.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/bedew3.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/bedew4.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
    ],
    carpets: [
        {
        src: "images/upload/prides/haly1.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
        {
        src: "images/upload/prides/haly2.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
        {
        src: "images/upload/prides/haly3.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
        {
        src: "images/upload/prides/haly4.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
        {
        src: "images/upload/prides/haly5.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
    ],
    kitchen: [
        {
        src: "images/upload/prides/kitchen1.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/kitchen2.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/kitchen3.webp",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
    ],
    kushtdepdi: [
        {
        src: "images/upload/prides/kushtdepdi1.jpg",
        caption: "<?= $lang['pride_kushtdepdi_description'] ?>",
        },
        {
        src: "images/upload/prides/kushtdepdi2.jpg",
        caption: "<?= $lang['pride_kushtdepdi_description'] ?>",
        },
    ],
    ornaments: [
        {
        src: "images/upload/prides/ornament1.jpg",
        caption: "<?= $lang['pride_ornaments_description'] ?>",
        },
        {
        src: "images/upload/prides/ornament2.jpg",
        caption: "<?= $lang['pride_ornaments_description'] ?>",
        },
        {
        src: "images/upload/prides/ornament3.jpg",
        caption: "<?= $lang['pride_ornaments_description'] ?>",
        },
        {
        src: "images/upload/prides/ornament4.jpg",
        caption: "<?= $lang['pride_ornaments_description'] ?>",
        },
    ],
    dutar: [
        {
        src: "images/upload/prides/dutar1.jpg",
        caption: "<?= $lang['pride_dutar_description'] ?>",
        },
        {
        src: "images/upload/prides/dutar2.jpg",
        caption: "<?= $lang['pride_dutar_description'] ?>",
        },
        {
        src: "images/upload/prides/dutar3.jpg",
        caption: "<?= $lang['pride_dutar_description'] ?>",
        },
        {
        src: "images/upload/prides/dutar4.jpg",
        caption: "<?= $lang['pride_dutar_description'] ?>",
        },
        {
        src: "images/upload/prides/dutar5.jpg",
        caption: "<?= $lang['pride_dutar_description'] ?>",
        },
    ],
    closes: [
        {
        src: "images/upload/prides/closes1.jpg",
        caption: "<?= $lang['pride_closes_description'] ?>",
        },
        {
        src: "images/upload/prides/closes2.jpg",
        caption: "<?= $lang['pride_closes_description'] ?>",
        },
        {
        src: "images/upload/prides/closes3.jpg",
        caption: "<?= $lang['pride_closes_description'] ?>",
        },
    ],
    festivals: [
        {
        src: "images/upload/prides/bayram1.jpg",
        caption: "<?= $lang['pride_festivals_description'] ?>",
        },
        {
        src: "images/upload/prides/bayram2.jpg",
        caption: "<?= $lang['pride_festivals_description'] ?>",
        },
        {
        src: "images/upload/prides/bayram3.jpg",
        caption: "<?= $lang['pride_festivals_description'] ?>",
        },
    ],

    asgabat: [
        {
            src: "images/upload/asgabat/1.jpg",
            caption: "",
        },
        {
            src: "images/upload/asgabat/2.jpg",
            caption: "",
        },
        {
            src: "images/upload/gypjak.jpg",
            caption: "",
        },
        {
            src: "images/slider1.jpg",
            caption: "",
        },
    ],

    mary: [
        {
            src: "images/upload/mary/1.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/2.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/3.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/4.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/5.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/6.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/7.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/8.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/9.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/10.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/11.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/12.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/13.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/14.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/15.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/16.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/17.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/18.jpg",
            caption: "",
        }

    ],

    dasoguz: [
        {
            src: "images/upload/dasoguz/1.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/2.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/3.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/4.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/5.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/6.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/7.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/8.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/9.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/10.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/11.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/12.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/13.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/14.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/15.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/16.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/17.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/18.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/19.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/20.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/21.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/22.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/23.jpg",
            caption: "",
        },
        {
            src: "images/upload/dasoguz/24.jpg",
            caption: "",
        },
        {
            src: "images/upload/koneurgench.jpg",
            caption: "",
        }
    ]
};

const fancyOptions = {
  Hash: false,
  backFocus: false,
  Toolbar: {
    display: {
      left: ["infobar"],
      middle: ["zoomIn", "zoomOut", "rotateCCW", "rotateCW"],
      right: ["close"],
    },
  },
};

document.querySelectorAll("[data-gallery]").forEach((el) => {
  el.addEventListener("click", () => {
    const key = el.getAttribute("data-gallery");
    if (galleries[key]) {
      Fancybox.show(galleries[key], fancyOptions);
    } else {
      console.warn(`Галерея "${key}" не найдена`);
    }
  });
});
    </script>