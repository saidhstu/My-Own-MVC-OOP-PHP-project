<?php
/**
 * 
 */
class Catagory extends MController{
	
	public function __construct(){
		parent::__construct();
	}



	public function catagoryList(){
		$data = array();
		$table = 'catagory';
		$catModel = $this->load->model("CatModel");
		$data['cat'] = $catModel->catList($table);
		$this->load->view("catagory", $data);
	}

	public function catById(){
		$data = array();
		$table = "catagory";
		$id = 1;
		$CatModel = $this->load->model('Catmodel');
		$data['catById'] = $CatModel->catById($table, $id);
		$this->load->view("catById", $data);
	}

	public function addCatagory(){
		$this->load->view("addcatagory");
	}



	public function insertCatagory(){
		$table = "catagory";
		$name = $_POST['name'];
		$title = $_POST['title'];
		$data = array(
			'name' => $name,
			'title' => $title
			);
		$CatModel = $this->load->model('Catmodel');
		$result = $CatModel->insertCat($table, $data);
		$mdata = array();
		if ($result == 1) {
			$mdata['msg'] = "Catagory added successfully...";
		} else {
			$mdata['msg'] = "Catagory not added !";
		}
		$this->load->view("addcatagory", $mdata);
	}



	public function updateCatagory(){
		$data = array();
		$table = "catagory";
		$id = 8;
		$CatModel = $this->load->model('Catmodel');
		$data['catById'] = $CatModel->catById($table, $id);
		$this->load->view("catupdate", $data);
	}
	public function updateCat(){
		$table = "catagory";
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$title = $_POST['title'];

		$cond = "id=$id";
		$data = array(
			'name' => $name,
			'title' => $title
			);
		$CatModel = $this->load->model('CatModel');
		$result = $CatModel->catUpdate($table, $data, $cond);
		$mdata = array();
		if ($result == 1) {
			$mdata['msg'] = "Catagory Updated successfully...";
		} else {
			$mdata['msg'] = "Catagory not Updated !";
		}
		$this->load->view("catupdate", $mdata);
	}




	public function deleteCatById(){
		$table = "catagory";
		$cond = 'id=11';
		$CatModel = $this->load->model('CatModel');
		$CatModel->deleteCatById($table, $cond);
	}







}
?>