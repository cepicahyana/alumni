<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_kartu extends CI_Controller {

	 
	var $tbl="data_kartu";
	function __construct()
	{
		parent::__construct();	
		$this->m_konfig->validasi_session(array("operator","admin"));
		$this->load->model("model","mdl");
		$this->load->model("m_sms","sms");
		date_default_timezone_set('Asia/Jakarta');
	}
	 
	function _template($data)
	{
	$this->load->view('temp/main',$data);	
	}
	 
	public function index()
	{
		 	
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("index");
		}else{
			$data['konten']="index";
			$this->_template($data);
		}
		
	}
	 
 
	 
	
	 
	///-----------------------SISWA--------------------------///
 
	 
	
	///-----------------------mitra PENILIAAN--------------------------///
	function getData()
	{
		$list = $this->mdl->get_data();
		$data = array();
		$no = $_POST['start'];
		$no =$no+1;
		 $level=$this->session->userdata("level");
		foreach ($list as $dataDB) {
		////
	 if($level=="ADMIN"){
		 $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
                                    <button type="button" onclick="cetak(`'.$dataDB->id.'`)" class="btn bg-blue-grey waves-effect waves-light" style="width:70px">CETAK</button>
                                    <button type="button" onclick="cetak_polos(`'.$dataDB->id.'`)" class="btn bg-blue-grey waves-effect waves-light" style="width:120px">CETAK POLOS</button>
                                </div>
                                 <div class="btn-group" role="group">
                                    <button type="button" onclick="hapus(`'.$dataDB->id.'`)" class="btn bg-blue-grey waves-effect waves-light" style="width:70px">HAPUS</button>
                                    <button type="button" onclick="edit(`'.$dataDB->id.'`)" class="btn bg-blue-grey waves-effect waves-light" style="width:120px">EDIT</button>
                                </div>
                                
                            </div>';
			 		
	 }else{
		  $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
                                    <button type="button" onclick="cetak(`'.$dataDB->id.'`)" class="btn bg-pink waves-effect waves-light">CETAK</button>
                                     
                                </div>
                                
                            </div>';
	 }		 
		 
			$row = array();
				$row[] = "<span class='size'>".$no++."</span>";	
			$row[] = $tombol;
		
			$row[] = "<span class='size'>  ".$dataDB->nomor_anggota." </span>";
	 
			$row[] = "<span class='size'>  ".$dataDB->nama_perusahaan."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->pimpinan."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->alamat."   </span>";
		 
			$row[] = "<span class='size'>  ".$dataDB->telp."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->npwp."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->siup."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->tdp."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->akta_perusahaan."   </span>";
			$row[] = "<span class='size'>  ".$dataDB->email."   </span>";
		    $row[] = "<span class='size'>  ".$this->tanggal->ind($dataDB->jatuh_tempo,"/")."   </span>";
			$row[] = "<span class='size'>  ".$this->m_reff->goField("tr_dpd","nama","where kode='".$dataDB->kode_dpd."' ")." </span>";
			$row[] = "<span class='size'>  ".$this->m_reff->goField("tr_korwil","nama","where kode='".$dataDB->kode_korwil."' ")." </span>";
 
			$data[] = $row; 
			
			}
			 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $c=$this->mdl->count(),
						"recordsFiltered" =>$c,
						"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}
	
	 
	//-------------------------------------------------END SISWA------------------------------------//
	function idu()
	{
		return $this->session->userdata("id");
	}
	  
	 
	function viewAdd()
	{
		echo $this->load->view("viewAdd");
	}function viewCard()
	{
		echo $this->load->view("viewCard");
	}
	function viewCard_polos()
	{
		echo $this->load->view("viewCard_polos");
	}
	function viewEdit()
	{
		echo $this->load->view("viewEdit");
	}
	function insert()
	{
		echo json_encode($this->mdl->insert());
	}
	function update()
	{
		echo json_encode($this->mdl->update());
	}
	function set()
	{
		echo $this->mdl->set();
	}
	
	
	function hapus()
	{
		$id=$this->input->post("id");
		echo $this->mdl->hapus($id);
	}
	 
	function save_bursa()
	{
	$data=$this->mdl->save_bursa();
	echo json_encode($data);
	}
	function hapus_bursa()
	{
	$data=$this->mdl->hapus_bursa();
	echo json_encode($data);
	}
	
	function import_data()
	{
		 $data=$this->mdl->import_data();
	 	echo json_encode($data);
	}
	function getKorwil()
	{
		$id=$this->input->get_post("id");
		$value=$this->input->get_post("value");
		$this->db->where("kode_dpd",$id);
		$this->db->order_by('kode','asc');
		$data=$this->db->get("tr_korwil")->result();
		$dpd[""]="==== pilih ====";
		foreach($data as $val)
		{
			$dpd[$val->kode]="[".$val->kode."] ".$val->nama;
		}
		echo form_dropdown("f[kode_korwil]",$dpd,$value,"  class='form-control' data-live-search='true' ");
		echo "<script>$('select').selectpicker()</script>";					
	}
	
	function fgetKorwil()
	{
		$id=$this->input->get_post("id");
		$value=$this->input->get_post("value");
		$this->db->where("kode_dpd",$id);
		$this->db->order_by('kode','asc');
		$data=$this->db->get("tr_korwil")->result();
		$dpd[""]="==== filter ====";
		foreach($data as $val)
		{
			$dpd[$val->kode]="[".$val->kode."] ".$val->nama;
		}
		echo form_dropdown("kode_korwil",$dpd,$value,"  class='form-control' data-live-search='true' onchange='reload_table()'");
		echo "<script>$('select').selectpicker()</script>";					
	}
}