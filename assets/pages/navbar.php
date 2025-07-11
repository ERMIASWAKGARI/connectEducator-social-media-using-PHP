<style>

 :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --danger-color: #ef233c;
        }

.dark-blue-background {
     background-color: var(--primary-color);
}

.dark-blue-background .navbar-nav .dropdown-item {
  display: inline-block;
  padding: 0.5rem 1rem;
  margin: 0.2rem;
  color: var(--light-color);
  border: 1px solid transparent;
  border-radius: 0.25rem;
  text-decoration: none;
}

.dark-blue-background .navbar-nav .dropdown-item:hover {
     background-color: var(--secondary-color);
  border-color:var(--secondary-color);
}
    
    </style>
<?php global $user;?>

<nav class="navbar navbar-expand-lg navbar-light dark-blue-background border">
        <div class="container col-lg-9 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12">
        
        
           <form class="d-flex" id="searchform">
                
                    <input class="form-control me-2" type="search" id="search" placeholder="Search..."
                        aria-label="Search" autocomplete="off">
                <div class="bg-white text-end rounded border shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;" id="search_result" data-bs-auto-close="true">
                <button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
                <div id="sra" class="text-start">
                <p class="text-center text-muted">enter name or username</p>

                </div>
                </div>
                </form>
        
        
        <div class="d-flex justify-content-between col-lg-8 col-sm-12">
                

            


                
                <ul class="navbar-nav flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0">

                <li class="nav-item">
                    <a class="dropdown-item"  href="?"></i>Home</a>
                </li>
                <li class="nav-item">
                    
                    <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#addpost" href="#">Create Post</a>
                </li>
                <li class="nav-item">
                  
                    
                    <?php
                                if(getUnreadNotificationsCount()>0){
                                    ?>
                                <a class="nav-link text-dark position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                                                    <i class="bi bi-bell-fill"></i>
                                <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
                                <small><?=getUnreadNotificationsCount()?></small>
                                </span>
                                </a>

                                    <?php
                                }else{
                                    ?>
                                <a class="dropdown-item"  data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">Notifications</a>
                                    <?php
                                }
                                                    ?>
                                                

                                </li>
                         <li class="nav-item">
                     <a class="dropdown-item"  data-bs-toggle="offcanvas" href="#message_sidebar" href="#">Messages  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
                        </span></a>
                       </li>
                         <li><a class="dropdown-item" href="?u=<?=$user['username']?>"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="?editprofile"> Account</a></li>


                       
                         <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50" aria-labelledby="navbarDropdown">
                       
                        <li><a class="dropdown-item navbar navbar-expand-lg navbar-light dark-blue-background border" href="assets/php/actions.php?logout"> Logout</a></li>
                    </ul>
                </li>

            </ul>
         

            </div>
            

            


        </div>
    </nav>