<?php defined("BASEPATH") or exit("No direct script access allowed!");
/**
 * filename: Login.php
 */
class Login extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    // Load the login page.
    public function index(){
		$this->load->view('admin_login');
    }
    // Validate user.
    public function admin_login(){
    	$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$user_signin = $this->Login_model->validate_user($username, $password);
		if($user_signin == TRUE ){
			$this->session->set_userdata(array('username' => $username));
			redirect('home');
		}else{
			$this->session->set_flashdata('login_error', '<strong>Aww snap! </strong>Username / Password maybe incorrect, try again with correct one.');
			$this->index();
		}
    }
    // Logout.
    public function logout(){
        $this->session->sess_destroy('username');
        $this->session->set_flashdata('logged_out', '<strong>Hooray !</strong> You have been logged out successfully, Login again .');
        $this->index();
    }
}

?>