<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export_model extends CI_Model {

	public function fetch_data_ccare()	
	{
		$this->db->order_by("id_ccare", "ASC");
		$query = $this->db->get("customer_care");
		return $query->result();
	}

	public function fetch_data_event()	
	{
		$this->db->order_by("id_event", "ASC");
		$query = $this->db->get("event");
		return $query->result();
	}

	public function fetch_data_sponsorship()	
	{
		$this->db->order_by("id_sponsorship", "ASC");
		$query = $this->db->get("sponsorship");
		return $query->result();
	}

	public function fetch_data_mkits()	
	{
		$this->db->order_by("id_mkits", "ASC");
		$query = $this->db->get("marketing_kits");
		return $query->result();
	}

}

/* End of file excel_export_model.php */
/* Location: ./application/models/excel_export_model.php */