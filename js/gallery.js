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
       	console.log('отправилось');
       }
       }
		 	);
	});
});