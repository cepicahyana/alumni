
<div class="row" id="area_formSubmit">
<div class="col-sm-12">


<div class="card-block">
<h5 class="sub-title">Tambah    </h5><hr>
<form id="formSubmit" action="javascript:submitForm('formSubmit')"
	 method="post" url="<?php echo base_url()?>goldar/insert">

<div class="form-group row">
<label class="col-sm-4 col-form-label">Golongan darah </label>
<div class="col-sm-8">
<input type="text" name="f[nama]"   required class="form-controls">
</div>
</div>

 <center>
 <button class="btn btn-primary mb-3 pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
 </center>
</form>


</div>
</div>

</div>
