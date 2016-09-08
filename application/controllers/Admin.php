<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author NVM Team Creative
 */
class Admin extends CI_Controller {
    //put your code here
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
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_dashboard',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function login()
	{
                $data['title']='Login';
		$data['assets']=base_url().'assets/login/';
                $data['img']=base_url().'assets/images/';
                $this->load->view('login/index',$data);
	}

	public function agency_list_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/agency_list',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/agency_list_page',$data);
	}

	public function agency_order_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        //$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/agency_order',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/agency_order_page',$data);
	}

	public function agency_request_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        //$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/agency_request',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/agency_request_page',$data);
	}


	public function hotel_partner_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        //$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/hotel_partner',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/hotel_partner_page',$data);
	}

	public function airline_partner_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        //$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/airline_partner',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/airline_partner_page',$data);
	}

	public function add_hotel_page()
	{
		$data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;

		$data['head']=$this->load->view('admin/head',$data, true);
        $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
        $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
        $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
        //$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
        $data['content']=$this->load->view('admin/add_hotel',$data, true);
        $data['footer_content']=$this->load->view('admin/footer_content',$data, true);

        $this->load->view('admin/add_hotel_page',$data);
	}
        
}
