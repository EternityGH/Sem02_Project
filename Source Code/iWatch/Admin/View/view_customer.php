<?php 

include('header.php');

?>

<div class="container">
	<img src="../<?=$customer[0]['Avatar']?>" width="250px" height="250px">
	<p class="mt-4"><b>Name:</b> <?=$customer[0]['FirstName']?> <?=$customer[0]['LastName']?></p>
	<p class="mt-4"><b>Email:</b> <?=$customer[0]['Email']?></p>
	<p class="mt-4"><b>Phone:</b> <?=$customer[0]['Phone']?></p>
	<p class="mt-4"><b>Address:</b> <?=$customer[0]['Address']?></p>
	<p class="mt-4"><b>Gender:</b> <?=$customer[0]['Gender']?></p>
	<p class="mt-4"><b>Create At:</b> <?=$customer[0]['CreateAt']?></p>
	<a href="customer.php">Back to Customer</a>
</div>

<?php 

include('footer.php');

?>