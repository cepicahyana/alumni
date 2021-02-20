<?php
$id	=	$this->input->post("id");
$this->db->where("id", $id);
$db	=	$this->db->get("data_alumni")->row();
?>
<div class="row" id="area_formSubmit">
	<div class="col-sm-12">

		<div class="card-block">
			<h5 class="sub-title">Edit </h5>
			<hr>

			<form id="formSubmit" action="javascript:submitForm('formSubmit')" method="post" url="<?php echo base_url() ?>data_alumni/update">
				<input type="hidden" name="id" value="<?php echo $db->id; ?>">
				<div class="form-group row">

					<!-- username -->
					<label class="col-sm-5 col-form-label">Username</label>
					<div class="col-sm-6">
						<input type="text" name="f[username]" value="<?php echo $db->username ?>" required class="form-controls">
					</div>

					<!-- nama depan -->
					<label class="col-sm-5 col-form-label">Nama Depan</label>
					<div class="col-sm-6">
						<input type="text" name="f[nama_depan]" value="<?php echo $db->nama_depan ?>" required class="form-controls">
					</div>

					<!-- nama belakang -->
					<label class="col-sm-5 col-form-label">Nama Belakang </label>
					<div class="col-sm-6">
						<input type="text" name="f[nama_belakang]" value="<?php echo $db->nama_belakang ?>" required class="form-controls">
					</div>

					<!-- password  -->
					<label class="col-sm-5 col-form-label">Password </label>
					<div class="col-sm-6">
						<input type="text" name="f[password]" value="<?php echo $db->password ?>" required class="form-controls">
					</div>

					<!-- jenis kelamin  -->
					<label class="col-sm-5 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-6">

						<select name="f[jk]" value="<?php echo $db->jk ?>" required class="form-controls">
							<option value="">Jenis Kelamin</option>
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>

					<!-- jenis kelamin  -->
					<label class="col-sm-5 col-form-label">Nomer Telepon</label>
					<div class="col-sm-6">
						<input type="text" name="f[hp]" value="<?php echo $db->hp ?>" required class="form-controls">
					</div>

					<!-- alamat  -->
					<label class="col-sm-5 col-form-label">Alamat</label>
					<div class="col-sm-6">
						<input type="text" name="f[alamat]" value="<?php echo $db->alamat ?>" required class="form-controls">
					</div>

					<!-- goldar  -->
					<label class="col-sm-5 col-form-label">Golongan Darah</label>
					<div class="col-sm-6">
						<?php
						$dtgoldar = array();
						foreach ($goldar as $g) :
							$dtgoldar[$g->id] = $g->nama;
						endforeach;

						echo form_dropdown("f[id_goldar]", $dtgoldar, $db->id_goldar, "class='form-control' ") ?>

					</div>

					<!-- status pekerjaan  -->
					<label class="col-sm-5 col-form-label">Status Pekerjaan</label>
					<div class="col-sm-6">
						<select name="f[sts_pekerjaan]" value="<?php echo $db->sts_pekerjaan ?>" required class="form-controls">
							<option value="1">Bekerja</option>
							<option value="2">Belum Bekerja</option>
						</select>
					</div>

					<!-- profesi  -->
					<label class="col-sm-5 col-form-label">Profesi</label>
					<div class="col-sm-6">
						<?php
						$dtpekerjaan = array();
						foreach ($pekerjaan as $p) :
							$dtpekerjaan[$p->id] = $p->nama;
						endforeach;
						echo form_dropdown("f[id_pekerjaan]", $dtpekerjaan, $db->id_pekerjaan, "class='form-control' ") ?>

					</div>

					<!-- Penghasilan  -->
					<label class="col-sm-5 col-form-label">Penghasilan</label>
					<div class="col-sm-6">
						<?php
						$dtpenghasilan = array();
						foreach ($penghasilan as $pg) :
							$dtpenghasilan[$pg->id] = $pg->penghasilan;
						endforeach;
						echo form_dropdown("f[id_penghasilan]", $dtpenghasilan, $db->id_penghasilan, "class='form-control' ") ?>

					</div>
					<!-- status Pernikahan  -->
					<label class="col-sm-5 col-form-label">Status Pernikahan</label>
					<div class="col-sm-6">
						<select name="f[sts_menikah]" value="<?php echo $db->sts_menikah ?>" required class="form-controls">
							<option value="1">Belum Kawin</option>
							<option value="2">Menikah</option>
							<option value="3">Bercerai</option>
						</select>
					</div>

					<!-- jumlah anak  -->
					<label class="col-sm-5 col-form-label">Jumlah Anak</label>
					<div class="col-sm-6">
						<input type="text" name="f[jml_anak]" value="<?php echo $db->jml_anak ?>" required class="form-controls">
					</div>

				</div>

				<center>
					<button class="btn btn-primary mb-3 pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
				</center>
			</form>

		</div>
	</div>
</div>