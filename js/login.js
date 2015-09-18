$(document).ready(function(){
	function check_login_errors (user, pass) {
		if (user == "" && pass == "") {
			window.location.assign("../pages/login.php?_error");
		}else{
			$.post("../fns/login_check.php", {user:user, pass:pass}, function(data, status){
				if (data == "success") {
					window.location.assign("../pages/index.php");
				}else{
					window.location.assign("../pages/login.php?_error");
				}
			});
		}
	}

	$("#login").click(function(){
        //alert("Opps! User Account unknown");
		var user = $("input[name='username']").val();
		//alert(user);
        var pass = $("input[name='password']").val();
        //alert(pass);
		//check_login_errors(user, pass);
	});

	$("input[name='password']").keypress(function(){
		if (event.keyCode == '13') {
			var user = $("input[name='username']").val();
			var pass = $("input[name='password']").val();
			check_login_errors(user, pass);
		}
	});
});