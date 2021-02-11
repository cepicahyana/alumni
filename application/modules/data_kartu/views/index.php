 <?php $token=date("His");
 if($this->m_reff->mobile())
 {
	 $css='style="margin-top:-10px"';
 }else{
	 $css='style="margin-top:-20px"';
 }
 $level=$this->session->userdata("level");
 ?>
 
							
 
                <div class="row clearfix" <?php echo $css;?>>
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header row">
                         <div class="col-md-4 " style="padding-bottom:15px" >    
 
							<?php 
							$this->db->order_by("kode","asc");
							$data=$this->db->get("tr_dpd")->result();
							$dpd[""]="==== filter ====";
							foreach($data as $val)
							{
								$dpd[$val->kode]="[".$val->kode."] ".$val->nama;
							}
							echo form_dropdown("kode_dpd",$dpd,"","class='form-control' onchange='fgetKorwil(this.value)' data-live-search='true'");
							?>
					 
						 </div> 
						 <div class="col-md-4 " style="padding-bottom:15px" id='fdataKorwil' >    
 
							<?php 
							$dpd=array();
							$dpd[""]="==== filter ===="; 
							echo form_dropdown("kode_korwil",$dpd,"","class='form-control' onchange='reload_table()' data-live-search='true'");
							?>
					 
						 </div>
						 
						 
						 <script>								
function getKorwil(val)
{
	 $.post("<?php echo site_url("data_kartu/getKorwil"); ?>",{id:val},function(data){
			 $("#dataKorwil").html(data);
		 
		      });
}
</script> 

<script>								
function fgetKorwil(val)
{
	 $.post("<?php echo site_url("data_kartu/fgetKorwil"); ?>",{id:val},function(data){
			 $("#fdataKorwil").html(data);
			 reload_table();
		      });
}
</script>


						  <div class="col-md-4 col-xs-12"  align="center"  > 
							 
							
							<div class="btn-group pull-right" role="group">
                         <button onclick="import_data()" class="btn bg-teal waves-effect"><i class="material-icons">file_download</i>IMPORT DATA</button>
                         <button onclick="add()" class="pull-right waves-effect btn bg-blue-grey"><i class="material-icons">person_add</i> INPUT </button>
                         </div>
							
							
							
							
							</div>
							 
							 
                        </div>
                       
                           <!----->
				 <div class="card" id="area_lod">
                        <div class="body">
                            <div class="table-responsive">
                               <table id='table' class="tabel black table-bordered  table-hover dataTable" style="font-size:14px;width:100%">
								<thead  class='sadow bg-teal'>	
	<th class='thead'  width='15px'>&nbsp;NO</th>								
								<th class='thead' style="min-width:200px">PROSES</th>
								
									<th class='thead' >NOMOR ANGGOTA</th> 
									<th class='thead' >NAMA PERUSAHAAN</th>
									<th class='thead' >PIMPINAN</th>
									<th class='thead' >ALAMAT</th>
									<th class='thead' >TELP</th>
									<th class='thead' >NPWP</th>
									 	<th class='thead' >SIUP</th> 
									 		<th class='thead' >TDP</th> 
									 	<th class='thead' >AKTA PERUSAHAAN</th> 
									 	<th class='thead' >EMAIL</th> 
									 	<th class='thead' >JATUH TEMPO</th> 
									 	<th class='thead' >DPD</th> 
									 	<th class='thead' >KORWIL</th> 
									 	 
								 
								</thead>
							</table>
							</div>						
						</div>						
					</div>	
                           <!----->
                    
                    </div>
                </div>
                <!-- #END# Task Info -->
				
  <script>
 //$('select').selectpicker();
 </script>
  <script type="text/javascript">
  	  function hapus(id,data_kartu){
		   alertify.confirm("<center>Hapus ?</center>",function(){
		   $.post("<?php echo site_url("data_kartu/hapus"); ?>",{id:id},function(){
			   reload_table();
		      })
		   })
	  };
	  
	
	  
      var save_method; //for save method string
    var table;
  var  dataTable = $('#table').DataTable({ 
	//	scrollX: 103,
      //  "fixedHeader": true,
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
						  "lengthMenu": "Tampil _MENU_ Baris",  
				    },
					 
					 
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		 "responsive": false,
		 
	//	 scrollY: "350px",
		 "searching": true,
		 "lengthMenu":
		 [[10 ,20,30,50,-1], 
		 [10 ,20,30,50,"All"], ], 
	  dom: 'Blfrtip',
		buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
			 
			 {
					extend: 'excel',
                        exportOptions: {
                      columns:[ 2,3,4,5,6,7,8,9,10,11,12,13,14]
                },text:'Export Excell',
							
                    },
  ],
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('data_kartu/getData');?>",
            "type": "POST",
			"data": function ( data ) {
			 	  data.dpd= $("[name='kode_dpd']").val();
			 	  data.korwil= $("[name='kode_korwil']").val();
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
          "targets": [ 0,-1,-2,-3,-4 ], //last column
          "orderable": false, //set not orderable
        },
        ],
	
      });
	function reload_table()
	{
		 dataTable.ajax.reload(null,false);	
	};
	 $(document).on('change', '.fkelas<?php echo $token;?>,.fidjenis<?php echo $token;?>,.fke_bp<?php echo $token;?>', function (event, messages) {			   
        reload_table();		 
		});
	</script>
	
	
	
	
	
<script>
function add()
{
			$.post("<?php echo site_url("data_kartu/viewAdd"); ?>",{},function(data){
			 $("#mdl_modal_artikel").modal();
			 $("#viewAdd").html(data);
		      }); 
	 
}
function cetak(id)
{
			$.post("<?php echo site_url("data_kartu/viewCard"); ?>",{id:id},function(data){
			 $("#mdl_modal_cetak").modal();
			 $("#viewCard").html(data);
		      }); 
	 
}
function cetak_polos(id)
{
			$.post("<?php echo site_url("data_kartu/viewCard_polos"); ?>",{id:id},function(data){
			 $("#mdl_modal_cetak_polos").modal();
			 $("#viewCard_polos").html(data);
		      }); 
	 
}
</script>
	 

	
 <div class="modal fade" id="mdl_modal_cetak" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" id="area_modal_artikel" role="document" style="width:370px">
				
	<form  action="javascript:submitFormAkun('modal_card')" id="modal_card" url="<?php echo base_url()?>data_kartu/insert"   method="post" enctype="multipart/form-data">
                    <div class="modal-content">  </span>
                        <div class="modal-header"> <button  id="submit" class="btn btn-block  bg-pink waves-effect" onclick="printDiv('print')" ><i class="material-icons">print</i> CETAK</button>
                       
                            
							  </div>
                        <div class="modal-body">
                       	   <div id="viewCard"></div>
 
                      

				</div>
				</div>
					 
       		
				</div>
				</form>
         </div><!-- /.modal-dialog -->
		 
 <div class="modal fade" id="mdl_modal_cetak_polos" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" id="area_modal_artikel" role="document" style="width:370px" >
				
	<form  action="javascript:submitFormAkun('modal_card')" id="modal_card" url="<?php echo base_url()?>data_kartu/insert"   method="post" enctype="multipart/form-data">
                    <div class="modal-content" style="background-color:#f4f4f4;">  
                        <div class="modal-header"> <button  id="submit" class="btn btn-block  bg-pink waves-effect" onclick="printDiv_polos('print_polos')" ><i class="material-icons">print</i> CETAK POLOS</button>
                       
                            
							  </div>
                        <div class="modal-body" >
                       	   <div id="viewCard_polos"></div>
 
                      

				</div>
				</div>
					 
       		
				</div>
				</form>
         </div><!-- /.modal-dialog -->		 
		 
 <div class="modal fade" id="mdl_modal_artikel" tabindex="-1" role="dialog">
                <div class="modal-dialog" id="area_modal_artikel" role="document">
				
	<form  action="javascript:submitFormAkun('modal_artikel')" id="modal_artikel" url="<?php echo base_url()?>data_kartu/insert"   method="post" enctype="multipart/form-data">
                    <div class="modal-content"> <span  title="tutup"  data-dismiss="modal" class="    pull-right waves-effect"><i class="material-icons">cancel</i> </span>
                        <div class="modal-header">
                            <h4 class="modal-title col-teal" id="defaultModalLabel">TAMBAHKAN DATA </h4>
							 
                        </div>
                        <div class="modal-body">
                       	   <div id="viewAdd"></div>
 
                       <div class="modal-footer">
						<span id="msg" class='pull-left'></span>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                      
                                  <!--      <button  title="tutup"  data-dismiss="modal" class="btn bg-teal  waves-effect"><i class="material-icons">cancel</i> </button>
                                   -->      <button  id="submit" class="btn bg-teal waves-effect" onclick="submitFormAkun('modal_artikel')" ><i class="material-icons">save</i> SIMPAN</button>
                                    </div>
                             
                        </div>

				</div>
				</div>
					 
       		
				</div>
				</form>
         </div><!-- /.modal-dialog -->
       
   
<script>
 
	 function edit(id)
	 {	 
		 		  
			 $.post("<?php echo site_url("data_kartu/viewEdit"); ?>",{id:id},function(data){
		 	   $("#editan").html(data);
			    $("#mdl_modal_edit").modal();
			}); 
	 }

	 function set(id,sts)
	 {	 
		 		  
			 $.post("<?php echo site_url("data_kartu/set"); ?>",{id:id,sts:sts},function(data){
		 	   reload_table();
			     
			}); 
	 }
   
</script>




 <div class="modal fade" id="mdl_modal_edit" tabindex="-1" role="dialog">
                <div class="modal-dialog" id="area_modal_edit" role="document">
				
	<form  action="javascript:submitFormAkun('modal_edit')" id="modal_edit" url="<?php echo base_url()?>data_kartu/update"  method="post" enctype="multipart/form-data">
                    <div class="modal-content"> <span  title="tutup"  data-dismiss="modal" class="    pull-right waves-effect"><i class="material-icons">cancel</i> </span>
                        <div class="modal-header">
                            <h4 class="modal-title col-teal" >Edit Data</h4>
							 
                        </div>
                        <div class="modal-body">
                       	  
					   	 <div id="editan"></div>
							 
 
                       <div class="modal-footer">
						<span id="msg" class='pull-left'></span>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                      
                               <!--         <button  title="tutup"  data-dismiss="modal" class="btn bg-teal  waves-effect"><i class="material-icons">cancel</i> </button>
                                -->         <button  id="submit" class="btn bg-teal waves-effect" onclick="submitFormAkun('modal_edit')" ><i class="material-icons">save</i> SIMPAN</button>
                                    </div>
                             
                        </div>

				</div>
				</div>
					 
       		
				</div>
				</form>
   </div><!-- /.modal-dialog --> 

		 



 
	
 <script>
function import_data()
{ $("#formSubmitDown")[0].reset();
  $("#judul_mdl").html("IMPORT DATA ANGGOTA ");
				   $("#isi").html(data);
				   $("#mdl_formSubmitDown").modal( );
				    $("#formSubmitDown").attr("url","<?php echo base_url()?>data_kartu/import_data");
					$("#ket_file").html("Cari File");
}

 </script>
						
						
						
						
		
	  <!-- Modal -->
<div class="modal fade" id="mdl_formSubmitDown" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="area_formSubmitDown">
        <div class="modal-content">
		<form id="formSubmitDown" action="javascript:submitForm('formSubmitDown')" method="post"  >
                
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title col-teal" id="judul_mdl">
                   
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <div class="col-md-12 body">    
       <center>				  <a class="sound" href="<?php echo base_url()?>format.xlsx">Download Format  Upload</a> </center>		
				  	
				<div class="row">
				
                                        <div class="form-line"><span id="ket_file">  </span>
					                      <input type="file" accept="xlsx" class="form-control" name="file"  required/>
                                        </div>
                                    </div><br>
					 
                  
            </div>
            </div>
            <div class="row clearfix"></div>
            <div class="modal-footer">
			  
              <button onclick="submitForm('formSubmitDown')"  class="pull-right waves-effect btn bg-teal"><i class="material-icons">cloud_upload</i> UPLOAD</button>
                         
                        </div>
            </form>
        
		</div>
    </div>
</div>
				
						
						
 