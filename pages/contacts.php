<?php 

include_once 'conf/constants.php';

?>

<!-- Contact -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span>Contact us</span></h3>
					<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
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
					<form role="form" id="contact_form">
						<div class="form-group">
							<label for="InputName">Your name</label>
							<input type="text" class="form-control" id="InputName" placeholder="Your name">
						</div>
						<div class="form-group">
							<label for="InputEmail">Your email</label>
							<input type="email" class="form-control" id="InputEmail" placeholder="Your email">
						</div>
						<div class="form-group">
							<label for="InputMesaagel">Your messsage</label>
							<textarea class="form-control" id="Message" placeholder="Your message" rows="8"></textarea>
						</div>
						<button type="submit" class="btn btn-default btn-green">Send message</button>
					</form>
				</div>
				<div class="col-md-3">
					<ul class="contact-info">
						<li class="telephone">
							<?= $tel ?>
							<?= $tel2 ?>
						</li>
						<li class="address">
							123 High St, Essex, UK
						</li>
						<li class="mail">
							<?= $email ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Content end -->    