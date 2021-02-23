
<div class="row" id="area_formSubmit">
<div class="col-sm-12">


<div class="card-block">
<h5 class="sub-title">Tambah    </h5><hr>
<form id="formSubmit" action="javascript:submitForm('formSubmit')"
	 method="post" url="<?php echo base_url()?>kirim_info/insert">

<div class="form-group row">
<label class="col-sm-4 col-form-label">Tanggal</label>
  <div class="col-sm-8">
    <input type="date" name="f[tgl]" required class="form-controls">
  </div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">Judul </label>
<div class="col-sm-8">
<input type="text" name="f[judul]"   required class="form-controls">
</div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">Status</label>
<div class="col-sm-8">
	<div class="radio d-inline-block mr-3">
		<input type="radio" name="f[sts]" value="1" checked>
		<label> Aktif</label>
	</div>

		<div class="radio d-inline-block mr-3">
			<input type="radio" name="f[sts]" value="2" >
			<label> Non Aktif</label>
		</div>
</div>

</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">Isi </label>
<div class="col-sm-8">
	<textarea name="f[isi]" rows="25" class="form-controls"></textarea>
</div>
</div>


 <center>
 <button class="btn btn-primary mb-5 pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
 </center>
</form>


</div>
</div>

</div>
