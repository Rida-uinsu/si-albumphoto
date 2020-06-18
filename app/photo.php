<?php 

namespace App;
require_once "app/controller.php";


class Photos extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT photos.*, post.post_id as PST
		FROM photos, post
		WHERE photos.pho_post_id=post.post_id ORDER BY photos.pho_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}


	public function input() 
	{

		$pho_date = $_POST['pho_date'];
		$pho_tittle = $_POST['pho_tittle'];
		$pho_text = $_POST['pho_text'];
		$pho_post_id = $_POST['pho_post_id'];
		$gambar = $_GET['gambar'];

	
		$sql = "INSERT INTO photos (pho_date, pho_tittle, pho_text, pho_post_id, gambar) VALUES (:pho_date, :pho_tittle, :pho_text, :pho_post_id, :gambar)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":pho_date", $pho_date);
		$stmt->bindParam(":pho_tittle", $pho_tittle);
		$stmt->bindParam(":pho_text", $pho_text);
		$stmt->bindParam(":pho_post_id", $pho_post_id);
		$stmt->bindParam(":gambar", $gambar);
		$stmt->execute();
		
		return false;
	}

	public function listPost()
	{
		$sql = "SELECT * FROM post";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	
	public function edit($id)
	{
		$sql = "SELECT * FROM photos WHERE pho_id=:pho_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":pho_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$pho_date = $_POST['pho_date'];
		$pho_tittle = $_POST['pho_tittle'];
		$pho_text = $_POST['pho_text'];
		$pho_post_id = $_POST['pho_post_id'];
		$id = $_POST['pho_id'];

		
		$sql = "UPDATE photos SET pho_date=:pho_date, pho_tittle=:pho_tittle, pho_text=:pho_text, pho_post_id=:pho_post_id WHERE pho_id=:pho_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":pho_date", $pho_date);
		$stmt->bindParam(":pho_tittle", $pho_tittle);
		$stmt->bindParam(":pho_text", $pho_text);
		$stmt->bindParam(":pho_post_id", $pho_post_id);
		$stmt->bindParam(":pho_id", $id);
		$stmt->execute();
	 

		return false;
	}

}