<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    private $messages = 'messages';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->messages);
    }


    public function count_all()
    {
        return $this->db->count_all($this->messages);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->messages, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->messages);
    }


    public function save($messages)
    {
        $this->db->insert($this->messages, $messages);
        return $this->db->insert_id();
    }


    public function update($id, $messages)
    {
        $this->db->where('id', $id);
        $this->db->update($this->messages, $messages);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->messages);
        return $id;
    }


}