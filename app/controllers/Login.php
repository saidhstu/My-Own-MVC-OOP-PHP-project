<?php

/**
 * 
 */
class Login extends MController{
	
	public function __construct(){
		parent::__construct();
	}

	public function Index(){
		$this->Login();
	}

	public function Login(){
		$this->load->view("login/login");
		Session::init();
		if (Session::get("login") == true) {
			header("location:".BASE_URL."/Admin");
		}
	}

	public function loginAuth(){
		$table = "tbl_user";
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$loginModel = $this->load->model("LoginModel");
		$count = $loginModel->userControl($table, $username, $password);
		if ($count>0) {
			$result = $loginModel->getUserData($table, $username, $password);
			Session::init();
			Session::set("login", true);
			Session::set("username", $result[0]['username']);
			Session::set("userId", $result[0]['id']);
			header("location:".BASE_URL."/Admin");

		}else{
			header("location:".BASE_URL."/Login");
		}
	}


	public function logout(){
		Session::init();
		Session::destroy();
		header("location:".BASE_URL."/Login");
	}

}

?>