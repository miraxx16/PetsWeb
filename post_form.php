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
  <?php include '1head.php';?>
  
  <body>
    
    <?php include('preloader.php'); ?>
    <main class="main-wrap" id="main">
    <!-- header start -->
    <?php include'header.php';?>

    <!-- header end -->
    
  <!--   <div class="content-wrapper"> -->
      <div class="container-fluid main-content">
        <div class="row wrap-content p-3">
          <!-- left content here -->
          <?php include 'left_content.php';?>
          <!-- center content -->
          <div class="col-xl-8 col-lg-12 center-content p-3">
            <div class="">
            <form action="query.php?user_id=<?php echo $row->userID?>" method="post">
            <div>
              <textarea class="form-control" name="post_des" id="postdes" rows="3" placeholder="Write something..."></textarea>
              
            </div>
            <div class="image-upload d-flex justify-content-between">
                <!-- <input type="file" name="post_image" id="upload_img" onchange="getImagePreview(event)" multiple=""> -->
                  <label>
                    <a class="d-flex" data-toggle="collapse" data-target="#postContainer"><img src="assets/img/flaticon/upload.png"><h6>Add an image</h6></a>  
                  </label>
                  





                  <button class="btn btn-primary btn-post">POST</button>
            </div>
            <div class="post_container collapse" id="postContainer">
              <div class="drag">
                      <span class="inner">Drag & drop image or <span class="select">Browse</span></span>
                      <input type="file" name="file" class="file" multiple="" change="getImagePreview(event)">
              </div>
               <div class="img_content" id="container">
                  
                </div>
            </div>
 
            <!-- <div class="d-flex flex-row-reverse post-btn">
                <button class="btn btn-primary btn-post">POST</button>

            </div> -->
            </form>
            </div>
            <hr>
            <!-- carousel start -->
      <div class="owl-carousel owl-theme py-3">
                <div class="item">
                  <div class=" feature-cont">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top feature" src="assets/gallery/img2.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Haveyouseenthisdog</h5>
                                <div class="card-text">
                                   <p>Mexican Dog</p>
                                  <p>Somewhere in Mexico</p>
                                  <p>Female</p>
                                </div>
                              <div class="card-btn">
                                <ul>
                                  <li><a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Pet Friend</a></li>
                                  <li><a href="#" class="btn btn-primary">Message</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-cont">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top feature" src="assets/gallery/img3.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Haveyouseenthisdog</h5>
                                <div class="card-text">
                                   <p>Mexican Dog</p>
                                  <p>Somewhere in Mexico</p>
                                  <p>Female</p>
                                </div>
                              <div class="card-btn">
                                <ul>
                                  <li><a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Pet Friend</a></li>
                                  <li><a href="#" class="btn btn-primary">Message</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="item">
                  <div class=" feature-cont">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top feature" src="assets/gallery/img4.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Haveyouseenthisdog</h5>
                                <div class="card-text">
                                  <p>Mexican Dog</p>
                                  <p>Somewhere in Mexico</p>
                                  <p>Female</p>
                                </div>
                              <div class="card-btn">
                                <ul>
                                  <li><a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Pet Friend</a></li>
                                  <li><a href="#" class="btn btn-primary">Message</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="item">
                  <div class=" feature-cont">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top feature" src="assets/gallery/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Haveyouseenthisdog</h5>
                                <div class="card-text">
                                   <p>Mexican Dog</p>
                                  <p>Somewhere in Mexico</p>
                                  <p>Female</p>
                                </div>
                              <div class="card-btn">
                                <ul>
                                  <li><a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Pet Friend</a></li>
                                  <li><a href="#" class="btn btn-primary">Message</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="item">
                  <div class=" feature-cont">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top feature" src="assets/gallery/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Haveyouseenthisdog</h5>
                                <div class="card-text">
                                   <p>Mexican Dog</p>
                                  <p>Somewhere in Mexico</p>
                                  <p>Female</p>
                                </div>
                              <div class="card-btn">
                                <ul>
                                  <li><a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Pet Friend</a></li>
                                  <li><a href="#" class="btn btn-primary">Message</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
               
            </div>
            <!-- carousel end -->
          <!-- post section -->
          <?php include 'post.php';?>
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


    <script type="text/javascript">
      
      $('.owl-carousel').owlCarousel({
    loop:true,
   
    autoplay: true,
    autoplayTimeout: 3500,
    stagePadding: false,

    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        
        900:{
            items:3,
            
        },
        1570:{
          stagePadding: 0,
        },
        1600:{
            items:3
        },
        1900:{
            items:4,
            margin:20 
        }
    }
})
    </script>
   <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>

   
    <script type="text/javascript">
      let files = [],
        form = document.querySelector('form'),
        container = document.querySelector('img_content'),
        text = document.querySelector('.inner'),
        browse = document.querySelector('.select'),
        input = document.querySelector('.drag input');

        browse.addEventListener('click', () => input.click());
        //input change event
        input.addEventListener('change', () => {
          let file = input.files;
          for(let i=0; i<file.length; i++){
            files.push(file[i])
            
          }
          form.reset();
          showImages();
        })

        const showImages = () =>{
          let images = '';
          files.forEach( (e, i) => {
            images += `<div class="image" >
                             <img src="${URL.createObjectURL(e)}" alt="image">
                             <span onclick="delImage(${i})">&times;</span>
                        </div>`
          })
          document.getElementById("container").innerHTML = images;
        }
        const delImage = index =>{
          files.splice(index, 1)
          showImages()
        }
    </script>

  </body>
</html>