 <div class="row"> 
 <div class="col-md-12 "> 
 <table id="table" class="entry table-bordered table-striped">
 <thead>
 <th>NO</th>
 <th>NAMA</th>
 <th>KELAS</th>
 <th>HP</th>
 <th>EMAIL</th>
 <th>ACTION</th>
 </thead>
 </table>
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
                   tambah();
                },className: '  font14 btn btn-sm ti-plus bg-teal  '
                }, 
  ],
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('data_siswa/getData');?>",
            "type": "POST",
			"data": function ( data ) {
			//  data.pencarian= $('#pencarian').val();
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
		//  { "width": "10px", "targets": 0 },
		//  { "width": "25%", "targets": 1 },
		//  { "width": "100", "targets": 5 },
		//  { "width": "70", "targets": 5 },
		 
        ],
	
      });
	  
	function reload_table()
	{
		 dataTable.ajax.reload(null,false);	
	};
	
	 
	</script>
	 
	
		    
<script>   
function tambah(){
		 $("#mdl_formSubmit").modal();
		 $("#mdlValue").html("mohon tunggu...");  
		 $.post("<?php echo base_url() ?>data_siswa/form_tambah", function(data, status){
		 $("#mdlValue").html(data);
	  }); 
}   
</script>


 									
																					
<!-- Modal -->
<div class="modal  fade" id="mdl_formSubmit" tabindex="-9991" style="z-index:1199" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div id="mdl_size" class="modal-dialog modal-md" role="document" >
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
