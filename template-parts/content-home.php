<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>
<div class="billboard">
		<video autoplay="true" loop="true" muted="true" class="billboard__media"><source src="http://fitwod.local/wp-content/uploads/2017/12/GymVideo.mp4" type="video/mp4">Your browser does not support video playback. Please consider switching to a more modern brower.
		</video>
	<p>
		<script>
			var video = document.getElementById('video');
			video.addEventListener('click',function(){
 			video.play();},false);
		</script></p>
</div>

<div class="largecontainer">

	<div class="hometext">
		<?php
			the_field('about_gym');
		?>
	</div>

</div>

	<?php
		the_content();
	?>
