
					
					
					<div class="post mt-4 mb-4">
				
					<?php 
					   
						$sql_post = mysqli_query($con, "select *, count(iu.postID) as postCOUNT from friend_list fl JOIN image_uploads iu ON fl.friendID = iu.userID JOIN user_account ua ON  fl.friendID = ua.userID where fl.userID = '$userID' group by iu.postID limit 5");
						while($row1 = mysqli_fetch_object($sql_post)){
							$date = $row1->postDate;
							$post_id = $row1->postID;
							$post_count = $row1->postCOUNT;
							$d = new DateTime($date);
						
					?>
					<hr class="bg-light p-1">
    				    <div class="card-body">
    				        <div class="d-flex justify-content-between post-img">
    				            <div class="d-flex post-name">
    				                <img src="assets/gallery/<?php echo $row1->pro_image;?>">
    				                <a href="">
    				                    <h5><?php echo $row1->name;?></h4>
    				                </a>
    				            </div>
    				            <div class="post-time">

    				                <span><?php
									if(!empty($d)){
										echo $d->format("F j, Y");
									}else{
										echo "";
									}
 
									 ?></span>
									
    				            </div>
    				        </div>
							<div class="post-time2">
								<span><i class="fas fa-clock"></i><?php 
								if(!empty($d)){
									echo $d->format("g:i a");
								}else{
									echo "";
								}
								
								?><span>
							</div>
    				        <div class="description">

    				            <p><?php 
								if(!empty($row1->postDes)){
									echo $row1->postDes;
								}else{
									echo "";
								}
								
								
								?></p>

										<div class="card gallery_img ">
											<div class="container">
												<div class="post_images row">
															<?php
													$upload = mysqli_query($con,"select * from image_uploads");
													while($img = mysqli_fetch_object($upload)){
														if($img->postID == $post_id && $post_count == 1){
															?>
															
																<div class="col-8">
																	<a class=" col-10 p-1 " href="assets/gallery/<?php 
																	echo $img->postImages;
																	?>" data-lightbox="<?php echo $img->postID;?>" data-title="<?php echo $img->postID;?>"><img src="assets/gallery/<?php 
																	echo $img->postImages;
																	?>" class="img-fluid" alt="..." style="border-radius: 5px; width: 100%;"></a> 
																</div>
															
															<?php
														}elseif($img->postID == $post_id && $post_count == 2){?>
														
															<div class="col-lg-6 col-md-6 col-sm-8 img-post">
																<a class=" col-10 p-1 " href="assets/gallery/<?php 
																	echo $img->postImages;
																	?>" data-lightbox="<?php echo $img->postID;?>" data-title="<?php echo $img->postID;?>"><img src="assets/gallery/<?php 
																	echo $img->postImages;
																	?>" class="img-fluid" alt="..." style="border-radius: 5px; height: 500px;"></a> 
															</div>
														

														<?php }elseif($img->postID == $post_id && $post_count == 4){?>
														
														<div class="col-lg-6 col-md-6 col-sm-8 img-post">
															<a class=" col-10 p-1 " href="assets/gallery/<?php 
																echo $img->postImages;
																?>" data-lightbox="<?php echo $img->postIDz;?>" data-title="<?php echo $img->postID;?>"><img src="assets/gallery/<?php 
																echo $img->postImages;
																?>" class="img-fluid" alt="..." style="border-radius: 5px; height: 380px; width: 580px; padding: 5px;"></a> 
														</div>
													

													<?php }
													}
													?>
													
												</div>
											</div>
											<div class="card-body  d-flex justify-content-center">
													<ul class="des-btn ">
														<li>&nbsp; 120<a href="">&nbsp; <img src="assets/img/flaticon/heartt.png"></a></li>
														<li>&nbsp; 11<a href="">&nbsp; <img src="assets/img/flaticon/speech-bubble.png"></a>
														</li>
														<li>&nbsp; 25<a href="">&nbsp; <img src="assets/img/flaticon/share.png"></a></li>
													</ul>

											</div>
											
										</div>
    				        </div>
    				    </div>
						<?php } ?>
						<div class="d-flex justify-content-center more-post">
    				        <a href="">See more...</a>
    				    </div>
    				</div>
    				</div>
				
