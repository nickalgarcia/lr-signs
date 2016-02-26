<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		<!--<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
		</div>-->
		<div class="row page-margin-top">
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-location">
						<p>1525 Brandi Lane<br>Round Rock, Texas</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-phone">
						<p>Phone:<br>(512) 412-2536</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-clock">
						<p>Mon - Sun: <br>8:00am - 6:00pm</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row page-margin-top">
		<p class="description t1">Please be as detailed as possible. The more information, photos, and examples will help expedite the quoting. Thank you.</p>
			<form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<!--<fieldset class="column column-1-2">
						<input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="<?php echo _def_name; ?>">
						<input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="<?php echo _def_email; ?>">
						<input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="<?php echo _def_phone; ?>">
					</fieldset>
					<fieldset class="column column-1-2">
						<textarea name="message" placeholder="<?php echo _def_message; ?>"><?php echo _def_message; ?></textarea>
					</fieldset>-->
					<script type="text/javascript" src="https://form.jotform.com/jsform/51696565921163"></script>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<p class="description t1">We will contact you within one business day.</p>
					</div>
					<!--<div class="column column-1-2 align-right">
						<input type="hidden" name="action" value="contact_form" />
						<input type="submit" name="submit" value="SEND MESSAGE" class="more active">
					</div>-->
				</div>
			</form>
		</div>
	</div>
</div>