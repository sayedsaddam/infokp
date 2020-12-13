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
    public function home_page(){
        $this->load->view('homepage');
    }
}
