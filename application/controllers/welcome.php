<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user');
		header("Content-type:text/html;charset=utf-8");
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->login();
		
	}
	public function login(){
		//echo 'front login page...';
		//$this->load->view('login');
		//	echo $base_url();
		$this->userList();
		
	}
	public function userList(){
		
		$data['title']="首页";
		
		
		$data['users']=$this->user->getAllUsers();
		$this->load->view('userlist',$data);
	}
	public function userDetails(){
 
		// $this->load->model('user');
		// $this->user->getUserByUserId();
		// $this->load->view('userDetails');
		$result=$this->user->getUserByUserId($this->uri->segment(3));
		//var_dump($result);
		//echo $result['username'];
		foreach($result as $row){
			echo $row->username;
			echo '<br />';
			echo '<br />';
			echo $row->realname;
		}
		
		echo base_url().'js/js.js';
		
	}
	public function doLogin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		echo $username.$password;
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */