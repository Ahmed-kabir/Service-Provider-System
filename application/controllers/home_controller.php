<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller
{

    public function index()
    {
        $data['master']=$this->load->view('mainContent','',true);
        $this->load->view('welcome_message',$data);
    }
    public function service()
    {
        $data['category']=$this->admin_model->manage_category_array();
        $data['sub_category_array']=$this->admin_model->manage_sub_category_array();
        $data['sub_category']=$this->admin_model->manage_sub_category();
//        echo '<pre>';
//        print_r($data['category'][0]);
//        echo'</pre>';
//        die();
        $data['master']=$this->load->view('service',$data,true);
        $this->load->view('welcome_message',$data);
    }
    public function user_login()
    {
        $this->load->view('user_login');
    }
    public function chk_user()
    {
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['category']=$this->admin_model->manage_category();
//        $data['order']=$this->admin_model->show_order1();
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $user=$this->admin_model->chk_user($name,$password);
        if($user)
        {
            $udata['id']=$user->id;
            $udata['name']=$user->name;
            $this->session->set_userdata($udata);
//            echo '<pre>';
//            print_r($_POST);
//            echo '</pre>';
//            die();
//            $this->load->view('user_dashboard');
//            $data['kabir']=$this->load->view('user_table',$data,true);
            $data['kabir']=$this->load->view('user_mainContent',$data,true);
            $this->load->view('dashboard',$data);

        }
        else{
//            echo 'failed';
            $sdata['message']="Please Enter Valid Data";
            $this->session->set_userdata($sdata);
            redirect('home_controller/user_login');
        }
    }


}
