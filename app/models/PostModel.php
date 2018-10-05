<?php
/**
 * 
 */
class PostModel extends MModel{
	
	function __construct(){
		parent::__construct();
	}

	public function getAllPost($table){
		$sql = "select * from $table order by id desc limit 3";
		return $this->db->select($sql);
	}

	public function getPostList($table){
		$sql = "select * from $table order by id desc";
		return $this->db->select($sql);
	}

	public function getPostById($tablePost, $tableCat, $id){
		$sql = "select $tablePost.*, $tableCat.name from $tablePost
		inner join $tableCat
		on $tablePost.cat = $tableCat.id
		where $tablePost.id = $id";
		return $this->db->select($sql);
	}

	public function getPostByCat($tablePost, $tableCat, $id){
		$sql = "select $tablePost.*, $tableCat.name from $tablePost
		inner join $tableCat
		on $tablePost.cat = $tableCat.id
		where $tableCat.id = $id";
		return $this->db->select($sql);
	}

	public function getLatestPost($table){
		$sql = "select * from $table order by id desc limit 5";
		return $this->db->select($sql);
	}

	public function getPostBySearch($tablePost, $keyword, $cat){
		if (empty($keyword) && $cat == 0 ) {
			header("location: ".BASE_URL."/Index/home");
		}



		if (isset($keyword) && !empty($keyword)) {
			$sql = "select * from $tablePost where title like '%$keyword%' or content like '%$cat%'";
		}elseif (isset($cat)) {
			$sql = "select * from $tablePost where cat='$cat'";
		}
		return $this->db->select($sql);
	}


	
}
?>