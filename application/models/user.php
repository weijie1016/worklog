<?php
class User extends CI_Model{
	var $username;
	var $password;
	var $realname;
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function getAllUsers(){
		$query=$this->db->get('users');
		return $query->result();
	}
	function getUserByUserId($userId){
		$query=$this->db->get('users',$userId);
		return $query->result();
	}
}