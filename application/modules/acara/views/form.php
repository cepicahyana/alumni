


 <div class="row"> 
 <div class="  col-md-12 ">
<div class="alert bg-teal col-md-12 text-white"  >
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<i class="icofont icofont-close-line-circled"></i>
</button>
<?php
$acr	=	$this->db->get_where("tr_jenis_acara",array("id"=>$id))->row();
$jenis	=	isset($acr->jenis)?($acr->jenis):"";
$acara	=	isset($acr->acara)?($acr->acara):"";
echo "<span  > Acara ".$acara." -  ".$jenis."</span>";


 ?>
</div>
 
</div>
</div>
 
 

<div class="row" id="area_formSubmit">
<div class="col-sm-12">

<div class="card">
 
<div class="card-block">
<h3 class="sub-title">Lengkapi form dibawah ini:</h3>
<form id="formSubmit" action="javascript:submitForm('formSubmit')"
	 method="post" url="<?php echo base_url()?>acara/insert">

<div class="form-group row">
<label class="col-sm-2 col-form-label">Judul acara*</label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]"   required class="form-control">
</div>
</div> 

<input type="hidden" name="f[id_jenis_acara]" value="<?php echo $id;?>">


<div class="form-group row">
<label class="col-sm-2 col-form-label"> Tanggal </label>
<div class="col-sm-10">
<input type="text" required name="tgl" id="tgl" class="form-control"  autocomplete="false" autocomplete="off" autocomplete="nope" >
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label"> Waktu </label>
<div class="col-sm-10">
<input type="text" name="f[waktu]" id="tgl" class="form-control hour" data-mask="99:99">
</div>
</div> 

<!--
<div class="form-group row">
<label class="col-sm-2 col-form-label"> Lama acara  </label>
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
 
 <!--
<div class="form-group row">
<label class="col-sm-2 col-form-label">Tempat </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Daftar peserta </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Kontak person </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Susunan acara </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Pakaian </label>
<div class="col-sm-10">
<textarea class="form-control" id="pakaian">
Pria :<br>
Wanita :<br>
TNI : <br>
Polri :<br>

</textarea>
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Jumlah undangan </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Pewara </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Setting tempat </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Liputan media </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Ajudan dinas </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Watermark </label>
<div class="col-sm-10">
<input type="text" name="f[judul_acara]" required class="form-control">
</div>
</div> 
-->
 <center>

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
		 "autoUpdateInput": false,
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
	    "drops": "up"
    
}, function(start, end, label) { 
 // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
 
});
 
function reload_table(){
	loading(); 
	  $.get("<?php echo base_url() ?>acara/newForm", function(data, status){
		 	window.location.href="<?php echo base_url()?>acara/input_form?id="+data;
	  }); 
} 
 
</script>




		    
			<script>  
 CKEDITOR.replace('pakaian',{
 height  : '130px',
 
     toolbar: [
  
]
 
 });  
</script>
			