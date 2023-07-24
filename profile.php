<?php
include ('database/connection.php');
if (!isset($_SESSION['user_account'])) {
    echo "<script>
        window.location.href='login.php';
        </script>";
} else {
    $userID = $_SESSION['user_account'];
    $account = mysqli_query($con, "SELECT user_account.* from user_account where userID = '$userID'") or die(mysqli_error($con));
    $row = mysqli_fetch_object($account);


   
    }
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/poppins.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">
    
    <title>Pets Weeb | Profile</title>
  </head>

<body>
    <?php include('preloader.php'); ?>
    <main class="main-wrap" id="main">
        <!-- header start -->
        <?php include'header.php';?>

        <!-- header end -->

        <!--   <div class="content-wrapper"> -->
        <div class="container-fluid main-content">
            <div class="container-fluid row wrap-content">
                <!-- left content here -->
                <!-- <?php include 'left_content.php';?> -->
                <!-- center content -->
                <div class="col-xl-10  profile-content mt-3 card">

                    <div class="row pt-5">

                        <div class="col-8">
                            <div class="cover img-fluid">
                                <a href="assets/gallery/img3.jpg" data-lightbox="mycover"><img src="assets/gallery/img3.jpg" ><a>
                            </div>
                            <div class="change_cover">

                                <form class="d-flex">
                                    <input type="file" name="update_cover">
                                    <label for="file" class="d-flex"><img src="assets/img/flaticon/plus.png"></label>
                                    <button>Change Cover</button>
                                </form>

                            </div>
                            <div class="profile-img">
                                <a href="">

                                    <img src="assets/gallery/<?php echo $row->pro_image;?>">
                                    <span><?php echo $row->name;?></span>

                                </a>
                                <div class="update_profile">
                                    <form class="d-flex">
                                        <input type="file" name="update_prof">
                                        <label for="file" class="d-flex">
                                            <img src="assets/img/flaticon/add-image.png">
                                        </label>
                                        <button>Update</button>
                                    </form>

                                </div>

                            </div>


                            <div class="profile-links">
                                <div class="info">
                                    <ul>

                                        <li><img src="assets/img/flaticon/pet.png">&nbsp;&nbsp;Lives in
                                            &nbsp;<span><?php echo $row->address;?></span></li>
                                        <li><?php 
                                                if($row->gender == "Male"){
                                                    ?>
                                            <img src="assets/img/flaticon/mars.png"><span>&nbsp;&nbsp;Male</span>
                                            <?php }else{?>
                                            <img src="assets/img/flaticon/venus.png"><span>&nbsp;&nbsp;Female</span>

                                            <?php } ?>

                                        </li>
                                        <li><img
                                                src="assets/img/flaticon/paws.png"><span>&nbsp;&nbsp;<?php echo $row->breed_type;?></span>
                                        </li>
                                        <li><img
                                                src="assets/img/flaticon/phone.png"><span>&nbsp;&nbsp;<?php echo $row->contact;?></span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="date_joined">
                                    <ul>
                                        <li><img src="assets/img/flaticon/heart3.png"><span>&nbsp;&nbsp;120k
                                                reacts</span></li>
                                        <br>
                                        <li>
                                            <span>Joined:&nbsp;
                                                <?php
                                                    $date = $row->date_created;
                                                    $d = new DateTime($date);

                                                    echo $d->format("F j, Y");
                                                 ?>
                                            </span>
                                        </li>

                                    </ul>


                                </div>
                                <!-- <ul>
                                       <li class="nav-link side-icon"><img src="assets/img/flaticon/veterinary.png"><a href="" >&nbsp;&nbsp;Meet-up</a></li>
                                        <li class="nav-link side-icon"><img src="assets/img/flaticon/calendar1.png"><a href="" >&nbsp;&nbsp;Callendar</a></li>
                                        <li class="nav-link side-icon"><img src="assets/img/flaticon/animals-allowed.png"><a href="" >&nbsp;&nbsp;Pet Groups</a></li>
                                    </ul> -->
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="settings">
                                <a href=""><img src="assets/img/flaticon/settings.png">&nbsp;&nbsp;Settings</a>
                            </div>
                            <div class="gallery-content mt-3 container card">

                                <div class="gallery card-body">
                                    <h3>Gallery</h3>
                                    <div class="recent_upload">
                                        <img src="assets/gallery/img3.jpg">
                                    </div>
                                    <div class="row row_img">

                                        <div class="col images pt-3">
                                            <img src="assets/gallery/img3.jpg">
                                            <img src="assets/gallery/img3.jpg">
                                            <img src="assets/gallery/img3.jpg">


                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="">See more...</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="all-post">
                        <form action="query.php?user_id=<?php echo $row->userID?>" method="post"
                            enctype="multipart/form-data">
                            <input type="text" name="imgID" value="images" hidden="">
                            <div>
                                <textarea class="form-control" name="post_des" id="postdes" rows="3"
                                    placeholder="Write something..."></textarea>

                            </div>
                            <div class="image-upload d-flex justify-content-between">
                                <!-- <input type="file" name="post_image" id="upload_img" onchange="getImagePreview(event)" multiple=""> -->
                                <label>
                                    <a class="d-flex" data-toggle="collapse" data-target="#postContainer"><img
                                            src="assets/img/flaticon/upload.png">
                                        <h6>Add an image</h6>
                                    </a>
                                </label>






                                <button class="btn btn-primary btn-post" name="btn-post2" type="submit">POST</button>
                            </div>
                            <div class="post_container collapse" id="postContainer">
                                <div class="drag">
                                    <span class="inner">Drag & drop image or <span class="select">Browse</span></span>
                                    <input type="file" name="fileUpload[]" id="file" class="file" multiple=""
                                        change="getImagePreview(event)">
                                </div>
                                <div class="img_content" id="container">
                                
                                </div>
                            </div>

                            <!-- <div class="d-flex flex-row-reverse post-btn">
                <button class="btn btn-primary btn-post">POST</button>

            </div> -->
                        </form>

                        </div>
                         
                        <div class="post mt-4 mb-4">
                        <h6 class="py-3 recent_title ml-5">Recent Post > </h6>
						<?php
							$sqlpost = mysqli_query($con,"SELECT a.*,b.* from image_uploads as a INNER JOIN user_account as b where a.userID = b.userID AND a.userID = '$userID' GROUP BY postID order by postDate desc limit 3");
							while($postData = mysqli_fetch_object($sqlpost)){
							if(!empty($postData->postDate)){
								$date = $postData->postDate;
								$d = new DateTime($date); 	
							}
						?>
                        
    				    <div class="card-body mt-3">
                            <div class="del-post pr-5 d-flex justify-content-end">
                                <a type="button" onclick='deleteItem("<?php echo $postData->postID; ?>")'><i class="fa-solid fa-trash-can"></i></a>
                                
                            </div>
                            <!-- Delete post modal -->
                            <button  type="button" class="btn btn-info btn-lg" style="display: none" data-toggle="modal"
                            data-target="#myModal2" style="font-size: 15px;" id="openModal">Delete
                            </button>

                            <div class="modal fade" tabindex="-1" role="dialog" id="myModal2">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Post</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this Post?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a name="deletecart_item"
                                            href="delete.php" id="deleteUrl"><button class="btn btn-danger">Delete</button></a>
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <!--End Delete post modal -->
    				        <div class="d-flex justify-content-between post-img">
    				            <div class="d-flex post-name">
    				                <img src="assets/gallery/<?php echo $row->pro_image;?>">
    				                <a href="">
    				                    <h5><?php echo $row->name;?></h4>
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
                            <?php if(!empty($postData->postImages)){?>
    				        <div class="description">

    				            
                                <p><?php 
								if(!empty($postData->postDes)){
									echo $postData->postDes;
								}else{
									echo "";
								}
								
								
								?></p>

    				            <div class="card gallery_img">
                                    
    				                <div class="post_images row">
                                    

                                    <a class="col-8  p-1" href="assets/gallery/<?php 
													echo $postData->postImages;
													?>" data-lightbox="<?php echo $postData->postID;?>" data-title="<?php echo $postData->postID;?>"><img src="assets/gallery/<?php 
													echo $postData->postImages;
													?>" class="img-fluid" alt="..." style="height: auto;border-radius: 5px; width: 100%;"></a>
    				                
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
                            <?php }else{ ?>
                                <div class="description">

                                                                    
                                    <h4 class="py-3"><?php 
                                    if(!empty($postData->postDes)){
                                        echo $postData->postDes;
                                    }else{
                                        echo "";
                                    }


                                    ?></h4>

                                    <div class="card gallery_img">
                                        <div class="card-body  d-flex justify-content-center">
                                            <ul class="des-btn ">
                                                <li>&nbsp; 120<a href="">&nbsp; <img src="assets/img/flaticon/heartt.png"></a></li>
                                                <li>&nbsp; 11<a href="">&nbsp; <img src="assets/img/flaticon/speech-bubble.png"></a>
                                                </li>
                                                <li>&nbsp; 25<a href="">&nbsp; <img src="assets/img/flaticon/share.png"></a></li>
                                            </ul>

                                        </div>
                                    </div>
                            </div> <?php } ?>
    				    </div>
                       <!-- 2nd post -->
						<hr class="bg-light p-1 mt-3">
    				    
    				            
                        <?php } ?>
    				    <!-- end 2nd post -->
                        
    				    <div class="d-flex justify-content-center more-post">
    				        <a href="">See more...</a>
    				    </div> 
    				</div>
                    </div>
                </div>

                <!-- right content -->
                <?php include 'right_content.php';?>

            </div>

        </div>
        <!--     </div> -->
        <!-- footer start -->
        <?php  include'footer2.php';?>
        <!-- footer end -->
    </main>
    <!-- JavaScript -->
    <?php include'scripts.php'; ?>
    <script>
        function deleteItem(postID){
            
            $("#deleteUrl").attr("href","/Pets/delete.php?id=" + postID);

            $("#openModal").click();
        }
       

    </script>
</body>

</html>