<?php
require 'map.php';
class mapTest extends PHPUnit_Framework_TestCase{
	public function testclass(){
		$fe_user = new fe_users();
		
		$fe_user->set_uid("uid");
		$this->assertEquals('uid',$fe_user->uid);
		
		$fe_user->set_pid("pid");
		$this->assertEquals('pid',$fe_user->pid);
		
		$fe_user->set_tstamp("tstamp");
		$this->assertEquals('tstamp',$fe_user->tstamp);
		
		$fe_user->set_username("username");
		$this->assertEquals('username',$fe_user->username);
		
		$fe_user->set_password("password");
		$this->assertEquals('password',$fe_user->password);
		
		$fe_user->set_usergroup("usergroup");
		$this->assertEquals('usergroup',$fe_user->usergroup);
		
		$fe_user->set_disable("disable");
		$this->assertEquals('disable',$fe_user->disable);
		
		$fe_user->set_starttime("starttime");
		$this->assertEquals('starttime',$fe_user->starttime);
		
		$fe_user->set_endtime("endtime");
		$this->assertEquals('endtime',$fe_user->endtime);
				
		$fe_user->set_name("name");
		$this->assertEquals('name',$fe_user->name);
		
		$fe_user->set_first_name("first_name");
		$this->assertEquals('first_name',$fe_user->first_name);
		
		$fe_user->set_middle_name("middle_name");
		$this->assertEquals('middle_name',$fe_user->middle_name);
		
		$fe_user->set_last_name("last_name");
		$this->assertEquals('last_name',$fe_user->last_name);
		
		$fe_user->set_address("address");
		$this->assertEquals('address',$fe_user->address);
		
		$fe_user->set_telephone("telephone");
		$this->assertEquals('telephone',$fe_user->telephone);
		
		$fe_user->set_fax("fax");
		$this->assertEquals('fax',$fe_user->fax);
		
		$fe_user->set_email("email");
		$this->assertEquals('email',$fe_user->email);
		
		$fe_user->set_crdate("crdate");
		$this->assertEquals('crdate',$fe_user->crdate);
		
		$fe_user->set_cruser_id("cruser_id");
		$this->assertEquals('cruser_id',$fe_user->cruser_id);
		
		$fe_user->set_lockToDomain("lockToDomain");
		$this->assertEquals('lockToDomain',$fe_user->lockToDomain);
		
		$fe_user->set_deleted("deleted");
		$this->assertEquals('deleted',$fe_user->deleted);
		
		$fe_user->set_uc("uc");
		$this->assertEquals('uc',$fe_user->uc);
		
		$fe_user->set_title("title");
		$this->assertEquals('title',$fe_user->title);
		
		$fe_user->set_zip("zip");
		$this->assertEquals('zip',$fe_user->zip);
		
		$fe_user->set_city("city");
		$this->assertEquals('city',$fe_user->city);
		
		$fe_user->set_country("country");
		$this->assertEquals('country',$fe_user->country);
		
		$fe_user->set_www("www");
		$this->assertEquals('www',$fe_user->www);
		
		$fe_user->set_company("company");
		$this->assertEquals('company',$fe_user->company);
		
		$fe_user->set_image("image");
		$this->assertEquals('image',$fe_user->image);
		
		$fe_user->set_TSconfig("TSconfig");
		$this->assertEquals('TSconfig',$fe_user->TSconfig);
		
		$fe_user->set_cruser_id("cruser_id");
		$this->assertEquals('cruser_id',$fe_user->cruser_id);
		
		$fe_user->set_lastlogin("lastlogin");
		$this->assertEquals('lastlogin',$fe_user->lastlogin);
		
		$fe_user->set_is_online("is_online");
		$this->assertEquals('is_online',$fe_user->is_online);
		
		$fe_user->set_tx_extbase_type("tx_extbase_type");
		$this->assertEquals('tx_extbase_type',$fe_user->tx_extbase_type);
	
	}
}