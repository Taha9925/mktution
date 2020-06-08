<?php

class Common_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function selectData($table='', $field='*', $where='', $order_by='', $order_type='',$distinct='',$return='') {
		$this->db->select($field);
		$this->db->from($table);
		if($where != '') {
			$this->db->where($where); 
		}
		if($order_by != '' && $order_type != '') {
			$this->db->order_by($order_by, $order_type);
		}
		if($distinct != '') {
			$this->db->distinct();
		}
		$query = $this->db->get();
		if($return == 'array') {
			return $query->result_array();
		} else {
			return $query->result();
		}
	}

	public function insertData($table='', $data='') {
		$query = $this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function updateData($table,$data,$where) {
		$this->db->where($where);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}

	public function deleteData($table,$where) {
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows();	
	}

}