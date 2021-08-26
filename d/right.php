<?php 

class Store {

	public $paymentProcess;

	function __construct($paymentProcess) {
		$this->paymentProcess = $paymentProcess;
	}

	function purchaseItem($qty) {
		$this->paymentProcess->makePayment(10 * $qty);
	}
}

class StripePaymentProcess {

	public $user;

	function __construct($user) {
		$this->user = $user;
	}

	public function makePayment($amount) {

		$stripe = new Stripe($this->user);
		$stripe->makePayment($amount* 100);
	}
}

class PaypalPaymentProcess {

	public $user;

	function __construct($user) {
		$this->user = $user;
	}

	public function makePayment($amount) {
		$stripe = new Paypal($this->user);
		$stripe->makePayment($amount);
	}
}

class Stripe {
	
	public $user;

	function __construct($user) {
		$this->user = $user;
	}

	function makePayment($amountInCents) {

		$amount = $amountInCents/100;
		
		print("<pre>");
		print_r($this->user . ' made Stripe payment of ' . $amount);
		print("</pre>");
		die;
	}
}

class Paypal {
	
	public $user;

	function __construct($user) {
		$this->user = $user;
	}

	function makePayment($amount) {
		
		print("<pre>");
		print_r($this->user . ' made Paypal payment of ' . $amount);
		print("</pre>");
		die;
	}
}

$store = new Store(new PaypalPaymentProcess('Dulitha'));
$store->purchaseItem(2);