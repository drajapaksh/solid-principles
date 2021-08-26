<?php 

class Store {

	public $stripe;

	function __construct($user) {
		$this->stripe = new Paypal($user);
	}

	function purchaseItem($qty) {
		$cents = 1;
		$this->stripe->makePayment(10 * $qty * $cents);
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

$store = new Store('Dulitha');
$store->purchaseItem(2);