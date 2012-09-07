<?php
require 'map.xml';
class fe_user_call{
	function __construct($xmlstr){
		$xml = new SimpleXMLElement($xmlstr);
		$fe_user = new fe_users();
		foreach ($xml->children() as $element){
			$temp = $element->getName();
			$func = 'get_'+ $temp;
			$fe_user->$func($xml->fe_users->$temp);
		}
	}
}
?>