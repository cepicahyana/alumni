 

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title2">
                                    
                                    <p>
                                <div class="row clearfix">
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
											<input    class=" form-control" name="f[event]" value="peserta" type="text" placeholder="peserta">
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
							echo form_dropdown("f[kode_dpd]",$dpd,"","required class='form-control' onchange='getKorwil(this.value)' data-live-search='true'");
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
                                            <div class="form-line" id='dataKorwil' >
							<?php  
							$korwil[""]="==== pilih ===="; 
							echo form_dropdown("f[kode_korwil]",$korwil,"","required class='form-control' onchange='reload_table()'");
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
											<input    class=" form-control" name="f[nomor_anggota]"  type="text">
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
											<input    class=" form-control" name="f[nama_perusahaan]"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                
                                 <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4  form-control-label">
                                        <label for="email_address_2" class="col-black">Pimpinan </label>
                                    </div>
                                    <div class="col-lg-7 col-md-7  ">
                                        <div class="form-group">
                                            <div class="form-line"  >
											<input    class=" form-control" name="f[pimpinan]"  type="text">
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
											<textarea     class=" form-control"  name="f[alamat]"  type="text"></textarea>
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
											<input     class=" form-control"  name="f[telp]"  type="text">
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
											<input     class=" form-control"  name="f[npwp]"  type="text">
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
											<input     class=" form-control"  name="f[siup]"  type="text">
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
											<input     class=" form-control"  name="f[tdp]"  type="text">
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
											<input     class=" form-control"  name="f[akta_perusahaan]"  type="text">
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
											<input     class=" form-control"  name="f[email]"  type="text">
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
											<input     class="tgl form-control" name="jatuh_tempo"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
							 

							

							  
                                    </p>
                                </div>
                                
                          </div>
<script>	
$('select').selectpicker();
	$("[name='f[nomor_anggota]']").inputmask("99.99.9999");  							
function getKorwil(val)
{
	 $.post("<?php echo site_url("data_kartu/getKorwil"); ?>",{id:val},function(data){
			 $("#dataKorwil").html(data);
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
    "showCustomRangeLabel": false,
    "startDate": "<?php echo date("d/m/Y")?>",
   
});
 
	</script>

						  