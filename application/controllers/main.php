<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

/*
* главная
*/
    public function index()
	{
        $this->load->model('erudit_index_model');

        //top active
        $data['top_active'] = $this->erudit_index_model->get_top_active();
	
        //last questions added
        $data['last_added'] = $this->erudit_index_model->get_last_added();
		
		//random interest
        $data['interest'] = $this->erudit_index_model->get_random_interest();
        //передаем данные в представление
        $data['main_content'] = 'main_view.php'; //(string) $this->load->view('main_view');
        $this->load->view('/includes/template.php', $data);
	}
    
/*
* закрытая область
*/
    public function members_area() 
    {
        if($this->is_logged_in()) {    
            $data['main_content'] = 'members_view.php';
        }  else {
            $data['main_content'] = 'permission_denied_view.php';
        }
        $this->load->view('includes/template',  $data);   
    }
    
    private function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        
        if(isset($is_logged_in) && $is_logged_in == true) {
            return true;
        }  else return false;
    }
    
/*
* форма обратной связи
*/
    function contact()
    {
        if($this->input->post('name')) //если были отправленны данные постом
        {
            //$data['main_content'] = 'data_send_view.php';
            
            $data['message'] = "сообщение отправлено";
            echo json_encode($data);
            exit();
        } 
        else 
        {
            $data['main_content'] = 'contact_view.php';
        }
        $this->load->view('includes/template',  $data);
    }
	
/*
* about
*/
	function about()
	{
		$data['main_content'] = 'about_view.php';
		$this->load->view('includes/template',  $data);
	}
    
    
}