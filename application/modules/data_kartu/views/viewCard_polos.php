 
 <?php 
 if($this->input->post("id")=="xx")
 {
	  $database=$this->db->query("select * from data_kartu order by id desc limit 1 ")->row();  
 }else{
      $database=$this->db->get_where("data_kartu",array("id"=>$this->input->post("id")))->row();  
 }
  	 $this->mdl->qr($database->nomor_anggota);
 ?>		
 

 	
<style>
.bgdepan_polos{
	width:207px;
	height:325px;
//	background-image:url("<?php echo base_url()?>file_upload/card/kartu_portrait.jpg");
	background-color:#ffffff;
	background-size:207px;
}
.title0_polos{
font-size:11px;
font-weight:bold;
color:black;
margin-top:60px;
margin-left:120px;
position:absolute;
}.title{
font-size:10px;
font-weight:bold;
color:black;
margin-top:55px;
margin-left:10px;
position:absolute;
}
.title2{
font-size:8px;
font-weight:bold;
color:black;
margin-top:50px;
margin-left:9px;
position:absolute;
}
.title3{
font-size:8px;
font-weight:bold;
color:black;
margin-top:5px;
margin-left:2px;
}.title4{
font-size:9px;
font-weight:bold;
color:black;
margin-top:105px;
margin-left:2px;
line-height:10px;
position:absolute;
width:140px;
text-align:justify;
}.title5{
font-size:7px;
font-weight:bold;
color:black;
margin-top:82px;
margin-left:110px;
line-height:7px;
position:absolute;
width:220px;
text-align:center;
}
.tanggal_izin{
font-size:9px;
font-weight:bold;
color:black;
margin-left: 20px;
width:200px;
position:absolute;
}
.cap{
margin-top:92px;
font-size:9px;
font-weight:bold;
color:black;
margin-left: 165px;
position:absolute;
z-index:999px;
}.ttd_polos{
margin-top:82px;
font-size:9px;
font-weight:bold;
color:black;
margin-left: 135px;
position:absolute;
z-index:999px;
}

</style>

<style>
.bgbelakang_polos{
	width:207px;
	height:325px;
	/*background-image:url("<?php echo base_url()?>file_upload/card/belakang_portrait.jpg");*/
	background-color:#ffffff;
	background-size:207px;
 
}
 .teks{
font-size:14px;
font-weight:bold;
color:black;
margin-top:15px;
margin-left:70px;
position:absolute;
}
.teks2{
font-size:10px;
font-weight:bold;
color:black;
margin-top:10px;
margin-left:75px;
position:absolute;
}.teks3{
font-size:9px;
font-weight:bold;
color:black;
margin-top:30px;
margin-left:5px;
position:absolute;
}.teks4{
font-size:9px;
font-weight:bold;
color:black;
line-height:15px;
margin-top:45px;
margin-left:5px;
position:absolute;
}
.teks_tanggal_izin{
font-size:9px;
font-weight:bold;
color:black;
margin-left: 95px;
width:200px;
position:absolute;
}
.tikwa1{
margin-left:32px;
}.tikwa2{
margin-left:36px;
}.tikwa3{
margin-left:49px;
}.tikwa4{
margin-left:6px;
}.tikwa5{
margin-left:9px;
}.tikwa6{
margin-left:19px;
}
.barang{
margin-left:120px;
}
.sd{
margin-left:20px;
}
.masa{
margin-left:20px;
}
.footer_polos{
    width:320px;
	position:absolute;
	margin-top:180px;
	margin-left:-15px;
	color:black;
 padding:2px;
 font-size:9px;
 font-weight:bold;
 
text-align:center;
}
.u{
border-bottom:black solid 1px;
}
#print_polos{  	width:207px; margin-left:60px;}
#print_polos p{
padding-left:12px;
}
.gcap{
width:50px;
}
.gttd_polos{
width:150px;
}

.title6_polos{
display:none;
}
 .stnk{
     font-size:11px;
 }
 .ekp{
      font-size:11px;
      float:left;
      margin-left:-155px;
      color:white;
      margin-top:23px;
 }.namaperusahaan{
   
     width:360px;
     position:absolute;
       margin-top:-105px;
       margin-left:57px;
       font-weight:bold;
       color:white;
       font-size:12px;
       line-height:3px;
 }
 .pimpinan_polos{
    width:207px;
     position:absolute;
       margin-top:-94px;
     //  margin-left:57px;
       font-weight:bold;
       color:black;
       font-size:12px;
       line-height:2px;
       
 }
 .nia_polos{
     width:207px;
     position:absolute;
       margin-top:-80px;
       
       font-weight:bold;
      color:black;
       font-size:13px;
       line-height:3px;
 }
 #foto_polos{
    position:absolute;
   	margin-top:78px;
	margin-left:45px;
	width:100px; 
	height:130px;
 	border-radius:10px;
//	border:#cf9114 solid 1px;
    text-shadow:1px 1px 1px  black;
}
#barcode_polos{
      position:absolute;
	margin-top:250px;
	margin-left:5px;
	width:45px;

}
.sadows{
    color:#fccd4d;
    text-shadow:1px 1px 1px  black;
}
.berlaku_polos{
    margin-top:-30px;
    margin-left:70px;
    color:black;
    font-size:9px;
    position:absolute;
}
</style>
		
 <div id="print_polos" >
 <table><tr>
 <td>
 <p class="bgdepan_polos">
 
  
 <span class="title0_polos" >  </span><br> 
 
   <img src="<?php echo base_url()?>/<?php echo $database->foto?>" id="foto_polos" />
   <img src="<?php echo base_url()?>qr/<?php echo $database->nomor_anggota?>.png" id="barcode_polos" />
 <div class="pimpinan_polos">
    <center>
        <?php echo strtoupper($database->pimpinan)?> 
    </center>
     
     </div>
<!-- <div class="namaperusahaan sadows">
     <p>   <?php echo strtoupper($database->pimpinan)?> </p>
     
     </div>-->
  
 
 <div class="nia_polos">
     <center>
         <?php echo strtoupper($database->event)?> 
     </center>
 
 </div>
 <!--
 <span class="berlaku_polos">Berlaku sampai :<b> <?php echo $this->tanggal->ind($database->jatuh_tempo,"/");?></b></span>  
 -->
 
 <span class="cap"><!--<img   class='gcap'  src='<?php echo base_url()?>file_upload/card/cap.png'>--></span>
 <span class="ttd_polos">
     <!---<img   class='gttd_polos' src=' echo base_url()?>file_upload/img/<?php echo $this->m_reff->goField("tm_referensi","poto","where id='2'");?>'>---></span>
 
  <span class="title5">
  
  <br> <br>  
  <br>
  <br>
  <br>
  <br>
 <!--<span class='ekp'> Berlaku : <b> <?php echo $this->tanggal->ind($database->masa_berlaku,"-");?></b></span> --->
 <span class='stnk'>  &nbsp; <b>&nbsp;  </b></span> 
  
<!-- <span class='u'> <b>  $this->m_reff->goField("tm_referensi","konten","where id='3'");?></b></span>--->
 
 <br><br>
 <span class="bina_polos"> <b> </b><br>
  <b>   </b>
  </span> 
  </span> 
 <span class="title6_polos"> &nbsp;</span>
 </p>  
 </td></tr><!--tr>
 <td class='td'>
  <p class="bgbelakang_polos">
      
  <span class='footer_polos'>
 
 </span> 
 </p>  
 </td></tr-->
</table> 
 </div>
 
 
 <textarea id="printingpolos-css" style="display:none;">
     #barcode_polos{
      
	 margin-top:375px;
	 margin-left:9px;
	width:85px;
	height:85px;
		/*border:#cf9114 solid 2px;*/
}


     .sadows{
   color:#fccd4d;
    text-shadow:1px 1px 1px  black;
}
  .namaperusahaan{
   font-family: Sans-serif;
     width:360px;
     position:absolute;
       margin-top:-165px;
       margin-left:120px;
       font-weight:bold;
     
       font-size:16px;
       line-height:3px;
 }
 .pimpinan_polos{
  font-family: Sans-serif;
    width:280px;
    /*background:#009688;*/
     position:absolute;
       margin-top:-190px;
       margin-left:5px;
       font-weight:bold;
      font-size:16px;
      padding-bottom:3px;
       /*line-height:3px;*/
 }
 .nia_polos{
  font-family: Sans-serif;
     width:207px;
     position:absolute;
       margin-top:-163px;
    margin-left:35px;
       font-weight:bold;
        font-size:19px;
       line-height:3px;
 }
 

   #foto_polos{
    position:absolute;
   	margin-top:115px;
	margin-left:88px;
	width:130px;
	height:160px;
	max-height:210px;
	 border-radius:12px;
//	border:#cf9114 solid 2px;
    text-shadow:1px 1px 1px  black;*/
}
.bina_polos{
margin-top:-5px;
position:absolute;
margin-left:-55px;
}

 .berlaku_polos{
 font-family: Sans-serif;
  position:absolute;
    margin-top:-45px;
    margin-left:95px;
    color:black;
    font-size:15px;
    padding-bottom:20px;
   
}

.title6_polos{
font-weight:bold;
color:white;
margin-top:247px;
position:absolute;
margin-left:-100px;
font-size:12px;
}
 
.bgdepan_polos{
	width:307px;
	height:485px;
// background-image:url("<?php echo base_url()?>file_upload/card/kartu_portrait.jpg");
	background-color:#ffffff;
	font-family:calibri;
	background-size:307px;
	margin-left:-10px;
	margin-top:-10px;
}
.title0_polos{
font-size:18px;
font-weight:bold;
color:black;
margin-top:78px;
margin-left:190px;
position:absolute;
}
.title{
font-size:17px;
font-weight:bold;
color:black;
margin-top:85px;
margin-left:23px;
position:absolute;padding-left:12px;
}
.title2{
font-size:17px;
 padding-left:3px;
color:black;
margin-top:90px;
margin-left:30px;
position:absolute;
}
.title3{
font-size:15px;
 padding-left:12px;
color:black;
margin-top:115px;
margin-left:0px;
position:absolute;
line-height:19px;
}.title4{
font-size:17px;
 
color:black;
margin-top:167px;padding-left:12px;
margin-left:0px;
line-height:17px;
position:absolute;
width:240px;
text-align:justify;
}

.title5{
font-size:11px;
 
color:black;
margin-top:172px;
margin-left:140px;
line-height:9px;
position:absolute;
width:280px;
text-align:center;
}
.tanggal_izin{
font-size:15px;
 
color:black;
margin-left: 320px;
width:200px;
position:absolute;
}
.cap{
margin-top:188px;
font-size:9px;
font-weight:bold;
 
color:black;
margin-left: 193px;
position:absolute;
z-index:999px;
}.ttd_polos{
margin-top:170px;
font-size:9px;
font-weight:bold;
color:black;
margin-left: 161px;
position:absolute;
z-index:999px;
}

 .gcap{
width:53px;
height:50px;
}
.gttd_polos{
width:190px;
}


.u{
border-bottom:black solid 0.5px;
}




/*
.bgbelakang_polos{
	margin-left:-10px;
	margin-top:18px;
	width:309px;
	height:485px;
	background-image:url("<?php echo base_url()?>file_upload/card/belakang_portrait.jpg");
	background-size:309px 485px;
	font-family:calibri;
	position:absolute;
}

*/
.isitikwa{
font-weight:bold;
}
 .teks{
font-size:20px;
font-weight:bold;
color:black;
margin-top:25px;
margin-left:140px;
position:absolute;
}
.teks2{
font-size:15px;
color:black;
margin-top:26px;
margin-left:142px;
position:absolute;
}

.teks3{
font-size:16px;	padding-left:18px;
 
color:black;
margin-top:55px;
margin-left:-6px;
position:absolute;
}
.teks4{ 
font-size:16px;
 
color:black;
line-height:22px;
margin-top:85px;
margin-left:15px;
position:absolute;
}
.teks_tanggal_izin{
font-size:16px;
 
color:black;
margin-left: 135px;
width:200px;
position:absolute;
}
.tikwa1{
margin-left:45px;
}.tikwa2{
margin-left:45px;
}.tikwa3{
margin-left:63px;
}.tikwa4{
margin-left:2px;
}.tikwa5{
margin-left:9px;
}.tikwa6{
margin-left:24px;
}
.barang{
margin-left:179px;
}
.sd{
margin-left:22px;
}
.masa{
margin-left:33px;
}
.footer_polos{
    min-width:320px;
	position:absolute;
	margin-top:255px;
	margin-left:75px;
	color:black;
 padding:2px;
 font-size:13px;
  font-weight:bold;
 
text-align:center;
}

#print_polos{  	width:207px; }
#print_polos p{
padding-left:12px;
}
  .stnk{
     font-size:19px;
 }
  .ekp{
      font-size:11px;
      float:left;
      margin-left:-155px;
      color:white;
      margin-top:23px;
 }
</textarea>
<iframe id="printing-frame" name="printpolos_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">

  function printDiv_polos(divName) {
	
    var a = document.getElementById('printingpolos-css').value;
    var b = document.getElementById(divName).innerHTML;
    window.frames["printpolos_frame"].document.title = document.title;
    window.frames["printpolos_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["printpolos_frame"].window.focus();
    window.frames["printpolos_frame"].window.print();
	   finalShop();
}

</script>	