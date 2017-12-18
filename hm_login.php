<?php


/*
define("HM_HOST", "")
define("HM_USER", "")
define("HM_PASS", "")
define("HM_DB", "")


*/
class hm_login {

	public $hm_host;
	public $hm_user;
	public $hm_pass;
	public $hm_db;
	public $db;

	public $hm_username;
	public $hm_userpass;
	public $hm_screenname;
	public $hm_level;

	public $ip;




	public function __construct($config){

$this->hm_host = $config["host"];
$this->hm_user = $config["user"];
$this->hm_pass = $config["pass"];
$this->hm_db = $config["db"];

		$this->ip = $_SERVER['REMOTE_ADDR'];



		$this->db = new mysqli($this->hm_host, $this->hm_user, $this->hm_pass, $this->hm_database);
	}

	public function tablecheck() {


$this->db->query("CREATE TABLE IF NOT EXISTS hm_login (user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL, user_pass VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL, user_screen VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL, user_level INT(11) NOT NULL, user_icon VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");


	}


	public function new_user() {




	}

	public function update_user() {




	}

	public function delete_user() {



	}








}




$hm_login = new $hm_login(HM_HOST, HM_USER, HM_PASS, HM_DB);


$hm_login->tablecheck();


