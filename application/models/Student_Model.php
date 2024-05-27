<?php

class Student_Model extends CI_Model {

    public function getStudents()
    {
        $this->load->database();
        $query = $this->db->query("select * from student_data");
        return $query->result_array();
    }

    // public function insertStudent($data) {
    //     // Insert a new task into the database
    //     return $this->db->query("insert into `student_data` (`id`, `firstname`, `lastname`, `email`, `contactno`, `address`) values (NULL, $data['firstname'], $data['lastname'], $data['email'], $data['contactno'], $data['address'])");
    // }

    // public function getStudent($id) {
    //     // Fetch a single task by ID
    //     return $this->db->query("select * from student_data where id = $id");
    // }

    // public function updateStudent($id, $data) {
    //     // Update an existing task in the database
    //     $this->db->where('id', $id);
    //     return $this->db->update('student_data', $data);
    // }

}