<?php
class News_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_news_categories(){

        //получаем категори новостей
        return $this->db->get('news_cat')->result();
    }

    function get_news_by_category($new_ctg_id){

        $data = array();
        $this->load->helper('date');
        //получаем новости по заданной категории
        //если категория не задана, получаем все новости
        $this->db->order_by("id", "desc");
        if($new_ctg_id) $result = $this->db->get_where('news', array('category'=>$new_ctg_id));
        else $result = $this->db->get('news');

        if($result->result()) {

            foreach($result->result() as $row) {
                $row->date = date_from_sql_to_russian($row->date);
                $data[] = $row;

            }

        }

        return $data;

    }

}