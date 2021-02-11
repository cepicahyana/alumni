 
 

<div class="page-header card">
<div class="card-block">
<div class="col-md-12 row">
<div class="col-md-3">
<?php 
$acara	=	$this->db->get("tr_jenis_acara")->result();
foreach($acara as $val){
	$ray[$val->id]=$val->jenis;
}
echo form_dropdown("facara",$ray,"","class='form-control cursor'");
?>
</div>

<div class="col-md-3">
<input type="datetime-local" value="" id="range" class='form-control'>
</div>

</div>
</div>

</div>
 







 <div class="row">
<div class="col-sm-12">
<div class="page-header card">
<div class="card-block" id="area_lod">
<h5 class="m-b-10 "> Data acara</h5>

<div class="table-responsivex">
<table id='table' class='table tabfix table-striped black  table-hover  dataTable no-footer' width="100%">
	 <thead  class='bg-teal sadow'>	
		 <th class='thead'> NO </th>								
		 <th class='thead'  > NAMA ACARA </th>								
		 <th class='thead'> TANGGAL </th>		 							
		 <th class='thead'> JENIS ACARA </th>								
		 <th class='thead' style="max-width:50px"> STATUS </th>								
		 <th class='thead'> ACTION </th>								
		  						
	 </thead>
</table>

</div>
</div>
</div>
</div>
</div>



 










  <script type="text/javascript">
  	   
      var save_method; //for save method string
    var table;
  var  dataTable = $('#table').DataTable({ 
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
		 "lengthMenu":
		 [[5,10 ,20,30,50], 
		 [5,10 ,20,30,50], ], 
	  dom: 'Blfrtip',
		buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
			 
			 {
				 text: ' Refresh ',
                action: function ( e, dt, node, config ) {
                   reload_table();
                },className: '  font14 btn btn-sm ti-reload  '
                }, 	 {
				 text: ' Tambah ',
                action: function ( e, dt, node, config ) {
                   reload_table();
                },className: '  font14 btn btn-sm ti-plus bg-teal  '
                }, 
  ],
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('acara/getData');?>",
            "type": "POST",
			"data": function ( data ) {
			  data.pencarian= $('#pencarian').val();
		 },
		   beforeSend: function() {
               loading("area_lod");
            },
			complete: function() {
              unblock('area_lod');
            },
			
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ 0,1,2,3,4,5 ], //last column
          "orderable": false, //set not orderable
        },
		  { "width": "10px", "targets": 0 },
		  { "width": "25%", "targets": 1 },
		  { "width": "100", "targets": 5 },
		  { "width": "70", "targets": 5 },
		 
        ],
	
      });
	function reload_table()
	{
		 dataTable.ajax.reload(null,false);	
	};
 
	</script>
	
	<!--<script>
	$('#range').daterangepicker({
    "showDropdowns": true,
    "autoApply": true,
    ranges: {
      
        '7 hari terkahir': [moment().subtract(6, 'days'), moment()],
        '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
        'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
        'Bulan kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        'Sepanjang waktu': [moment().subtract(100, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    "locale": {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        "daysOfWeek": [
            "Min",
            "Sen",
            "Sel",
            "Rab",
            "Kam",
            "Jum",
            "Sab"
        ],
        "monthNames": [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Augustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ],
        "firstDay": 1
    },
    "alwaysShowCalendars": true,
   
}, function(start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});
	</script>-->
	
	
	
	<script>
	function getStatus(id){
		notif(id);
	}
	
	</script>