<?php

$success = $_GET["success"];

?>


<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span><?= $lang['about_us'] ?></span></h3>
            <p> <?= $success ? 'SUCCESSFULLY' :'ERROR' ?></p>
        </div>
    </div>
</div>