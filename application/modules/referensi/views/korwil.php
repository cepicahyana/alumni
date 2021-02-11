 
<div class="col-md-12">&nbsp;</div>
                <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<button onclick="add()"  style="margin-top:-40px" type="button" class="btn-top btn pull-right bg-teal waves-effect">
                                    <i class="material-icons">create</i>
                                   Tambah
                           </button>
                    <div class="card">
					
                        <div class="header">
                         
							<div class='col-md-6' style='margin-top:-17px'>
							<?php 
							$this->db->order_by("kode","asc");
							$data=$this->db->get("tr_dpd")->result();
							$dpd[""]="==== filter ====";
							foreach($data as $val)
							{
								$dpd[$val->kode]="[ ".$val->kode." ] ".$val->nama;
							}
							echo form_dropdown("fdpd",$dpd,"","class='form-control' onchange='reload_table()' data-live-search='true'");
							?>
							</div>
							
							
							
							 
                           
								
                        </div>
               <br>  
                           <!----->
				 <div class="card" id="area_lod">
                        <div class="body">
                            <div class="table-responsive">
                               <table id='table' class="tabel black table-bordered  table-hover dataTable" style="font-size:12px;width:100%">
								<thead  class='sadow bg-teal'>			
									<th class='thead' axis="string" width='15px'>&nbsp;NO</th>
										<th class='thead' >JML ANGGOTA </th>
										<th class='thead' >DPD </th>
										<th class='thead' >Kode </th>
									<th class='thead' >Nama </th>
						 
								 	<th class='thead' >OPSI</th>
								</thead>
							</table>
							</div>						
						</div>						
					</div>	
                           <!----->
                    
                    </div>
                </div>
                <!-- #END# Task Info -->
			  
 
  <script type="text/javascript">
  	  function hapus(id,akun){
		   alertify.confirm("<center>Hapus  <br> <span class='font-bold col-pink'>`"+akun+"`</span> <br> ?</center>",function(){
		   $.post("<?php echo site_url("referensi/hapus/tr_korwil"); ?>",{id:id},function(){
			   reload_table();
		      })
		   })
	  };
	  
	
	  
      var save_method; //for save method string
    var table;
   // $(document).ready(function() {
      table = $('#table').DataTable({ 
	 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('referensi/data/tr_korwil');?>",
            "type": "POST",
			"data": function ( data ) {
						
						  data.dpd= $("[name='fdpd']").val();
						 
						 
			},
        },
			beforeSend: function() {
               loading("area_lod");
            },
			complete: function() {
              unblock('area_lod');
            },
			
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ 0,-1,-2,-3 ], //last column
          "orderable": false, //set not orderable
        },
        ],
	 dom: 'Blfrtip',
		buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
			 
			 {
					extend: 'excel',
                        exportOptions: {
                      columns:[0,1,2,3,4]
                },text:'Download Excell',
							
                    },
  ],
        
      });
    //}); 
	function reload_table()
	{
		 table.ajax.reload();
	};
	</script>
	
	
	
	
	
<script>
function add()
{
	$("#modal_artikel").modal({backdrop: 'static',drugged:true, keyboard: false});
	$("#f_modal_artikel")[0].reset();
	$("form").attr('url',"<?php echo base_url()?>referensi/insert/tr_korwil");
 
}
</script>
	 

	
 <div class="modal fade" id="modal_artikel" tabindex="-1" role="dialog">
                <div class="modal-dialog  " role="document">
				
	<form  action="javascript:saveModal('modal_artikel')" id="f_modal_artikel" url="<?php echo base_url()?>profile/insert"   method="post" enctype="multipart/form-data">
                    <div class="modal-content"> <span  title="tutup"  data-dismiss="modal" class="    pull-right waves-effect"><i class="material-icons">cancel</i> </span>
                        <div class="modal-header">
                            <h4 class="modal-title col-indigo" id="defaultModalLabel">Data Referensi </h4>
							 
                        </div>
                        <div class="modal-body">
                       	  
					  
                         <input type="hidden" readonly name="id_" >
                                   
                                   	<div class="form-group form-float">
							 	    <label class="form-label" style="margin-top:-5px">Kode</label>
                                    <div class="form-line focused success">
                                        <?php
                                        $this->db->order_by("kode","asc");
                                        $data=$this->db->get("tr_dpd")->result();
                                        $pil[]=" ==== pilih DPD ===";
                                        foreach($data as $lis)
                                        {
                                            $pil[$lis->kode]="[ ".$lis->kode." ] ".$lis->nama;
                                        }
                                    
                                        echo form_dropdown("f[kode_dpd]",$pil,"","class='form-control' required  data-live-search='true'");
                                        ?>
                                        
                                    </div>
                                </div>
									 
							 	<div class="form-group form-float">
							 	    <label class="form-label" style="margin-top:-5px">Kode</label>
                                    <div class="form-line focused success">
                                        <input type="text" class="form-control" name="f[kode]"   required>
                                        
                                    </div>
                                </div>
									 
								
								<div class="form-group form-float">
								       <label class="form-label" style="margin-top:-5px">Nama</label>
                                    <div class="form-line focused success">
                                        <input type="text" class="form-control" name="f[nama]"   required>
                                     
                                    </div>
                                </div>
									 
			 
					 
 
                       <div class="modal-footer">
						<span id="msg" class='pull-left'></span>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                      
                                       
                                         <button  id="submit" class="btn bg-teal waves-effect" onclick="saveModal('modal_artikel')" ><i class="material-icons">save</i> SIMPAN</button>
                                    </div>
                             
                        </div>

				</div>
				</div>
					 
       		
				</div>
				</form>
         </div><!-- /.modal-dialog -->
       
  
 <script>
  $("#set_artikel").hide();
 function publikasi()
 {
	 var p=$("[name='f[sts]']").val();
 if(p=="1"){ $("#set_artikel").show(); }else{ $("#set_artikel").hide(); }
 }
 </script>
 
<script>
 function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
     }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

 function edit(id,nama,kode,kode_dpd)
	 {	 
		 			
			 	$("[name='id']").val(id);
			 	$("[name='id_']").val(id);
			 	$("[name='f[nama]']").val(nama);
			 	$("[name='f[kode]']").val(kode); 
			 	$("[name='f[kode_dpd]']").val(kode_dpd);	
				$("#modal_artikel").modal({backdrop: 'static',drugged:true, keyboard: false});
				$("form").attr('url',"<?php echo base_url()?>referensi/update/tr_korwil");
	 }
	 
    //CKEditor
    //CKEDITOR.replace('ckeditor');
 //   CKEDITOR.config.height = 300;
	
</script>







 