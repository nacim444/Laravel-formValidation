<?php namespace Acme\Forms;

use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception {


protected $errors; 

function __construct ($errors, MessageBag $message) {


	$this->errors = $errors;
	parent::__construct($message);
}

public function getErrors() {


	return $this->errors;
}





}
?>