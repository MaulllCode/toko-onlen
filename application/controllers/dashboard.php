<?php
class Dashboard extends CI_controller {

	public function index() 
	{
		// $model_barang = 'model_barang';
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}
?>
