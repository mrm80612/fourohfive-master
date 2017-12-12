<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>

<div class="grid-1-4">
		<div style="color:#225374">
			<h2>Address</h2>
			<p>106A W. BURBANK BLVD. </br> BURBANK, CA 91502 </br> (213) 627-7374 </p>
			

			<p>Sunday:  8AM–Midnight </br> 
			Mon - Fri:  6AM–8PM </br> 
			Saturday:  8AM–4PM</p>

			<!-- <img src="facebook.png" style="width:70px;height:70px;"> -->
		</div>
		<div>
			<div class="responsive-embed">
				<?php
					the_field('map');
				?>
			</div>
		</div>
</div>
	<?php
		the_content();
	?>

</article>