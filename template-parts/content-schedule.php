<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<!-- <?php 
	the_title( '<h1>', '</h1>' ); 
?> -->

<div class="largecontainer">
	<?php
		the_content();
	?>
</div>