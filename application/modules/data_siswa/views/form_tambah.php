
<div class="row" id="area_formSubmit">
<div class="col-sm-12"> 
 
 
<div class="card-block">
<h3 class="sub-title">Tambah data siswa :</h3>
<form id="formSubmit" action="javascript:submitForm('formSubmit')"
	 method="post" url="<?php echo base_url()?>data_siswa/insert">

<div class="form-group row">
<label class="col-sm-4 col-form-label">Nama*</label>
<div class="col-sm-8">
<input type="text" name="f[nama]"   required class="form-control">
</div>
</div> 



<div class="form-group row">
<label class="col-sm-4 col-form-label">Hp</label>
<div class="col-sm-8">
<input type="text" name="f[hp]"   required class="form-control">
</div>
</div> 


<div class="form-group row">
<label class="col-sm-4 col-form-label">email</label>
<div class="col-sm-8">
<input type="text" name="f[email]"   required class="form-control">
</div>
</div> 
 
 
 <center>

 <button class="btn btn-info pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
 </center>
</form>

 
</div>
</div>
 
</div> 
