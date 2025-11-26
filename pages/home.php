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
            <!-- <img src="images/travel_turkmen.jpeg" alt="" /> -->
            <!-- <img src="images/upload/derweze_full.jpg" alt="" /> -->
            <div class="carousel-caption">
                <h2 style="font-weight:700;"><?= $lang["slider_title1"] ?></h2>
                <p><?= $lang["slider_text1"] ?></p>
                <!-- <form method="get" action="index.html">
                    <button type="submit" class="btn btn-lg btn-default">Learn more</button>
                    </form> -->
            </div>

        </div>


        <div class="item">
            <!-- <img src="images/travel2.jpg" alt="" /> -->
            <img src="images/slider_world.webp" alt="" />
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
            <!-- <p class="truncate-2"><?= $lang['ashgabat_description'] ?></p> -->
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a data-gallery="ahal" title="<?= $lang['akhal'] ?>" class="roundal" id="grooming"></a>
            <h3><?= $lang['akhal'] ?></h3>
            <!-- <p class="truncate-2"><?= $lang['akhal_description'] ?></p> -->
            <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a data-gallery="balkan" title="<?= $lang['balkan'] ?>" class="roundal" id="adoption"></a>
            <h3><?= $lang['balkan'] ?></h3>
            <!-- <p class="truncate-2"><?= $lang['balkan_description'] ?></p> -->
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a data-gallery="dasoguz" title="<?= $lang['dashoguz'] ?>" class="roundal" id="walking"></a>
            <h3><?= $lang['dashoguz'] ?></h3>
            <!-- <p class="truncate-2"><?= $lang['dashoguz_description'] ?></p> -->
             <!-- <form method="get" action="services-single.html">
                <button type="submit" class="btn btn-default btn-green"><?= $lang['learn_more'] ?></button>
            </form> -->
        </div>
        <div class="col-md-4 col3">
            <a data-gallery="mary" title="<?= $lang['mary'] ?>" class="roundal" id="advice"></a>
            <h3><?= $lang['mary'] ?></h3>
            <!-- <p class="truncate-2"><?= $lang['mary_description'] ?></p> -->
        </div>
        <div class="col-md-4 col3">
            <a  data-gallery="lebap" title="<?= $lang['lebap'] ?>" class="roundal" id="play"></a>
            <h3><?= $lang['lebap'] ?></h3>
            <!-- <p class="truncate-2"><?= $lang['lebap_description'] ?></p> -->
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
            <a data-gallery="alabay" title="<?= $lang['pride_alabay'] ?>" style="cursor: pointer;"><img src="images/upload/prides/alabay2.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_alabay'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_alabay'] ?>"><?= $lang['pride_alabay'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="ahalteke" title="<?= $lang['pride_ahalteke'] ?>" style="cursor: pointer;"><img src="images/upload/prides/bedew3.jpg" height="285" style="object-fit: cover; width:100%" alt="<?= $lang['pride_ahalteke'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_ahalteke'] ?>"><?= $lang['pride_ahalteke'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a  data-gallery="carpets" title="<?= $lang['pride_carpets'] ?>" style="cursor: pointer;"><img src="images/upload/prides/haly0.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_carpets'] ?>" /></a>
            <div class="title">
                <h5>
                    <span data-hover="<?= $lang['pride_carpets'] ?>"><?= $lang['pride_carpets'] ?></span>
                </h5>
            </div>
        </div>
        <div class="col-md-4">
            <a data-gallery="kitchen" title="<?= $lang['pride_kitchen'] ?>" style="cursor: pointer;"><img src="images/upload/prides/tagam0.jpg" height="285" style="object-fit: cover;" alt="<?= $lang['pride_kitchen'] ?>" /></a>
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
            src: "images/upload/prides/alabay0.jpg",
            caption: "<?= $lang['pride_alabay_description'] ?>",
        },
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
        {
        src: "images/upload/prides/alabay4.jpg",
        caption: "<?= $lang['pride_alabay_description'] ?>",
        },
        {
        src: "images/upload/prides/alabay5.jpg",
        caption: "<?= $lang['pride_alabay_description'] ?>",
        },
    ],
    ahalteke: [
        {
        src: "images/upload/prides/bedew3.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/bedew1.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/ornament3.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
        {
        src: "images/upload/prides/bedew4.jpg",
        caption: "<?= $lang['pride_ahalteke_description'] ?>",
        },
    ],
    carpets: [
        {
        src: "images/upload/prides/haly0.jpg",
        caption: "<?= $lang['pride_carpets_description'] ?>",
        },
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
        src: "images/upload/prides/tagam0.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam1.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam2.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam3.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam4.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam5.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam6.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam7.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam8.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam9.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam10.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        },
        {
        src: "images/upload/prides/tagam11.jpg",
        caption: "<?= $lang['pride_kitchen_description'] ?>",
        }

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
        {
        src: "images/upload/prides/ornament5.jpg",
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
        src: "images/upload/prides/bayram4.jpg",
        caption: "<?= $lang['pride_festivals_description'] ?>",
        },
        {
        src: "images/upload/prides/bayram5.jpg",
        caption: "<?= $lang['pride_festivals_description'] ?>",
        },
    ],

    asgabat: [
        {
            src: "images/upload/asgabat/1.jpg",
            caption: "National museum",
            position: 5
        },
        {
            src: "images/upload/asgabat/4.jpg",
            caption: "Arch of Neutrality",
            position: 4
        },
        {
            src: "images/upload/asgabat/2.jpg",
            caption: "Ashgabat monument",
            position: 2,
        },
        {
            src: "images/upload/gypjak.jpg",
            caption: "Turkmenbashy Rukhi Mosque",
        },
        {
            src: "images/upload/asgabat/3.jpg",
            caption: "Bagt koshgi",
            position:6
        },
        {
            src: "images/upload/asgabat/5.jpg",
            caption: "Bagt koshgi",
            position: 1,
        },
        {
            src: "images/upload/asgabat/6.jpg",
            caption: "Monument of Independence",
            position: 3
        },
        {
            src: "images/upload/asgabat/8.jpg",
            caption: "Turkmenbashi Rukhi mosque",
        },
        {
            src: "images/upload/asgabat/9.jpg",
            caption: "Turkmenbashi Rukhi mosque",
        },
        {
            src: "images/upload/asgabat/10.jpg",
            caption: "Turkmenbashi Rukhi mosque",
        },
        {
            src: "images/upload/asgabat/11.jpg",
            caption: "Turkmenbashi Rukhi mosque",
        },
        {
            src: "images/upload/asgabat/12.jpg",
            caption: "Ashgabat",
        },
        {
            src: "images/upload/asgabat/13.webp",
            caption: "Ashgabat International Airport",
        }
        
    ],

    mary: [
        {
            src: "images/upload/mary/1.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/3.jpg",
            caption: "Small Gyz-Gala",
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
            src: "images/upload/mary/7.jpg",
            caption: "Soltan Sanjar",
            position: 3
        },
        {
            src: "images/upload/mary/11.jpg",
            caption: "Soltan Sanjar",
            position: 1
        },
        {
            src: "images/upload/mary/12.jpg",
            caption: "Soltan Sanjar",
            position: 2
        },
        {
            src: "images/upload/mary/13.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/15.jpg",
            caption: "",
        },
        {
            src: "images/upload/mary/16.jpg",
            caption: "Gyz-Gala",
            position: 4
        },
        {
            src: "images/upload/mary/17.jpg",
            caption: "",
        },

    ],
    balkan:[
        {
            src: "images/upload/balkan/1.jpg",
            caption: "Yangi-kala"
        },
        {
            src: "images/upload/balkan/2.jpg",
            caption: "Yangi-kala"
        },
        {
            src: "images/upload/balkan/3.jpg",
            caption: "Yangi-kala"
        },
        {
            src: "images/upload/balkan/4.jpg",
            caption: "Yangi-kala"
        },
        {
            src: "images/upload/balkan/5.jpg",
            caption: "Yangi-kala"
        },
        {
            src: "images/upload/balkan/6.webp",
            caption: "Church of St. Michael the Archangel"
        }
    ],
    ahal: [
        {
            src: "images/upload/ahal/1-akhalteke horse.jpg",
            caption: "Akhalteke horse",
        },
        {
            src: "images/upload/ahal/2-Nisa.png",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)"
        },
        {
            src: "images/upload/ahal/3-nisa.jpg",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)",
        },
        {
            src: "images/upload/ahal/4.jpg",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)",
        },
        {
            src: "images/upload/ahal/5.jpg",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)",
        },
        {
            src: "images/upload/ahal/6.jpg",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)",
        },
        {
            src : "images/upload/ahal/7.jpg",
            caption: "Nisa is an ancient city inscribed on the UNESCO World Heritage List, the capital of the great Parthian Empire (III BC – III AD)",
        },
        {
            src: "images/upload/ahal/8.jpg",
            caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.",
        },
        {
            src: "images/upload/ahal/9.webp",
            caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.",
        },
        {
            src: "images/upload/ahal/10.jpg",
            caption: "Kow-Ata is an underground lake with thermal water. The water temperature is constant at 33-38 °C all year.",
        },
        {
            src: "images/upload/ahal/11.jpg",
            caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake",
        },
        {
            src: "images/upload/ahal/12.jpg",
            caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake",
        },
        {
            src: "images/upload/ahal/13.jpg",
            caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake",
        },
        {
            src: "images/upload/ahal/14.jpg",
            caption: "Seyit Jemaletdin Mosquebuilt in 1456 which was damaged to great lengths in the 1948 Earthquake",
        },
        {
            src: "images/upload/ahal/15.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/16.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/17.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/18.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/19.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/20.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/21.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/22.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/23.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/24.jpg",
            caption: "Kopetdag Mountains ",
        },
        {
            src: "images/upload/ahal/25.jpg",
            caption: "Kopetdag Mountains ",
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
            src: "images/upload/derweze_full.jpg",
            caption: "Derweze gas crater"
        }
    ],
    dasoguz: [
        {
            src: "images/upload/dasoguz/1.jpeg",
            caption: "Dashoguz city",
        },
        {
            src: "images/upload/dasoguz/2.jpg",
            caption: "Dashoguz hotel",
        },
        {
            src: "images/upload/dasoguz/3.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/4.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/5.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/6.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/7.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/8.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/9.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        
        {
            src: "images/upload/koneurgench.jpg",
            caption: "Konye-Urgench  (11th to the 16th centuries) in 2005 were inscribed on the UNESCO List of World Heritage Sites",
        },
        {
            src: "images/upload/dasoguz/25.webp",
            caption: "Darvaza gas crater",
        }
    ],
    lebap: [
       {
            src: "images/upload/lebap/1.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/2.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/3.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/4.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/5.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/6.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/7.jpg",
            caption: "Waterfall in Koytendag",
        },
        {
            src: "images/upload/lebap/8.jpg",
            caption: "Waterfall in Koytendag",
        },
        {
            src: "images/upload/lebap/9.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/10.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/11.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/12.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/13.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/14.jpg",
            caption: "Koytendag Mountains",
        },
        {
            src: "images/upload/lebap/15.jpg",
            caption: "Plaza of dinosaurs-steps of dinosaurs",
        },
        {
            src: "images/upload/lebap/16.jpg",
            caption: "Plaza of dinosaurs-steps of dinosaurs",

        },
        {
            src: "images/upload/lebap/17.jpg",
            caption: "Plaza of dinosaurs-steps of dinosaurs",
        },
        {
            src: "images/upload/lebap/18.jpg",
            caption: "Plaza of dinosaurs-steps of dinosaurs",
        },
        {
            src: "images/upload/lebap/19.png",
            caption: "Plaza of dinosaurs-steps of dinosaurs",
        },
        {
            src: "images/upload/lebap/20.jpg",
            caption: "Hojababa (gaynarbaba) lake",
        },
        {
            src: "images/upload/lebap/21.jpg",
            caption: "Daya Hatyn сaravansarai",
        },
        {
            src: "images/upload/lebap/22.jpg",
            caption: "Daya Hatyn сaravansarai",
        },
        {
            src: "images/upload/lebap/23.jpg",
            caption: "Daya Hatyn сaravansarai",
        },
        {
            src: "images/upload/lebap/24.jpg",
            caption: "Amul cave",
        },
        {
            src: "images/upload/lebap/25.jpg",
            caption: "Amudarya bridge",
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



// Функция для сортировки галереи
function sortGallery(galleryArray) {
    return galleryArray.sort((a, b) => {
        // Если у обоих есть position, сортируем по position
        if (a.position !== undefined && b.position !== undefined) {
            return a.position - b.position;
        }
        // Если только у a есть position, a идет первым
        if (a.position !== undefined && b.position === undefined) {
            return -1;
        }
        // Если только у b есть position, b идет первым
        if (a.position === undefined && b.position !== undefined) {
            return 1;
        }
        // Если у обоих нет position, сохраняем оригинальный порядок
        return 0;
    });
}

document.querySelectorAll("[data-gallery]").forEach((el) => {
  el.addEventListener("click", () => {
    const key = el.getAttribute("data-gallery");
    if (galleries[key]) {
        // Сортируем галерею только если есть элементы с position
        const hasPosition = galleries[key].some(item => item.position !== undefined);
        const galleryToShow = hasPosition ? sortGallery([...galleries[key]]) : galleries[key];
      Fancybox.show(galleryToShow, fancyOptions);
    } else {
      console.warn(`Галерея "${key}" не найдена`);
    }
  });
});
    </script>