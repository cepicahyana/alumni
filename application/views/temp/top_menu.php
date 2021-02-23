<?php
$id = $this->session->userdata("id");
$this->db->where("id_admin", $id);
$db = $this->db->get("admin")->row();
?>

<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <div class="iq-sidebar-logo">
         <div class="top-logo">
            <a href="<?php echo base_url() ?>assets/index.html" class="logo">
               <img src="<?php echo base_url() ?>plug/img/<?php echo $this->m_reff->m_konfig(1); ?>" class="img-fluid" alt="">
               <span><?php echo $this->m_reff->m_konfig(7); ?></span>
            </a>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-search-bar">
            <!-- <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="<?php echo base_url() ?>assets/#"><i class="ri-search-line"></i></a>
                     </form>-->
            <h4 id='title'><?php echo isset($header) ? ($header) : $this->m_reff->m_konfig(7) ?></h4>
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

               <li class="nav-item iq-full-screen">
                  <a href="javascript:void(0)" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i> Pesan</a>
               </li>
               <li class="nav-item">
                  <a href="javascript:void(0)" class="search-toggle iq-waves-effect">
                     <i class="ri-notification-3-fill"></i>
                     <span class="bg-danger dots"></span>
                  </a>
                  <div class="iq-sub-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                           </div>

                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                           <a href="<?php echo base_url() ?>assets/#" class="iq-sub-card">
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
                  <img src="<?php echo base_url("upload/dp/" . $db->profileimg); ?>" class="img-fluid rounded mr-3" alt="user">
                  <div class="caption">
                     <h6 class="mb-0 line-height"><?= $db->profilename ?></h6>
                     <span class="font-size-12"><?= $db->username ?></span>
                  </div>
               </a>
               <div class="iq-sub-dropdown iq-user-dropdown">
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body p-0 ">
                        <div class="bg-primary p-3">
                           <h5 class="mb-0 text-white line-height">Hello Bini Jets</h5>
                           <span class="text-white font-size-12">Available</span>
                        </div>
                        <a href="<?php echo base_url() ?>profile_admin" class="iq-sub-card iq-bg-primary-hover">
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