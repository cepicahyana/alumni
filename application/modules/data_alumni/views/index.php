 <div class="row   " id="area_lod">

 	<div class="card-body  iq-card " id="area_lod">
 		<div class="row col-md-12">
 			<div class="col-md-2 mb-3">
 				<?php
					$dtkelas[null] = "--pilih kelas--";
					foreach ($kelas as $k) :
						$dtkelas[$k->id] = $k->nama_kelas;
					endforeach;
					echo form_dropdown("kelas", $dtkelas, "", "class='form-control' onchange='reload_table()'") ?>
 			</div>

 			<div class="col-md-2 mb-3">
 				<?php
					$dtTahunLulus[null] = "--pilih tahun--";
					foreach ($tahunLulus as $thn) :
						$dtTahunLulus[$thn->id] = $thn->tahun;
					endforeach;
					echo form_dropdown("thnLulus", $dtTahunLulus, "", "class='form-control' onchange='reload_table()' ") ?>
 			</div>

 			<div class="col-md-2 mb-3">
 				<?php
					$dtpekerjaan[null] = "--pilih pekerjaan--";
					foreach ($pekerjaan as $pkj) :
						$dtpekerjaan[$pkj->id] = $pkj->nama;
					endforeach;
					echo form_dropdown("pekerjaan", $dtpekerjaan, "", "class='form-control' onchange='reload_table()' ") ?>
 			</div>

 			<div class="col-md-2 mb-3">
 				<?php
					$dtjp[null] = "--pilih pendidikan--";
					foreach ($jp as $jpn) :
						$dtjp[$jpn->id] = $jpn->nama;
					endforeach;
					echo form_dropdown("jp", $dtjp, "", "class='form-control' onchange='reload_table()' ") ?>
 			</div>

 			<div class="col-md-2 mb-3">
 				<?php
					$dtJk[null] = "--pilih gender--";
					$dtJk["L"] = "Laki-Laki";
					$dtJk["P"] = "Perempuan";

					echo form_dropdown("jk", $dtJk, "", "class='form-control' onchange='reload_table()' ") ?>
 			</div>
 			<div class="col-md-2 mb-3">
 				<?php
					$dtgoldar[null] = "--pilih goldar--";
					foreach ($goldar as $g) :
						$dtgoldar[$g->id] = $g->nama;
					endforeach;
					echo form_dropdown("goldar", $dtgoldar, "", "class='form-control' onchange='reload_table()'") ?>
 			</div>
 		</div>

 		<div class="col-md-12 table-responsive">
 			<table id="table" class="entry   table-sm" style="width:100%">
 				<thead>
 					<th width="30px">NO</th>
 					<!-- <th>USERNAME</th> -->
 					<th>NAMA ALUMNI</th>
 					<th>JK</th>
 					<th>TELEPON</th>
 					<th>EMAIL</th>
 					<th>ALAMAT</th>
 					<th>GOLDAR</th>
 					<!-- <th>PENGHASILAN</th> -->
 					<th>KELAS</th>
 					<th>TAHUN LULUS</th>
 					<th>AGAMA</th>
 					<th>PENDIDIKAN</th>
 					<th>PEKERJAAN</th>
 					<th>JUMLAH ANAK</th>
 					<th>STATUS PERNIKAHAN</th>
 					<th>ACTION</th>
 				</thead>
 			</table>
 		</div>
 	</div>
 </div>

 <script type="text/javascript">
 	var save_method; //for save method string
 	var table;
 	var dataTable = $('#table').DataTable({
 		///scrollX: 103,
 		"fixedHeader": true,
 		"paging": true,
 		"processing": false, //Feature control the processing indicator.
 		"language": {
 			"sSearch": "Pencarian",
 			"processing": ' <span class="sr-only dataTables_processing">Loading...</span> <br><b style="color:black;background:white">Proses menampilkan data<br> Mohon Menunggu..</b>',
 			"oPaginate": {
 				"sFirst": "Hal Pertama",
 				"sLast": "Hal Terakhir",
 				"sNext": "Selanjutnya",
 				"sPrevious": "Sebelumnya"
 			},
 			"sInfo": "Total :  _TOTAL_ , Halaman (_START_ - _END_)",
 			"sInfoEmpty": "Tidak ada data yang di tampilkan",
 			"sZeroRecords": "Data tidak tersedia",
 			"lengthMenu": " &nbsp;&nbsp;Tampil _MENU_ Baris",
 		},


 		"serverSide": true, //Feature control DataTables' server-side processing mode.
 		"responsive": true,
 		"searching": true,
 		"lengthMenu": [
 			[5, 10, 20, 30, 50],
 			[5, 10, 20, 30, 50],
 		],
 		dom: 'Blfrtip',
 		buttons: [
 			// 'copy', 'csv', 'excel', 'pdf', 'print'

 			{
 				text: ' Refresh ',
 				action: function(e, dt, node, config) {
 					reload_table();
 				},
 				className: '  font14 btn btn-sm btn-light ti-reload  '
 			}, {
 				text: ' Tambah ',
 				action: function(e, dt, node, config) {
 					tambah();
 				},
 				className: '  font14 btn btn-sm ti-plus bg-teal  '
 			},

 		],

 		// Load data for the table's content from an Ajax source
 		"ajax": {
 			"url": "<?php echo site_url('data_alumni/getData'); ?>",
 			"type": "POST",
 			"data": function(data) {
 				data.jk = $('[name="jk"]').val();
 				data.thnLulus = $('[name="thnLulus"]').val();
 				data.kelas = $('[name="kelas"]').val();
 				data.pekerjaan = $('[name="pekerjaan"]').val();
 				data.goldar = $('[name="goldar"]').val();
 				data.jp = $('[name="jp"]').val();
 			},
 			beforeSend: function() {
 				loading("area_lod");
 			},
 			complete: function() {
 				unblock('area_lod');
 			},

 		},

 		//Set column definition initialisation properties.
 		"columnDefs": [{
 				"targets": [0, 1, 2], //last column
 				"orderable": false, //set not orderable
 			},
 			//  { "width": "10px", "targets": 0 },
 			//  { "width": "25%", "targets": 1 },
 			//  { "width": "100", "targets": 5 },
 			//  { "width": "70", "targets": 5 },

 		],

 	});

 	function reload_table() {
 		dataTable.ajax.reload(null, false);
 	};
 </script>



 <script>
 	function tambah() {
 		$("#mdl_formSubmit").modal();
 		$("#mdlValue").html("mohon tunggu...");
 		$.post("<?php echo base_url() ?>data_alumni/form_tambah", function(data, status) {
 			$("#mdlValue").html(data);
 		});
 	}
 </script>

 <script>
 	function edit(id) {
 		$("#mdl_formSubmit").modal();
 		$("#mdlValue").html("mohon tunggu...");
 		$.post("<?php echo base_url() ?>data_alumni/form_edit", {
 			id: id
 		}, function(data, status) {
 			$("#mdlValue").html(data);
 		});
 	}
 </script>

 <script>
 	function hapus(id, nama) {
 		alertify.confirm("<center> " + nama + "<br>Hapus ? </center>", function() {
 			$.post("<?php echo base_url() ?>data_alumni/hapus", {
 				id: id
 			}, function(data, status) {
 				notif("Berhasil dihapus!", "Info", "success");
 				reload_table();
 			});
 		});

 	}
 </script>


 <!-- Modal -->
 <div class="modal  fade" id="mdl_formSubmit" tabindex="-9991" style="z-index:1199" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 	<div id="mdl_size" class="modal-dialog modal-md" role="document">
 		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 			<div class="modal-content">
 				<div class="modal-body">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 					<div id="mdlValue"></div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>