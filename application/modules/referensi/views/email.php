         <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 	 <form action="javascript:submitFormNoResset('modal_artikel')" id="modal_artikel" url="<?php echo base_url()?>referensi/setEmail" method="post" enctype="multipart/form-data">
       
                    <div class="card" id="area_modal_artikel">
					
                        <div class="header">
                         <button class='btn bg-teal pull-right' onclick="submitFormNoResset('modal_artikel')">SIMPAN</button>
						 <h2>Konten Email</h2>
									
                        </div>
               <br>  
                           <!----->
                         
				 <div class="card" id="area_lod">
                        <div class="body" >
                            
                             <div ><br>Kirim email : <input type="number" name="val2" value="<?php echo $this->m_reff->goField("pengaturan","val2","where id='1'");?>" > Hari seblum jatuh tmpo</div> 
                         <br>
                            <textarea class='form-control' name="val" id="email"><?php echo $this->m_reff->goField("pengaturan","val","where id='1'");?></textarea>
                            					
						</div>	
					
					</div>	
                           <!----->
                    
                    </div>
                    </form>
       </div>
   </div>       
   <script>
       function setEmail()
       { 
           loading();
           var val=$("#email").val();
           $.post("<?php echo base_url()?>referensi/setEmail",{val:val}, function(){
           notif("Tersimpan");
           unblock();
           });
       }
   </script>
     <!-- Ckeditor -->
    <script src="<?php echo base_url()?>new/plugins/ckeditor/ckeditor.js"></script>
<script>
   
    //CKEditor
    CKEDITOR.replace('email');
    CKEDITOR.config.height = 200;

    
 
</script>