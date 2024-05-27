<?php
	class User extends CI_Model
	{
		public function firstName()
		{

			//return 'Kavindu';
		}

		public function getUser()
		{
			$this->load->database();
			$query = $this->db->query("select * from student_data");
			return $query->result_array();





			// return[
			// 	['firstName'=>'Kavindu', 'lastName'=>'Rangana'],
			// 	['firstName'=>'Kamal', 'lastName'=>'Prera'],
			// 	['firstName'=>'Nimal', 'lastName'=>'Rathanayake']
			// ];
		}
	}
?>