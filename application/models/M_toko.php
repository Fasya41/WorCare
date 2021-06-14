<?php
class M_toko extends CI_Model{
	
	function selecttoko(){
		$sql = "select * from barang";
		$data = $this->db->query($sql)->result();
		return $data;
	}
	
	function selectinput(){
		$sql = "select * from test";
		$data = $this->db->query($sql)->result();
		return $data;
	}
	
}