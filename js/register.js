
	$(function(){
		$(".dengl").click(function(){
		var sendData = {"userName":$("#userName").val(),"userPass":$("#userPass").val()};
		console.log(sendData)
		$.post("login.php",sendData,function(data){
			if(data.indexOf("1")>-1){
			//2、跳转页面；
				//$.cookie( "userName" , $("#username").val()  , { path: '/', expires: 14 });	
				location.href = "login-success.html";
				//1、记录cookie;	
			}else{
				location.href = "login-fail.html";
			}
			});
		})
	} )
