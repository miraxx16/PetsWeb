<?php
include('database/connection.php');

$sql = mysqli_query($con, "Select * from friend_list");

?>
<table border=1 cellpadding=10>
	<tr>
		<td>#</td>
		<td>User_ID</td>
		<td>Fried_ID</td>

	</tr>
	<?php $i = 1; ?>
	<?php foreach ($sql as $row) : ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row["userID"]; ?></td>
			<td><?php echo $row["friendID"]; ?></td>
		</tr>
	<?php endforeach; ?>
</table>


<div class="col">
	<a class=" col-10 p-1" href="assets/gallery/<?php
												echo $row_upload->postImages;
												?>" data-lightbox="<?php echo $row_upload->postDes; ?>" data-title="<?php echo $row_upload->postID; ?>"><img src="assets/gallery/<?php
																																													echo $row_upload->postImages;
																																													?>" class="img-fluid" alt="..." style="height: auto;border-radius: 5px; width: 100%;"></a>
</div>






<div class="post_images row">

	<?php
	$upload = mysqli_query($con, "select * from image_uploads");
	while ($img = mysqli_fetch_object($upload)) {
		if ($img->postID == $post_id && $post_count == 1) {
	?>

			<div class="col-8">
				<a class=" col-10 p-1 " href="assets/gallery/<?php
																echo $img->postImages;
																?>" data-lightbox="<?php echo $img->postDes; ?>" data-title="<?php echo $img->postID; ?>"><img src="assets/gallery/<?php
																																													echo $img->postImages;
																																													?>" class="img-fluid" alt="..." style="border-radius: 5px; width: 100%;"></a>
			</div>

		<?php
		} elseif ($img->postID == $post_id && $post_count == 2) { ?>

			<div class="col-lg-6 col-md-6 col-sm-8">
				<a class=" col-10 p-1 " href="assets/gallery/<?php
																echo $img->postImages;
																?>" data-lightbox="<?php echo $img->postDes; ?>" data-title="<?php echo $img->postID; ?>"><img src="assets/gallery/<?php
																																													echo $img->postImages;
																																													?>" class="img-fluid" alt="..." style="border-radius: 5px; "></a>
			</div>


	<?php }
	}
	?>
	<div class="card-body  d-flex justify-content-center">
		<ul class="des-btn ">
			<li>&nbsp; 120<a href="">&nbsp; <img src="assets/img/flaticon/heartt.png"></a></li>
			<li>&nbsp; 11<a href="">&nbsp; <img src="assets/img/flaticon/speech-bubble.png"></a>
			</li>
			<li>&nbsp; 25<a href="">&nbsp; <img src="assets/img/flaticon/share.png"></a></li>
		</ul>

	</div>


	<a class=" col-10 p-1 " href="assets/gallery/<?php
													echo $postData->postImages;
													?>" data-lightbox="<?php echo $postData->postID; ?>" data-title="<?php echo $postData->postID; ?>"><img src="assets/gallery/<?php
																																												echo $postData->postImages;
																																												?>" class="img-fluid" alt="..." style="border-radius: 5px; width: 100%;"></a>