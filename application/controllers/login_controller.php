<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->method_call=&self::get_instance();
        $name=$this->session->userdata('name');
        if($name !=NULL)
        {
            redirect('welcome/sign');
        }

    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function user_login()
    {
        $this->load->view('user_login');
    }
    public function signin()
    {
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $admin=$this->admin_model->signin($name,$password);
        if($admin)
        {
//            echo "success";
            $sdata['id']=$admin->id;
            $sdata['name']=$admin->name;
            $this->session->set_userdata($sdata);
            $data['kabir']=$this->load->view('admin/mainContent','',true);
            $this->load->view('admin/dashboard',$data);
        }
        else
        {
            $sdata['message']="User name or password is incorrect!!";
            $this->session->set_userdata($sdata);
            redirect('login_controller');
        }
    }

}