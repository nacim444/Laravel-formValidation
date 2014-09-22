<?php namespace Acme\Forms;


class Login extends FormValidator {

	protected $rules = [

	"username" => "required",
	"password" => "required"
	];


}
?>