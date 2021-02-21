<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reff extends ci_Model
{
	
	public function __construct() {
        parent::__construct();
    }
function mobile()
	{
						$useragent=$_SERVER['HTTP_USER_AGENT'];
                       if(preg_match('/(android|bb\d+|meego).+mobile|Android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
						{ return true;}else{ return false; }
                   
	}
	function m_konfig($id){
			$return=$this->db->get_where("main_konfig",array("id_konfig"=>$id))->row();
		return isset($return->value)?($return->value):"";
	}
	function idu()
	{
		return $this->session->userdata("id");
	}
		function page403()
	{
		$this->load->view("403.html");
	}function page404()
	{
		$this->load->view("404.html");
	}function page405()
	{
		$this->load->view("405.html");
	}
	 
	function dataProfileAdmin()
	{
		return $this->db->get_where("admin",array("id_admin"=>$this->idu()))->row();
	}
	
	
	 function jk($id)
	 {
	     if($id=="l")
	     {
	         return "Laki-laki";
	     }elseif($id=="p")
	     {
	         return "Perempuan";
	     }
	 }
	 
	
	 
	function zipz($nama_file,$dir,$file)
	{
             $error=true;
            /* nama zipfile yang akan dibuat */
            $zipname = $nama_file.".zip";
            /* proses membuat zip file */
            $zip = new ZipArchive;
            $zip->open($zipname, ZipArchive::CREATE);
             
          //  foreach ($file as $value) {
            $zip->addFile($dir.$file,$file);
        //    }
             $zip->close();
            /* preses pembuatan zip file selesai disini */
             
            /* download file jika eksis*/
            if(file_exists($zipname)){
            header('Content-Type: application/zip');
            header('Content-disposition: attachment; 
            filename="'.$zipname.'"');
            header('Content-Length: ' . filesize($zipname));
            readfile($zipname);
            unlink($zipname);
             
            } else{
            $error = "Proses mengkompresi file gagal  ";
            } //end of if file_exist
            
            return $error;
            
    }
    
    function zip($zip_file,$dir,$data)
    {
            
            
            // Get real path for our folder
            $rootPath = realpath($dir);
            
            // Initialize archive object
            $zip = new ZipArchive();
            $zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);
            
            // Create recursive directory iterator
            /** @var SplFileInfo[] $files */
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($rootPath),
                RecursiveIteratorIterator::LEAVES_ONLY
            );
            
            foreach ($files as $name => $file)
            {
                // Skip directories (they would be added automatically)
                if (!$file->isDir())
                {
                    // Get real and relative path for current file
                    $filePath = $file->getRealPath();
                    $relativePath = substr($filePath, strlen($rootPath) + 1);
            
                    // Add current file to archive
                   $polder=substr($relativePath,0,6);
                   if (in_array($polder, $data)) {
                       $zip->addFile($filePath, $relativePath);
                    }  
                   
                   
                   
                }
            }
            
            // Zip archive will be created only after closing object
            $zip->close();
            
            
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($zip_file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($zip_file));
            readfile($zip_file);

            
    }
 
	function setToken()
	{
	$code=substr(str_shuffle("123aYbCdEfGhIj0K0opqrStUvwXyZ4567809"),0,25); $this->session->set_userdata("token",$code); 
	echo '<input type="hidden" name="token" value="'.$this->session->userdata("token").'">';
	}
	function cekToken()
	{
		$token_post=$this->input->post("token");
		$token_server=$this->session->userdata("token");
	
		if($token_post==$token_server)
		{
		return true;
		}else{
		return false;
		}
		
	}

	function acak($jml=2)
	{
		$karakter = '123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789';
		$shuffle  = substr(str_shuffle($karakter),0,$jml);
		return $shuffle;
	}
	
	function hapus_file($nama_file) //full path
	{
		$filename = $nama_file;

		if (file_exists($filename)) {
			unlink($nama_file);
		}  
		return true;
	}

	//UPLOAD FILE
	function upload_file($form,$dok,$nama_file_awal="file",$type_file_yg_diizinkan="ICO,JPG,JPEG,PNG",$sizeFile="3000000",$before_file=null)
	{		
	
		if(!isset($_FILES[$form]['tmp_name']))
		{
			return null;
		}
		
		$var=array();
		$var["size"]=true; 
		$var["file"]=true;
		$var["validasi"]=false; 
		//$nama_file_awal=preg_replace('/[^A-Za-z0-9\ ]/', "",$nama_file_awal);
		$nama_file_awal=str_replace(' ', "-",$nama_file_awal);
		$nama=$nama_file_awal;
		  $lokasi_file = $_FILES[$form]['tmp_name'];
		  $tipe_file   = $_FILES[$form]['type'];
		  $nama_file   = $_FILES[$form]['name'];
		   $size  	   = $_FILES[$form]['size'];
			 
			 $type_file_yg_diupload =substr(strrchr($nama_file, '.'), 1);
			 $nama=$nama.".".$type_file_yg_diupload;
			 $target_path = $dok."/".$nama;
			 
		  $extention=$type_file_yg_diupload;
		  $var["maxsize"]=substr($sizeFile,0,-6); 
		  
		 $pos = strpos(strtoupper($type_file_yg_diizinkan), strtoupper($extention));
		 if ($pos === false) {
			$file_extention=false;
		} else {
			$file_extention=true;
		}
		 if($type_file_yg_diizinkan=="all"){ $file_extention=true; } 
		 
		 $maxsize =$sizeFile;
		 if($size>=$maxsize)
		 {
			$var["size"]=false; 
		 }elseif($file_extention==false){
			$var["file"]=false; $var["type_file"]=$type_file_yg_diizinkan;
		 }else{
			if($before_file!=null)
			{
				$filename=$dok."/".$before_file;
				if (file_exists($filename)) {
					unlink($filename);
				} 
			}				
			  
		 	$var["validasi"]=true;
			if (!empty($lokasi_file)) {
			move_uploaded_file($lokasi_file,$target_path);
			 }
			$var["name"]=$nama;
		 }
		 return $var;
	}
	
	//QRCODE
	function qr($id)
	{
		if($id){
			$filename = 'qr/'.$id;
			if (!file_exists($filename)) { 
				$this->load->library('ciqrcode');
				$params['data'] = $id;
				$params['level'] = 'H';
				$params['size'] = 10;
				$params['savename'] = FCPATH.'qr/'.$id.".png";
				return	$this->ciqrcode->generate($params);
			}
		}
	}

	//WABLAS
	function kirimWa($phone,$msg,$dok=null)
    {

            if($dok){
                $link  =  $this->m_konfig->tm_konfigurasi(4);
                $data = [
                'phone' => $phone,
                'caption' => $msg,
                'document' =>$dok,
            ];
            }else{
                $link  =  $this->m_konfig->tm_konfigurasi(2);
                $data = [
                'phone' => $phone,
                'message' => $msg,
                ];
            }
            
            $curl = curl_init();
            $token =  $this->m_konfig->tm_konfigurasi(1);

            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array(
                    "Authorization: $token",
                )
            );
            curl_setopt($curl, CURLOPT_URL, $link);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data)); 
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            $result = curl_exec($curl);
            curl_close($curl); 
            return $result;
	}
	
    /*function kirimSms($phone,$msg)
    {

            $curl = curl_init();
            $token =  $this->m_konfig->tm_konfigurasi(12);
            $link  =  $this->tm_pengaturan(11);
             $data = [
                'phone' => $phone,
                'message' => $msg,
                ];
            
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array(
                    "Authorization: $token",
                )
            );
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_URL, $link);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            $result = curl_exec($curl);
            curl_close($curl); 
            return $result;
	}*/
	
	
	function hp($no)
	{
			$hp=str_replace("'","",$no); //hp
			$hp=str_replace("`","",$hp);
			return		str_replace("+62","0",$hp);
	}
	/*function hapussemua($src){ //nama folder
				$dir = opendir($src);
				while(false !== ( $file = readdir($dir)) ) {
				if (( $file != '.' ) && ( $file != '..' )) {
				$full = $src . '/' . $file;
				if ( is_dir($full) ) {
				hapussemua($full);
				}
				else {
				unlink($full);
				}
				}
				}
				closedir($dir);
				rmdir($src);
	}*/
	 function pengaturan($id)
	{
		$return=$this->db->get_where("pengaturan",array("id"=>$id))->row();
		return isset($return->val)?($return->val):"";
	} 
	
	 function deleteElement($element,  &$array){
		$index = array_search($element, $array);
		if($index !== false){
			unset($array[$index]);
		}
	}
	
	
	 function direktori($tahun,$kode)
	 {	 
		$filename=$this->m_reff->pengaturan(1);
		if (!file_exists($filename)) {
			mkdir($this->m_reff->pengaturan(1), 0777); 
		}  
		
		$filename=$this->m_reff->pengaturan(1).$tahun;
		if (!file_exists($filename)) {
			mkdir($this->m_reff->pengaturan(1).$tahun, 0777); 
		}  
		
		$filename=$this->m_reff->pengaturan(1).$tahun."/".$kode;
		if (!file_exists($filename)) {
			mkdir($this->m_reff->pengaturan(1).$tahun."/".$kode, 0777); 
			//mkdir($this->m_reff->pengaturan(1).$tahun."/".$kode."/qr", 0777); 
			//mkdir($this->m_reff->pengaturan(1).$tahun."/".$kode."/file", 0777); 
			//mkdir($this->m_reff->pengaturan(1).$tahun."/".$kode."/bahan", 0777);  
			//mkdir($this->m_reff->pengaturan(1).$tahun."/".$kode."/ttd", 0777);  
		}  
	 }
	 
	 function goField($tbl,$select,$where=null)
	{
	    	$select=$this->security->xss_clean($select);
		if($where)
		{	
			//$where = addslashes($where);
			$where=$this->security->xss_clean($where);
			$where=str_replace("where","",$where);
			 $where=str_replace("'''","'\''",$where);  
			$this->db->where($where);
		}
		$this->db->select($select); 
		$data=$this->db->get($tbl)->row(); 
		return isset($data->$select)?($data->$select):"";
	}
	 
	function encrypt($string)
			{ 
				
				$string = $this->encryption->encrypt($string); 
				$string=str_replace("+",".",$string);
				$string=str_replace("=","-",$string);
				$string=str_replace("/","~",$string); 
				return $string;
			}
			
			
			  function decrypt($string)
			{
				$string=str_replace(".","+",$string);
				$string=str_replace("-","=",$string);
				$string=str_replace("~","/",$string); 
				$ret = $this->encryption->decrypt($string); 
				return $ret;
			}
	 
}

?>