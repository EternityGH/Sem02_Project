<?php 

class PolicyController {
	public function getViewDeliveryPolicy(){
		require_once('View/delivery_policy.php');
	}

	public function getViewPaymentMethod(){
		require_once('View/payment_method.php');
	}

	public function getViewReturnPolicy(){
		require_once('View/return_policy.php');
	}

	public function getViewFAQs(){
		require_once('View/faqs.php');
	}

	public function getViewGuaranteePolicy(){
		require_once('View/guarantee_policy.php');
	}
}

?>