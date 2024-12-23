<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>

<footer>
	<div class="container">
		<div class="footer_title"><?php the_field('company_name', 'options'); ?></div>
		<div class="footer_action d-flex">
			<button data-bs-toggle="modal" data-bs-target="#callBackModal" class="footer_action_btn">Order Call</button>
			<div class="footer_contact d-flex flex-column justify-content-between">
				<span class="footer_adress"><?php the_field('company_address', 'options'); ?></span>
				<a class="footer_phone" href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a>
			</div>
		</div>
		<div class="footer_bottom d-flex justify-content-between">
			<div class="footer_copyright"><?php the_field('descriptor', 'options'); ?></div>
			<a data-bs-toggle="modal" data-bs-target="#modalPrivacy" class="footer_privacy fw-bold text-decoration-none text-white"><?php the_field('privacy_title', 'options'); ?></a>
		</div>
	</div>
</footer>
<div class="modal fade" id="staticModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<form action="#">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="staticModalLabel">Sign up for a class</h4>
						<p class="after-modal-title text-center">
							Leave your details and our managers will contact you to clarify the details
						</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input
							type="text"
							name="name"
							class="form-control"
							placeholder="Your Name"
							required="" />
					</div>
					<div class="form-group">
						<input
							type="email"
							name="email"
							class="form-control"
							placeholder="Your Email"
							required="" />
					</div>
					<div class="form-group">
						<input
							type="text"
							name="phone"
							class="form-control phone-mask"
							placeholder="+44 1603 666333"
							required="" />
					</div>
					<input
						type="hidden"
						name="Form"
						value="Registration for a lesson details" />
					<button type="submit">
						Call Back
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="callBackModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="callBackModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<form action="#">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="callBackModalLabel">Request a call back</h4>
						<p class="after-modal-title text-center">
							Leave your phone number and our managers will contact you in the nearest future
						</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input
							type="text"
							name="phone"
							class="form-control phone-mask"
							placeholder="+44 1603 666333"
							required="" />
					</div>
					<input
						type="hidden"
						name="Form"
						value="Registration for a lesson details" />
					<button type="submit">
						Call Back
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modalPrivacy" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPrivacyLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalPrivacyLabel">Privacy policy</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="privacy_text">
					<?php the_field('privacy_policy', 'options'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>

</html>