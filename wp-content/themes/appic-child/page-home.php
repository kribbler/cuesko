<?php
/*
 * Template Name: Home Page Child
 */

// hiding breadcrumbs for this template
ThemeFlags::set('hide_breadcrumbs', true);

get_header();
?>


<div id="home_block1">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=43 ]');
			else 
				echo do_shortcode('[content_block id=62 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block2">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=45 ]');
			else 
				echo do_shortcode('[content_block id=64 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block3">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=47 ]');
			else 
				echo do_shortcode('[content_block id=66 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block4">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=49 ]');
			else 
				echo do_shortcode('[content_block id=68 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block5">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=51 ]');
			else 
				echo do_shortcode('[content_block id=70 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block6">
	<div class="container">
		<div class="row">
			<div class="span7">
				<?php
					if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
						echo do_shortcode('[content_block id=53 ]');
					else 
						echo do_shortcode('[content_block id=72 ]'); 
				?>
			</div>
			<div class="span5">
				<?php dynamic_sidebar( 'my_facebook' );?>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block7">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=55 ]');
			else 
				echo do_shortcode('[content_block id=74 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block8" style="display: block">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=57 ]');
			else 
				echo do_shortcode('[content_block id=76 ]'); 
		?>
</div>

<div class="clearfix"></div>

<div class="white-wrap container page-content" style="display: none">
	<?php if (have_posts()): ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#play_youtube').click(function(){
			$(this).hide();
			$('#youtube_iframe').fadeIn('fast');
		})
	});
	
</script>

<?php get_footer(); ?>