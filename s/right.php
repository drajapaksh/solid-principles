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
		$receipt = new Receipt($this->deposit);
		$receipt->printReceipt();
	}
}

class Receipt {

	public $moneyAvailble = 0.0;

	function __construct($money) {
		$this->moneyAvailble = $money;
	}

	public function printReceipt() {
		if ($this->moneyAvailble < 0) {
			echo "You are broke";
		} else {
			echo $this->moneyAvailble . " Remaining. Oo rich guy <br>";
		}
	}
}

$atm = new Atm(1000);
$atm->withdrawMoney(500);
$atm->withdrawMoney(400);