<?php
$id	=	$this->input->post("id");
if(!$id){
	
}
		$this->db->order_by("_ctime","desc");
		$this->db->limit(1);
$db	=	$this->db->get("data_acara")->row();
$id_jenis_acara		=	isset($db->id_jenis_acara)?($db->id_jenis_acara):"";
$judul_acara		=	isset($db->judul_acara)?($db->judul_acara):"";
$tahun				=	SUBSTR($db->tgl,0,4);
$kode				=	isset($db->kode)?($db->kode):"";
?>

 
</button>
<?php
$id=1;
$acr	=	$this->db->get_where("tr_jenis_acara",array("id"=>$id))->row();
$jenis	=	isset($acr->jenis)?($acr->jenis):"";
$acara	=	isset($acr->acara)?($acr->acara):"";
$acara= "<span> Acara ".$acara." -  ".$jenis."</span>";
//if($db->tgl and $db->tgl!='0000-00-00'){
	$tgl	=	$this->tanggal->ind($db->tgl,"/");
/*}else{
	$tgl	=	"";
	echo "<script> 
	$( document ).ready(function() {
		$('#tgl').val('')
	});
 </script>";
}*/

 ?>
 

<div class="row" id="area_formSubmit">
<div class="col-sm-12">

<div class="card">
 
<div class="card-block">
<h2 class="sub-title" style="font-size:17px">Kelengkapan data: <button style="float:right;margin-top:-10px" class="btn btn-sm btn-teal btn-out pull-right"><i class="fa fa-share"></i> Kirim link inputan</button></h2>

<form id="formSubmit" action="javascript:submitForm('formSubmit')"
	 method="post" url="<?php echo base_url()?>acara/insert">

<div class="form-group row">
<label class="col-sm-2 col-form-label">Acara</label>
<div class="col-sm-10">
 <?php echo $acara?>
</div>
</div> 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Judul acara</label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" class="form-control" value="<?php echo $db->judul_acara;?>">
</div>
</div> 

<input type="hidden" name="f[id_jenis_acara]" value="<?php echo $id;?>">


<div class="form-group row">
<label class="col-sm-2 col-form-label"> Tanggal mulai</label>
<div class="col-sm-10">
<input type="text" name="tgl" id="tgl" value="<?php echo $tgl;?>" class="form-control">
</div>
</div> 
<div class="form-group row">
<label class="col-sm-2 col-form-label"> Waktu</label>
<div class="col-sm-10">
<input type="text" name="f[waktu]"  value="<?php echo $db->waktu;?>" class="form-control">
</div>
</div> 

<!--
<div class="form-group row">
<label class="col-sm-2 col-form-label"> Durasi </label>
<div class="col-sm-10">
<select class="form-control" name="f[durasi]">
<option value="1">1 Hari</option>
<option value="2">2 Hari</option>
<option value="3">3 Hari</option>
<option value="4">4 Hari</option>
<option value="5">5 Hari</option>
<option value="6">6 Hari</option>
<option value="7">7 Hari</option>
<option value="8">8 Hari</option>
<option value="9">9 Hari</option>
<option value="10">10 Hari</option>
</select>
</div>
</div> 
-->



 
  
<div class="form-group row">
<label class="col-sm-2 col-form-label">Tempat </label>
<div class="col-sm-10">
<input type="text" name="f[tempat]" required value="<?php echo $db->tempat;?>" class="form-control">
</div>
</div> 
 
  
	<div class="form-group row">
	<label class="col-sm-2 col-form-label">Upload daftar peserta </label>
	<div class="col-sm-10" id="dataTugas"">
	<?php
	if($db->file_peserta){
		echo '
		<div class="btn-group">
	<a href="'.$this->m_reff->pengaturan(2)."?f=".$this->m_reff->encrypt($db->file_peserta) .'" class=" btn btn-sm btn-outline-info btn-round cursor font12 btn-outline-grey"><i class="fa fa-file"></i> Download: file peserta</a>
	<button  onclick="upload_peserta()" type="button"   class="btn waves-effect btn btn-outline-info btn-round btn-sm"><i class="fa fa-cloud-upload"></i> Upload ulang</button>
	</div>
		
		';
	}else{
		echo '<button  onclick="upload_peserta()" type="button"   class="btn waves-effect btn btn-outline-info btn-round btn-sm"><i class="fa fa-cloud-upload"></i> Upload  </button>';
	} ?> 
	</div>
	</div> 
 


<div class="form-group row">
<label class="col-sm-2 col-form-label">Kontak person </label>
<div class="col-sm-10">
<input type="text" name="f[cp]"  value="<?php echo $db->cp;?>" placeholder="contoh : Andi (0812345678)" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Susunan acara </label>
<div class="col-sm-10">
<a class="btn btn-outline-info btn-sm btn-round" href="javascript:void(0)" 
onclick="susunan_acara()" style="margin-top:5px"><i class="fa fa-book"></i> Input susunan acara</a>
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Pakaian </label>
<div class="col-sm-10">
<textarea class="form-control" id="pakaian">
Pria : <br>
Wanita : <br>
TNI : <br>
Polri : <br>

</textarea>
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Jumlah undangan </label>
<div class="col-sm-10">
<input type="text" name="f[jml_undangan]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Pewara </label>
<div class="col-sm-10">
<input type="text" name="f[pewara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Setting tempat </label>
<div class="col-sm-10">
<input type="text" name="f[s_tempat]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Liputan media </label>
<div class="col-sm-10">
<input type="text" name="f[l_media]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Ajudan dinas </label>
<div class="col-sm-10">
<input type="text" name="f[ajudan_dinas]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Watermark </label>
<div class="col-sm-10">
<input type="text" name="f[watermark]" required class="form-control">
</div>
</div> 
 
 

 <button class="btn btn-info pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
 </center>
</form>

 
</div>
</div>

</div>
</div> 




<script>
	 	
			$('#tgl').daterangepicker({
				minDate:new Date(),
    "singleDatePicker": true,
    "showDropdowns": true,
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        "daysOfWeek": [
            "Min",
            "Sen",
            "Sel",
            "Rab",
            "Kam",
            "Jum",
            "Sab"
        ],
        "monthNames": [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Augustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ],
        "firstDay": 1
    },
    
}, function(start, end, label) { 
 // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
 
});
 
function reload_table(){
	loading();
	window.location.href="<?php echo base_url()?>acara/input_form";
} 
	 
</script>


		    
<script>  
$( document ).ready(function() {
     CKEDITOR.replace('pakaian',{
 height  : '130px', 
     toolbar: [ 
] 
 }); 
});

function upload_peserta(){
		$("#mdl_modal").modal();
		$("#mdlValue").html("mohon tunggu..."); 
	    var kode = "<?php echo $kode;?>";	
	    var tahun = "<?php echo $tahun;?>";	
	 $.post("<?php echo base_url() ?>acara/upload_peserta",{kode:kode,tahun:tahun}, function(data, status){
		 	$("#mdlValue").html(data);
	  }); 
}
function susunan_acara(){
		$("#lg_modal").modal();
		$("#lgValue").html("mohon tunggu..."); 
	    var kode = "<?php echo $kode;?>";	
	    var tahun = "<?php echo $tahun;?>";	
	 $.post("<?php echo base_url() ?>acara/susunan_acara",{kode:kode,tahun:tahun}, function(data, status){
		 	$("#lgValue").html(data);
	  }); 
}

function reload_dataTugas(){ 
	 var kode = "<?php echo $kode;?>";	 
	 $.post("<?php echo base_url() ?>acara/reload_dataTugas",{kode:kode}, function(data, status){
		 $("#dataTugas").html(data);
	  }); 
}
 
</script>


 									
																					
<!-- Modal -->
<div class="modal  fade" id="lg_modal" tabindex="-9991" style="z-index:1199" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div id="mdl_size" class="modal-dialog modal-lg" role="document" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
					<div id="lgValue"></div> 
                </div> 
            </div>
        </div>
    </div>
</div>
 									
																					
<!-- Modal -->
<div class="modal  fade" id="mdl_modal" tabindex="-9991" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div id="mdl_size" class="modal-dialog" role="document" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
					<div id="mdlValue"></div> 
                </div> 
            </div>
        </div>
    </div>
</div>

		 