<?php
session_start();

include_once('header.php');
?>




<div class="container-fluid">
	<div class="row">
		<div class="col-xs-4 col-md-2">
			<div class="thumbnail">
				<img src="..." alt="...">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
echo '<script>$("#my").addClass("active")</script>';

include_once('footer.php');
