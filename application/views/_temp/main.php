<?php   $this->load->view("temp/header");?>
<?php   $this->load->view("temp/sidebar");?>






<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php   $this->load->view("temp/menu");?>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body" style="font-family:Arial, Helvetica, sans-serif">
<div class="page-wrapper">
 
<div class="page-body" id="page-body">




 <?php if(isset($konten)){
	 $this->load->view($konten);
 }else{
	 echo "Page not found!";
 }?>
</div>



</div>
</div>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>

 
 
<?php   $this->load->view("temp/footer");?>
