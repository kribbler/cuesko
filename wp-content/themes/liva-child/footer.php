<?php
/*
* 
* The template for displaying the footer. 
* 
* @package liva * @since liva 1.0 */
?>

<!-- Footer		======================================= -->	
<div id="home_block8">		
	<div class="container____">			
		<?php if ($_SERVER['REMOTE_ADDR'] == '::1')
			echo do_shortcode('[content_block id=35 ]');				
		else 
			echo do_shortcode('[content_block id=431 ]');
		?>		
	</div>	
</div>		
<?php 		
if (ot_get_option('show_footer') != 'no'):			
	get_sidebar('footer'); 		
endif; ?>		

<div class="copyright_info <?php echo ot_get_option('footer_text_centered') == 'yes' ? 'centered' : '' ?>">			
	<div class="container">									
		<?php dynamic_sidebar( 'footer-center' ); ?>													
		<?php dynamic_sidebar( 'coyright-area-1' ); ?>							
	</div>		
</div><!-- end copyright info -->		

<a href="#" class="scrollup"><?php _e('Scroll', 'liva'); ?></a>		
<?php echo ot_get_option('scripts_footer'); ?>	</div>	

<div class="media_for_js"></div>	 	

<?php wp_footer(); ?>

<script type="text/javascript">	
jQuery(document).ready(function($){		
	console.log('a');		
	document.getElementById("addr_chr").style.display = 'none';		
	$('#h_wel').click(function(){	
	console.log('x');		
		var myLatlng = new google.maps.LatLng(-41.2858607, 174.7748312);			
		$('#addr_auk').hide();	
		$('#addr_chr').hide();			
		$('#addr_wel').fadeIn('fast');			
		google.maps.event.trigger(map4, 'resize');			
		map4.setCenter(myLatlng);		
	});	
	$('#h_chr').click(function(){			
		var myLatlng = new google.maps.LatLng(-43.52621380000001, 172.636395);			
		$('#addr_auk').hide();	
		$('#addr_wel').hide();		
		$('#addr_chr').fadeIn('fast');			
		google.maps.event.trigger(map3, 'resize');			
		map3.setCenter(myLatlng);		
	});		

	$('#h_auk').click(function(){			
		$('#addr_chr').hide();			
		$('#addr_wel').hide();
		$('#addr_auk').fadeIn('fast');			
		google.maps.event.trigger(map2, 'resize');			
		console.log('addr_auk');		
	});		

	$('#menu-primary-navigation li.menu-item').each(function(){			
		$(this).after('<li class="menu-divider">/</li>');		
	});	
});</script>  
</body></html>