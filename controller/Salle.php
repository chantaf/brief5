<?php

require_once "./model/SalleModel.php";
class Salle
{
	
	
	function index()
	{
		$objet= new SalleModel();
		$result=$objet-> getAll();
		require_once __DIR__.'/../view/salle/index.php';
	}

	function create()
	{
		if(isset($_POST['ajouter'])){
			$salle=new SalleModel();

			$salle->insert($_POST['capacite'],$_POST['libelle']);
		
			header("location:http://localhost/mvc/salle/");

		}
	}

	function edit()
	{
		if(isset($_POST['modifier'])){

			$salle=new SalleModel();
			$sl=$salle->getone($_POST['id']);
		
			require_once __DIR__.'/../view/salle/update.php';


		}
	}

	function update()
	{
		
		if(isset($_POST['submit'])){

			$salle=new SalleModel();
			$sl=$salle->update($_POST['id'] ,$_POST['scapacite'],$_POST['sLibelle']);
			header("location:http://localhost/mvc/salle/");
			


		}
	}

	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new SalleModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/mvc/salle/");


		}
	}
}
