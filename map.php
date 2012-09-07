<?php
class fe_users{
	protected $uid,$pid,$tstamp,$username,$password,$usergroup,$disable,$starttime,$endtime,$name,$first_name,$middle_name,$last_name,$address,$telephone,$fax,$email,$crdate,$cruser_id,$lockToDomain,$deleted,$uc,$title,$zip,$city,$country,$www,$company,$image,$TSconfig,$fe_cruser_id,$lastlogin,$is_online,$tx_exbase_type;
	function set_uid($uid){
		$this->uid = $uid;
	}
	function set_pid($pid){
		$this->pid = $pid;
	}
	function set_tstamp ($tstamp){
		$this->tstamp = $tstamp;
	}
	function set_username ($username){
		$this->username = $username;
	}
	function set_password ($password){
		$this->password = $password;
	}
	function set_usergroup ($usergroup){
		$this->usergroup = $usergroup;
	}
	function set_disable ($disable){
		$this->disable = $disable;
	}
	function set_starttime($starttime){
		$this->starttime = $starttime;
	}
	function set_endtime ($endtime){
		$this->endtime = $endtime;
	}
	function set_name ($name){
		$this->name = $name;
	}
	function set_first_name ($first_name){
		$this->first_name = $first_name;
	}
	function set_middle_name ($middle_name){
		$this->middle_name = $middle_name;
	}
	function set_last_name ($last_name){
		$this->last_name = $last_name;
	}
	function set_address($address){
		$this->address = $address;
	}
	function set_telephone($telephone){
		$this->telephone = $telephone;
	}
	function set_fax ($fax){
		$this->fax = $fax;
	}
	function set_email($email){
		$this->email = $email;
	}
	function set_crdate($crdate){
		$this->crdate = $crdate;
	}
	function set_cruser_id($cruser_id){
		$this->cruser_id = $cruser_id;
	}
	function set_lockToDomain($lockToDomain){
		$this->lockToDomain = $lockToDomain;
	}
	function set_deleted ($deleted){
		$this->deleted = $deleted;
	}
	function set_uc($uc){
		$this->uc = $uc;
	}
	function set_title($title){
		$this->title = $title;
	}
	function set_zip ($zip){
		$this->zip = $zip;
	}
	function set_city($city){
		$this->city = $city;
	}
	function set_country($country){
		$this->country = $country;
	}
	function set_www ($www){
		$this->www = $www;
	}
	function set_company ($company){
		$this->company = $company;
	}
	function set_image ($image){
		$this->image = $image;
	}
	function set_TSconfig ($TSconfig){
		$this->TSconfig = $TSconfig;
	}
	function set_fe_cruser_id ($fe_cruser_id){
		$this->fe_cruser_id = $fe_cruser_id;
	}
	function set_lastlogin ($lastlogin){
		$this->lastlogin = $lastlogin;
	}
	function set_is_online ($is_online){
		$this->is_online = $is_online;
	}
	function set_tx_extbase_type ($tx_extbase_type){
		$this->tx_extbase_type = $tx_extbase_type;
	}
}
?>