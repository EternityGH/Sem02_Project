<?php 

include_once('header.php');

?>

<script type="text/javascript">
	var count = 10;
	var redirect = "<?=$url?>";
	function countDown(){
		var timer = document.getElementById("timer");
		if(count > 0){
			count--;
			timer.innerHTML = "The website you want to go will automatically move in <b>"+count+"</b> seconds.";
			setTimeout("countDown()", 1000);
		}else{
			window.location.href = redirect;
		}
	}
</script>


<div class="success m-5">	
	<div class="container">
		<h1 class="text-center m-5"><?=$action?> Success</h1>
		<div class="alert alert-success text-center" role="alert">
		  	<p id="timer" class="text-center"><script type="text/javascript">countDown()</script></p>
		  	<a href="<?=$url?>" class="alert-link">Click here to continue</a>
		</div>
	</div>
</div>

<style type="text/css">
	div.success h1 {
		text-transform: uppercase;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		color: #155724;
	}

	div.success a {
		display: block;
		margin: 20px 0;
	}

	div.success p {
		margin: 20px 0;
	}
</style>


<?php 

if (isset($_SESSION['email'])) {
	# code...
	unset($_SESSION['email']);
}

include_once('footer.php');

?>