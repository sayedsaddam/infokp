<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Home_model.php
 */
class Home_model extends CI_Model{
    /**
     * summary
     */
    public function __construct(){
		parent::__construct();        
    }
    // Insert data into database.
    public function add_items($data){
    	$this->db->insert('items_detail', $data);
    	if($this->db->affected_rows() > 0){
    		return true;
    	}else{
    		return false;
    	}
    }
    // Count all items for pagination.
    public function count_items(){
        return $this->db->from('items_detail')->where_not_in('item', 'Laptop')->count_all_results();
    }
    // Get data from database. other than Laptops.
    public function get_items($limit, $offset){
    	$this->db->select('*');
    	$this->db->from('items_detail');
        $this->db->where_not_in('item', 'Laptop');
        $this->db->limit($limit, $offset);
    	return $this->db->get()->result();
    }
    // Edit item.
    public function edit_item($id){
        $this->db->select('*');
        $this->db->from('items_detail');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    // Update an item.
    public function update_item($id, $data){
        $this->db->where('id', $id);
        $this->db->update('items_detail', $data);
        return true;
    }
    // Delete an item.
    public function delete_item($id){
        $this->db->where('id', $id);
        $this->db->delete('items_detail');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // Search items.
    public function search_items($keyword){
        $this->db->select('*');
        $this->db->from('items_detail');
        $this->db->like('year', $keyword);
        $this->db->or_like('category', $keyword);
        $this->db->or_like('item', $keyword);
        $this->db->or_like('model', $keyword);
        $this->db->or_like('project', $keyword);
        $this->db->or_like('custodian_location', $keyword);
        $this->db->or_like('department', $keyword);
        $this->db->or_like('district_region', $keyword);
        return $this->db->get()->result();
    }
    // Item detail.
    public function item_detail($id){
        $this->db->select('*');
        $this->db->from('items_detail');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    // count items (Laptops).
    public function count_laptops(){
        return $this->db->from('items_detail')->where('item', 'Laptop')->count_all_results();
    }
    // Get all laptops.
    public function get_laptops($limit, $offset){
        $this->db->select('*');
        $this->db->from('items_detail');
        $this->db->where('item', 'Laptop');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
    }
    // Get all items report.
    public function items_report(){
        return $this->db->get('items_detail')->result();
    }
    // ---------------------------- Dashboard statistics ---------------------------------- //
    // Count results for Computers.
    public function count_items_computers(){
        return $this->db->where('category', 'Computers')->from('items_detail')->count_all_results();
    }
    // Count results for Furniture.
    public function count_items_furniture(){
        return $this->db->where('category', 'Furniture')->from('items_detail')->count_all_results();
    }
    // Count results for Electric Appliances.
    public function count_items_electric(){
        return $this->db->where('category', 'Electric Appliances')->from('items_detail')->count_all_results();
    }
    // Count results for Office Equipment.
    public function count_items_office(){
        return $this->db->where('category', 'Office Equipment')->from('items_detail')->count_all_results();
    }
    // Count results for Mobiles.
    public function count_items_mobiles(){
        return $this->db->where('category', 'Mobile ')->from('items_detail')->count_all_results();
    }
    // Outlets
    public function count_items_outlets(){
        return $this->db->where('category', 'Outlet Equipment')->from('items_detail')->count_all_results();
    }
    // Factory equipment.
    public function count_items_factory(){
        return $this->db->where('category', 'Factory Equipment')->from('items_detail')->count_all_results();
    }
    // Items in store.
    public function count_items_store(){
        return $this->db->where('custodian_location', 'Store')->from('items_detail')->count_all_results();
    }
    // Items in admin store.
    public function count_items_admin_store(){
        return $this->db->where('custodian_location', 'Admin Store')->from('items_detail')->count_all_results();
    }
    // Count results where status = in use.
    public function status_in_use(){
        return $this->db->like('status', 'inuse')->from('items_detail')->count_all_results();
    }
}


?>