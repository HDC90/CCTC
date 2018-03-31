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
			<div class="col-md-4 col-xs-6">
				<img src="./wp-content/themes/cctc/img/cctc-matchs-par-equipes.png" alt="" class="rounded-circle">
					<p class="h4 mt-3">MATCHS PAR ÉQUIPE</p>
			</div>
			<div class="col-md-4 col-xs-6">
				<img src="./wp-content/themes/cctc/img/cctc-nos-installations.png" alt="" class="rounded-circle">
					<p class="h4 mt-3">NOS INSTALLATIONS</p>
			</div>
			<div class="col-md-4 col-xs-6">
				<img src="./wp-content/themes/cctc/img/cctc-tournois.png" alt="" class="rounded-circle">
					<p class="h4 mt-3">TOURNOIS</p>
			</div>
		</div>
	</div>
</div>
<!-- /Premiere Section -->

<!-- Seconde section - Image sexy -->
<div class="wrapper-fluid">
	<img src="./wp-content/themes/cctc/img/home-tennis.png" alt="" class="img-fluid full-width-image">
</div>
		
<!-- /Seconde section -->
<!-- Troisieme section - messages market + Twitter widget -->
<div class="wrapper">
	<div class="container-fluid">
		<h2 class="text-center align-items-center">Liens utiles</h2>
		<div id="text-sports" class="row text-center align-items-center Thirdsec">
			<div class="col col-xs-6">
				<a href="https://mon-espace-tennis.fft.fr/"><img src="./wp-content/themes/cctc/img/mon-espace-tennis.png" alt="" class="img-fluid"></a>
				<p class="h4 mt-3">Mon Espace Tennis</p>
			</div>
			<div class="col col-xs-6">
				<a href="https://adoc.app.fft.fr/adoc/"><img src="./wp-content/themes/cctc/img/adoc-fft.png" alt="" class="img-fluid"></a>
				<p class="h4 mt-3">Adoc</p>
			</div>
			<div class="col col-xs-6">
				<a href="http://www.gs.applipub-fft.fr/fftfr/frameset.do?dispatch=load"><img src="./wp-content/themes/cctc/img/gestion-sportive.png" alt="" class="img-fluid"></a>
				<p class="h4 mt-3">Gestion sportive</p>
			</div>
			<div class="col col-xs-6">
				<a href="https://www.escapetennis.com"><img src="./wp-content/themes/cctc/img/escape-tennis.png" alt="" class="img-fluid"></a>
				<p class="h4 mt-3">Escape</p>
			</div>
			<div class="col col-xs-6">
				<a href="http://www.comite.fft.fr/seine-et-marne/seine-et-marne_a/cms/index_public.php?us_action=show_note_site&login_off=1&ui_id_site=1"><img src="./wp-content/themes/cctc/img/FFT-seine-et-marne-ligue.png" alt="" class="img-fluid"></a>
				<p class="h4 mt-3">Site de la Ligue</p>
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
