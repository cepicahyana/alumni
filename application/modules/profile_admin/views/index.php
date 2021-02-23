<?php
$id	=	$this->session->userdata("id");
$this->db->where("id_admin",$id);
$db	=	$this->db->get("admin")->row();
?>
<?php echo $this->session->flashdata('msg') ?>
<div class="row">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
				<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="<?= base_url('upload/dp/'.$db->profileimg); ?>" style="width:125px; height:125px; margin-left:25%;">
				<br><br>
				<h3 class="profile-username text-center"><?php echo $db->profilename?></h3>
				<br>
				<ul class="list-group list-group-unbordered">
					<li class="list-group-item" style="text-align:center">
						<b>Username</b><br><a><?php echo $db->username?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Terakhir Login</b><br><a><?php echo $db->last_login?></a>
					</li>
				</ul>
        <br>
			</div>
		</div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#settings" data-toggle="tab">Ubah Identitas</a></li>
			</ul>
			<div class="tab-content">
				<div class="active tab-pane" id="settings">
					<form class="form-horizontal" action="<?php echo base_url('Profile_admin/editProfile') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $db->id_admin;?>">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  name="f[profilename]" value="<?php echo $db->profilename?>" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="f[email]" value="<?php echo $db->email?>" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Telp</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="f[wa]" value="<?php echo $db->wa?>" >
							</div>
						</div>
            <div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="f[profileaddress]" value="<?php echo $db->profileaddress?>" >
							</div>
						</div>
            <div class="form-group">
              <label class="col sm-2 control-label">Foto profil</label>
                <div class="col-sm-5">
                  <input type="file" name="image" class="form-control">

                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>
