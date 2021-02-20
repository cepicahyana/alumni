<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jan 2021 05:37:09 GMT -->

<head>
<<<<<<< Updated upstream
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
       <!-- Full calendar -->
      <link href='<?php echo base_url() ?>assets/fullcalendar/core/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="<?php echo base_url() ?>assets/../../../../cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


   </head>
   <body>
      <!-- loader Start -->
=======
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title><?php echo $this->m_reff->m_konfig(7); ?></title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
   <!-- Full calendar -->
   <link href='<?php echo base_url() ?>assets/fullcalendar/core/main.css' rel='stylesheet' />
   <link href='<?php echo base_url() ?>assets/fullcalendar/daygrid/main.css' rel='stylesheet' />
   <link href='<?php echo base_url() ?>assets/fullcalendar/timegrid/main.css' rel='stylesheet' />
   <link href='<?php echo base_url() ?>assets/fullcalendar/list/main.css' rel='stylesheet' />

   <script src="<?php echo base_url() ?>plug/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url() ?>plug/jqueryform/jquery.form.js"></script>
   <script src="<?php echo base_url() ?>plug/blokui.js"></script>
   <script src="<?php echo base_url() ?>plug/js/angular.js"></script>
   <script src="<?php echo base_url() ?>plug/js/proses.js"></script>
   <link href="<?php echo base_url() ?>plug/css/add.css" rel="stylesheet" />
   <link rel="stylesheet" href="<?php echo base_url() ?>plug/toast/jquery.toast.css" />
   <link href="<?php echo base_url() ?>plug/js/alertify/css/alertify.css" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>datatables/datatables.min.css" />
   <script type="text/javascript" src="<?php echo base_url() ?>datatables/datatables.min.js"></script>
</head>

<body>
   <!-- loader Start 
>>>>>>> Stashed changes
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
<<<<<<< Updated upstream
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?php echo base_url() ?>assets/index.html">
               <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid" alt="">
               <span>XRay</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
=======
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="<?php echo base_url() ?>dashboard">
               <!-- <img src="<?php echo base_url() ?>plug/img/<?php echo $this->m_reff->m_konfig(1); ?>" class="img-fluid" alt=""> -->
               <img src="<?php echo base_url() ?>assets/images/logohome.png" class="img-fluid" alt="">
               <span style='font-size:22px'><?php echo $this->m_reff->m_konfig(7); ?></span>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-more-fill"></i></div>
                     <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
>>>>>>> Stashed changes
                  </div>
               </div>
            </div>
<<<<<<< Updated upstream
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/index.html" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                     </li>                     
                     <li class="active">
                        <a href="<?php echo base_url() ?>assets/dashboard-1.html" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Hospital Dashboard 1 </span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/dashboard-2.html" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Hospital Dashboard 2</span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/dashboard-3.html" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient Dashboard</span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/dashboard-4.html" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Covid-19 Dashboard</span><span class="badge badge-danger">New</span></a>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/app/index.html"><i class="ri-inbox-fill"></i>Inbox</a></li>
                           <li><a href="<?php echo base_url() ?>assets/app/email-compose.html"><i class="ri-edit-2-fill"></i>Email Compose</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="<?php echo base_url() ?>assets/#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                           <li><a href="<?php echo base_url() ?>assets/add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                           <li><a href="<?php echo base_url() ?>assets/profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                           <li><a href="<?php echo base_url() ?>assets/profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li>
                        </ul>
                     </li>
                     <li><a href="<?php echo base_url() ?>assets/calendar.html" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                    
                    <li><a href="<?php echo base_url() ?>assets/chat.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Chat</span></a></li>
                    
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                           <li><a href="<?php echo base_url() ?>assets/ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                           <li><a href="<?php echo base_url() ?>assets/form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                           <li><a href="<?php echo base_url() ?>assets/data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                           <li><a href="<?php echo base_url() ?>assets/table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                           <li><a href="<?php echo base_url() ?>assets/chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                           <li><a href="<?php echo base_url() ?>assets/chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                           <li><a href="<?php echo base_url() ?>assets/chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-copper-coin-fill"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/icon-dripicons.html"><i class="ri-stack-fill"></i>Dripicons</a></li>
                           <li><a href="<?php echo base_url() ?>assets/icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="<?php echo base_url() ?>assets/icon-lineawesome.html"><i class="ri-keynote-fill"></i>line Awesome</a></li>
                           <li><a href="<?php echo base_url() ?>assets/icon-remixicon.html"><i class="ri-remixicon-fill"></i>Remixicon</a></li>
                           <li><a href="<?php echo base_url() ?>assets/icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-server-fill"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/sign-in.html"><i class="ri-login-box-fill"></i>Login</a></li>
                           <li><a href="<?php echo base_url() ?>assets/sign-up.html"><i class="ri-logout-box-fill"></i>Register</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-recoverpw.html"><i class="ri-record-mail-fill"></i>Recover Password</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-confirm-mail.html"><i class="ri-chat-check-fill"></i>Confirm Mail</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-lock-screen.html"><i class="ri-file-lock-fill"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#map" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-2-fill"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/pages-map.html"><i class="ri-google-fill"></i>Google Map</a></li>
                           <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>assets/#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-folders-fill"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/pages-timeline.html"><i class="ri-map-pin-time-fill"></i>Timeline</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-invoice.html"><i class="ri-question-answer-fill"></i>Invoice</a></li>
                           <li><a href="<?php echo base_url() ?>assets/blank-page.html"><i class="ri-checkbox-blank-fill"></i>Blank Page</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-error.html"><i class="ri-error-warning-fill"></i>Error 404</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-error-500.html"><i class="ri-error-warning-fill"></i>Error 500</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-pricing.html"><i class="ri-price-tag-3-fill"></i>Pricing</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-pricing-one.html"><i class="ri-price-tag-2-fill"></i>Pricing 1</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-maintenance.html"><i class="ri-git-repository-commits-fill"></i>Maintenance</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-comingsoon.html"><i class="ri-run-fill"></i>Coming Soon</a></li>
                           <li><a href="<?php echo base_url() ?>assets/pages-faq.html"><i class="ri-compasses-2-fill"></i>Faq</a></li>
                        </ul>
                     </li>
                    <li class="menu-level">
                        <a href="<?php echo base_url() ?>assets/#menu-level-1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level-1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 2</a></li>
                           <li>
                              <a href="<?php echo base_url() ?>assets/#submenu-2" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu 3</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="submenu-2" class="iq-submenu collapse">
                                 <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 3.1</a></li>
                                 <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 3.2</a></li>
                                 <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 3.3</a></li>
                              </ul>
                           </li>
                           <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                           <li><a href="<?php echo base_url() ?>assets/#"><i class="ri-record-circle-line"></i>Menu 5</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
        
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
             <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="<?php echo base_url() ?>assets/index.html" class="logo">
                     <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid" alt="">
                     <span>XRay</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="<?php echo base_url() ?>assets/#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="<?php echo base_url() ?>assets/#"><img src="<?php echo base_url() ?>assets/images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                           </div>
                        </li>
                        <li class="nav-item iq-full-screen">
                           <a href="<?php echo base_url() ?>assets/#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="<?php echo base_url() ?>assets/#" class="search-toggle iq-waves-effect">
                                 <i class="ri-notification-3-fill"></i>
                                 <span class="bg-danger dots"></span>
                              </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Bini</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Bini</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Jond Bini</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Jond Bini</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="<?php echo base_url() ?>assets/#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-open-fill"></i>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bini Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="<?php echo base_url() ?>assets/#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="<?php echo base_url() ?>assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">Bini Jets</h6>
                              <span class="font-size-12">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Bini Jets</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="<?php echo base_url() ?>assets/profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="<?php echo base_url() ?>assets/profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="<?php echo base_url() ?>assets/account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="<?php echo base_url() ?>assets/privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="<?php echo base_url() ?>assets/sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>

            </div>
         </div>
         <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-primary rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">5600</span></h2>
                                       <h5 class="">Doctors</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-warning rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">3450</span></h2>
                                       <h5 class="">Nurses</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-danger rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">3500</span></h2>
                                       <h5 class="">Patients</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-info rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">4500</span></h2>
                                       <h5 class="">Pharmacists</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Hospital Survey</h4>
                        </div>
                     </div>
                       <div class="iq-card-body pb-0 mt-3">
                          <div class="row text-center">
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 305 </h4>
                                   <p class="text-muted"> Today's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 999 </h4>
                                   <p class="text-muted">This Week's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 4999 </h4>
                                   <p class="text-muted">This Month's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 90,000 </h4>
                                   <p class="text-muted">This Year's Income</p>
                               </div>
                           </div>
                       </div>
                        <div id="home-servey-chart"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Hospital Staff</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul id="doster-list-slide" class="d-flex flex-wrap align-items-center p-0">
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/05.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/06.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Nurse</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/07.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Surgeon</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/08.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/09.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Surgeon</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="<?php echo base_url() ?>assets/images/user/10.jpg" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>OT Assistent</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="row">
                        <div class="col-sm-12">
                         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Operations</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                       <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-eye-fill mr-2"></i>View</a>
                                       <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                       <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                       <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                       <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <div class="table-responsive">
                                 <table class="table mb-0 table-borderless">
                                    <thead>
                                       <tr>
                                          <th scope="col">Patient</th>
                                          <th scope="col">Patient Name </th>
                                          <th scope="col">Doctors Team</th>
                                          <th scope="col">Date Of Operation</th>
                                          <th scope="col"> Report</th>
                                          <th scope="col">Diseases</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="<?php echo base_url() ?>assets/images/user/01.jpg" alt="profile"></td>
                                          <td>Petey Cruiser</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/06.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/07.jpg" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>12-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Fracture</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="<?php echo base_url() ?>assets/images/user/02.jpg" alt="profile"></td>
                                          <td>Anna Sthesia</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/06.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/07.jpg" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>14-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cataract surgery</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="<?php echo base_url() ?>assets/images/user/03.jpg" alt="profile"></td>
                                          <td>Paul Molive</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/06.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/07.jpg" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>14-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cancer</td>
                                          
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="<?php echo base_url() ?>assets/images/user/04.jpg" alt="profile"></td>
                                          <td>Anna Mull</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/06.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/07.jpg" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>16-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Hysterectomy</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="profile"></td>
                                          <td>Ruby saul</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/06.jpg" alt="">
                                                </a>
                                                <a href="<?php echo base_url() ?>assets/#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="<?php echo base_url() ?>assets/images/user/07.jpg" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>18-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cancer</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                         </div> 
                        </div>                        
                        <div class="col-md-12 col-lg-6">
                           <div class="row">
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="<?php echo base_url() ?>assets/images/page-img/30.png" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>120</h3>
                                             <span>Total Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="<?php echo base_url() ?>assets/images/page-img/31.png" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>5000</h3>
                                             <span>Completed Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="<?php echo base_url() ?>assets/images/page-img/32.png" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>1500</h3>
                                             <span>Cancelled Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="<?php echo base_url() ?>assets/images/page-img/33.png" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>500</h3>
                                             <span>Followup Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Recent Activity</h4>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                                       View All
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                          <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-eye-fill mr-2"></i>View</a>
                                          <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                          <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                          <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                          <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <ul class="iq-timeline">
                                    <li>
                                       <div class="timeline-dots-fill"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 5 min ago</h6>
                                       <small class="float-right mt-1">Active</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque </p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-success"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 6 min ago</h6>
                                       <small class="float-right mt-1">Away</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-info"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 10 min ago</h6>
                                       <small class="float-right mt-1">Active</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-warning"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 15 min ago</h6>
                                       <small class="float-right mt-1">Offline</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-danger"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 18 min ago</h6>
                                       <small class="float-right mt-1">Away</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>             
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Total Accident Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-6">
                                 <h3>$40K</h3>
                              </div>
                           </div>
                           <div id="chart-7"></div>
                           <div class="row text-center mt-3">
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Last Month</h6>
                                   <p class="m-0">358</p>
                               </div>
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Current Month</h6>
                                   <p class="m-0">194</p>
                               </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Total Death Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-6">
                                 <h3>$20K</h3>
                              </div>
                           </div>
                           <div id="chart-8"></div>
                           <div class="row text-center mt-3">
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Last Month</h6>
                                   <p class="m-0">220</p>
                               </div>
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Current Month</h6>
                                   <p class="m-0">120</p>
                               </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Overall Progress</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="apex-radialbar-chart"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <!-- Footer -->
         <footer class="bg-white iq-footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="<?php echo base_url() ?>assets/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="<?php echo base_url() ?>assets/terms-of-service.html">Terms of Use</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 text-right">
                     Copyright 2020 <a href="<?php echo base_url() ?>assets/#">XRay</a> All Rights Reserved.
                  </div>
               </div>
            </div>
         </footer>
      <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="<?php echo base_url() ?>assets/https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jan 2021 05:37:14 GMT -->
</html>
=======
         </div>
         <div id="sidebar-scrollbar">
            <?php echo $this->load->view("temp/menu"); ?>
            <div class="p-3"></div>
         </div>
      </div>

      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <!-- TOP Nav Bar -->
         <?php echo $this->load->view("temp/top_menu"); ?>
         <!-- TOP Nav Bar END -->
         <div class="container-fluid" id="page-body">
            <?php echo isset($konten) ? ($this->load->view($konten)) : "page not found!"; ?>
         </div>
      </div>
      <!-- Footer -->

      <!-- Footer END -->
   </div>

   <!-- Wrapper END -->

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
   <!-- Appear JavaScript -->
   <!-- Countdown JavaScript -->
   <!-- Counterup JavaScript -->
   <!-- Wow JavaScript -->
   <!-- Apexcharts JavaScript -->
   <!-- Slick JavaScript -->
   <!-- Select2 JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <!-- Magnific Popup JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/smooth-scrollbar.js"></script>
   <!-- lottie JavaScript -->
   <!-- am core JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/core.js"></script>
   <!-- am charts JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/animated.js"></script>
   <!-- am kelly JavaScript -->
   <!-- lottie JavaScript -->
   <script src="<?php echo base_url(); ?>assets/js/chart-custom.js"></script>

   <!-- Custom JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
<script src="<?php echo base_url(); ?>plug/js/alertify/alertify.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plug/toast/jquery.toast.js"></script>
<!--
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/js/sample.js"></script> 
-->

<script type="text/javascript">
   $(document).off("click", ".menuclick").on("click", ".menuclick", function(event, messages) {
      event.preventDefault()

      var url = $(this).attr("href");
      var title = $(this).attr("title");
      var target = $(this).attr("target");
      var ref = $(this).attr("ref");

      if (url == "<?php echo base_url() ?>login/logout") {
         window.location.href = url;
      }
      if (target == "_blank") {
         window.open(url, '_blank');
         return false;
      }
      //	$("li").removeClass('active');
      $(this).parent().addClass('active').siblings().removeClass('active');
      $(".ref").removeClass('active');
      if (ref) {
         $(".ref").removeClass('main-active');
      }
      //$("#ui-elements").removeClass('show');
      $("#" + ref).addClass('active main-active');
      $("#page-body").html('<div class="cell preloader5 loader-block"><div class="circle-5 l"></div><div class="circle-5 m"></div><div class="circle-5 r"></div></div>');

      $.post(url, {
         ajax: "yes"
      }, function(data) {
         $('.modal.aside').remove();
         history.replaceState(title, title, url);
         $(".uri").val(url);
         $('#title').html(title);
         $("#page-body").html(data);
      })
   })
</script>

<script type="text/javascript">
   function notif(msg, h = "Information", i = "info") {
      $.toast({
         heading: h,
         text: msg,
         showHideTransition: 'fade',
         icon: i,
         hideAfter: 5000,
         loader: false,
         loaderBg: '#F0F8FF',
         position: 'top-right',
      });
   }
</script>

</html>
>>>>>>> Stashed changes
