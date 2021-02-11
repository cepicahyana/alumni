 

<?php
$kode =	$this->input->get_post("kode");
$qr =	$this->input->get_post("qr");
?> 
<h5>Upload file peserta </h5>
 
<hr>
 <form action="javascript:simpanfile()" id="uploadfilexl">
<table class="entry table-bordered" width="100%">
 
<tr>
 
<input type="file" required  name="userfile"  id="userfile" class="form-control"   >
<br>
 
<div style="font-size:11px;color:#A52A2A">- Kapasitas upload file max.25MB <br>- type file yang diizinkan : ptx,pdf,docx,xlsx,jpg,png,zip</div>
</td> 
</tr>
</table>

<br>


<center id="btn1">
<button   onclick="simpanfile()" class="btn fa fa-upload btn-primary has-ripple"> Upload file </button>
</center> 
</form>


<center id="btn2">
<button class="btn btn-primary has-ripple" type="button" disabled="">
									<span class="spinner-grow spinner-grow-sm" role="status"></span>
									Loading...
								</button></center>


<br>
<br>
<br>
<div class="progress-bar" id="progress" >
    <div class="bar"></div >
    <div class="percent">0%</div >
</div>

<div id="statusToGet"></div>

<center>
<div id="hasilAdd">
 </div>
 
</center>
  
 <script type="text/javascript">
   
 $('.progress-bar').hide();
 //document.getElementById("progress").style.width = "0%";
 setTimeout(function(){  $("[name='nama'").focus(); }, 500);
	var csrfHash="<?php echo $this->security->get_csrf_hash(); ?>";
	var csrfName="<?php echo $this->security->get_csrf_token_name(); ?>";
function simpanfile(){
	$('.progress-bar').show();
	var kode="<?php echo $kode;?>";
	var qr="<?php echo $qr;?>";
    var userfile=$('#userfile').val();
    if(userfile=="undefined" || userfile==null || !userfile){ 
	$('#userfile').focus();
	notif("Silahkan upload file");
	return false;
	}
	$("#btn1").hide();
	$("#btn2").show();
//	$("#loadingKontak").show();
	var nama=$("[name='nama']").val();
	$("#hasilAdd").html(""); 
	
	
	var progress = $('.progress-bar');
	var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#statusToGet');
	var kode	=	"<?php echo $this->input->post("kode")?>";
	var tahun	=	"<?php echo $this->input->post("tahun")?>";
    $('#uploadfilexl').ajaxForm({
     url:'<?php echo base_url()?>acara/upload_file_peserta',
     type: 'post',
	 dataType:"JSON",
     data:{"userfile":userfile,"nama":nama,"kode":kode,"tahun":tahun,[csrfName]:csrfHash}, 
	 
	 
	 beforeSend: function() {
		 $('.progress-bar').show();
            status.empty();
            var percentVal = '0%';
            bar.width(percentVal);
            progress.width(percentVal);
            percent.html(percentVal);
			//document.getElementById("progress").style.width = percentVal;
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
			 progress.width(percentVal);
            percent.html(percentVal);
        },
	 
     
     success: function(data) {
		   
       if(data["gagal"]==true)
	   {
		     $("#hasilAdd").html(data["info"]); 
			 
			 
	   }else if(data["file"]==false)
	   {
		     $("#hasilAdd").html("Type file tidak diizinkan.<br>silahkan upload file : pptx,pdf,docx,xlsx,jpg,png,zip,MP4"); 
			 
	   }else if(data["size"]==false)
	   {
		     $("#hasilAdd").html("Kapasitas file melibihi 25mb"); 
	   }else{
	   
	    $("#hasilAdd").html("Berhasil diupload."); 
		  notif("Berhasil diupload.","information","success");
		  reload_dataTugas();
		  setTimeout( function(){$("#mdl_modal").modal("hide")},1500);
		 
	   }
	   // csrfHash=data.csrf; 
	     $("#btn1").show();
			   $("#btn2").hide();
			   $("#loadingKontak").hide();
	    
     },
    });     
};
</script>   




 <script>
 $("#btn2").hide();
 $("#loadingKontak").hide();
  
 </script>


 