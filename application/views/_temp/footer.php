
<!--<script src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>-->
<script src="<?php echo base_url();?>assets/bower_components/popper.js/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/modernizr/js/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>
<script src="<?php echo base_url();?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url();?>assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url();?>plug/js/alertify/alertify.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>plug/toast/jquery.toast.js"></script>

<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>assets/ckeditor/js/sample.js"></script> 

<script type="text/javascript" src="<?php echo base_url()?>plug/timepicker/include/ui-1.10.0/jquery.ui.core.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>plug/timepicker/jquery.ui.timepicker.js?v=0.3.3"></script>
<script type="text/javascript">
	$(document).off("click",".menuclick").on("click",".menuclick",function (event, messages) {
		event.preventDefault()
		
		var url = $(this).attr("href");
		var title = $(this).attr("title");
		var target = $(this).attr("target");
	
		if(url=="<?php echo base_url()?>login/logout")
		{
			window.location.href=url;
		}
		if(target=="_blank")
		{
			window.open(url, '_blank');
			return false;
		}  
		$(this).parent().addClass('active').siblings().removeClass('active');
		$("#page-body").html('<div class="cell preloader5 loader-block"><div class="circle-5 l"></div><div class="circle-5 m"></div><div class="circle-5 r"></div></div>');
		 
		$.post(url,{ajax:"yes"},function(data){
			$('.modal.aside').remove();
			history.replaceState(title, title, url);
			$(".uri").val(url);
			$('title').html(title);
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
		
</body>
 </html>