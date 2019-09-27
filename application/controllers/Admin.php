<?php

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');


    }

    public function index()
    {
       $this->load->view('admin/login');
    }

    public function userRegister()
    {
        $this->load->view('admin/registerUser');
    }

    public function userList()
    {
        $data['allUsers'] = $this->AdminModel->getAllUsers();
        $this->load->view('admin/userList',$data);
    }

    public function addUserAct()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $status = $this->input->post('status');

        if(!empty($username) && !empty($password) && !empty($status)){
            $data = [
                'userName' => $username,
                'password' => md5($password),
                'status'   => $status,
            ];
            $this->AdminModel->addUser($data);
            $this->session->set_flashdata('success','Ugurlu emeliyyat');
            redirect(base_url('userList'));


        }else{
            $this->session->set_flashdata('err','Bosluq buraxmayin');
            redirect(base_url('userRegister'));
        }


    }

    public function checkUser()
    {
       $username = $_POST['userName'];
       $password = $_POST['password'];

       if(!empty($username) && !empty($password)){

            $check = $this->AdminModel->checkUser($username,$password);

            if(!empty($check)){
                $_SESSION['admin_login'] = true;
                $_SESSION['userInfo'] = $check;
                redirect(base_url('dashboard'));
            }else{
                $this->session->set_flashdata('err','Username ve ya password yalnisdir!');
                redirect(base_url('admin'));
            }





       }else{
            $this->session->set_flashdata('err','Bosluq buraxmayin');
            redirect(base_url('admin'));
       }

    }

    public function logOut()
    {
        if(isset($_SESSION['admin_login'])){
            unset($_SESSION['admin_login']);
            redirect(base_url('admin'));
        }

    }
    public function dashboard()
    {
        $this->load->view('admin/index');
    }

    public function allNews()
    {
        $data['getAllPosts'] = $this->AdminModel->getAllPost();
        $this->load->view('admin/tables',$data);
    }

    public function addNews()
    {
        $this->load->view('admin/add-new-post');
    }

    public function addNewsAction(){
//                echo $title = $this->input->post('title');
        $title  = strip_tags($_POST['title']);
        $desc   = strip_tags($_POST['desc']);
        $date   = strip_tags($_POST['date']);
        $status = strip_tags($_POST['status']);
        $cate = strip_tags($_POST['cate']);




        $config['upload_path']    = 'uploads/';
        $config['allowed_types']  = 'jpg|jpeg|png|gif';
        $config['file_name']      = $_FILES['images']['name'];
        $config['max_size'] = '10000';
        

        $this->upload->initialize($config);

        if(!empty($title) && !empty($desc) && !empty($date) && !empty($status)){

            if($this->upload->do_upload('images')) {
                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];

                $data = array(
                    'title'       => $title,
                    'description' => $desc,
                    'date'        => $date,
                    'status'      => $status,
                    'image'       => $pictures,
                    'category'    => $cate
                );

                $this->AdminModel->insertNews($data);
                $this->session->set_flashdata('success','Əməliyyat uğurla yerinə yetirildi');
                redirect('allNews');
            }else{
                $data = array(
                    'title'       => $title,
                    'description' => $desc,
                    'date'        => $date,
                    'status'      => $status,
                    'category'    => $cate,
                    'image'       => 'default.jpg',
                );

                $this->AdminModel->insertNews($data);
                $this->session->set_flashdata('success','Əməliyyat uğurla yerinə yetirildi');
                redirect('allNews');
            }


        }else{
            $this->session->set_flashdata('err','Boşluq buraxmayın!');
            redirect('addNews');
        }





    }

    public function deletePost($id)
    {
        $this->AdminModel->deletePost($id);
        redirect('allNews');
    }

    public function update($id)
    {
        $data['getSinglePosts'] = $this->AdminModel->getSinglePost($id);
        $this->load->view('admin/update',$data);
    }

    public function updateAct($id)
    {
        $title  = strip_tags($_POST['title']);
        $desc   = strip_tags($_POST['desc']);
        $date   = strip_tags($_POST['date']);
        $status = strip_tags($_POST['status']);
        $cate = strip_tags($_POST['cate']);


        $config['upload_path']    = 'uploads/';
        $config['allowed_types']  = 'jpg|jpeg|png|gif';
        $config['file_name']      = $_FILES['images']['name'];
        $config['max_size'] = '10000';


        $this->upload->initialize($config);

        if(!empty($title) && !empty($desc) && !empty($date) && !empty($status)){

            if($this->upload->do_upload('images')) {
                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];

                $data = array(
                    'title'       => $title,
                    'description' => $desc,
                    'date'        => $date,
                    'status'      => $status,
                    'category'    => $cate,
                    'image'       => $pictures
                );

                $this->AdminModel->updateNews($id,$data);

                $this->session->set_flashdata('success','Əməliyyat uğurla yerinə yetirildi! Xəbər uğurla yeniləndi!');
                redirect('allNews');
            }else{
                $data = array(
                    'title'       => $title,
                    'description' => $desc,
                    'date'        => $date,
                    'category'    => $cate,
                    'status'      => $status,

                );

                $this->AdminModel->updateNews($id,$data);
                $this->session->set_flashdata('success','Əməliyyat uğurla yerinə yetirildi! Xəbər uğurla yeniləndi!');
                redirect('allNews');
            }


        }else{
            $this->session->set_flashdata('err','Boşluq buraxmayın!');
            redirect('update/'.$id);
        }





    }

}
