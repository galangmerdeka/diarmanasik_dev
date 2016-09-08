<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
var $assets;
var $css;
var $js;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->assets=base_url().'assets/';
		$this->css=base_url().'assets/css/';
		$this->js=base_url().'assets/js/';
	}
	public function index()
	{
		$data['title']='Home';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
		$data['_head']=$this->load->view('main/head',$data, true);
		$data['_section1']=$this->load->view('main/section1',$data, true);
		$data['_section2']=$this->load->view('main/section2',$data, true);
		$data['_section3']=$this->load->view('main/section3',$data, true);
		$data['_section4']=$this->load->view('main/section4',$data, true);
		$data['_section5']=$this->load->view('main/section5',$data, true);
		$data['_foot']=$this->load->view('main/foot',$data, true);
		$this->load->view('main/index', $data);
	}
}
