<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Friends_model extends CI_Model {

    private $friends = 'friends';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->friends);
    }


    public function count_all()
    {
        return $this->db->count_all($this->friends);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->friends, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->friends);
    }


    public function save($friends)
    {
        $this->db->insert($this->friends, $friends);
        return $this->db->insert_id();
    }


    public function update($id, $friends)
    {
        $this->db->where('id', $id);
        $this->db->update($this->friends, $friends);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->friends);
        return $id;
    }


}