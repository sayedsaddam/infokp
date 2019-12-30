<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Home.php
 */
class Home extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    // Index method will load the page.
    public function index($offset = NULL)
    {
    	$limit = 20;
    	if(!empty($offset)){
    		$this->uri->segment(3);
    	}
    	$this->load->library('pagination');
		$config['uri_segment'] = 3;
		$config['base_url'] = base_url('home/index');
		$config['total_rows'] = $this->Home_model->count_items();
		$config['per_page'] = $limit;
		$config['num_links'] = 3;
		$config["full_tag_open"] = '<ul class="pagination">';
	    $config["full_tag_close"] = '</ul>';
	    $config["first_tag_open"] = '<li>';
	    $config["first_tag_close"] = '</li>';
	    $config["last_tag_open"] = '<li>';
	    $config["last_tag_close"] = '</li>';
	    $config['next_link'] = 'next &raquo;';
	    $config["next_tag_open"] = '<li>';
	    $config["next_tag_close"] = '</li>';
	    $config["prev_link"] = "prev &laquo;";
	    $config["prev_tag_open"] = "<li>";
	    $config["prev_tag_close"] = "</li>";
	    $config["cur_tag_open"] = "<li class='active'><a href='javascript:void(0);'>";
	    $config["cur_tag_close"] = "</a></li>";
	    $config["num_tag_open"] = "<li>";
	    $config["num_tag_close"] = "</li>";
		$this->pagination->initialize($config);
    	$data['title'] = 'Items List | Inventory Management';
    	$data['content'] = 'list_items';
    	$data['items'] = $this->Home_model->get_items($limit, $offset);
    	$this->load->view('components/template', $data);
    }
    // Add new items - load the form page.
    public function add_items()
    {
    	$data['title'] = 'Add Items | Inventory Management';
    	$data['content'] = 'add_items';
    	$this->load->view('components/template', $data);
    }
    // Save items.
    public function save_items()
    {
    	$data = array(
    				'year' => $this->input->post('year'),
    				'project' => $this->input->post('project'),
    				'category' => $this->input->post('category'),
    				'item' => $this->input->post('item'),
    				'description' => $this->input->post('description'),
    				'model' => $this->input->post('model'),
    				'asset_code' => $this->input->post('asset_code'),
    				'serial_number' => $this->input->post('serial_no'),
    				'custodian_location' => $this->input->post('custodian'),
                    'designation' => $this->input->post('designation'),
    				'department' => $this->input->post('department'),
    				'quantity' => $this->input->post('quantity'),
    				'district_region' => $this->input->post('district'),
    				'status' => $this->input->post('status'),
                    'po_no' => $this->input->post('po_no'),
                    'contact' => $this->input->post('contact'),
                    'purchase_date' => $this->input->post('purchase_date'),
                    'receive_date' => $this->input->post('receive_date'),
    				'created_at' => date('Y-m-d')
    			);
    	if($this->Home_model->add_items($data)){
    		$this->session->set_flashdata('success', '<strong>Success !</strong> The data has been saved successfully.');
    		redirect('Home');
    	}else{
    		echo "The operation wasn't successful! Try again.";
    	}
    }
    // Edit item.
    public function edit_item($id){
    	$data['title'] = 'Edit Item | Inventory Management';
    	$data['content'] = 'add_items';
    	$data['edit'] = $this->Home_model->edit_item($id);
    	$this->load->view('components/template', $data);
    }
    // Update an item.
    public function update_items(){
    	$id = $this->input->post('id');
    	$data = array(
    				'year' => $this->input->post('year'),
    				'project' => $this->input->post('project'),
    				'category' => $this->input->post('category'),
    				'item' => $this->input->post('item'),
    				'description' => $this->input->post('description'),
    				'model' => $this->input->post('model'),
    				'asset_code' => $this->input->post('asset_code'),
    				'serial_number' => $this->input->post('serial_no'),
    				'custodian_location' => $this->input->post('custodian'),
                    'designation' => $this->input->post('designation'),
    				'department' => $this->input->post('department'),
    				'quantity' => $this->input->post('quantity'),
    				'district_region' => $this->input->post('district'),
    				'status' => $this->input->post('status'),
                    'po_no' => $this->input->post('po_no'),
                    'contact' => $this->input->post('contact'),
                    'purchase_date' => $this->input->post('purchase_date'),
                    'receive_date' => $this->input->post('receive_date'),
    				'created_at' => date('Y-m-d')
    			);
    	if($this->Home_model->update_item($id, $data)){
    		$this->session->set_flashdata('success', '<strong>Success! </strong>The data has been updated successfully.');
    		redirect('home');
    	}else{
    		echo "The operation wasn't successful! Try again.";
    	}
    }
    // Delete an item.
    public function delete_item($id){
    	if($this->Home_model->delete_item($id)){
    		$this->session->set_flashdata('success', '<strong>Success! </strong>Item has been deleted successfully.');
    		redirect('home');
    	}else{
    		echo "The operation wasn't successful! Try again.";
    	}
    }
    // Search items.
    public function search_items(){
    	$keyword = $this->input->get('search_record');
    	$data['search_results'] = $this->Home_model->search_items($keyword);
    	$data['title'] = 'Search Results | Inventory Management';
    	$data['content'] = 'list_items';
    	$this->load->view('components/template', $data);
    }
    // Admin dashboard.
    public function dashboard(){
    	$data['title'] = 'Dashboard | Inventory Management';
    	$data['content'] = 'dashboard';
    	$this->load->view('components/template', $data);
    }
    // All laptops list.
    public function laptops($offset = NULL){
        $limit = 20;
        if(!empty($offset)){
            $this->uri->segment(3);
        }
        $this->load->library('pagination');
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url('home/laptops');
        $config['total_rows'] = $this->Home_model->count_laptops();
        $config['per_page'] = $limit;
        $config['num_links'] = 3;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = 'next &raquo;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "prev &laquo;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='javascript:void(0);'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $this->pagination->initialize($config);
        $data['laptops'] = $this->Home_model->get_laptops($limit, $offset);
        $data['title'] = 'Laptops List | Inventory Management';
        $data['content'] = 'laptops_list';
        $this->load->view('components/template', $data);
    }
    // Export CSV (Computers).
    public function export_items(){
        $filename = 'Items_'.date('M Y').'.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        $items = $this->Home_model->items_report();
        $file = fopen('php://output', 'w');
        $header = array("Project","Category","Item","Description","Model","Asset Code","Serial No.","Custodianship","Contact","Designation","Department","Quantity","District","Status","PO No.","Purchasing Date","Receiving Date");
        fputcsv($file, $header);
        foreach ($items as $key=>$item){
            fputcsv($file, array($item['project'], $item['category'], $item['item'], $item['description'], $item['model'], $item['asset_code'], $item['serial_number'], $item['custodian_location'], $item['contact'], $item['designation'], $item['department'], $item['quantity'], $item['district_region'], $item['status'], $item['po_no'], $item['purchase_date'], $item['receive_date']));
        }
        fclose($file);
        exit;
    }
    // Export CSV (All items).
    public function export_all_items(){
        $filename = 'Items_'.date('M Y').'.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        $items = $this->Home_model->all_items_report();
        $file = fopen('php://output', 'w');
        $header = array("Project","Category","Item","Description","Model","Asset Code","Serial No.","Custodianship","Contact","Designation","Department","Quantity","District","Status","PO No.");
        fputcsv($file, $header);
        foreach ($items as $key=>$item){
            fputcsv($file, array($item['project'], $item['category'], $item['item'], $item['description'], $item['model'], $item['asset_code'], $item['serial_number'], $item['custodian_location'], $item['contact'], $item['designation'], $item['department'], $item['quantity'], $item['district_region'], $item['status'], $item['po_no']));
        }
        fclose($file);
        exit;
    }
}

?>