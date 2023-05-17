 <header class="app-header fixed-top">
     <div class="app-header-inner">
         <div class="container-fluid py-2">
             <div class="app-header-content">
                 <div class="row justify-content-between align-items-center">

                     <div class="col-auto">
                         <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                                 <title>Menu</title>
                                 <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                             </svg>
                         </a>
                     </div><!--//col-->
                     <div class="search-mobile-trigger d-sm-none col">
                         <i class="search-mobile-trigger-icon fas fa-search"></i>
                     </div><!--//col-->
                     <div class="app-search-box col">
                         <form class="app-search-form">
                             <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                             <button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button>
                         </form>
                     </div><!--//app-search-box-->

                     <div class="app-utilities col-auto">

                         <div class="app-utility-item app-user-dropdown dropdown">
                             <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="<?= ASSETS ?>images/user.png" alt="user profile"></a>
                             <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                 <li><a class="dropdown-item" href="#0">Account</a></li>
                                 <li><a class="dropdown-item" href="#0">Settings</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#0">Log Out</a></li>
                             </ul>
                         </div><!--//app-user-dropdown-->
                     </div><!--//app-utilities-->
                 </div><!--//row-->
             </div><!--//app-header-content-->
         </div><!--//container-fluid-->
     </div><!--//app-header-inner-->
     <div id="app-sidepanel" class="app-sidepanel">
         <div id="sidepanel-drop" class="sidepanel-drop"></div>
         <div class="sidepanel-inner d-flex flex-column">
             <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
             <div class="app-branding">
                 <a class="app-logo" href="#0"><img class="logo-icon me-2" src="<?= ASSETS ?>images/app-logo.svg" alt="logo"><span class="logo-text">Scrape Tool PHP</span></a>

             </div><!--//app-branding-->

             <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                 <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                     <li class="nav-item">
                         <a class="nav-link <?= $link == "index" ? 'active' : '' ?>" href="<?= base_url() ?>">
                             <span class="nav-icon">
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                     <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                 </svg>
                             </span>
                             <span class="nav-link-text">Home</span>
                         </a><!--//nav-link-->
                     </li><!--//nav-item-->
                     <li class="nav-item">
                         <a class="nav-link <?= $link == "view_data" ? 'active' : '' ?>" href="<?= base_url('Home/view_data') ?>">
                             <span class="nav-icon">
                                 <i class="fa fa-eye"></i>

                                 <span class="nav-link-text">View Data</span>
                         </a><!--//nav-link-->
                     </li><!--//nav-item-->


         </div><!--//sidepanel-inner-->
     </div><!--//app-sidepanel-->
 </header>