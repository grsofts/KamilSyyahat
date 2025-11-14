<?php

if (!isset($_SESSION['allow_thanks'])) {
    echo '<script>window.location.href = "/";</script>';
    exit;
}

unset($_SESSION['allow_thanks']);
$success = $_GET["success"];

?>


<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span></span></h3>

            
            <p> <?= $success === 'true' ? '  
            <div class="box">
                <h1>' . $lang['thanks'] . '</h1>
                <p>' . $lang['sended_successfully'] . '</p>
                <a href="/" class="button">' . $lang['return_home_btn'] . '</a>
            </div>
            ' :'<h1>' . $lang['error_sending'] . '</h1>' ?></p>
        </div>
    </div>
</div>


<style>
    .box {
        background: white;
        padding: 40px 50px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        text-align: center;
        max-width: 100%;
    }
    .box h1 {
        color: #1e88e5;
        margin-bottom: 10px;
    }
    .box p {
        color: #444;
        font-size: 16px;
        margin-bottom: 25px;
    }
    a.button {
        background: #1e88e5;
        color: white;
        padding: 12px 22px;
        text-decoration: none;
        border-radius: 8px;
        font-size: 16px;
        display: inline-block;
    }
    a.button:hover {
        background: #1565c0;
    }
</style>