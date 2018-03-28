<?php
/**
 * Template Name: home carousel top position
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
			<div class="col-sm-3 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			<div class="col-sm-3 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			<div class="col-sm-3 col-xs-6">
				<img src="https://dummyimage.com/150" alt="" class="rounded-circle">
					<h2>Titre</h2>
			</div>
			<div class="col-sm-3 col-xs-6">
				<!-- ajout de ma nouvelle widget area -->
				<?php if ( is_active_sidebar( 'bubblefb' ) ) : ?>
					<div id="bubblefb" class="nwa-header-widget widget-area" role="complementary">
						<?php dynamic_sidebar( 'bubblefb' ); ?>
					</div>
				<?php endif; ?>
				<!-- fin nouvelle widget area -->
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
			<div class="col-sm-3 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<h3>Mini titre</h3>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
				<p>bla bla bla</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<!-- ajout de ma nouvelle widget area -->
				<?php if ( is_active_sidebar( 'sporttwitter' ) ) : ?>
					<div id="sporttwitter" class="nwa-header-widget widget-area" role="complementary">
						<?php dynamic_sidebar( 'sporttwitter' ); ?>
					</div>
				<?php endif; ?>
				<!-- fin nouvelle widget area -->
			</div>
		</div>
	</div>
</div>
	<!-- /Troisieme section -->
	<!-- Quatrieme section - formulaire -->
<div class="wrapper">
	<div class="container-fluid">
		<!-- Begin MailChimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
		<div id="mc_embed_signup">
			<form action="https://michaeldacosta.us16.list-manage.com/subscribe/post?u=59d2106971669e750e067acc8&amp;id=37d52ba737" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				<label for="mce-EMAIL">Subscribe to our mailing list</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_59d2106971669e750e067acc8_37d52ba737" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<!--End mc_embed_signup-->
<!-- /Quatrieme section -->
<?php get_footer(); ?>
