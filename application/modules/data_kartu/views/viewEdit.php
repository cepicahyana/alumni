 <?php $database=$this->db->get_where("data_kartu",array("id"=>$this->input->post("id")))->row();  
  
		 
 ?>		
<input type="hidden" name="id" value="<?php echo $database->id;?>"> 
							 
  

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    
                                    <p>
                                         <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Upload Photo </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input   class=" form-control" name="foto"  type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
								
								
								
                              <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Status personal </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control" name="f[event]" value="<?php echo $database->event?>" type="text" placeholder="peserta">
                                            </div>
                                        </div>
                                    </div>
                                </div>   
								
								
									 <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Pilih DPD </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
							<?php 
							$this->db->order_by("kode","asc");
							$data=$this->db->get("tr_dpd")->result();
							$dpd[""]="==== pilih ====";
							foreach($data as $val)
							{
								$dpd[$val->kode]="[ ".$val->kode." ] ".$val->nama;
							}
							echo form_dropdown("f[kode_dpd]",$dpd,$database->kode_dpd,"required class='form-control' onchange='getKorwil(this.value)'");
							?>							
										
										
                                            </div>
                                        </div>
                                    </div>
                                </div> 
								
								<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Pilih Korwil </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line" id='dataKorwil2' >
							<?php  
							$korwil[""]="==== pilih ===="; 
							echo form_dropdown("f[kode_korwil]",$korwil,$database->kode_korwil,"required class='form-control' onchange='reload_table()'");
							?>							
										
										
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                               
								
								
								
								
								
								
                                
                                      	  <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Nomor Anggota </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control" name="f[nomor_anggota]" value="<?php echo $database->nomor_anggota?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                
                                 <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Nama Perusahaan </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control" name="f[nama_perusahaan]" value="<?php echo $database->nama_perusahaan?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                 <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Nama Pimpinan </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control" name="f[pimpinan]" value="<?php echo $database->pimpinan?>"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
							<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Alamat </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<textarea    class=" form-control"  name="f[alamat]" telp type="text"><?php echo $database->alamat?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							 
	<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Telpon </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[telp]"  value="<?php echo $database->telp;?>"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                	<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">NPWP </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[npwp]"  value="<?php echo $database->npwp;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                	<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">SIUP </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[siup]"  value="<?php echo $database->siup;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">TDP </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[tdp]"  value="<?php echo $database->tdp;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                	<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Akta Perusahaan </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[akta_perusahaan]"  value="<?php echo $database->akta_perusahaan;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                	<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Email </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control"  name="f[email]" value="<?php echo $database->email;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                      	
								<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Tgl Jatuh tempo </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class="tgl form-control" name="jatuh_tempo" value="<?php echo $this->tanggal->ind($database->jatuh_tempo,"/");?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
							 
								
                                    </p>
                                </div>
                                
                          </div>
								
						<script>	
$("[name='f[nomor_anggota]']").inputmask("99.99.9999");  						
setTimeout(function(){ getKorwil(`<?php echo $database->kode_dpd;?>`,`<?php echo $database->kode_korwil;?>`) }, 600);					
function getKorwil(val,value=null)
{	 
	 $.post("<?php echo site_url("data_kartu/getKorwil"); ?>",{id:val,value:value},function(data){
			 $("#dataKorwil2").html(data);
		      });
}
</script>		
								
								<script> 
$('.tgl').daterangepicker({
	//maxDate: new Date(),
    "singleDatePicker": true,
    "showDropdowns": true,
    "dateLimit": {
        "days": 7
    },
	  "autoApply": false,
	  "drops": "up",
    "locale": {
		    
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        "daysOfWeek": [
            "M",
            "S",
            "S",
            "R",
            "K",
            "J",
            "S"
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
    "showCustomRangeLabel": false,
   
   
});

$('.tgldown').daterangepicker({
	//maxDate: new Date(),
    "singleDatePicker": true,
    "showDropdowns": true,
    "dateLimit": {
        "days": 7
    },
	  "autoApply": false,
	  "drops": "down",
    "locale": {
		    
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        "daysOfWeek": [
            "M",
            "S",
            "S",
            "R",
            "K",
            "J",
            "S"
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
    "showCustomRangeLabel": false,
     
   
});


	</script>

						  