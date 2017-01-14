<?php
/*
Template Name: HOME Page
*/
get_header();

?>

<style>
	.page_title{
		display: none;
	}
</style>
<div class="container">
	<?php if ($_SERVER['REMOTE_ADDR'] != '83.103.200.163') echo do_shortcode( '[rev_slider homepage]' );?>
</div>

<div id="home_page_all">
	<div class="container" style="display: none">
	
		<?php ts_get_single_post_sidebar('left'); ?>
	
		<div class="<?php echo ts_get_liva_content_class(); ?>">
	
			<?php /* Start the Loop */ ?>
	
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php if (get_post_meta(get_the_ID(), 'show_page_content',true) != 'no'): ?>
	
					<?php get_template_part( 'content', 'page' ); ?>
	
				<?php endif; ?>
	
			<?php endwhile; // end of the loop. ?>
	
		</div>
	
		<?php ts_get_single_post_sidebar('right'); ?>
	
	</div>
	
	
	<div class="clearfix mar_top7"></div>
	
	<div id="home_block1">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=21 ]');
				else 
					echo do_shortcode('[content_block id=416 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block2">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=23 ]');
				else 
					echo do_shortcode('[content_block id=418 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block3">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=25 ]');
				else 
					echo do_shortcode('[content_block id=421 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block4">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=27 ]');
				else 
					echo do_shortcode('[content_block id=423 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block5">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=29 ]');
				else 
					echo do_shortcode('[content_block id=425 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block6">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=31 ]');
				else 
					echo do_shortcode('[content_block id=427 ]'); 
			?>
		</div>
	</div>
	
	<div id="home_block7">
		<div class="container">
			<?php
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=33 ]');
				else 
					echo do_shortcode('[content_block id=429 ]'); 
			?>
		</div>
		<div id="hb9_over"></div>
	</div>
	
	

	<div id="home_block9" style="display: none">
		<div class="container">
			<?php
				/*
				if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
					echo do_shortcode('[content_block id=37 ]');
				else 
					echo do_shortcode('[content_block id=431 ]'); 
				*/
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>