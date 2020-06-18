<?php 
namespace App;
require_once "app/controller.php";

class Category extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT * FROM category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}


	public function input() {

		$cat_name = $_POST['cat_name'];
		$cat_text = $_POST['cat_text'];

		$sql = "INSERT INTO category (cat_name, cat_text) VALUES (:cat_name, :cat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $cat_name);
		$stmt->bindParam(":cat_text", $cat_text);
		$stmt->execute();

		return false;
	}

	
	public function edit($id)
	{
		$sql = "SELECT * FROM category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$cat_name = $_POST['cat_name'];
		$cat_text = $_POST['cat_text'];
		$id = $_POST['cat_id'];

		$sql = "UPDATE category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $cat_name);
		$stmt->bindParam(":cat_text", $cat_text);
		$stmt->bindParam(":cat_id", $id);

		$stmt->execute();

		return false;
	}

}