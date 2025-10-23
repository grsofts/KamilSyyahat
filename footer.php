<?php 
include_once 'conf/constants.php';
?>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h6>A little about us</h6>
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
                <h6>You may need this</h6>
                <ul>
                    <li><a href="home" title=""><?= $lang["home"] ?></a></li>
                    <li><a href="services" title="">Services</a></li>
                    <li><a href="tours" title="">Tours</a></li>
                    <li><a href="contacts" title="">Contact us</a></li>
                    <li><a href="about" title="">About</a></li>
                </ul>
            </div>
            <div class="col-md-3 contact-info">
                <h6>Keep in touch</h6>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                <p class="social">
                    <a href="#" class="facebook"></a> <a href="#" class="pinterest"></a> <a href="#" class="twitter"></a>
                </p>
                <p class="c-details">
                    <span>Mail:</span> <a href="#" title=""><?= $email ?></a><br >
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
<!-- Footer end -->