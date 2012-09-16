<?php
require 'map.php';
class fe_user_call{
	public $fe_user;
	function __construct($xmlstr){
		$xml = new SimpleXMLElement($xmlstr);
		$fe_user = new fe_users();
		foreach ($xml->children() as $value){
			$name =  $element->getName();
			$fe_user->$name = $value;
			//$func = 'set_'. $temp;
			//$fe_user->{$func}($element);
		}
	}
}
?>