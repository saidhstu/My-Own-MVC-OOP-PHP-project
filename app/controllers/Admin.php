<?php

/**
 * 
 */
class Admin extends MController{
	
	public function __construct(){
		parent::__construct();
		 Session::checkSession();
		 $data = array();
	}

	public function Index(){
		$this->home();
	}

	public function home(){
		$this->load->view("admin/header");		
		$this->load->view("admin/sidebar");
		$this->load->view("admin/home");
		$this->load->view("admin/footer");
	}

	public function addCatagory(){
		$this->load->view("admin/header");		
		$this->load->view("admin/sidebar");
		$this->load->view("admin/addcatagory");
		$this->load->view("admin/footer");
	}

	public function catagoryList(){
	
		$table = 'catagory';
		$catModel = $this->load->model("CatModel");
		$data['cat'] = $catModel->catList($table);

		$this->load->view("admin/header");		
		$this->load->view("admin/sidebar");
		$this->load->view("admin/catagorylist", $data);
		$this->load->view("admin/footer");
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
		$url = BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
		header("location:$url");
	}


	public function editCatagory($id = NULL){
		$this->load->view("admin/header");		
		$this->load->view("admin/sidebar");

		
		$table = "catagory";	
		$CatModel = $this->load->model('Catmodel');

		$data['catById'] = $CatModel->catById($table, $id);
		$this->load->view("admin/editcat", $data);
		$this->load->view("admin/footer");
	}
	public function updateCat($id = NULL){
		$table = "catagory";
		
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
		$url = BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
		header("location:$url");
	}

	public function deleteCatagory($id = NULL){
		$table = "catagory";
		$cond = "id=$id";
		$CatModel = $this->load->model('CatModel');
		$result = $CatModel->deleteCatById($table, $cond);

		$mdata = array();
		if ($result == 1) {
			$mdata['msg'] = "Catagory Deleted successfully...";
		} else {
			$mdata['msg'] = "Catagory not Deleted !";
		}
		$url = BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
		header("location:$url");
	}

	public function addArtical(){
		$tableCat  = "catagory";
		$this->load->view("admin/header");		
		$this->load->view("admin/sidebar");

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);

		$this->load->view("admin/addpost", $data);
		$this->load->view("admin/footer");
	}

	public function addNewPost(){
		
	}

	public function articleList(){
		$tableCat  = "catagory";
		$tablePost = "post";
		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');

		$Postmodel = $this->load->model('Postmodel');
		$data['listPost'] = $Postmodel->getPostList($tablePost);

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);

		$this->load->view('admin/postlist',$data);
		$this->load->view('admin/footer');
	}

}

?>