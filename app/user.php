<?php 

namespace App;
require_once "app/controller.php";

class User extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_user";
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
		$username = $_POST['username'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$user_nama_lengkap = $_POST['user_nama_lengkap'];
		$user_role = $_POST['user_role'];

		if (!empty($username) AND !empty($password)) {

			$sql = "INSERT INTO tb_user (username, password, user_nama_lengkap, user_role) 
			VALUES (:username, :password, :user_nama_lengkap, :user_role)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":password", $password);
			$stmt->bindParam(":user_nama_lengkap", $user_nama_lengkap);
			$stmt->bindParam(":user_role", $user_role);
			$stmt->execute();
		} 

		return false;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_user WHERE user_id=:user_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$username = $_POST['username'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$user_nama_lengkap = $_POST['user_nama_lengkap'];
		$user_role = $_POST['user_role'];
		$id = $_POST['user_id'];

		if(!empty($_POST['password'])) {
			$sql = "UPDATE tb_user SET 
			username=:username, 
			password=:password, 
			user_nama_lengkap=:user_nama_lengkap, 
			user_role=:user_role
			WHERE user_id=:user_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":password", $password);
			$stmt->bindParam(":user_nama_lengkap", $user_nama_lengkap);
			$stmt->bindParam(":user_role", $user_role);
			$stmt->bindParam(":user_id", $id);
			$stmt->execute();
		} else {
			$sql = "UPDATE tb_user SET 
			username=:username,
			user_nama_lengkap=:user_nama_lengkap, 
			user_role=:user_role
			WHERE user_id=:user_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":user_nama_lengkap", $user_nama_lengkap);
			$stmt->bindParam(":user_role", $user_role);
			$stmt->bindParam(":user_id", $id);
			$stmt->execute();
		}

		return false;
	}


}