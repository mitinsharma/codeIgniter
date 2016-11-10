<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }
    
	public function index()
	{
        $this->home();
        $this->userinfo();
        $this->arrayhelper();
        $this->htmlhelper();
        $this->formhelper();
        $this->stringhelper();
        $this->login();
        
	}
    
    public function home()
    {
        $data['title']="Intro to MVC!";
        $data['page_header']="Controller Function 1";
        $data['firstnames']=$this->user_model->getFirstNames();
        
        $this->load->view('view_home',$data);
    }
    
    public function userinfo()
    {
        $data['title']="Intro to MVC!";
        $data['page_header']="Function 2";
        $data['users']=$this->user_model->getUsers();
        
        $this->load->view('view_userInfo',$data);
    }
    
    public function arrayhelper()
    {
        $this->load->helper('array');
        
        $data['title']="Array Helper";
        $data['page_header']="Array Helper";
        
        $this->load->view('array_helper',$data);
    }
    
    public function htmlhelper()
    {
        $this->load->helper('html');
        
        $data['title']="HTML Helper";
        $data['page_header']="HTML Helper";
        
        $this->load->view('html_helper',$data);
    }
    
    public function formhelper()
    {
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title']="Form Helper";
        $data['page_header']="Form Helper";
        
        $this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
        $this->form_validation->set_rules('pass','Password','required|trim');
        $this->form_validation->set_rules('url','Url','required');
        
        if($this->form_validation->run()==false)
        {
             $this->load->view('Form_helper',$data);
        }
        else
        {
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('pass');
            $data['url']=$this->input->post('url');
            $data['pass_len']=strlen($this->input->post('pass'));
            $this->load->view('Form_helper',$data);
        }
       
    }
    
    public function stringhelper()
    {
        $this->load->helper('html');
        $this->load->helper('string');
        
        $data['title']="String Helper";
        $data['page_header']="String Helper";
        
        $this->load->view('string_helper',$data);
    }
    
    public function login()
    {
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        
        $data['title']="Login";
        $data['page_header']="Login";
        
        $this->load->view('login',$data);
    }
    
}
