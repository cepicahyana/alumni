<?php
$val=$this->m_reff->goField("pengaturan","val","where id=3");
$cek1=$cek2="";
if($val==1){
   $cek1="checked";
   $cek2="";
}else{
   $cek1="";
   $cek2="checked";
}
?>

<div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
               <h4 class="card-title">Form Registrasi</h4>
            </div>
      </div>

   <div class="iq-card-body">
         <p>Status</p>

         <div class="custom-control custom-radio custom-control-inline">
            <input onclick="cek(1)" <?php echo $cek1;?> id="customRadio6"  type="radio" name="val" class="custom-control-input" value="1">
            <label class="custom-control-label" for="customRadio6"> On </label>
         </div>

         <div class="custom-control custom-radio custom-control-inline">
            <input onclick="cek(0)" <?php echo $cek2;?> type="radio" id="customRadio7" name="val" class="custom-control-input" value="0">
            <label class="custom-control-label" for="customRadio7"> Off </label>
         </div>

   </div>

</div>


<script>  
 function cek(sts){   
           $.ajax({  
                url:"<?php echo base_url();?>hal_reg/set",  
                method:"POST",  
                data:{sts:sts},  
                success:function(data){  
                    notif("success!");
                }  
           });  
      }; 

 
 </script>  