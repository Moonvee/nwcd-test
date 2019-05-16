<?php
session_start();

include_once('template/header.php');
?>

<div class="container-fluid">
	<div class="row">

		<?php
		$picList = [
			[
				'id' => 1,
				'title' => 'Photo 1',
				'url' => 'https://img.zcool.cn/community/01c1285b8a38afa8012126ce4a872a.jpg@1280w_1l_2o_100sh.jpg'
			],
			[
				'id' => 2,
				'title' => 'Photo 2',
				'url' => 'https://img.zcool.cn/community/0183a85b8a38aea8012126ce1d9221.jpg@1280w_1l_2o_100sh.jpg'
			],
			[
				'id' => 3,
				'title' => 'Photo 3',
				'url' => 'https://img.zcool.cn/community/01d2235b8a38aea80120245c3bdab5.jpg@1280w_1l_2o_100sh.jpg'
			]
		];

		foreach ($picList as $array) {

			?>
			<div class="col-xs-4 col-md-2">
				<a href="#" data-toggle="modal" data-target="#<?php echo  $array['id'] ?>">
					<div class="thumbnail">
						<img src="<?php echo $array['url'] ?>" alt="<?php echo  $array['title'] ?>">
						<div class="caption">
							<h3><?php echo  $array['title'] ?></h3>
						</div>
					</div>
				</a>
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="<?php echo  $array['id'] ?>">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body bigphoto">
								<img src="<?php echo  $array['url'] ?>" alt="<?php echo  $array['title'] ?>">
							</div>
							<div class="modal-footer">
								<span><?php echo  $array['title'] ?></span>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }  ?>

	</div>
</div>



<?php

echo '<script>$("#index").addClass("active")</script>';
include_once('template/footer.php');
