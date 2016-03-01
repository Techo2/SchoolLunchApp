$(document).ready(function(){
            $("#refreshimg").click("div #refreshimg",function(){

$.post('/../php/newsession.php');
		$("#captchaimage").load('/../php/image_req.php');

		return false;
                
	});
        });
