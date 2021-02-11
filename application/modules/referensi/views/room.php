  <div class="row clearfix">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div   id="modal_artikel" >
           <form  action="javascript:saveModal('modal_artikel')" id="f_modal_artikel" url="<?php echo base_url()?>profile/insert"   method="post" enctype="multipart/form-data">
                    <div class="modal-content"> <span  title="tutup"  onclick="tutup()"  class="    pull-right waves-effect"><i class="material-icons">cancel</i> </span>
                        <div class="modal-header">
                            <h4 class="modal-title col-indigo" id="defaultModalLabel">DATA ROOM</h4>
							 
                        </div>
                        <div class="modal-body">
                       	  
						  <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>NAMA</b>
                                    <div class="input-group  colorpicker-element">
                                        <div class="form-line">
                                            <input class="form-control" name="f[nama]" type="text">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>WARNA</b>
                                   <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            <input class="form-control" id="demo" name="f[color]" value="#00AABB" type="text">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(27, 172, 62);"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
						  
						  
						     
			 
					  
                         <input type="hidden" readonly name="id_" >
                                   
							  
 
                       <div class="modal-footer">
						<span id="msg" class='pull-left'></span>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                      
                           
                                         <button  id="submit" class="btn bg-teal waves-effect" onclick="saveModal('modal_artikel')" ><i class="material-icons">save</i> SIMPAN</button>
                                    </div>
                             
                        </div>

				</div>
				</div>
					 
       		</form>
				</div>
		 </div>
		 </div>
				<br>
				
                <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>DATA MASTER ROOM</h2>
                           <button onclick="add()" type="button" class="btn-top btn pull-right bg-teal waves-effect">
                                    <i class="material-icons">create</i>
                                   Tambah
                           </button>
								
                        </div>
                       
                           <!----->
				 <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                               <table id='table' class="tabel black table-bordered  table-hover dataTable" style="font-size:12px;width:100%">
								<thead  class='sadow bg-teal'>			
									<th class='thead' axis="string" width='15px'>&nbsp;NO</th>
									<th class='thead' >NAMA </th>
									<th class='thead' >WARNA </th>
						 
								 	<th class='thead' width="200px" >OPSI</th>
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
		   $.post("<?php echo site_url("referensi/hapus/tm_room"); ?>",{id:id},function(){
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
            "url": "<?php echo site_url('referensi/data/tm_room');?>",
            "type": "POST",
		 
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ 0,-1,-2,-3 ], //last column
          "orderable": false, //set not orderable
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
$("#modal_artikel").hide();
function add()
{
	$("#modal_artikel").fadeIn(1000);
	$("#f_modal_artikel")[0].reset();
	$("form").attr('url',"<?php echo base_url()?>referensi/insert/tm_room");
 
 
}
function tutup()
{
	$("#modal_artikel").fadeOut(100);
}
</script>
	 

	

				
         
       
  
  
  
   <script>
 
   	 $('.colorpicker').colorpicker();
 
 
 
  </script>
  
   
 
<script>
  
 function edit(id,nama,color)
	 {	 
		 			
			 	$("[name='id']").val(id);
			 	$("[name='id_']").val(id);
			 	$("[name='f[nama]']").val(nama);
			 	$("[name='f[color]']").val(color);
				$("#modal_artikel").fadeIn(1000);
				$("form").attr('url',"<?php echo base_url()?>referensi/update/tm_room");
	 }
	 
    //CKEditor
    //CKEDITOR.replace('ckeditor');
 //   CKEDITOR.config.height = 300;
	
</script>







 