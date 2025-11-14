<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span><?= $lang['gallery'] ?></span></h3>
            <p><?= $lang['gallery_description'] ?></p>
        </div>
    </div>
</div>

<div class="container content" style="margin-top: 50px; margin-bottom: 50px;">
    <div id="gallery" class="gallery">
        
    </div>
</div>


<script>

    const allPhotos = [
  { src: "images/upload/prides/alabay1.jpg", caption: "<?= $lang['pride_alabay_description'] ?>" },
  { src: "images/upload/prides/alabay2.jpg", caption: "<?= $lang['pride_alabay_description'] ?>" },
  { src: "images/upload/prides/alabay3.jpg", caption: "<?= $lang['pride_alabay_description'] ?>" },

  { src: "images/upload/prides/bedew1.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>" },
  { src: "images/upload/prides/bedew2.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>" },
  { src: "images/upload/prides/bedew3.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>" },
  { src: "images/upload/prides/bedew4.jpg", caption: "<?= $lang['pride_ahalteke_description'] ?>" },

  { src: "images/upload/prides/haly1.jpg", caption: "<?= $lang['pride_carpets_description'] ?>" },
  { src: "images/upload/prides/haly2.jpg", caption: "<?= $lang['pride_carpets_description'] ?>" },
  { src: "images/upload/prides/haly3.jpg", caption: "<?= $lang['pride_carpets_description'] ?>" },
  { src: "images/upload/prides/haly4.jpg", caption: "<?= $lang['pride_carpets_description'] ?>" },
  { src: "images/upload/prides/haly5.jpg", caption: "<?= $lang['pride_carpets_description'] ?>" },

  { src: "images/upload/prides/kitchen1.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>" },
  { src: "images/upload/prides/kitchen2.jpg", caption: "<?= $lang['pride_kitchen_description'] ?>" },
  { src: "images/upload/prides/kitchen3.webp", caption: "<?= $lang['pride_kitchen_description'] ?>" },

  { src: "images/upload/prides/kushtdepdi1.jpg", caption: "<?= $lang['pride_kushtdepdi_description'] ?>" },
  { src: "images/upload/prides/kushtdepdi2.jpg", caption: "<?= $lang['pride_kushtdepdi_description'] ?>" },

  { src: "images/upload/prides/ornament1.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>" },
  { src: "images/upload/prides/ornament2.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>" },
  { src: "images/upload/prides/ornament3.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>" },
  { src: "images/upload/prides/ornament4.jpg", caption: "<?= $lang['pride_ornaments_description'] ?>" },

  { src: "images/upload/prides/dutar1.jpg", caption: "<?= $lang['pride_dutar_description'] ?>" },
  { src: "images/upload/prides/dutar2.jpg", caption: "<?= $lang['pride_dutar_description'] ?>" },
  { src: "images/upload/prides/dutar3.jpg", caption: "<?= $lang['pride_dutar_description'] ?>" },
  { src: "images/upload/prides/dutar4.jpg", caption: "<?= $lang['pride_dutar_description'] ?>" },
  { src: "images/upload/prides/dutar5.jpg", caption: "<?= $lang['pride_dutar_description'] ?>" },

  { src: "images/upload/prides/closes1.jpg", caption: "<?= $lang['pride_closes_description'] ?>" },
  { src: "images/upload/prides/closes2.jpg", caption: "<?= $lang['pride_closes_description'] ?>" },
  { src: "images/upload/prides/closes3.jpg", caption: "<?= $lang['pride_closes_description'] ?>" },

  { src: "images/upload/prides/bayram1.jpg", caption: "<?= $lang['pride_festivals_description'] ?>" },
  { src: "images/upload/prides/bayram2.jpg", caption: "<?= $lang['pride_festivals_description'] ?>" },
  { src: "images/upload/prides/bayram3.jpg", caption: "<?= $lang['pride_festivals_description'] ?>" },

  { src: "images/upload/asgabat/1.jpg", caption: "" },
  { src: "images/upload/asgabat/2.jpg", caption: "" },
  { src: "images/upload/gypjak.jpg", caption: "" },
  { src: "images/upload/asgabat/3.jpg", caption: "" },
  { src: "images/upload/asgabat/4.jpg", caption: "" },
  { src: "images/upload/asgabat/5.jpg", caption: "" },
  { src: "images/upload/asgabat/6.jpg", caption: "" },
  { src: "images/upload/asgabat/7.jpg", caption: "" },
  { src: "images/slider1.jpg", caption: "" },

  { src: "images/upload/mary/1.jpg", caption: "" },
  { src: "images/upload/mary/2.jpg", caption: "" },
  { src: "images/upload/mary/3.jpg", caption: "" },
  { src: "images/upload/mary/4.jpg", caption: "" },
  { src: "images/upload/mary/5.jpg", caption: "" },
  { src: "images/upload/mary/6.jpg", caption: "" },
  { src: "images/upload/mary/7.jpg", caption: "" },
  { src: "images/upload/mary/8.jpg", caption: "" },
  { src: "images/upload/mary/9.jpg", caption: "" },
  { src: "images/upload/mary/10.jpg", caption: "" },
  { src: "images/upload/mary/11.jpg", caption: "" },
  { src: "images/upload/mary/12.jpg", caption: "" },
  { src: "images/upload/mary/13.jpg", caption: "" },
  { src: "images/upload/mary/14.jpg", caption: "" },
  { src: "images/upload/mary/15.jpg", caption: "" },
  { src: "images/upload/mary/16.jpg", caption: "" },
  { src: "images/upload/mary/17.jpg", caption: "" },
  { src: "images/upload/mary/18.jpg", caption: "" },

  { src: "images/upload/balkan/1.jpg", caption: "" },
  { src: "images/upload/ahal/1.webp", caption: "Nohur" },

  { src: "images/upload/dasoguz/1.jpg", caption: "" },
  { src: "images/upload/dasoguz/2.jpg", caption: "" },
  { src: "images/upload/dasoguz/3.jpg", caption: "" },
  { src: "images/upload/dasoguz/4.jpg", caption: "" },
  { src: "images/upload/dasoguz/5.jpg", caption: "" },
  { src: "images/upload/dasoguz/6.jpg", caption: "" },
  { src: "images/upload/dasoguz/7.jpg", caption: "" },
  { src: "images/upload/dasoguz/8.jpg", caption: "" },
  { src: "images/upload/dasoguz/9.jpg", caption: "" },
  { src: "images/upload/dasoguz/10.jpg", caption: "" },
  { src: "images/upload/dasoguz/11.jpg", caption: "" },
  { src: "images/upload/dasoguz/12.jpg", caption: "" },
  { src: "images/upload/dasoguz/13.jpg", caption: "" },
  { src: "images/upload/dasoguz/14.jpg", caption: "" },
  { src: "images/upload/dasoguz/15.jpg", caption: "" },
  { src: "images/upload/dasoguz/16.jpg", caption: "" },
  { src: "images/upload/dasoguz/17.jpg", caption: "" },
  { src: "images/upload/dasoguz/18.jpg", caption: "" },
  { src: "images/upload/dasoguz/19.jpg", caption: "" },
  { src: "images/upload/dasoguz/20.jpg", caption: "" },
  { src: "images/upload/dasoguz/21.jpg", caption: "" },
  { src: "images/upload/dasoguz/22.jpg", caption: "" },
  { src: "images/upload/dasoguz/23.jpg", caption: "" },
  { src: "images/upload/dasoguz/24.jpg", caption: "" },
  { src: "images/upload/koneurgench.jpg", caption: "" },
  { src: "images/upload/dasoguz/25.webp", caption: "" }
];

const galleryContainer = document.getElementById('gallery');

document.addEventListener("DOMContentLoaded", () => {
    allPhotos.forEach(e => {
        const a = document.createElement('a');
        a.href = e.src;
        a.dataset.fancybox = "gallery";
        a.dataset.caption = e.caption;
        a.loading = "lazy";
        const img = document.createElement('img');
        img.src = e.src;
        img.alt = e.caption;

        a.appendChild(img);
        galleryContainer.appendChild(a);
    });
});

</script>


<style>

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-auto-rows: 200px;
    gap: 10px;
}

.gallery a img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Картинки разного размера обрезаются аккуратно */
    border-radius: 5px;
    display: block;
}

</style>

