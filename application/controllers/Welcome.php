<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->method_call=&self::get_instance();
//        $name=$this->session->userdata('name');
//        if($name==NULL)
//        {
//            redirect('login_controller','refresh');
//        }

    }

	public function index()
	{
	    $data['master']=$this->load->view('mainContent','',true);
		$this->load->view('welcome_message',$data);
	}
	public function getSubCategories($id)
    {
        return $cat=$this->admin_model->getSubCategories($id);
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
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function after_log()
    {
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['category']=$this->admin_model->manage_category();
        $data['kabir']=$this->load->view('user_mainContent',$data,true);
        $this->load->view('dashboard',$data);
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
            redirect(base_url());
        }
    }
    public function dashboard()
    {
        $data['kabir']=$this->load->view('admin/mainContent','',true);
        $this->load->view('admin/dashboard',$data);
    }
    public function logout()
    {
//        $this->session->sess_destroy();
        session_destroy();
        redirect(base_url());
    }
    public function add_category()
    {
        $data['kabir']=$this->load->view('admin/add_category','',true);
        $this->load->view('admin/dashboard',$data);
    }
    public function save_category()
    {
            $category_name=$this->input->post('category_name');
            $description=$this->input->post('description');
            $this->admin_model->save_category($category_name,$description);
            $sdata['message']="Category Added Successfully";
            $this->session->set_userdata($sdata);
            redirect('Welcome/add_category');

    }
    public function manage_category()
    {
        $data['category']=$this->admin_model->manage_category();
        $data['kabir']=$this->load->view('admin/manage_category',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function edit_category($id)
    {
        $data['editById']=$this->admin_model->editById($id);
        $data['kabir']=$this->load->view('admin/edit_category',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function update_category()
    {
        $data=array();
        $id=$this->input->post('id',true);
        $data['category_name']=$this->input->post('category_name',true);
        $data['description']=$this->input->post('description',true);
//        echo '<pre>';
//        print_r($data);
//        echo'</pre>';
//        die();
        $this->admin_model->update_category($id,$data);
        $sdata['message']="Data updated successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/manage_category');
    }
    public function delete_category($id)
    {
        $this->admin_model->delete_category($id);
        $sdata['message']="Category Deleted Successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/manage_category');
    }
    public function add_sub_category()
    {
        $data['category']=$this->admin_model->all_unit();
        $data['kabir']=$this->load->view('admin/add_sub_category',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function save_sub_category()
    {
        $category_name=$this->input->post('category_name');
        $sub_category_name=$this->input->post('sub_category_name');
        $description=$this->input->post('description');
        $price=$this->input->post('price');
        $this->admin_model->save_sub_category($category_name,$sub_category_name,$description,$price);
        $sdata['message']="Data Added successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/add_sub_category');
    }
    public function manage_sub_category()
    {

        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['kabir']=$this->load->view('admin/manage_sub_category',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function edit_sub_category($id)
    {
        $data['category']=$this->admin_model->manage_category();
        $data['sub_category']=$this->admin_model->show_sub_category($id);
        $data['kabir']=$this->load->view('admin/edit_sub_category',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function edit_user_order($o_id)
    {
        $data['category']=$this->admin_model->manage_category();
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['order']=$this->admin_model->edit_user_order($o_id);
        $data['kabir']=$this->load->view('admin/edit_user_order',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function update_sub_category()
    {
        $id=$this->input->post('id');
        $data['category_name']=$this->input->post('category_name');
        $data['sub_category_name']=$this->input->post('sub_category_name');
        $data['description']=$this->input->post('description');
        $data['price']=$this->input->post('price');
        $this->admin_model->update_sub_category($id,$data);
        $sdata['message']="Data Updated Successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/manage_sub_category');
    }
    public function delete_sub_category($id)
    {
        $this->admin_model->delete_sub_category($id);
        $sdata['message']="Sub-Category Deleted Successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/manage_sub_category');
    }
    public function price()
    {
        $price['id']=$this->input->post('id');
        $price['sub_category_name']=$this->input->post('sub_category_name');
        $price['price']=$this->input->post('price');
        $this->session->set_userdata($price);
        json_encode($price);
    }
    public function time()
    {
        $time['date']=$this->input->post('date');
        $time['time']=$this->input->post('time');
        $this->session->set_userdata($time);
        json_encode($time);
    }
    public function user_registration()
    {
        $this->load->view('user_reg');
    }
    public function save_user()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
        $phone=$this->input->post('phone');
        $password=$this->input->post('password');
//                echo '<pre>';
//        print_r($_POST);
//        echo'</pre>';
//        die();
        $data=$this->admin_model->save_user($name,$email,$address,$phone,$password);
   if($data){
//        $this->load->view('admin/dashboard');
        $sdata['message']="Registration Completed Successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/user_registration');
   }
   else{
       echo "faield";
   }


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
            $sdata['message']="Please Enter Valid Data";
            $this->session->set_userdata($sdata);
            redirect('Welcome/user_login');
        }
    }
    public function destroy()
    {
        session_destroy();
    }
    public function user_login()
    {
        $this->load->view('user_login');
    }
    public function user_logout()
    {
        session_destroy();
        redirect(base_url());
    }
    public function user_register()
    {
        $this->load->view('user_reg');
    }
    public function show_category($id)
    {
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['sub_category_id']=$this->admin_model->show_sub_category($id);

        $data['category']=$this->admin_model->manage_category();
        $data['kabir']=$this->load->view('show_category',$data,true);
        $this->load->view('dashboard',$data);
    }
    public function save_order()
    {
        $sub_category_name=$this->input->post('sub_category_name');
        $category_name=$this->input->post('category_name');
        $description=$this->input->post('description');
        $price=$this->input->post('price');
        $date=$this->input->post('date');
        $time=$this->input->post('time');
        $u_id=$this->session->userdata('id');
        $u_name=$this->session->userdata('name');
//
//        echo '<pre>';
//        print_r($_POST);
//
//        echo '</pre>';
//        die();
        $this->admin_model->save_order($sub_category_name,$category_name,$description,$price,$date,$time,$u_id,$u_name);
        $sdata['message']="your Order Given Successfully";
        $this->session->set_userdata($sdata);
      redirect('Welcome/after_log');
    }
    public function admin_order()
    {
        $data['admin_order']=$this->admin_model->admin_order();
        $data['kabir']=$this->load->view('admin/admin_order',$data,true);
        $this->load->view('admin/dashboard',$data);

    }



    public function show_user_order($u_id)
    {
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['category']=$this->admin_model->manage_category();
        $data['order']=$this->admin_model->show_order($u_id);
        $data['kabir']=$this->load->view('user_table',$data,true);
        $this->load->view('dashboard',$data);
    }



    public function assigned_order($o_id)
    {
        $data['assigned_order']=$this->admin_model->assigned_order($o_id);
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        die();
        $data['kabir']=$this->load->view('admin/assigned_order',$data,true);
        $this->load->view('admin/dashboard',$data);
    }
    public function update_order()
    {
       $o_id=$this->input->post('o_id');
       $data['as_person']=$this->input->post('as_person');
       $data['as_phone']=$this->input->post('as_phone');
       $data['status']=$this->input->post('status');
//       echo '<pre>';
//       print_r($data);
//       echo '</pre>';
//       die();
       $this->admin_model->update_order($o_id,$data);
       $sdata['message']="Order Updated successfully";
       $this->session->set_userdata($sdata);
       redirect('Welcome/admin_order');
    }
    public function delete_order($o_id)
    {
        $this->admin_model->delete_order($o_id);
        $sdata['message']="Order Deleted Successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/admin_order');
    }
    public function delete_user_order($o_id)
    {
        $this->admin_model->delete_order($o_id);
        $sdata['message']="Order Deleted Successfully";
        $this->session->set_userdata($sdata);
        redirect('Welcome/after_delete');
    }
    public function after_delete()
    {
        $data['sub_category']=$this->admin_model->manage_sub_category();
        $data['category']=$this->admin_model->manage_category();
//        $data['order']=$this->admin_model->show_order1();
//        $name=$this->input->post('name');
//        $password=$this->input->post('password');
//        $user=$this->admin_model->chk_user($name,$password);
//        if($user)
//        {
//            $udata['id']=$user->id;
//            $udata['name']=$user->name;
//            $this->session->set_userdata($udata);
////            echo '<pre>';
////            print_r($_POST);
////            echo '</pre>';
////            die();
//        $data['kabir']=$this->load->view('user_mainContent',$data,true);
//        $this->load->view('dashboard',$data);
//            $this->load->view('user_dashboard');
//            $data['kabir']=$this->load->view('user_table',$data,true);
            $data['kabir']=$this->load->view('user_mainContent',$data,true);
            $this->load->view('dashboard',$data);
//
//        }
//        else{
//            $sdata['message']="Please Enter Valid Data";
//            $this->session->set_userdata($sdata);
//            redirect('Welcome/user_login');
//        }
    }


}
