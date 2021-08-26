<?php 

class Atm {

	public $deposit = 0.00;

	function __construct($deposit) {
		$this->deposit = $deposit;
	}

	public function withdrawMoney($money) {
		$this->deposit = $this->deposit - $money;
		$this->printReceipt();
	}

	public function printReceipt() {
		if ($this->deposit < 0) {
			echo "You are broke";
		} else {
			echo $this->deposit . " Remaining. Oo rich guy <br>";
		}
	}
}

$atm = new Atm(1000);
$atm->withdrawMoney(500);
$atm->withdrawMoney(400);
// $atm->withdrawMoney(200);