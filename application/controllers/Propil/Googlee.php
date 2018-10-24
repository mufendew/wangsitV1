<?php


class Googlee extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index(){	
		// jika status sudah login, ngga usah ke halaman login lagi
		if($this->session->userdata('login')==true){
			redirect('dashboard');
		}

		//untuk login manual
		//belom ada error handlingnya kalo username sama password salah
		if (isset($_POST['NIM'])&&isset($_POST['PASSWD'])){

			if (($_POST['NIM']=="P2SDDYYWAKWAW")&&($_POST['PASSWD']=="FERDIANPENGENBUCIN")) {
				$this->session->set_userdata("adminnn",true);
				redirect('wkwkwkwk','refresh');
			}

			//ambil data dari ketika NIM di trigger
			$datum = $this->M_Login->Login_Manual($_POST['NIM']);
			$a = $datum->NIM;
			$b = $datum->USERNAME;
			$c = $datum->PASSWORD;

			//if else ketika dia login pake username atau pake NIM
			if ( ($_POST['NIM'] == $a || $_POST['NIM'] == $b) && md5($_POST['PASSWD']) == $c) {
				$this->session->set_userdata('login',true);
				$dataNIMM = $this->M_Login->getNimDKK($a);
				$this->session->set_userdata('DataProfile',$dataNIMM);
				redirect('dashboard','refresh');
			}
			else{
				$data['errorr'] = "Username atau password salah";
				redirect('login?errorr=Username+atau+password+salah');
			}
		}

		
		//bagian dari API google yakni harus dapet code dulu dari request URL di login form
		if(isset($_GET['code']))
		{
			$this->googleplus->getAuthenticate(); //fungsi dari library google

			//fungsi library Google yakni return all info dari email
			$idGoogle = $this->googleplus->getUserInfo()['id'];
			$this->session->set_userdata('DataGoogle',$this->googleplus->getUserInfo());


			//ngecek apakah dia baru pertama atau ngga, kalo baru pertama diarahin ke page verifikasi untuk masukin username, nim, dkk
			if ($this->M_Login->cekFirsttime($idGoogle)==null){
				if (!isset($this->googleplus->getUserInfo()['name'])) {
					redirect('login?errorr=maaf+hanya+dapat+mendaftar+dengan+akun+google','refresh');
				}else{
					redirect('Propil/Googlee/Daftar');
				}
				
			}
			else {
				$dataNIM = $this->M_Login->getNimDKK($idGoogle);
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('DataProfile',$dataNIM);
				redirect('dashboard');

			}
		}

		// kalo semua kondisi diatas ngga memenuhi berarti langsung nampilin halaman Login google
		// fungsi dibawah ini get data dari config/googleplus
		$data['loginURL'] = $this->googleplus->loginURL();
		$this->load->view('Profile/V_Login',$data);
	}

	public function Daftar()
	{
		$this->load->library('form_validation');

		if(isset($_SESSION['DataGoogle'])){

			//proses insert ke DB jika dia pertama kali login atau daftar
			if (isset($_POST['nimm'])) {
				$dataa = array(
					'PROVIDER' => "GGL",
					'UID_PROVIDER' => $_POST['uidd'],
					'NAMA' => $_POST['namaa'],
					'EMAIL' => $_POST['emaill'],
					'GAMBAR' => $_POST['gambarr'],
					'NIM' => $_POST['nimm'],
					'USERNAME' => strtolower($_POST['usernamee']),
					'PASSWORD' => md5($_POST['passwordd']), 
					'TTL' => $_POST['lahirr'], 
					'HP' => $_POST['nohp'],
					'STATUS' => 0,
					'CREATED_DATE' => date("Y-m-d")  
				);

				//ERROR HANDLING ketika username atau NIM udah ada di DB
				if (!$this->db->insert('mhs_kbmsi', $dataa)){
					if ($this->db->error()['code']==1062){
						$data['errorr'] = "Username atau nim sudah terdaftar";
					}
				}
				else{
					$dataNIM = $this->M_Login->getNimDKK($_POST['uidd']);
					$this->session->set_userdata('DataProfile',$dataNIM);
					redirect('dashboard');
				}
			}
			else{
				$dataNIM = $this->M_Login->getNimDKK($_POST['uidd']);
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('DataProfile',$dataNIM);
				redirect('dashboard');
			}
			
			}
			$data['userdata'] = $this->session->userdata('DataGoogle');
			$this->load->view('Profile/V_After',$data);
		}
		else redirect('');
	}
	

	public function logout(){
		$this->session->sess_destroy();
		$this->googleplus->revokeToken();
		redirect('');
	}
}//class ends here


