<?php
 //orange #faaf3a
 //blue #0070ba
?>
<!-- Navigation -->
<div class="navbar navbar-default navbar-fixed-top affix inner-pages" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="home">
                <img src="assets/logoks.png" height="56" width="56" />
                <strong>Kamil</strong>syýahat<br />
                <!-- <span data-hover="Kennels">Kamil syyahat</span> -->
            </a></h1>
        </div>	
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $page === 'home' ? 'active' : '' ?>">
                    <a href="home" title="Home"><span data-hover="<?= $lang['home'] ?>"><?= $lang['home'] ?></span></a>
                </li>
                <li class="<?= $page === 'prices' ? 'active' : '' ?>">
                    <a href="prices" title="Prices"><span data-hover="<?= $lang['prices'] ?>"><?= $lang['prices'] ?></span></a>
                </li>
                <li class="<?= $page === 'about' ? 'active' : '' ?>">
                    <a href="about" title="About us"><span data-hover="<?= $lang['about'] ?>"><?= $lang['about'] ?></span></a>
                </li>
                <!-- <li class="dropdown">
                    <a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="<?= $lang['services'] ?>"><?= $lang['services'] ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="adoption.html" title="Adoption centre"><?= $lang['adoption_centre'] ?></a>
                        </li>
                        <li>
                            <a href="services.html" title="Dog boarding kennels"><?= $lang['dog_boarding_kennels'] ?></a>
                        </li>
                        <li>
                            <a href="services-single.html" title="Dog walking"><?= $lang['dog_walking'] ?></a>
                        </li>
                        <li>
                            <a href="services.html" title="Home boarding"><?= $lang['home_boarding'] ?></a>
                        </li>
                        <li>
                            <a href="services.html" title="Puppy crèche"><?= $lang['puppy_creche'] ?></a>
                        </li>
                    </ul>
                </li> -->
                <li class="<?= $page === 'contacts' ? 'active' : '' ?>">
                    <a href="contacts" title="Contact us"><span data-hover="<?= $lang['contacts'] ?>"><?= $lang['contacts'] ?></span></a>
                </li>
                <li class="purchase-btn">
                    <!-- <form method="get" action="index.html">
                        <button type="submit" class="btn btn-default"><?= $lang['purchase_theme'] ?></button>
                    </form> -->
                </li>

                <li class="dropdown" style="cursor: pointer;">
                     <a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="<?= $lang['language'] ?>"><?= $lang['language'] ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="?lang=en" title="English">EN</a>
                        </li>
                        <li>
                            <a href="?lang=ru" title="Russian">RU</a>
                        </li>
                        <li>
                            <a href="?lang=tm" title="Turkmen">TM</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
		<!-- Navigation end -->