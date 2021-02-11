<?php
$id	=	$this->input->get("id");
if(!$id){ redirect("acara/data");}

$db	=	$this->db->get_where("data_acara",array("id"=>$id))->row();
if(!$db){ redirect("acara/data"); }

$acr	=	$this->db->get_where("tr_jenis_acara",array("id"=>$db->id_jenis_acara))->row();
$jenis	=	isset($acr->jenis)?($acr->jenis):"";
$acara	=	isset($acr->acara)?($acr->acara):"";
$acara	=  $acara." -  ".$jenis ;	

?>
 
<center><div style="font-size:16px" class="card p-20 z-depth-top-0 waves-effect">  <?php echo $db->judul_acara;?></div></center>
 
 
 <div class="col-md-12 row">
 
<div class="col-lg-12 col-xl-3 cursor">
<div class="card trnasiction-card"  style="background:#A9A9A9">
<div class="card-header bg-c-grey">
<h5 class="text-white sadow">DATA DETAIL<span class="d-block">Belum selesai</span></h5>
<div class="card-header-right">
<div>
<h1 style="opacity:0.2" class="m-b-0 text-white fa fa-info-circle"> </h1>
</div>
</div>
</div> 
</div>
</div> 
 

<div class="col-lg-12 col-xl-3 cursor">
<div class="card trnasiction-card"  style="background:#A9A9A9">
<div class="card-header bg-c-grey">
<h5 class="text-white sadow">RUNDOWN<span class="d-block">Belum selesai</span></h5>
<div class="card-header-right">
<div>
<h1 style="opacity:0.2" class="m-b-0 text-white fa fa-info-circle"> </h1>
</div>
</div>
</div> 
</div>
</div> 
 


<div class="col-lg-12 col-xl-3 cursor">
<div class="card trnasiction-card"  style="background:#A9A9A9">
<div class="card-header bg-c-grey">
<h5 class="text-white sadow">KOREKSI KASUBAG<span class="d-block">Belum selesai</span></h5>
<div class="card-header-right">
<div>
<h1 style="opacity:0.2" class="m-b-0 text-white fa fa-info-circle"> </h1>
</div>
</div>
</div> 
</div>
</div> 
 


<div class="col-lg-12 col-xl-3 cursor">
<div class="card trnasiction-card"  style="background:#A9A9A9">
<div class="card-header bg-c-grey">
<h5 class="text-white sadow">KOREKSI KABAG<span class="d-block">Belum selesai</span></h5>
<div class="card-header-right">
<div>
<h1 style="opacity:0.2" class="m-b-0 text-white fa fa-info-circle"> </h1>
</div>
</div>
</div> 
</div>
</div> 
 


</div>
 
 
 
 
 
 
 <div class="card card-body">
<div class="row col-md-12">
 
<div class="col-md-4 ">
<b>KELENGKAPAN DETAIL ACARA : </b> 
<table class="table table-hover cursor" width="100%">
<tr>
<td>1</td>
<td>Data detail</td>
<td>selesai</td>
</tr>
<tr>
<td>2</td>
<td>Rundown</td>
<td>selesai</td>
</tr>
<tr>
<td>3</td>
<td>Koreksi kasubag</td>
<td>selesai</td>
</tr>
<tr>
<td>4</td>
<td>Koreksi kabag</td>
<td>selesai</td>
</tr> 
</table> 
<br>
</div>

<div  class="col-md-8">
<b>DETAIL</b><br>
</div>
 
</div>
</div>










