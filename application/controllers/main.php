<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

/*
* главная
*/
    public function index($new_ctg_id = 0)
	{
        $this->load->model('news_model');

        //категории новостей
        $data['news_categories'] = $this->news_model->get_news_categories();

        //новости по заданной категории
        $data['news'] = $this->news_model->get_news_by_category($new_ctg_id);

        //передаем данные в представление
        $data['main_content'] = 'main_view.php'; //(string) $this->load->view('main_view');
        $this->load->view('includes/template', $data);
	}
    
/*
* закрытая область - изучаем сессии
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
* форма обратной связи - изучаем работу с ajax и form-helper
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
    
    
}