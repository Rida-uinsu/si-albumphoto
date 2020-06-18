<?php 

namespace App;
require_once "app/controller.php";


class Album extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT album.*, photos.pho_tittle as PHO
		FROM album, photos
		WHERE album.album_pho_id=photos.pho_id ORDER BY album.album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}


	public function input() {

		$album_name = $_POST['album_name'];
		$album_text = $_POST['album_text'];
		$album_pho_id = $_POST['album_pho_id'];

		$sql = "INSERT INTO album (album_name, album_text, album_pho_id) VALUES (:album_name, :album_text, :album_pho_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $album_name);
		$stmt->bindParam(":album_text", $album_text);
		$stmt->bindParam(":album_pho_id", $album_pho_id);
		$stmt->execute();

		return false;
	}

	public function listPhotos()
	{
		$sql = "SELECT * FROM photos";
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
		$sql = "SELECT * FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$album_name = $_POST['album_name'];
		$album_text = $_POST['album_text'];
		$album_pho_id = $_POST['album_pho_id'];
		
		$id = $_POST['album_id'];

		$sql = "UPDATE album SET album_name=:album_name, album_text=:album_text, album_pho_id=:album_pho_id WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $album_name);
		$stmt->bindParam(":album_text", $album_text);
		$stmt->bindParam(":album_pho_id", $album_pho_id);

		$stmt->bindParam(":album_id", $id);

		$stmt->execute();

		return false;
	}

}