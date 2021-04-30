<?php

require_once "./model/LoginModel.php";
class Login{

	function index()
	{
		$objet= new LoginModel();
		$result=$objet-> getAll();
        
        
		require_once __DIR__.'/../view/login.php';
	}

	function create(){
		if(isset($_POST['ajouter'])){

			$sign=new LoginModel();
			$sign->insert($_POST['name'],$_POST['email'],$_POST['password'],$_POST['role']);
			header("location: http://localhost/mvc/login");
		}
	}
}
