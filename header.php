
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
                <li class="<?= $page === 'tours' ? 'active' : '' ?>">
                    <a href="tours" title="Tours"><span data-hover="<?= $lang['tours'] ?>"><?= $lang['tours'] ?></span></a>
                </li>
                <li class="<?= $page === 'gallery' ? 'active' : '' ?>">
                    <a href="gallery" title="Gallery"><span data-hover="<?= $lang['gallery'] ?>"><?= $lang['gallery'] ?></span></a>
                </li>
                <li class="<?= $page === 'about' ? 'active' : '' ?>">
                    <a href="about" title="About us"><span data-hover="<?= $lang['about'] ?>"><?= $lang['about'] ?></span></a>
                </li>
                <!-- <li class="dropdown">
                    <a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover=""></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="adoption.html" title="Adoption centre"></a>
                        </li>
                        <li>
                            <a href="services.html" title="Dog boarding kennels"></a>
                        </li>
                    </ul>
                </li> -->
                <li class="<?= $page === 'contacts' ? 'active' : '' ?>">
                    <a href="contacts" title="Contact us"><span data-hover="<?= $lang['contacts'] ?>"><?= $lang['contacts'] ?></span></a>
                </li>
            

                <li class="dropdown" style="cursor: pointer;">
                     <a class="dropdown-toggle" data-toggle="dropdown"><span data-hover="<?= $lang['language'] ?>">
                        <?= $l ==='en' ? '<img src="assets/usa.png" height="24" alt="English" />' : ($l === 'ru' ? '<img src="assets/ru.png" height="24" alt="Russian" />' : '<img src="assets/tm.png" height="24" alt="Turkmen" />') ?>
                        <?= $l ==='en' ? 'English' : ($l ==='ru' ? 'Русский' : 'Türkmen') ?>
                     </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="<?= $l === 'en' ? 'active' : '' ?>">
                            <a href="?lang=en" title="English"><img src="assets/usa.png" height="24" alt="English" /> English</a>
                        </li>
                        <li class="<?= $l === 'ru' ? 'active' : '' ?>">
                            <a href="?lang=ru" title="Russian"><img src="assets/ru.png" height="24" alt="Russian" /> Русский</a>
                        </li>
                        <li class="<?= $l === 'tm' ? 'active' : '' ?>">
                            <a href="?lang=tm" title="Turkmen"><img src="assets/tm.png" height="24" alt="Turkmen" /> Türkmen</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
		<!-- Navigation end -->