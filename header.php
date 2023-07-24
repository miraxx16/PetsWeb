<header class="header" id="header_sticky">
<div class="container-fluid wrapper">
  <div class="main-header">
    <nav class="navbar navbar-expand-lg menu-wrapper d-flex">
      <a class="navbar-brand" href="#"><img src="assets/img/pets-logo.png" class="logo"></a>
       <div class="menu-link">
         <a href="" class="burger" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo" onclick="openNav()"><img src="assets/img/flaticon/menu.svg">
          <span class="burger-hover">Menu</span>
         </a>
          
       </div>
      <div class="collapse navbar-collapse menus" id="collapseOne">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pets
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                $sql_query = mysqli_query($con,"SELECT * FROM pets");
                while ($row_pet = mysqli_fetch_object($sql_query)) { ?>
                  <a class="dropdown-item" href="#"><?php echo $row_pet->animal_type;?></a>
                <?php }?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" >Breeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" >About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;" id="search"> 
            <a class="btn my-2 my-sm-0" type="submit"><img src="assets/img/flaticon/search_white.svg"></a>
          </div>
          
        </form>
       
        
      </div>
       <div class="header-right">
          <div  class="link-icon ">
            <a href="" class="notify">
              <span class="badge1"><p>10</p></span>
              <img src="assets/img/flaticon/bell_white.svg">
              <span class="tool-tip1">Notifications</span>
            </a>
            <a href="" class="notify">
              <span class="badge2"><p>2</p></span>
              <img src="assets/img/flaticon/email_white.svg">        
              <span class="tool-tip2">Chat</span>
            </a>
            <a href="login.php" class="notify"><img src="assets/img/flaticon/logout_white.svg">
              <span class="tool-tip3">Logout</span>
            </a>

            
          </div>

      </div>
      
    </nav>
    
  </div>
</div>
<!-- <div id="demo" class="collapse">
              <ul class="nav-side hover-menu">
                <li class="nav-link profile">
                                <img src="assets/gallery/img1.jpg">
                                <a href="" >Cute Dog</a>
                            </li>
                <li class="nav-link side-icon"><img src="assets/img/flaticon/veterinary.png"><a href="" >Meet-up</a></li>
                <li class="nav-link side-icon"><img src="assets/img/flaticon/calendar1.png"><a href="" >Callendar</a></li>
                <li class="nav-link side-icon"><img src="assets/img/flaticon/animals-allowed.png"><a href="" >Pet Groups</a></li>
                <li class="nav-link side-icon"><img src="assets/img/flaticon/information.png"><a href="" >Help</a></li>
                <li class="nav-link side-icon"><img src="assets/img/flaticon/question-mark.png"><a href="" >FAQ</a></li>
              </ul>


    </div> -->
<!--overlay side navigation-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul class="nav-side hover-menu">
                <li class="nav-link profile">
                   
                    <a href="" ><img src="assets/gallery/<?php echo $row->pro_image;?>"><span><?php echo $row->name;?></span></a>
                </li>
                <li class="nav-link side-nav"><a href=""><span>Forum</span></a></li>
                <li class="nav-link side-nav"><a href=""><span>Pets</span></a></li>
                <li class="nav-link side-nav"><a href=""><span>Breeds</span></a></li>
                <li class="nav-link side-icon"><a href="" ><img src="assets/img/flaticon/veterinary.png"><span>Meet-up</span></a></li>
                <li class="nav-link side-icon"><a href="" ><img src="assets/img/flaticon/calendar1.png"><span>Callendar</span></a></li>
                <li class="nav-link side-icon"><a href="" ><img src="assets/img/flaticon/animals-allowed.png"><span>Pet Groups</span></a></li>
                <li class="nav-link side-icon"><a href="" ><img src="assets/img/flaticon/information.png"><span>Help</span></a></li>
                <li class="nav-link side-icon"><a href="" ><img src="assets/img/flaticon/question-mark.png"><span>FAQ</span></a></li>
              </ul>
             
  </div>


</header>