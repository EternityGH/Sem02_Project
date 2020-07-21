<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
</head>
<body>
	<script type="text/javascript">
		var count = 4;
		var redirect = "index.php";
		function countDown(){
			var timer = document.getElementById("timer");
			if(count > 0){
				count--;
				setTimeout("countDown()", 400);
			}else{
				window.location.href = redirect;
			}
		}
	</script>

	<div class="logout">	
		<div class="text">
			<p>Please Wait</p>
			<p>Loging You Out ...</p>
			<script type="text/javascript">countDown()</script>
			<img src="lib/images/background/ajax-loader.gif" />
		</div>
	</div>

	<style type="text/css">
		div.logout {
			background: #1c1c1c;
			top: 0;
			left: 0;
			position: absolute;
			width: 100%;
			height: 100%;
			text-align: center;
			color: #fff;
			font-size: 26px;
		}

		div.logout div.text {
			margin-top: 200px;
		}

		div.logout div.text p:first-child {
			font-size: 24px;
		}

		div.logout img {
			width: 20px;
		}
	</style>



</body>
</html>




