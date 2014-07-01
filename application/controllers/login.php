<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

  class Login extends CI_Controller {
      function index()
      {
        if($this->session->userdata('is_logged_in')){
            $data['main_content'] = 'members_view.php';
        } else {   
            $data['main_content'] = 'login_view.php';
        }
        
        $this->load->view('includes/template', $data);
      }
      
      function validate_credentials()
      {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        
        if($query)   //если пользователь авторизован
        {
            $data = array(
                'user_name' =>  $this->input->post('username'),
                'is_logged_in'  =>  true
            );
            
            $this->session->set_userdata($data);
            redirect('members_area');
        }
        
        else    //если пользователь не авторизован
        {
            $this->index();
        }
      }
      
      public function logout()
      {
        $this->session->sess_destroy();
        $data['main_content'] = 'main_view.php';
        $this->load->view('includes/template', $data);
      }
  }