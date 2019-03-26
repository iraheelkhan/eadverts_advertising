<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->lang->load('app_lang', 'english');
		
	}
	
	public function index()
	{
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}
		else if ($this->ion_auth->is_admin()){
				$title['title'] = "Dashboard";
				$this->load->view('includes/headerscripts', $title);
				$this->load->view('includes/header.php');
				$this->load->view('includes/menu.php');
				//$this->load->view('includes/breadcrumb.php');
				$this->load->view('dashboard');
				$this->load->view('includes/footer');	
		} else {
				redirect('auth/login');
		}		
	}

	public function login(){

	}

	public function test(){
		$this->load->view("google");
	}

	public function addShop(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}
		else if ($this->ion_auth->is_admin()){
			$title['title'] = lang('page_title_for_add_shop');
			$data['pagename'] = lang('page_title_for_add_shop'); 
			$this->load->view('includes/headerscripts', $title);
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('addShop', $data);
			$this->load->view('includes/footer.php');
		}
		else{
			echo "<h1> Access Denied </h1>";
		}
	}

	public function addAd(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}
		else if($this->ion_auth->is_admin()){
			$title['title'] = lang('page_title_for_add_ads');
			$data['pagename'] = lang('page_title_for_add_ads');
			$this->load->view('includes/headerscripts', $title);
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('addAds', $data);
			$this->load->view('includes/footer.php');
		}
	}

	public function gog(){
		$this->load->library('googlemaps');

$config['center'] = '37.4419, -122.1419';
$config['zoom'] = 'auto';
$this->googlemaps->initialize($config);

$marker = array();
$marker['position'] = '37.429, -122.1419';
$marker['draggable'] = true;
$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
$this->googlemaps->add_marker($marker);

$data['map'] = $this->googlemaps->create_map();
$data['lat'] = "<script> event.latLng.lat();";

print_r([$data]);
$this->load->view('view_file', $data);


	}
}