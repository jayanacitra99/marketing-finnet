<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db 	->where('username',$username)
							->where('password', $password)
							->get('admin'); 

		if($query->num_rows() > 0 ) {
			$data = array (
					'username'	=> $username,
					'logged_in'	=> TRUE
				);
			$this->session->set_userdata($data);

			return TRUE;
		}else {
			return FALSE;
		}
	}


	/*public function do_sign_up()
	{
		$data = array (
				'ID_ADMIN' => $this->input->post('id_admin'),
				'USERNAME' => $this->input->post('username'),
				'PASSWORD' => $this->input->post('password')
			);
		$this->db->insert('admin', $data);

		if($this->db->affected_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}*/

	public function get_data_supplier()
	{
		return $this->db->order_by('KD_SUPPLIER','ASC')
						->get('supplier')
						->result();
	}

	public function get_data_transaksi()
	{
		return $this->db->order_by('KD_TRANSAKSI','ASC')
						->get('transaksi')
						->result();
	}

	public function get_supplier(){
		return $this->db->get('supplier')
						->result();
	}

	public function get_admin()
	{
		return $this->db->get('admin')
						->result();
	}

	public function get_obat()
	{
		return $this->db->get('obat')
						->result();
	}

	public function get_data_obat()
	{
		return $this->db->order_by('KD_OBAT', 'ASC')
						->get('obat')
						->result();
	}

	public function do_insert_supplier_baru()
	{
		$data = array (
				'KD_SUPPLIER' 	=> $this->input->post('kode_supplier'),
				'ID_ADMIN' 		=> $this->input->post('id_admin'),
				'NM_SUPPLIER' 	=> $this->input->post('nama_supplier'),
				'ALAMAT' 		=> $this->input->post('alamat'),
				'KOTA' 			=> $this->input->post('kota'),
				'TELP' 			=> $this->input->post('telepon'),
			);
		$this->db->insert('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function do_insert_obat_baru($foto)
	{
		$data = array(
				'KD_OBAT' 		=> $this->input->post('kode_obat'),
				'KD_SUPPLIER' 	=> $this->input->post('kode_supplier'),
				'ID_ADMIN' 		=> $this->input->post('id_admin'),
				'NM_OBAT' 		=> $this->input->post('nama_obat'),
				'PRODUSEN' 		=> $this->input->post('produsen'),
				'FOTO' 			=> $foto['file_name'],
				'JML_STOK' 		=> $this->input->post('jumlah_stok'),
				'HARGA' 		=> $this->input->post('harga'),
				);

		$this->db->insert('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function do_insert_transaksi_baru()
	{
		$data = array (
				'KD_TRANSAKSI' 	=> $this->input->post('kode_transaksi'),
				'ID_ADMIN' 		=> $this->input->post('id_admin'),
				'NM_PEMBELI' 	=> $this->input->post('nama_pembeli'),
				'TOTAL' 		=> $this->input->post('total'),
				'TGL_BELI' 		=> $this->input->post('tanggal_beli'),
			);
		$this->db->insert('transaksi', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function delete_supplier($KD_SUPPLIER){
		$this->db 	->where('KD_SUPPLIER', $KD_SUPPLIER)
					->delete('supplier');

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function delete_transaksi($KD_TRANSAKSI){
		$this->db 	->where('KD_TRANSAKSI', $KD_TRANSAKSI)
					->delete('transaksi');

			if($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function delete_obat($KD_OBAT){
		$this->db 	->where('KD_OBAT', $KD_OBAT)
					->delete('obat');

			if($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function get_data_supplier_by_KODESUPPLIER($KD_SUPPLIER)
	{
		return $this->db->where('KD_SUPPLIER', $KD_SUPPLIER)
						->get('supplier')
						->row();
	}

	public function update_supplier($KD_SUPPLIER)
	{
		$data = array(
			'KD_SUPPLIER' 	=> $this->input->post('kode_supplier'), 
			'ID_ADMIN' 		=> $this->input->post('id_admin'),
			'NM_SUPPLIER'	=> $this->input->post('nama_supplier'), 
			'ALAMAT' 		=> $this->input->post('alamat'),
			'KOTA' 			=> $this->input->post('kota'), 
			'TELP' 			=> $this->input->post('telepon'),  
			);

		$this->db->where('KD_SUPPLIER', $KD_SUPPLIER)
				->update('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_transaksi_by_KODETRANSAKSI($KD_TRANSAKSI)
	{
		return $this->db->where('KD_TRANSAKSI', $KD_TRANSAKSI)
						->get('transaksi')
						->row();
	}

	public function update_transaksi($KD_TRANSAKSI)
	{
		$data = array(
				'KD_TRANSAKSI' 	=> $this->input->post('kode_transaksi'),
				'ID_ADMIN' 		=> $this->input->post('id_admin'),
				'NM_PEMBELI' 	=> $this->input->post('nama_pembeli'),
				'TOTAL' 		=> $this->input->post('total'),
				'TGL_BELI' 		=> $this->input->post('tanggal_beli'), 
			);

		$this->db->where('KD_TRANSAKSI', $KD_TRANSAKSI)
				->update('transaksi', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_obat_by_KODEOBAT($KD_OBAT)
	{
		return $this->db->where('KD_OBAT', $KD_OBAT)
						->get('obat')
						->row();
	}

	public function update_obat($KD_OBAT, $foto)
	{
		$data = array(
				'KD_OBAT' 		=> $this->input->post('kode_obat'),
				'KD_SUPPLIER' 	=> $this->input->post('kode_supplier'),
				'ID_ADMIN' 		=> $this->input->post('id_admin'),
				'NM_OBAT' 		=> $this->input->post('nama_obat'),
				'PRODUSEN' 		=> $this->input->post('produsen'),
				'FOTO' 			=> $foto['file_name'],
				'JML_STOK' 		=> $this->input->post('jumlah_stok'),
				'HARGA' 		=> $this->input->post('harga'),
				);

		$this->db->where('KD_OBAT', $KD_OBAT)
				->update('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_stokobat_by_KODEOBAT($KD_OBAT)
	{
		return $this->db->where('KD_OBAT', $KD_OBAT)
						->get('obat')
						->row();
	}

	public function get_table_join()
	{
		return $this->db->select('detil_transaksi.KD_OBAT, detil_transaksi.KD_TRANSAKSI, obat.NM_OBAT, detil_transaksi.JUMLAH, detil_transaksi.SUB_TOTAL, transaksi.NM_PEMBELI')
						->join('obat detil_transaksi.KD_OBAT = obat.KD_OBAT')
						->join('transaksi detil_transaksi.KD_TRANSAKSI = transaksi.KD_TRANSAKSI')
						->get('detil_transaksi')
						->result();
	}

	public function update_stokobat($KD_OBAT)
	{
		$data = array(
				'JML_STOK' 		=> $this->input->post('jumlah_stok')
				);

		$this->db->where('KD_OBAT', $KD_OBAT)
				->update('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function kurang($KD_OBAT){

		$obat = $this->input->post('kode_obat');
		$jumlah = $this->input->post('jumlah');
		$this->db->where('KD_OBAT', $KD_OBAT)->get('obat')->row()->$jumlahstok;
		$hasil = $jumlahstok - $jumlah;
		$data = array(
				'JML_STOK' => $hasil
			);
		$this->db->where('KD_OBAT', $KD_OBAT)
				->update('obat', $data);

		if($this->db->affected_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */