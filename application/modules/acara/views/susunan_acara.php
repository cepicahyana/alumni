<?php
$kode =	$this->input->get_post("kode");
$qr =	$this->input->get_post("qr");
?> 
<h5>Upload file peserta </h5> 
<hr> 
<div id="kalkulasi"></div>

<script>
kalkulasi();
 function kalkulasi(){ 
  loading("kalkulasi");
	 var kode = "<?php echo $kode;?>";	 
	 $.post("<?php echo base_url() ?>acara/getKalkulasi",{kode:kode}, function(data, status){
		 $("#kalkulasi").html(data);
		  unblock("kalkulasi");
	  }); 
}
</script>
	 
	 

 <script>
  function hapusAgenda(id){ 
	 var kode		= "<?php echo $kode;?>"; 
	alertify.confirm("<center> Hapus ? </center>",function(){ 
	$.post("<?php echo base_url() ?>acara/hapusAgenda",{kode:kode,id:id}, function(data, status){
		 kalkulasi();
		  notif("Berhasil dihapus!","Info","success");
	  });  
	}); 
	 
 }
 
 function setJam(no){ 

	// $("#waktu"+no).val("");
	  $("#timepicker"+no).focus();
	 setValue(no)
 }
 function setValue(no){
	 var kode		= "<?php echo $kode;?>";	 
	 var agenda		= $("#agenda"+no).val();
	 var jam_mulai	= $("#timepicker"+no).val();
	 var durasi		= $("#waktu"+no).val();
	 $.post("<?php echo base_url() ?>acara/setKalkulasi",{agenda:agenda,jam_mulai:jam_mulai,durasi:durasi,no:no,kode:kode}, function(data, status){
		 kalkulasi();
	  }); 
 }
 function addAgenda(no){ 
	 var kode		= "<?php echo $kode;?>";	 
	 $.post("<?php echo base_url() ?>acara/addKalkulasi",{no:no,kode:kode}, function(data, status){
		 kalkulasi();
	  }); 
 } function sisipkanAgenda(waktu,no){ 
	 var kode		= "<?php echo $kode;?>";	 
	 $.post("<?php echo base_url() ?>acara/sisipkanAgenda",{waktu:waktu,no:no,kode:kode}, function(data, status){
		 kalkulasi();
	  }); 
 }
  </script>
 	 