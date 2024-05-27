    <?php

class Customer extends CI_Model {

    public function getCustomer()
    {
        $query = $this->db->get('crud');
        return $query->result();
    }
    public function saveRecords($data){
        return $this->db->insert('crud',$data); 

    }
    public function getAllRecords($record_id){
        $query = $this->db->get_where('crud',array('id'=> $record_id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }
    public function updateRecords($record_id,$data){
        return $this->db->where('id',$record_id)
          ->update('crud',$data);
    }
    public function deleteRecords($record_id){
        return $this->db->delete('crud',array('id'=>$record_id));
          
    }
}

?>


