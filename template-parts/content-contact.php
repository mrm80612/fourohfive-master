<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>

<div class="grid-1-4">
	<div>
		<h3>Address</h3>
		<p>106A W. BURBANK BLVD. </br> BURBANK, CA 91502 </br> (213) 627-7374 </p>
		

		<p>Sunday:  2–7PM </br> 
		Monday:  Closed </br> 
        Tuesday:  Closed </br> 
		Wednesday:  2–8PM </br> 
		Thursday:  2–8PM </br> 
		Friday:  2–8PM </br> 
		Saturday:  2–8PM</p>
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