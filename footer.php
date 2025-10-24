<?php 
include_once 'conf/constants.php';
?>


<!-- Purchase -->
<div class="purchase" style="<?= $page === 'contacts' ? 'display:none;' : 'display:block;' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p><?= $lang["want_you_title"] ?><br />
                <span><?= $lang["want_you_subtitle"] ?></span></p>
            </div>
            <div class="col-md-3 purchase-button">
                <form method="get" action="contacts">
                    <button type="submit" class="btn btn-default btn-green"><?= $lang["want_you_button"] ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Purchase end -->

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h6><?= $lang['footer_about_title'] ?></h6>
                <img class="mb-2" src="assets/logoks.png" height="80" width="80" style="margin-bottom:10px;" />
                <p>
                    <?= $lang['footer_about'] ?>
                </p>
            </div>
            <!-- <div class="col-md-3 blog">
                <h6>Freshly blogged</h6>
                <p class="title"><a href="#" title="">Eodem modo typi, qui nunc nobis</a></p>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                <p><a href="#" title="">Read this post&hellip;</a></p>
            </div> -->
            <div class="col-md-3">
                <h6><?= $lang['pages'] ?></h6>
                <ul>
                    <li><a href="home" title=""><?= $lang["home"] ?></a></li>
                    <li><a href="tours" title=""><?= $lang["tours"] ?></a></li>
                    <li><a href="contacts" title=""><?= $lang["contacts"] ?></a></li>
                    <li><a href="about" title=""><?= $lang["about"] ?></a></li>
                </ul>
            </div>
            <div class="col-md-3 contact-info">
                <h6><?= $lang['we_are_social'] ?></h6>
                <p style="margin-bottom: 0px !important"><?= $lang['we_are_social_description'] ?></p>
                    <div class="social-icons" style="margin-bottom:20px">
                    <a href="https://www.facebook.com/<?= $facebook ?>" target="_blank" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/<?= $instagram ?>" target="_blank" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/<?= $tiktok ?>" target="_blank" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    </div>

                <p class="c-details">
                    <span>Mail:</span> <a href="mailto:<?= $email ?>" title=""><?= $email ?></a><br >
                    <span>Tel:</span> <?= $tel ?>  <br ><span></span> <?= $tel2 ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 copyright">
                <p>&copy; Copyright <?= $year ?> Kamil syyahat. All rights reserved. Powered by <a href="https://grsofts.com" target="_blank" title="Powered by GRSofts">GRSofts</a></p>
            </div>
        </div>
    </div>
</div>

<style>

    .social-icons {
    display: flex;
    gap: 15px;
    margin-top: 15px;
    }

    .social-icons a {
    color: #ddd;
    font-size: 26px;
    transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-icons a:hover {
    transform: scale(1.2) rotate(5deg);
    color: #ffcc00; /* можно заменить на свой фирменный цвет */
    }

    .social-icons i {
    filter: drop-shadow(0 0 5px rgba(255,255,255,0.2));
    }

</style>
<!-- Footer end -->