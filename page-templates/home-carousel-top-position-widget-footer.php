<?php
/**
 * Template Name: home carousel top position no widget
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();
?>
<!-- section zero - Derniere news -->
<div class="wrapper-fluid" id="wrapper-news">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'loop-templates/content', 'blank' ); ?>
	<?php endwhile; // end of the loop. ?>
</div>
<!-- /section zero -->
<!-- Premiere Section - 3 bulles + FB widget -->
<div class="wrapper">
	<div class="container">
		<div id="bubbles" class="row text-center align-items-center firstsec">
			<div class="col-sm-4 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			<div class="col-sm-4 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			<div class="col-sm-4 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- /Premiere Section -->

<!-- Seconde section - Image sexy -->
<div class="wrapper-fluid">
	<img src="https://dummyimage.com/1920x400" alt="" class="img-fluid full-width-image">
</div>
		
<!-- /Seconde section -->
<!-- Troisieme section - messages market + Twitter widget -->
<div class="wrapper">
	<div class="container">
		<h2 class="text-center align-items-center">Titre</h2>
		<div id="text-sports" class="row text-center align-items-center Thirdsec">
			<div class="col-sm-4 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
			<div class="col-sm-4 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
			<div class="col-sm-4 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
		</div>
	</div>
</div>
	<!-- /Troisieme section -->
	<!-- Quatrieme section - formulaire -->
<div id="wrapper-form" class="wrapper">
	<div class="container-fluid">
		<!-- Begin MailChimp Signup Form -->
			<div class="row justify-content-center">
				<h3>Ne ratez pas une miette</h3>
			</div>
			<form action="https://michaeldacosta.us16.list-manage.com/subscribe/post?u=59d2106971669e750e067acc8&amp;id=37d52ba737" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="form-row form-inline justify-content-center">	
			<div class="col-auto">
				<label for="mce-EMAIL" class="sr-only">Email Address </label>
				<div>
					<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Adresse mail">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_59d2106971669e750e067acc8_37d52ba737" tabindex="-1" value=""></div>
			</div>
			<div class="col-auto"><input type="submit" value="Inscrivez-vous" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></div>
				</div>
			</div>
			</form>
		<!--End mc_embed_signup-->
	</div>
</div>

<!--End mc_embed_signup-->
<!-- /Quatrieme section -->
<?php get_footer(); ?>
