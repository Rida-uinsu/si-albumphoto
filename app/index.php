<?php

namespace App;
require_once "app/controller.php";


class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function photos()
	{
		$sql = "SELECT ph.*, ps.post_tittle as PST, al.album_name as ALB
		FROM photos ph
		INNER JOIN post ps ON ph.pho_post_id=ps.post_id
		LEFT JOIN album al ON al.album_pho_id=ph.pho_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function post()
	{
		$sql = "SELECT ph.*, ps.post_tittle as PST, al.album_name as ALB
		FROM photos ph
		INNER JOIN post ps ON ph.pho_post_id=ps.post_id
		LEFT JOIN album al ON al.album_pho_id=ph.pho_id ORDER BY PST";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function login()
	{

		$username = $_POST['username'];
		$password = $_POST['password'];

		$stmt = $this->db->prepare("SELECT * FROM tb_user WHERE username=:username");
		$stmt->bindParam(":username", $username);
		$stmt->execute();

		$row = $stmt->fetch();

		if (!empty($row) AND password_verify($password, $row['password'])) 
		{

			$_SESSION['login']  = true;
			$_SESSION['user_id']  = $row['user_id'];
			$_SESSION['username']  = $row['username'];
		} else {
			$_SESSION['login_error'] = "Login tidak ditemukan!";
		}

		return false;
	}
}