<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Login Form</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<script>
			(function(f,b){if(!b.__SV){var e,g,i,h;window.mixpanel=b;b._i=[];b.init=function(e,f,c){function g(a,d){var b=d.split(".");2==b.length&&(a=a[b[0]],d=b[1]);a[d]=function(){a.push([d].concat(Array.prototype.slice.call(arguments,0)))}}var a=b;"undefined"!==typeof c?a=b[c]=[]:c="mixpanel";a.people=a.people||[];a.toString=function(a){var d="mixpanel";"mixpanel"!==c&&(d+="."+c);a||(d+=" (stub)");return d};a.people.toString=function(){return a.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");

			for(h=0;h<i.length;h++)g(a,i[h]);var j="set set_once union unset remove delete".split(" ");a.get_group=function(){function b(c){d[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));a.push([e,call2])}}for(var d={},e=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<j.length;c++)b(j[c]);return d};b._i.push([e,f,c])};b.__SV=1.2;e=f.createElement("script");e.type="text/javascript";e.async=!0;e.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?

			MIXPANEL_CUSTOM_LIB_URL:"file:"===f.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";g=f.getElementsByTagName("script")[0];g.parentNode.insertBefore(e,g)}})(document,window.mixpanel||[]);

			mixpanel.init("b1eceb99dec404d79dabf40573ea90cb", {batch_requests: true})
		</script>
		
		<!-- Bootstrap Files -->
		<script type="text/javascript" src="assets/jquery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom CSS Files -->
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css">
		<?php 
			session_start();
			if(isset($_SESSION['login_id']))
			header("location:homepage.php?page=home");
		?>
	</head>
	<body>
		<div class="title"><h1>Sign In Form</h1></div>
		<div class="container">
			<div class="left"></div>
			<div class="right">
				<div class="formBox">
					<form action="" method="POST">
						<p>Username</p>
						<input type="text" name="username" placeholder="Online" required>
						<p>Password</p>
						<input type="Password" name="password" placeholder="*******" required>
						<script>
							function myFunction(){
								window.location.href="homepage.php";
							}
						</script>
						<a href="homepage.php">
							<input type="submit" name="Submit" value="Sign In" onClick="myFunction()">
						</a>
						<a href="#">Forgot Password?</a>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script>
		$('#login-form').submit(
			function(e){
				e.preventDefault()
				$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
				if($(this).find('.alert-danger').length > 0 )
					$(this).find('.alert-danger').remove();
				$.ajax({
					url:'ajax.php?action=login',
					method:'POST',
					data:$(this).serialize(),
					error:err=>{
						console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

					},
					success:function(resp){
						if(resp == 1){
							location.reload('homepage.php?page=home');
						}else{
							$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
							$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
						}
					}
				})
			}
		)
	</script>
</html>