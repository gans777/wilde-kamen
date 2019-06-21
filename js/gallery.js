$(document).ready(function(){
	$('.button_for_main_info').click(function(){
		var main_info=$("[name='main_info']").val();
		var Str = location.href;
        var tmpStr  = Str.match("photos/(.*)/index");
        var newStr = tmpStr[1];
		console.log('этот сайт='+ document.location.host +' '+ 'path= '+ newStr + ' '+ document.URL +'i am work'+ main_info);

		 $.ajax({
           type:'post',
           url:'../../ajax/ajaxrequest.php',
           data: {'label':'save_main_info',
                  'directory': newStr,
                  'data_save': main_info
       },
       success: function(data){
       	
       	UIkit.modal.dialog('<div class="text_in_modal_for_admin"> сохранено</div><div class="text_in_modal_for_admin">'+ data + '</div>');

       }
       }
		 	);
	});
	$('button.rename').click(function(){ // переименование изображений
		$(this).siblings('img').css("border","3px solid red");
		console.log('button for img number='+ $(this).siblings('img').attr('src'));
		//UIkit.modal.prompt('введите новое имя файла(окончание .jpg само подставиться)', 'Your name');
        UIkit.modal.dialog('<div class="text_in_modal_for_admin">этот файл называется '+$(this).siblings('img').attr('src')+'<br><input type="text" name="rename"> <button class="uk-button uk-button-danger rename_this_file">переименовать</button></div>        	');
	});
	$(document).on('click', function(){
		var new_name = $('[name="rename"]').val();
		console.log("новое имя файла "+ new_name);
	});

	$('button.rename_this_file').click(function(){
		var new_name = $('[name="rename"]').val();
		console.log("новое имя файла "+ new_name);
	});
});