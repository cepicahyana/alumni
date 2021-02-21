   <nav class="iq-sidebar-menu">
      <ul id="iq-sidebar-toggle" class="iq-menu">
         <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Menu</span></li>
         <li>
            <a title="Dashboard" href="<?php echo base_url(); ?>dashboard" class="menuclick iq-waves-effect"><i class="ri-hospital-fill"></i><span>Dashboard</span></a>
         </li>


         <li><a title="Data alumni" href="<?php echo base_url(); ?>dashboard" class="menuclick iq-waves-effect"><i class="ri-user-3-fill"></i><span>Data alumni</span></a></li>

         <li><a title="Verifikasi" href="<?php echo base_url(); ?>dashboard" class="menuclick iq-waves-effect"><i class="ri-chat-check-fill"></i><span>Verifikasi</span></a></li>
         <hr>
         <li><a href="kirim_info" class="iq-waves-effect"><i class="ri-mail-send-fill"></i><span>Kiriman informasi</span></a></li>
         <li><a href="saran" class="iq-waves-effect"><i class="ri-mail-send-fill"></i><span>Kritik dan saran</span></a></li>
         <hr>
         <!--  <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>. . . . . . .</span></li>-->
         <li class="ref active main-active" id="referensi">
            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
               <i class="ri-apps-fill"></i><span>Pengaturan</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
               <li><a class="menuclick" href="<?php echo base_url() ?>data_alumni" ref="referensi" title="Data Alumni"> > Data Alumni</a></li>
               <li><a class="menuclick" href="<?php echo base_url() ?>data_tahun" ref="referensi" title="Data tahun lulus"> > Tahun lulusan</a></li>
               <li><a class="menuclick" href="<?php echo base_url() ?>data_kelas" ref="referensi" title="Data kelas"> > Data kelas</a></li>
               <li><a href="<?php echo base_url() ?>jp"> > Jenjang pendidikan</a></li>
               <li><a href="<?php echo base_url() ?>profesi"> > Profesi</a></li>
               <li><a href="<?php echo base_url() ?>penghasilan"> > Penghasilan</a></li>
               <li><a href="<?php echo base_url() ?>goldar"> > Golongan darah</a></li>
               <li><a href="<?php echo base_url() ?>hal_reg"> > Halaman registrasi</a></li>
            </ul>
         </li>
         <li class="iq-menu-title"><i class="ri-subtract-line"></i><span> </span></li>
      </ul>
   </nav>
   <div class="p-3"></div>