<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jan 2021 05:37:09 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $this->m_reff->m_konfig(7);?></title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
       <!-- Full calendar -->
      <link href='<?php echo base_url() ?>assets/fullcalendar/core/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='<?php echo base_url() ?>assets/fullcalendar/list/main.css' rel='stylesheet' />

     <script src="<?php echo base_url()?>plug/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url()?>plug/jqueryform/jquery.form.js"></script>
	<script src="<?php echo base_url()?>plug/blokui.js"></script>
	<script src="<?php echo base_url()?>plug/js/angular.js"></script>
 	<script src="<?php echo base_url()?>plug/js/proses.js"></script>
 	<link href="<?php echo base_url()?>plug/css/add.css"  rel="stylesheet"/> 
	<link rel="stylesheet" href="<?php echo base_url()?>plug/toast/jquery.toast.css"/>
   <link href="<?php echo base_url()?>plug/js/alertify/css/alertify.css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>datatables/datatables.min.css"/> 
<script type="text/javascript" src="<?php echo base_url()?>datatables/datatables.min.js"></script>
   </head>
   <body>
      <!-- loader Start 
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?php echo base_url() ?>dashboard">
               <img src="<?php echo base_url() ?>plug/img/<?php echo $this->m_reff->m_konfig(1);?>" class="img-fluid" alt="">
               <span style='font-size:22px'><?php echo $this->m_reff->m_konfig(7);?></span>
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
            <div id="sidebar-scrollbar">
              <?php echo $this->load->view("temp/menu");?>
               <div class="p-3"></div>
            </div>
         </div>
        
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
             <!-- TOP Nav Bar -->
           <?php echo $this->load->view("temp/top_menu");?>
         <!-- TOP Nav Bar END -->
            <div class="container-fluid" id="page-body">
                 <?php echo isset($konten)?($this->load->view($konten)):"page not found!";?>
               </div>
         </div>
      <!-- Footer -->
         
      <!-- Footer END -->
         </div>
      
      <!-- Wrapper END -->
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
      <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript --> 
      <!-- Countdown JavaScript --> 
      <!-- Counterup JavaScript --> 
      <!-- Wow JavaScript --> 
      <!-- Apexcharts JavaScript --> 
      <!-- Slick JavaScript --> 
      <!-- Select2 JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript --> 
      <!-- Magnific Popup JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript --> 
      <!-- am core JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/core.js"></script>
      <!-- am charts JavaScript --> 
      <script src="<?php echo base_url() ?>assets/js/animated.js"></script>
      <!-- am kelly JavaScript -->   
      <!-- lottie JavaScript --> 
      <script src="<?php echo base_url();?>assets/js/chart-custom.js"></script>
     
      <!-- Custom JavaScript -->
      <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
   </body>
<script src="<?php echo base_url();?>plug/js/alertify/alertify.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>plug/toast/jquery.toast.js"></script>
<!--
<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>assets/ckeditor/js/sample.js"></script> 
-->

<script type="text/javascript">
	$(document).off("click",".menuclick").on("click",".menuclick",function (event, messages) {
		event.preventDefault()
		
		var url = $(this).attr("href");
		var title = $(this).attr("title");
		var target = $(this).attr("target");
		var ref = $(this).attr("ref");
	
		if(url=="<?php echo base_url()?>login/logout")
		{
			window.location.href=url;
		}
		if(target=="_blank")
		{
			window.open(url, '_blank');
			return false;
		}  
	//	$("li").removeClass('active');
		$(this).parent().addClass('active').siblings().removeClass('active');
		 $(".ref").removeClass('active');
		 if(ref){
			$(".ref").removeClass('main-active'); 
		 }
	 	 //$("#ui-elements").removeClass('show');
		 $("#"+ref).addClass('active main-active');
		$("#page-body").html('<div class="cell preloader5 loader-block"><div class="circle-5 l"></div><div class="circle-5 m"></div><div class="circle-5 r"></div></div>');
		 
		$.post(url,{ajax:"yes"},function(data){
			$('.modal.aside').remove();
			history.replaceState(title, title, url);
			$(".uri").val(url);
			$('#title').html(title);
			$("#page-body").html(data); 
		})
	})
</script> 
		
  <script type="text/javascript">  
    function notif(msg,h="Information",i="info"){
			$.toast({
			heading:h,
			text: msg,
			showHideTransition: 'fade',
			icon: i, 
			   hideAfter: 5000,
			   loader: false, 
			   loaderBg: '#F0F8FF', 
			 position: 'top-right',
			});
	} 	 
 </script>

</html>
