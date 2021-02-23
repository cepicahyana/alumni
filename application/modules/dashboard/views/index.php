	<div class="col-lg-12">
	   <div class="row">
	      <div class="col-md-6 col-lg-3">
	         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	            <div class="iq-card-body iq-bg-primary rounded">
	               <div class="d-flex align-items-center justify-content-between">
	                  <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-group-fill"></i></div>
	                  <div class="text-right">
	                     <h2 class="mb-0"><span class="counter"> <?php echo $alumni ?></span></h2>
	                     <h5 class="">Alumni</h5>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-6 col-lg-3">
	         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	            <div class="iq-card-body iq-bg-warning rounded">
	               <div class="d-flex align-items-center justify-content-between">
	                  <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-server-fill"></i></div>
	                  <div class="text-right">
	                     <h2 class="mb-0"><span class="counter"><?php echo $registrasi ?></span></h2>
	                     <h5 class="">Register</h5>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-6 col-lg-3">
	         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	            <div class="iq-card-body iq-bg-danger rounded">
	               <div class="d-flex align-items-center justify-content-between">
	                  <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-mail-open-fill"></i></div>
	                  <div class="text-right">
	                     <h2 class="mb-0"><span class="counter">3500</span></h2>
	                     <h5 class="">Pesan Masuk</h5>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-6 col-lg-3">
	         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	            <div class="iq-card-body iq-bg-info rounded">
	               <div class="d-flex align-items-center justify-content-between">
	                  <div class="rounded-circle iq-card-icon bg-info"><i class="ri-message-fill"></i></div>
	                  <div class="text-right">
	                     <h2 class="mb-0"><span class="counter">4500</span></h2>
	                     <h5 class="">Kritik & Saran</h5>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>


	<div class="row">
	   <div class="col-md-6">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Profesi</h4>
	            </div>
	         </div>
	         <div id="grafik_pie_profesi" style="min-width: 600px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	         <script type="text/javascript">
	            Highcharts.chart('grafik_pie_profesi', {
	               chart: {

	                  plotBackgroundColor: null,
	                  plotBorderWidth: null,
	                  plotShadow: false,
	                  type: 'pie'
	               },
	               title: {
	                  text: ''
	               },
	               tooltip: {
	                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	               },
	               accessibility: {
	                  point: {
	                     valueSuffix: '%'
	                  }
	               },
	               plotOptions: {
	                  pie: {
	                     allowPointSelect: true,
	                     cursor: 'pointer',
	                     dataLabels: {
	                        enabled: false
	                     },
	                     showInLegend: true
	                  }
	               },
	               series: [{
	                  name: 'Brands',
	                  colorByPoint: true,


	                  data: [
	                     <?php
                        foreach ($profesi as $b) : ?> {
	                           name: '<?php echo $b->nama ?>',
	                           y: <?php echo $this->mdl->jml_profesi($b->id) ?>
	                        },
	                     <?php endforeach; ?>
	                  ]

	               }]
	            });
	         </script>

	      </div>
	   </div>

	   <div class="col-md-6">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Jenjang Pendidikan</h4>
	            </div>
	         </div>
	         <div id="grafik_pie_jp" style="min-width: 600px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	         <script type="text/javascript">
	            Highcharts.chart('grafik_pie_jp', {
	               chart: {
	                  plotBackgroundColor: null,
	                  plotBorderWidth: null,
	                  plotShadow: false,
	                  type: 'pie'
	               },
	               title: {
	                  text: ''
	               },
	               tooltip: {
	                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	               },
	               accessibility: {
	                  point: {
	                     valueSuffix: '%'
	                  }
	               },
	               plotOptions: {
	                  pie: {
	                     allowPointSelect: true,
	                     cursor: 'pointer',
	                     dataLabels: {
	                        enabled: false
	                     },
	                     showInLegend: true
	                  }
	               },
	               series: [{
	                  name: 'Brands',
	                  colorByPoint: true,


	                  data: [
	                     <?php
                        foreach ($pendidikan as $b) : ?> {
	                           name: '<?php echo $b->nama ?>',
	                           y: <?php echo $this->mdl->jml_pendidikan($b->id) ?>
	                        },
	                     <?php endforeach; ?>
	                  ]

	               }]
	            });
	         </script>

	      </div>
	   </div>

	</div>

	<div class="row">

	   <div class="col-md-6">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Golongan Darah</h4>
	            </div>
	         </div>
	         <div id="grafik_pie_goldar" style="min-width: 600px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	         <script type="text/javascript">
	            Highcharts.chart('grafik_pie_goldar', {
	               chart: {
	                  plotBackgroundColor: null,
	                  plotBorderWidth: null,
	                  plotShadow: false,
	                  type: 'pie'
	               },
	               title: {
	                  text: ''
	               },
	               tooltip: {
	                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	               },
	               accessibility: {
	                  point: {
	                     valueSuffix: '%'
	                  }
	               },
	               plotOptions: {
	                  pie: {
	                     allowPointSelect: true,
	                     cursor: 'pointer',
	                     dataLabels: {
	                        enabled: false
	                     },
	                     showInLegend: true
	                  }
	               },
	               series: [{
	                  name: 'Brands',
	                  colorByPoint: true,


	                  data: [
	                     <?php
                        foreach ($goldar as $b) : ?> {
	                           name: '<?php echo $b->nama ?>',
	                           y: <?php echo $this->mdl->jml_goldar($b->id) ?>
	                        },
	                     <?php endforeach; ?>
	                  ]

	               }]
	            });
	         </script>

	      </div>
	   </div>

	   <div class="col-md-6">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Penghasilan</h4>
	            </div>
	         </div>
	         <div id="grafik_pie_penghasilan" style="min-width: 600px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	         <script type="text/javascript">
	            Highcharts.chart('grafik_pie_penghasilan', {
	               chart: {
	                  plotBackgroundColor: null,
	                  plotBorderWidth: null,
	                  plotShadow: false,
	                  type: 'pie'
	               },
	               title: {
	                  text: ''
	               },
	               tooltip: {
	                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	               },
	               accessibility: {
	                  point: {
	                     valueSuffix: '%'
	                  }
	               },
	               plotOptions: {
	                  pie: {
	                     allowPointSelect: true,
	                     cursor: 'pointer',
	                     dataLabels: {
	                        enabled: false
	                     },
	                     showInLegend: true
	                  }
	               },
	               series: [{
	                  name: 'Brands',
	                  colorByPoint: true,


	                  data: [
	                     <?php
                        foreach ($penghasilan as $b) : ?> {
	                           name: '<?php echo $b->penghasilan ?>',
	                           y: <?php echo $this->mdl->jml_penghasilan($b->id) ?>
	                        },
	                     <?php endforeach; ?>
	                  ]

	               }]
	            });
	         </script>

	      </div>
	   </div>

	</div>

	<div class="row">

	   <div class="col-lg-4">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Jenjang Pendidikan </h4>
	            </div>
	            <div class="iq-card-header-toolbar d-flex align-items-center">
	               <div class="dropdown">
	                  <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
	                     <i class="ri-more-fill"></i>
	                  </span>
	                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
	                     <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
	                     <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
	                     <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
	                     <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
	                     <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
	                  </div>
	               </div>
	            </div>
	         </div>
	         <div class="iq-card-body">
	            <div class="table-responsive">
	               <table class="table mb-0 table-borderless">
	                  <thead>
	                     <tr>
	                        <th scope="col">No</th>
	                        <th scope="col">Nama</th>
	                        <th scope="col">Jumlah</th>

	                     </tr>
	                  </thead>
	                  <tbody>

	                     <?php $no = 1;
                        foreach ($pendidikan as $b) : ?>
	                        <tr>
	                           <td><?php echo $no++ ?></td>
	                           <td><?php echo $b->nama ?></td>
	                           <td><?php echo $this->mdl->jml_pendidikan($b->id) ?></td>
	                        </tr>

	                     <?php endforeach; ?>
	                  </tbody>
	               </table>
	            </div>
	         </div>
	      </div>
	   </div>

	   <div class="col-lg-4">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Golongan Darah </h4>
	            </div>
	            <div class="iq-card-header-toolbar d-flex align-items-center">
	               <div class="dropdown">
	                  <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
	                     <i class="ri-more-fill"></i>
	                  </span>
	                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
	                     <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
	                     <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
	                     <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
	                     <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
	                     <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
	                  </div>
	               </div>
	            </div>
	         </div>
	         <div class="iq-card-body">
	            <div class="table-responsive">
	               <table class="table mb-0 table-borderless">
	                  <thead>
	                     <tr>
	                        <th scope="col">No</th>
	                        <th scope="col">Nama</th>
	                        <th scope="col">Jumlah</th>

	                     </tr>
	                  </thead>
	                  <tbody>

	                     <?php $no = 1;
                        foreach ($goldar as $b) : ?>
	                        <tr>
	                           <td><?php echo $no++ ?></td>
	                           <td><?php echo $b->nama ?></td>
	                           <td><?php echo $this->mdl->jml_goldar($b->id) ?></td>
	                        </tr>

	                     <?php endforeach; ?>
	                  </tbody>
	               </table>
	            </div>
	         </div>
	      </div>
	   </div>

	   <div class="col-lg-4">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Penghasilan </h4>
	            </div>
	            <div class="iq-card-header-toolbar d-flex align-items-center">
	               <div class="dropdown">
	                  <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
	                     <i class="ri-more-fill"></i>
	                  </span>
	                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
	                     <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
	                     <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
	                     <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
	                     <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
	                     <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
	                  </div>
	               </div>
	            </div>
	         </div>
	         <div class="iq-card-body">
	            <div class="table-responsive">
	               <table class="table mb-0 table-borderless">
	                  <thead>
	                     <tr>
	                        <th scope="col">No</th>
	                        <th scope="col">Nama</th>
	                        <th scope="col">Jumlah</th>
	                     </tr>
	                  </thead>
	                  <tbody>

	                     <?php $no = 1;
                        foreach ($penghasilan as $b) : ?>
	                        <tr>
	                           <td><?php echo $no++ ?></td>
	                           <td><?php echo $b->penghasilan ?></td>
	                           <td><?php echo $this->mdl->jml_penghasilan($b->id) ?></td>
	                        </tr>

	                     <?php endforeach; ?>
	                  </tbody>
	               </table>
	            </div>
	         </div>
	      </div>
	   </div>

	</div>

	<div class="row">

	   <div class="col-lg-12">
	      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
	         <div class="iq-card-header d-flex justify-content-between">
	            <div class="iq-header-title">
	               <h4 class="card-title">Profesi </h4>
	            </div>
	            <div class="iq-card-header-toolbar d-flex align-items-center">
	               <div class="dropdown">
	                  <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
	                     <i class="ri-more-fill"></i>
	                  </span>
	                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
	                     <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
	                     <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
	                     <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
	                     <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
	                     <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
	                  </div>
	               </div>
	            </div>
	         </div>
	         <div class="iq-card-body">
	            <div class="table-responsive">
	               <table class="table mb-0 table-borderless">
	                  <thead>
	                     <tr>
	                        <th scope="col">No</th>
	                        <th scope="col">Nama</th>
	                        <th scope="col">Jumlah</th>
	                     </tr>
	                  </thead>
	                  <tbody>

	                     <?php $no = 1;
                        foreach ($profesi as $b) : ?>
	                        <tr>
	                           <td><?php echo $no++ ?></td>
	                           <td><?php echo $b->nama ?></td>
	                           <td><?php echo $this->mdl->jml_profesi($b->id) ?></td>
	                        </tr>

	                     <?php endforeach; ?>
	                  </tbody>
	               </table>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>

	<script type="text/javascript">