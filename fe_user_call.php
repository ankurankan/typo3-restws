<?php
require 'map.php';
class fe_user_call{
	function __construct($xmlstr){
		$xml = new SimpleXMLElement($xmlstr);
		$fe_user = new fe_users();
		foreach ($xml->children() as $element){
			$temp =  $element->getName();
			$func = 'set_'. $temp;
			$fe_user->{$func}($element);
		}
	}
}
?>