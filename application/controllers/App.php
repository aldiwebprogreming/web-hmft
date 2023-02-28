<?php 

	/**
	 * 
	 */
	class App extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('template/header');
			$this->load->view('app/index');
			$this->load->view('template/footer');
		}

		function struktur_organisasi(){

			$this->load->view('template/header');
			$this->load->view('app/struktur_organisasi');
			$this->load->view('template/footer');	

		}

		function dosen(){

			$this->load->view('template/header');
			$this->load->view('app/dosen');
			$this->load->view('template/footer');	
		}

		function prestasi(){

			$this->load->view('template/header');
			$this->load->view('app/prestasi');
			$this->load->view('template/footer');	
		}

		function galeri(){

			$this->load->view('template/header');
			$this->load->view('app/galeri');
			$this->load->view('template/footer');	
		}


		function test(){

			$a = 3;
			$b = 3;
			

			echo ($a === $b );
		}
	}

?>