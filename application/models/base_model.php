<?php
abstract class Base_model extends CI_Model {
	
	abstract protected function getTableName();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();

    }
    
    function count($where)
    {
        $query = $this->db->from($this->getTableName())->where($where);
        return $query->count_all_results();
    }

    function insert($value)
    {
    	$this->db->insert($this->getTableName() , $value);
    }

    function update($value, $where)
    {
        $this->db->update($this->getTableName(), $value, $where);
    }
    
    function get_random($fields){
    	$total = $this->count(array());
    	$query = $this->db->select($fields)->get_where($this->getTableName(), array(), 1, rand(0, $total-1) );
    	return $query->result();
    }
    
    function get($fields, $where ){
    	$query = $this->db->select($fields)->get_where($this->getTableName(), $where);
    	return $query->result();
    }

}