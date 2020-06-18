<?php 

namespace App;
require_once "app/controller.php";


class Post extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT post.*, category.cat_name as CAT
		FROM post, category
		WHERE post.post_cat_id=category.cat_id ORDER BY post.post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}


	public function input() {

		$post_date = $_POST['post_date'];
		$post_slug = $_POST['post_slug'];
		$post_tittle = $_POST['post_tittle'];
		$post_text = $_POST['post_text'];
		$post_cat_id = $_POST['post_cat_id'];

		$sql = "INSERT INTO post (post_date, post_slug, post_tittle, post_text, post_cat_id) VALUES (:post_date, :post_slug, :post_tittle, :post_text, :post_cat_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $post_date);
		$stmt->bindParam(":post_slug", $post_slug);
		$stmt->bindParam(":post_tittle", $post_tittle);
		$stmt->bindParam(":post_text", $post_text);
		$stmt->bindParam(":post_cat_id", $post_cat_id);
		$stmt->execute();

		return false;
	}

	public function listCategory()
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

	
	public function edit($id)
	{
		$sql = "SELECT * FROM post WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$post_date = $_POST['post_date'];
		$post_slug = $_POST['post_slug'];
		$post_tittle = $_POST['post_tittle'];
		$post_text = $_POST['post_text'];
		$post_cat_id = $_POST['post_cat_id'];
		$id = $_POST['post_id'];

		$sql = "UPDATE post SET post_date=:post_date, post_slug=:post_slug, post_tittle=:post_tittle, post_text=:post_text, post_cat_id=:post_cat_id WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $post_date);
		$stmt->bindParam(":post_slug", $post_slug);
		$stmt->bindParam(":post_tittle", $post_tittle);
		$stmt->bindParam(":post_text", $post_text);
		$stmt->bindParam(":post_cat_id", $post_cat_id);
		$stmt->bindParam(":post_id", $id);

		$stmt->execute();

		return false;
	}

}