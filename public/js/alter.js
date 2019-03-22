




$(window).bind("load", function() {


	setInterval(function(){
		$.ajax({
		 type:'POST',
		 url:'/apibancheck',
		 dataType: "text",
		 data : {_token:$('meta[name="csrf-token"]').attr('content')},
		 success:function(deneme){
			 if(deneme==1)
			 {
				return 1
			 }
		}
	 });

 },5000)

	

	$('#dogrulama').keyup(function(){
		if($('#ksifre').val()!=$('#dogrulama').val())
		{
			console.log("asf")
			$('#signinButton').attr("disabled", true);
			$('#warn').fadeIn();
		}
		else
		{
			$('#warn').fadeOut();
			$('#signinButton').attr("disabled", false);


		}

	})
	$('#ksifre').keyup(function(){
		if($('#ksifre').val()!=$('#dogrulama').val())
		{
			$('#signinButton').attr("disabled", true);
			$('#warn').fadeIn();
		}
		else
		{
			$('#warn').fadeOut();
			$('#signinButton').attr("disabled", false);


		}

	})

	$(".btn.btn-primary.silme").each(function( index ) {
        var b = 12 / $(".btn.btn-primary.silme").length
		$(this).click(function(){

			if($(".btn.btn-primary.silme").not($(this)).parent().parent().is(":hidden")==true)
			{
				$(".btn.btn-primary.silme").not($(this)).parent().parent().fadeIn("slow");
				$(this).parent().parent().parent().removeClass('col-md-12').addClass('col-md-'+ b);
				$(this).html("Oku");
				$(this).parent().children().css("whiteSpace","nowrap");

			}
			else{
				let a = this;
				$(".btn.btn-primary.silme").not($(this)).parent().parent().fadeOut(500);

				setTimeout(function() {
        $(a).parent().parent().parent().removeClass('col-md-'+ b).addClass('col-md-12');}, 1000);
				$(a).parent().parent().width("-webkit-fill-available");
				$(a).parent().children().css("whiteSpace","normal");
			$(a).html("Geri dön");

			}




		})
	});


	});
function emin(){
		Swal.fire({
	  title: 'Bu hikayeyle birlikte alternatifleri de silinecek silmek istediğine emin misin?',
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Evet',
		cancelButtonText: 'İptal'
	}).then((result) => {
	  if (result.value) {
	    Swal.fire(
	      'Silindi!',
			)
			$('#mform').submit();
			
	  }
		else{
			event.preventDefault();
		}
	})

		}

function karakter(){
		  if ($( "#textbox" ).val().length<100) {
		    swal({
		      title: 'Az Karakter!',
		      text: 'Minimum Karakter Sayısı 100',
		      icon: 'info',
		      button: 'Anladım'
		    })
		    event.preventDefault();
		}
	}

function sorgu(){
	$.ajaxSetup({
		headers: {
			 'X-CSRF-TOKEN': $('input[name="_token"]').val()
			 }
	 })
		 var kullanici_adi = $("#kadi").val();
		 var kullanici_mail = $("#kmail").val();
		 var kullanici_sifre = $("#ksifre").val();
		 event.preventDefault();

		 if (document.getElementById('myform').checkValidity()==true) {


		      $.ajax({
		        type:'POST',
						url:'apisignin',
						dataType: "text",
		        data:{ad:kullanici_adi,mail:kullanici_mail},
		        success:function(data){
		          if (data == '1')
		          {
								$('#signin').after('<div id="asd" align="center" class="alert alert-danger"><strong>Kullanıcı mevcut</strong></div>');    
								setTimeout(function(){
									$("#asd").fadeOut();
								},2000)

		          }
		          else{

								$('#signin').after('<div id="asd" align="center" class="alert alert-success"><strong>Kayıt Başarılı</strong></div>');    
										setTimeout(function(){
											$('#myform').submit();
										},1000)
								
		          }
		        },error: function (xhr, ajaxOptions, thrownError) {
							alert(xhr.status);
							alert(thrownError);
						}
		      });


		 }
		 else {
 		    swal({
 		      text: 'Lütfen doğru doldurun',
 		      icon: 'warning',
 		      button: 'Anladım'
 		    })



		 }



		}

function sorgu2(){
	$.ajaxSetup({
		headers: {
			 'X-CSRF-TOKEN': $('input[name="_token"]').val()
			 }
	 })
	
	var kadi = $("#kadi").val();
	var ksifre = $("#ksifre").val();

	event.preventDefault();
	if (document.getElementById('myform').checkValidity()==true) {

			$.ajax({
				type:'POST',
				url:"apilogin",
				dataType: "json",	
				data:{kadi:kadi,ksifre:ksifre},
				success:function(giris){
					if (giris["durum"] == "1")
					{
						window.location = '/rootstories/1'
					}
					else{
						$('#login').after('<div id="asd" align="center" class="alert alert-danger"><strong>Bilgiler yanlış</strong></div>');    
						setTimeout(function(){
							$("#asd").fadeOut();
						},2000)

					}
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(xhr.status);
					alert(thrownError);
				}
			});


	}
		}

		function checkname(){
			$.ajaxSetup({
				headers: {
					 'X-CSRF-TOKEN': $('input[name="_token"]').val()
					 }
			 })
			
			var kadi = $("#ad").val();		
			event.preventDefault();

					$.ajax({
						type:'POST',
						url:"/apicheckname",
						dataType: "text",	
						data:{kadi:kadi},
						success:function(giris){
							if (giris== "1")
							{
								$('#nickLabel').addClass('text-danger')
								$('#ad').addClass(' is-invalid ')
								$('#ad').after('<small id="passwordHelp" class="text-danger">Kullanıcı Mevcut</small>');  
								setTimeout(() => {
									$('#passwordHelp').fadeOut()
								}, 1000);  
							}
							else
							{
								$('#editform').submit();
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							alert(xhr.status);
							alert(thrownError);
						}
					});
		
		
			}
				
		



function noUser(e){
	swal({
		title: 'Giriş Yapmalısın',
		text: 'Hikaye yazabilmek için giriş yapmalısın',
		icon: 'error',
		button: 'Anladım'
	})
}
function ban(e){
	swal({
		title: 'Banlandın',
		text: 'Banlandığın için bir süre hikaye yazamayacaksın',
		icon: 'warning',
		button: 'Anladım'
	})
}
function oku(){

	$(event.path[2]).width("-webkit-fill-available");
	$(event.path[1]).children().css("whiteSpace","normal");
	$(event.path[0]).fadeOut();

}

function charcountupdate(str) {
	var lng = str.length;
	document.getElementById("charcount").innerHTML = lng + '/700';
	if (lng>700) {
		swal({
			title: 'Fazla Karakter!',
			text: 'İzin ver hikayeni başka insanlar devam ettirsin :)',
			icon: 'info',
			button: 'Anladım'
		})
		let deneme = str.slice(0,699);
		document.getElementById("textbox").value =  deneme;

	}

}