<?php
class Erudit_index_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_top_active(){

        $data = array();
		
		//получаем 5 самых активных эрудитов по количеству баллов
		$query = $this->db->query('SELECT name, ball FROM trivia_zp ORDER BY ball DESC LIMIT 5');
	
		foreach($query->result() as $row)
		{
			$data[] = $row;
		}
		
		return $data;
    }

    function get_last_added(){

		$data = array();
		
		//получаем 5 самых активных эрудитов по количеству баллов
		$query = $this->db->query('SELECT DISTINCT name from trivia ORDER BY trivia_id DESC LIMIT 3');
	
		foreach($query->result() as $row)
		{
			$data[] = $row;
		}
		
		return $data;

    }
	
	function get_random_interest()
	{
		$data = array();
		
		$interests = $this->db->count_all('interest');
		$interest_random_id = rand(1,$interests-1);
		$query = $this->db->get_where('interest', array('id' => $interest_random_id));
		
		foreach($query->result() as $row)
		{
			$data[] = $row;
		}
		
		return $data;
	}

}