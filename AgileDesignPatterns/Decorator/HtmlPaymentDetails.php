<?php
require_once 'PaymentDecorator.php';

class HtmlPaymentDetails extends PaymentDecorator {

	function getHtmlDescription() {
		return '<html>'.$this->itsPaymentMethod->getDescription() . '</html>';
	}

}

?>
