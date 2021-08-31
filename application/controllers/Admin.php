<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Admin Dashboard';
        $this->load->view('admin/dashboard', $data);
    }
    // Todo list
    public function todo_list(){
        $data['title'] = 'Todo List';
        $this->load->view('admin/todo_list', $data);
    }
    // Admin dashboard.
    public function admin_db(){
        $data['title'] = 'Admin Dashboard';
        $this->load->view('admin/admin_db', $data);
    }    
}
