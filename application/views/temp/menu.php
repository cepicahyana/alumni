   <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Menu</span></li>
                     <li>
                        <a title="Dashboard" href="<?php echo base_url();?>dashboard" class="menuclick iq-waves-effect"><i class="ri-hospital-fill"></i><span>Dashboard</span></a>
                     </li>                     
                     
                    
                     <li><a title="Data alumni" href="<?php echo base_url();?>dashboard" class="menuclick iq-waves-effect"><i class="ri-user-3-fill"></i><span>Data alumni</span></a></li>
                    
                    <li><a title="Verifikasi" href="<?php echo base_url();?>dashboard" class="menuclick iq-waves-effect"><i class="ri-chat-check-fill"></i><span>Verifikasi</span></a></li>
                     <hr>
                        <li><a href="{{url('saran')}}" class="iq-waves-effect"><i class="ri-mail-send-fill"></i><span>Kiriman informasi</span></a></li>
                        <li><a href="{{url('saran')}}" class="iq-waves-effect"><i class="ri-mail-send-fill"></i><span>Kritik dan saran</span></a></li>
       <hr>
                   <!--  <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>. . . . . . .</span></li>-->
                     <li  class="ref active main-active" id="referensi">
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
						<i class="ri-apps-fill"></i><span>Pengaturan</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a class="menuclick" href="<?php echo base_url()?>data_tahun" ref="referensi" title="Data tahun lulus"> > Tahun lulusan</a></li>
                           <li><a class="menuclick" href="<?php echo base_url()?>data_tahun" ref="referensi"  title="Data kelas"> > Data kelas</a></li>
                           <li><a href="<?php echo base_url()?>referensi_tahun"> > Jenjang pendidikan</a></li>
                           <li><a href="<?php echo base_url()?>referensi_tahun"> > Profesi</a></li>
                           <li><a href="<?php echo base_url()?>referensi_tahun"> > Penghasilan</a></li>
                           <li><a href="<?php echo base_url()?>referensi_tahun"> > Golongan darah</a></li> 
                           <li><a href="<?php echo base_url()?>referensi_tahun"> > Halaman registrasi</a></li> 
                        </ul>
                     </li>
					             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span> </span></li> 
                         </ul>
               </nav>
               <div class="p-3"></div>