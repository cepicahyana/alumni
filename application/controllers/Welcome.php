<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function api(){
		$id_kri	=	$this->input->get_post("id_kri");
		$lat	=	$this->input->get_post("lat");
		$lng	=	$this->input->get_post("lng");
	}
	 
function kirim() {
	$id="1259488302";
	$token = "1598488071:AAH0gpYnL36uZtDFpZ4SEBo-AT5GfzzUYd0";
	$pesan = " orang ganteng";
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".$token."/sendmessage?chat_id=".$id."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function tel(){
	
	$token = "1598488071:AAH0gpYnL36uZtDFpZ4SEBo-AT5GfzzUYd0";
    $API = "https://api.telegram.org/bot".$token."/getUpdates";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    echo ($result);
}


 
//kirimTelegram("jaranguda.com tutorial membuat bot sederhana");


}
?>


DATA HOSTED WITH ♥ BY PASTEBIN.COM - DOWNLOAD RAW - SEE ORIGINAL
<?php
/*
BOT PENGANTAR
Materi EBOOK: Membuat Sendiri Bot Telegram dengan PHP
Ebook live http://telegram.banghasan.com/
oleh: bang Hasan HS
id telegram: @hasanudinhs
email      : banghasan@gmail.com
twitter    : @hasanudinhs
disampaikan pertama kali di: Grup IDT
dibuat: Juni 2016, Ramadhan 1437 H
nama file : PertamaBot.php
change log:
revisi 1 [15 Juli 2016] :
+ menambahkan komentar beberapa line
+ menambahkan kode webhook dalam mode comment
Pesan: baca dengan teliti, penjelasan ada di baris komentar yang disisipkan.
Bot tidak akan berjalan, jika tidak diamati coding ini sampai akhir.
*/
//isikan token dan nama botmu yang di dapat dari bapak bot :
$TOKEN      = "637237555:AAFkr4nwv-k2QDpTmMujpizJubNsQGnrJLg"; // ganti dengan token bot anda
$usernamebot= "@ekiakmarullahbot"; // sesuaikan besar kecilnya, bermanfaat nanti jika bot dimasukkan grup.
// aktifkan ini jika perlu debugging
$debug = false;
 
// fungsi untuk mengirim/meminta/memerintahkan sesuatu ke bot
function request_url($method)
{
    global $TOKEN;
    return "https://api.telegram.org/bot" . $TOKEN . "/". $method;
}
 
// fungsi untuk meminta pesan
// bagian ebook di sesi Meminta Pesan, polling: getUpdates
function get_updates($offset)
{
    $url = request_url("getUpdates")."?offset=".$offset;
        $resp = file_get_contents($url);
        $result = json_decode($resp, true);
        if ($result["ok"]==1)
            return $result["result"];
        return array();
}
// fungsi untuk mebalas pesan,
// bagian ebook Mengirim Pesan menggunakan Metode sendMessage
function send_reply($chatid, $msgid, $text)
{
    global $debug;
    $data = array(
        'chat_id' => $chatid,
        'text'  => $text,
        'reply_to_message_id' => $msgid   // <---- biar ada reply nya balasannya, opsional, bisa dihapus baris ini
    );
    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents(request_url('sendMessage'), false, $context);
    if ($debug)
        print_r($result);
}
 
// fungsi mengolahan pesan, menyiapkan pesan untuk dikirimkan
function create_response($text, $message)
{
    global $usernamebot;
    // inisiasi variable hasil yang mana merupakan hasil olahan pesan
    $hasil = '';  
    $fromid = $message["from"]["id"]; // variable penampung id user
    $chatid = $message["chat"]["id"]; // variable penampung id chat
    $pesanid= $message['message_id']; // variable penampung id message
    // variable penampung username nya user
    isset($message["from"]["username"])
        ? $chatuser = $message["from"]["username"]
        : $chatuser = '';
   
    // variable penampung nama user
    isset($message["from"]["last_name"])
        ? $namakedua = $message["from"]["last_name"]
        : $namakedua = '';  
    $namauser = $message["from"]["first_name"]. ' ' .$namakedua;
    // ini saya pergunakan untuk menghapus kelebihan pesan spasi yang dikirim ke bot.
    $textur = preg_replace('/\s\s+/', ' ', $text);
    // memecah pesan dalam 2 blok array, kita ambil yang array pertama saja
    $command = explode(' ',$textur,2); //
   // identifikasi perintah (yakni kata pertama, atau array pertamanya)
    switch ($command[0]) {
        // jika ada pesan /id, bot akan membalas dengan menyebutkan idnya user
        case '/id':
        case '/id'.$usernamebot : //dipakai jika di grup yang haru ditambahkan @usernamebot
            $hasil = "$namauser, ID kamu adalah $fromid";
            break;
       
        // jika ada permintaan waktu
        case '/time':
        case '/time'.$usernamebot :
            $hasil  = "$namauser, waktu lokal bot sekarang adalah :\n";
            $hasil .= "\xE2\x8C\x9A".date("d M Y")."\nPukul ".date("H:i:s");
            break;
           
        case '/start':
             $hasil  = "assalamualaikum saudara/i $namauser
                       berikut list command dari bot ini :
                       => /id   --> untuk menampilkan id anda
                       => /time --> untuk menampilkan waktu lokal anda";
             break;
        // balasan default jika pesan tidak di definisikan
        default:
            $hasil = 'Terimakasih, pesan telah kami terima.';
            break;
    }
    return $hasil;
}
 
// jebakan token, klo ga diisi akan mati
// boleh dihapus jika sudah mengerti
if (strlen($TOKEN)<20)
    die("Token mohon diisi dengan benar!\n");
// fungsi pesan yang sekaligus mengupdate offset
// biar tidak berulang-ulang pesan yang di dapat
function process_message($message)
{
    $updateid = $message["update_id"];
    $message_data = $message["message"];
    if (isset($message_data["text"])) {
    $chatid = $message_data["chat"]["id"];
        $message_id = $message_data["message_id"];
        $text = $message_data["text"];
        $response = create_response($text, $message_data);
        if (!empty($response))
          send_reply($chatid, $message_id, $response);
    }
    return $updateid;
}
 
// hapus baris dibawah ini, jika tidak dihapus berarti kamu kurang teliti!
//die("Mohon diteliti ulang codingnya..\nERROR: Hapus baris atau beri komen line ini yak!\n");
 
// hanya untuk metode poll
// fungsi untuk meminta pesan
// baca di ebooknya, yakni ada pada proses 1
function process_one()
{
    global $debug;
    $update_id  = 0;
    echo "-";
 
    if (file_exists("last_update_id"))
        $update_id = (int)file_get_contents("last_update_id");
 
    $updates = get_updates($update_id);
    // jika debug=0 atau debug=false, pesan ini tidak akan dimunculkan
    if ((!empty($updates)) and ($debug) )  {
        echo "\r\n===== isi diterima \r\n";
        print_r($updates);
    }
 
    foreach ($updates as $message)
    {
        echo '+';
        $update_id = process_message($message);
    }
   
    // update file id, biar pesan yang diterima tidak berulang
    file_put_contents("last_update_id", $update_id + 1);
}
// metode poll
// proses berulang-ulang
// sampai di break secara paksa
// tekan CTRL+C jika ingin berhenti
while (true) {
    process_one();
    sleep(1);
}
// metode webhook
// secara normal, hanya bisa digunakan secara bergantian dengan polling
// aktifkan ini jika menggunakan metode webhook
/*
$entityBody = file_get_contents('php://input');
$pesanditerima = json_decode($entityBody, true);
process_message($pesanditerima);
*/
/*
 * -----------------------
 * Grup @botphp
 * Jika ada pertanyaan jangan via PM
 * langsung ke grup saja.
 * ----------------------
 
* Just ask, not asks for ask..
Sekian.
*/
   
?>