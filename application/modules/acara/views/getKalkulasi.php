<table class="entry2" width="100%">
<tr class='bg-teal text-white sadow'>
<td> </td>
<td>No</td>
<td width="40%">Nama agenda</td>
<td>Waktu mulai</td>
<td>Waktu selesai</td>
<td>Durasi (menit)</td> 
<td> </td> 
<tr>
<?php
$kode	=	$this->input->post("kode");
$this->db->order_by("urut","asc");
$db			=	$this->db->get_where("kalkulasi_waktu",array("kode"=>$kode))->result();
$noakhir	=	
				$this->db->where("kode",$kode);
				$this->db->order_by("urut","desc");
				$this->db->limit(1);
$no			=	$this->db->get("kalkulasi_waktu")->row();
$akhir		=	isset($no->urut)?($no->urut):0;	
 
foreach($db as $val){
	   $no=$val->urut;
	 
	if($no==$akhir){
		$btn = "<td><button class='btn btn-sm btn-teal ti-plus' onclick='addAgenda(`".($no+1)."`)'> Tambah</button></td>";
	}else{
		$btn = "<td><button class='btn btn-sm   ti-plus' onclick='sisipkanAgenda(`".$val->jam_akhir."`,`".$no."`)'> Sisipkan</button></td>";
	} 
	
	if($val->urut==1){
		$jam	=	"<input onchange='setValue(`".$no."`)'  class='form-control' id='timepicker".$no."' type='text'  value='".SUBSTR($val->jam_mulai,0,5)."'>";
	}	else	{
		$jam	=	SUBSTR($val->jam_mulai,0,5);
	}
	   
	echo "<tr>
	<td><button class='btn btn-sm btn-danger ti-trash' onclick='hapusAgenda(`".$val->id."`)'> </button></td>
	<td>".$no."</td>
	<td><input onchange='setValue(`".$no."`)' id='agenda".$no."' class='form-control' type='text' value='".$val->agenda."'></td>
	<td align='center'>".$jam."</td>
	<td>".SUBSTR($val->jam_akhir,0,5)."</td>
	<td><input id='waktu".$no."' onchange='setValue(`".$no."`)' type='number'  value='".$val->durasi."' class='form-control'></td>
	".$btn."
	</tr>";

		echo "<script>
	     $('#timepicker".$no."').timepicker( {
                    showAnim: 'blind'
                });
				</script>";
}

if($akhir==0){
	$no=1;
	echo "<tr>
		<td><button class='btn btn-sm btn-danger ti-trash'> </button></td>
	<td>1</td>
	<td><input onchange='setValue(`".$no."`)'  id='agenda".$no."' class='form-control' type='text' value=''></td>
	<td><input class='form-control' onchange='setValue(`".$no."`)'  id='timepicker".$no."' type='text'></td>
	<td>00:00</td>
	<td><input type='number'   onchange='setValue(`".$no."`)' class='form-control' name='f[waktu]' id='waktu".$no."'></td>
	<td><button class='btn btn-sm btn-grd-info ti-plus font14 b text-black'><b> Tambah</b></button></td>
	
	</tr>
	<tr>
	<td colspan='6'><center><button class='btn btn-sm btn-grd-primary ti-save'> SIMPAN</button></center></td>
	</tr>";

		echo "<script>
	     $('#timepicker".$no."').timepicker( {
                    showAnim: 'blind'
                });
				</script>";
	
}
?>
<table>

 
 
 