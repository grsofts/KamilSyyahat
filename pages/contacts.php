<?php 

include_once 'conf/constants.php';

?>

<!-- Contact -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span><?= $lang['contact_us'] ?></span></h3>
					<p><?= $lang['contact_us_description'] ?></p>
				</div>
			</div>
		</div>
		<!-- Contact end -->
		<!-- Map -->
		<div style="width: 100%; margin-top:50px"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d786.76119395634!2d58.3677978!3d37.9293844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6ffd2d43104b47%3A0x3910f1735058ca9c!2sKamil%20syyahat!5e0!3m2!1sru!2sus!4v1761218444197!5m2!1sru!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
		<!-- Map end -->
		<!-- Content -->
		<div class="container content" style="margin-top: 50px; margin-bottom: 50px;">
			<div class="row">
				<div class="col-md-9">
					<form role="form" id="contact_form"  method="POST" action="conf/send-message.php">
						<div class="form-group">
							<label for="InputName"><?= $lang['your_name'] ?></label>
							<input type="text" class="form-control" name="name" id="InputName" placeholder="<?= $lang['your_name'] ?>">
						</div>
						<div class="form-group">
							<label for="InputEmail"><?= $lang['your_email'] ?></label>
							<input type="email" class="form-control" name="email" id="InputEmail" placeholder="<?= $lang['your_email'] ?>">
						</div>
						<div class="form-group">
							<label for="InputMessage"><?= $lang['your_message'] ?></label>
							<textarea class="form-control" name="message" id="Message" placeholder="<?= $lang['your_message'] ?>" rows="8"></textarea>
						</div>

						
  						<!-- <div class="g-recaptcha" data-sitekey="6LfkmfUrAAAAAD1cY0NCjGROUWYfRiQaVg24Hbc7"></div> -->
  						<div class="g-recaptcha" data-sitekey="6Ldji_YrAAAAAK-g7OMwqDR42sjr7gb5flzS-7Vz"></div>  
						<!-- 2nji -->
						<button type="submit" class="btn btn-default btn-green"><?= $lang['send_message'] ?></button>
					</form>
				</div>
				<div class="col-md-3">
					<ul class="contact-info" style="width:fit-content">
						<li style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-telephone-fill text-success" style="font-size: 2em;"></i>
							<?= $tel3 ?>
							<?= $tel ?>
							<?= $tel2 ?>
						</li>
						<li  style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-geo-alt-fill text-primary" style="font-size: 2em;"></i>							
							<?= $address ?>
						</li>
						<li class="" style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-facebook text-primary" style="font-size: 2em;"></i> <?= $facebook ?> <br>
						</li>
						<li class="" style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-whatsapp text-success" style="font-size: 2em;"></i> <?= $tel2 ?> <br>
						</li>
						<li  style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-envelope-fill text-warning" style="font-size: 2em;"></i>
							<?= $email ?>
						</li>

						<li  style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-instagram text-danger" style="font-size: 2em;"></i>
							<?= $instagram ?>
							<?= $instagram2 ?>
						</li>

						<li  style="display: flex; align-items: center; gap: 10px;">
							<i class="bi bi-tiktok text-danger" style="font-size: 2em;"></i>
							<?= $tiktok ?>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- Content end -->    


		<script src="https://www.google.com/recaptcha/api.js" async defer></script>