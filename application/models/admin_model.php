<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model
{
    public function signin($name,$password)
    {
        $sql="SELECT * FROM tb_admin
              WHERE name='$name'
              AND password='$password'";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function getSubCategories($id)
    {
        $sql="SELECT * FROM `tb_sub_category` WHERE category_name=$id";
        $query=$this->db->query($sql)->result();
        return $query;

    }
    public function save_category($category_name,$description)
    {
        $sql="insert into tb_category(category_name,description)
              VALUES ('$category_name','$description')";
        $query=$this->db->query($sql);
        return $query;
    }
    public function manage_category_array()
    {
        $sql="select * from tb_category";
        $query=$this->db->query($sql)->result_array();
        return $query;
    }
    public function manage_category()
    {
        $sql="select * from tb_category";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function editById($id)
    {
        $sql="select * from tb_category where id=$id";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function update_category($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_category',$data);
    }
    public function delete_category($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_category');
    }
    public function all_unit()
    {
        $sql="select * from tb_category";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function save_sub_category($category_name,$sub_category_name,$description,$price)
    {
        $sql="insert into tb_sub_category(category_name,sub_category_name,description,price)
              VALUES ('$category_name','$sub_category_name','$description','$price')";
        $query=$this->db->query($sql);
        return $query;
    }
    public function manage_sub_category()
    {
//        $sql="select * from tb_sub_category";
        $sql="SELECT  t1.*,t2.category_name
              FROM tb_sub_category AS t1
              INNER JOIN
              tb_category AS t2
              on t1.category_name=t2.id";
              $query=$this->db->query($sql)->result();
              return $query;
    }
    public function manage_sub_category_array()
    {
        $sql="SELECT t1.*,t2.category_name
              FROM tb_sub_category AS t1
              INNER JOIN
              tb_category AS t2
              on t1.category_name=t2.id";
        $query=$this->db->query($sql)->result_array();
        return $query;
    }
    public function show_sub_category($id)
    {
        $sql="select * from tb_sub_category where id=$id";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function show_sub_category_id($id)
    {
        $sql="SELECT t1.*,t2.category_name
              FROM tb_sub_category AS t1
              INNER JOIN
              tb_category AS t2
              on t1.category_name=t2.id
              where t1.id=$id";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function update_sub_category($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_sub_category',$data);
    }
    public function delete_sub_category($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_sub_category');
    }
    public function save_user($name,$email,$address,$phone,$password)
    {
        $sql="insert into tb_user(name,email,address,phone,password)
              VALUES('$name','$email','$address','$phone','$password')";
        $query=$this->db->query($sql);
        return $query;
    }
    public function chk_user($name,$password)
    {
        $sql="select * from tb_user WHERE name='$name' AND password='$password'";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function edit_user_order($o_id)
    {
        $sql="SELECT * FROM tb_order WHERE o_id=$o_id";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function save_order($sub_category_name,$category_name,$description,$price,$date,$time,$u_id,$u_name)
    {
        $sql="insert into tb_order(sub_category_name,category_name,description,price,date,time,u_id,u_name)
              VALUES ('$sub_category_name','$category_name','$description','$price','$date','$time','$u_id','$u_name')";
        $query=$this->db->query($sql);
        return $query;
    }
    public function show_order($u_id)
    {
        $sql="SELECT t1.*,t2.category_name,t3.id,t3.name
              FROM tb_order AS t1
              INNER JOIN tb_category AS t2
              ON t1.category_name=t2.id
              INNER JOIN tb_user AS t3
              ON t1.u_id=t3.id
              WHERE t1.u_id=$u_id";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function show_order1()
    {
        $sql="SELECT t1.*,t2.sub_category_name
              FROM tb_order AS t1
              INNER JOIN tb_sub_category AS t2
              ON t1.sub_category_name=t2.id";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function admin_order()
    {
        $sql="SELECT t1.*,t2.id,t2.name,t2.email,t2.address,t2.phone,t3.sub_category_name,t4.category_name
              FROM tb_order AS t1
              INNER JOIN 
              tb_user AS t2
              on t1.u_id=t2.id
              INNER JOIN
              tb_sub_category AS t3
              ON t1.category_name=t3.category_name
              INNER JOIN
              tb_category AS t4
              on t1.category_name=t4.id";
        $query=$this->db->query($sql)->result();
        return $query;
    }
    public function assigned_order($o_id)
    {
        $sql="SELECT t1.*,t2.id,t2.name,t2.email,t2.address,t2.phone,t4.category_name
              FROM tb_order AS t1
              INNER JOIN 
              tb_user AS t2
              on t1.u_id=t2.id
              inner JOIN
              tb_category AS t4
              ON t1.category_name=t4.id
              WHERE t1.o_id=$o_id";
        $query=$this->db->query($sql)->row();
        return $query;
    }
    public function update_order($o_id,$data)
    {
        $this->db->where('o_id',$o_id);
        $this->db->update('tb_order',$data);
    }
    public function delete_order($o_id)
    {
        $this->db->where('o_id',$o_id);
        $this->db->delete('tb_order');
    }
}