 <div id="callback_form">
 <p onclick="hide_popup();" class="close"></p>
<div class="form-block">                                  
		<form method="POST" id="contact-form">
			<?
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=Windows-1251\r\n";
			$headers .= "From: <magniflex.ru>\r\n";
			if (isset ($_POST['phoneFF'])) {
				//order@magniflex.ru
						mail ('order@magniflex.ru, Info@magniflex.ru, Gregor_3d@mail.ru, info@magniflex.ru, sale@magniflex.ru',
						"Заполнена форма обратной связи ".$_SERVER['HTTP_REFERER'],
						"\nPhone: ".$_POST['phoneFF']."".$_POST['messageFF'] ,$headers );
						/*if(mail) {echo " <script>
jQuery(document).ready(function(){
		show_popup($('#spasibo'));
});	
 </script>";}*/ 
						
				                            
			}
			?>
	

					
			<span>Ваш номер телефона:</span>
			<input type="text" name="phoneFF" id="phoneFF" required placeholder="номер телефона" x-autocompletetype="phone">			
			<p class="submit"><input type="submit" value="отправить"></p>
		</form>
	</div> 
 
 </div>
 <div id="spasibo">Спасибо, <br>
  <p onclick="hide_popup();" class="close1"></p>
Наши специалисты обязательно позвонят Вам в указанное время!</div>
 <style>
 #size-form {
	 width:100%;
	 position:relative;
	 overflow:hidden;
 }
 
 #size-form span {
	 display:inline-block;
	 width:250px;
 }
 #spasibo {
	 display:none;
	 position:absolute;
	 background:#fff;
	 padding:15px;	 
	 top:250px;
	 left:40%;
	 z-index:999999;
 }
 #callback {
	font-size: 16px;
    cursor: pointer;
    color: #E1001A;
	 
 }
 #callback_form{
	 display:none;
	 position:absolute;
	 background:#fff;
	 padding:15px;	 
	 top:250px;
	 left:40%;
	 z-index:999999;
 
 }
 
.close,
.close1 {
	background-image: url('/template/js/fancybox/fancybox_sprite.png');
    position: absolute;
    right: -8px;
    width: 32px;
    height: 33px;
    top: -25px;
    z-index: 99999999;
	cursor: pointer;
 }
 .submit input {
	 display: block;
    float: right;
    padding: 4px 15px;
    background: #333;
    color: #FFF;
    border: 0;
    outline: 0;
    cursor: pointer;
    font-size: 13px;
    transition: background 0.3s;
	 
 }
 </style>
 
 <script>
jQuery(document).ready(function(){	
$("#contact-form").submit(function () {
		alert("Спасибо! Наши специалисты обязательно позвонят Вам!"); 
		$.ajax({
			type : "post",
			url : "/template/callback",
			data : $("#size-form").serializeArray(),
			dataType : "json",
			success: function (response) {
				
			}
		});
			
});

	 jQuery('#spasibo .close').click(function(){
		 jQuery('#spasibo').hide();		 
		 
	 });	
	 jQuery('#callback_form .close1').click(function(){
		 jQuery('#callback_form').hide();		 
		 
	 });
	 
	 
	$('#callback').click(function(){
		show_popup($('#callback_form'));
		$('body,html').animate({scrollTop:0},800);
	});
	
	$('#phoneFF').mask('+7 (999) - 999-99-99');
	
		
});
 </script>
 
