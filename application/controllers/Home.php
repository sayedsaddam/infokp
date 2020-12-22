<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();    
    }
    public function index(){
        $data['title'] = 'Home | InfoKP Solutions';
        $data['content'] = 'infokp';
        $this->load->view('components/template', $data);
    }
    // Profile page
    public function profile(){
        // $data['title'] = 'Profile | InfoKP Solutions';
        // $data['content'] = 'profile';
        $this->load->view('profile');
    }
    public function home_page(){
        $this->load->view('homepage');
    }
    public function landing_page(){
        $this->load->view('landing-page');
    }
    public function agency_page(){
        $this->load->view('agency-page');
    }
}
