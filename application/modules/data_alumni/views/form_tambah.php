<div class="row" id="area_formSubmit">
	<div class="col-sm-12">


		<div class="card-block">
			<h5 class="sub-title">Tambah </h5>
			<hr>
			<form id="formSubmit" action="javascript:submitForm('formSubmit')" method="post" url="<?php echo base_url() ?>data_alumni/insert">

				<div class="form-group row">
					<!-- username -->
					<!-- <label class="col-sm-5 col-form-label">Username</label>
					<div class="col-sm-6">
						<input type="text" name="f[username]" required class="form-controls">
					</div> -->

					<!-- nama depan -->
					<label class="col-sm-5 col-form-label">Nama Depan</label>
					<div class="col-sm-6">
						<input type="text" name="f[nama_depan]" required class="form-controls">
					</div>

					<!-- nama belakang -->
					<label class="col-sm-5 col-form-label">Nama Belakang </label>
					<div class="col-sm-6">
						<input type="text" name="f[nama_belakang]" required class="form-controls">
					</div>

					<!-- email -->
					<label class="col-sm-5 col-form-label">Email </label>
					<div class="col-sm-6">
						<input type="text" name="f[email]" required class="form-controls">
					</div>

					<!-- password  -->
					<label class="col-sm-5 col-form-label">Password </label>
					<div class="col-sm-6">
						<input type="text" name="f[password]" required class="form-controls">
					</div>

					<!-- jenis kelamin  -->
					<label class="col-sm-5 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-6">

						<select name="f[jk]" required class="form-controls">
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>

					<!-- nomer tlp  -->
					<label class="col-sm-5 col-form-label">Nomer Telepon</label>
					<div class="col-sm-6">
						<input type="text" name="f[hp]" required class="form-controls">
					</div>

					<!-- alamat  -->
					<label class="col-sm-5 col-form-label">Alamat</label>
					<div class="col-sm-6">
						<input type="text" name="f[alamat]" required class="form-controls">
					</div>

					<!-- kelas 1  -->
					<label class="col-sm-5 col-form-label">Kelas 1</label>
					<div class="col-sm-6">
						<?php
						$dtkelas = array();
						foreach ($kelas as $k) :
							$dtkelas[$k->id] = $k->nama_kelas;
						endforeach;
						echo form_dropdown("f[id_kelas_1]", $dtkelas, "", "class='form-control' ") ?>
					</div>

					<!-- kelas 2  -->
					<label class="col-sm-5 col-form-label">Kelas 2</label>
					<div class="col-sm-6">
						<?php
						$dtkelas = array();
						foreach ($kelas as $k) :
							$dtkelas[$k->id] = $k->nama_kelas;
						endforeach;
						echo form_dropdown("f[id_kelas_2]", $dtkelas, "", "class='form-control' ") ?>
					</div>

					<!-- kelas 3  -->
					<label class="col-sm-5 col-form-label">Kelas 3</label>
					<div class="col-sm-6">
						<?php
						$dtkelas = array();
						foreach ($kelas as $k) :
							$dtkelas[$k->id] = $k->nama_kelas;
						endforeach;
						echo form_dropdown("f[id_kelas_3]", $dtkelas, "", "class='form-control' ") ?>
					</div>

					<!-- tahun lulus  -->
					<label class="col-sm-5 col-form-label">Tahun Lulus</label>
					<div class="col-sm-6">
						<?php
						$dttahunlulus = array();
						foreach ($tahunLulus as $tl) :
							$dttahunlulus[$tl->id] = $tl->tahun;
						endforeach;
						echo form_dropdown("f[id_tahun]", $dttahunlulus, "", "class='form-control' ") ?>
					</div>



					<!-- goldar  -->
					<label class="col-sm-5 col-form-label">Golongan Darah</label>
					<div class="col-sm-6">
						<?php
						$dtgoldar = array();
						foreach ($goldar as $g) :
							$dtgoldar[$g->id] = $g->nama;
						endforeach;

						echo form_dropdown("f[id_goldar]", $dtgoldar, "", "class='form-control' ") ?>

					</div>

					<!-- agama  -->
					<label class="col-sm-5 col-form-label">Agama</label>
					<div class="col-sm-6">
						<?php
						$dtagama = array();
						foreach ($agama as $agm) :
							$dtagama[$agm->id] = $agm->nama;
						endforeach;

						echo form_dropdown("f[id_agama]", $dtagama, "", "class='form-control' ") ?>

					</div>

					<!-- Jenjang Pendidikan  -->
					<label class="col-sm-5 col-form-label">Pendidikan</label>
					<div class="col-sm-6">
						<?php
						$dtjp = array();
						foreach ($jp as $j) :
							$dtjp[$j->id] = $j->nama;
						endforeach;

						echo form_dropdown("f[id_jp]", $dtjp, "", "class='form-control' ") ?>

					</div>

					<!-- status pekerjaan  -->
					<label class="col-sm-5 col-form-label">Status Pekerjaan</label>
					<div class="col-sm-6">
						<select name="f[sts_pekerjaan]" required class="form-controls">
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
						echo form_dropdown("f[id_pekerjaan]", $dtpekerjaan, "", "class='form-control' ") ?>
					</div>

					<!-- Penghasilan  -->
					<label class="col-sm-5 col-form-label">Penghasilan</label>
					<div class="col-sm-6">
						<?php
						$dtpenghasilan = array();
						foreach ($penghasilan as $pg) :
							$dtpenghasilan[$pg->id] = $pg->penghasilan;
						endforeach;
						echo form_dropdown("f[id_penghasilan]", $dtpenghasilan, "", "class='form-control' ") ?>
					</div>

					<!-- status Pernikahan  -->
					<label class="col-sm-5 col-form-label">Status Pernikahan</label>
					<div class="col-sm-6">
						<select name="f[sts_menikah]" required class="form-controls">
							<option value="1">Belum Kawin</option>
							<option value="2">Menikah</option>
							<option value="3">Bercerai</option>
						</select>
					</div>

					<!-- jumlah anak  -->
					<label class="col-sm-5 col-form-label">Jumlah Anak</label>
					<div class="col-sm-6">
						<input type="text" name="f[jml_anak]" required class="form-controls">
					</div>

				</div>

				<center>
					<button class="btn btn-primary mb-3 pull-right" onclick="javascript:submitForm('formSubmit')"><i class="fa fa-save"></i> SIMPAN</button>
				</center>
			</form>


		</div>
	</div>

</div>