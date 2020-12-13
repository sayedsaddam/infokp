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
        // $data['title'] = 'Home';
        $this->load->view('homepage');
    }
    public function mdb_template(){
        $data['title'] = 'MDB Home';
        $data['content'] = 'infokp';
        $this->load->view('components/template', $data);
    }
}
