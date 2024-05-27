<?php

class Home extends CI_Controller{

    public function index(){            
        $this->load->model('Customer');
        $records = $this->Customer->getCustomer();

        $data['records'] = $records    ;
        $this->load->view('home', $data);
    }
   
    public function create(){
        $this->load->view('create');
    } 
    
    public function save(){
        $this->form_validation->set_rules('customer_name', 'Customer Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_error_delimiters('<div class="form-control">', '</div>');

        if ($this->form_validation->run()) {
            $data =$this->input->post();
            $this->load->model('Customer');
            if ($this->Customer->saveRecords($data)) {
                $this->session->set_flashdata('response', 'Record saved successfully');
            } else {
                $this->session->set_flashdata('response', 'Record failed to save');
            }
            return redirect('home'); 
        } else {
            $this->load->view('create');
        }
    }

    public function edit($record_id){
        $this->load->model('Customer');
        $record =$this->Customer->getAllRecords($record_id);
      
        $this->load->view('update',['record'=>$record]);
    }

    public function update($record_id){
        $this->form_validation->set_rules('customer_name', 'Customer Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_error_delimiters('<div class="form-control">', '</div>');

        if ($this->form_validation->run()) {
            $data = $this->input->post();
            $this->load->model('Customer');
            if ($this->Customer->updateRecords($record_id,$data)) {
                $this->session->set_flashdata('response', 'Record updated successfully');
            } else {
                $this->session->set_flashdata('response', ' failed to upload');
            }
            return redirect('home'); 
        } else {
            $this->load->view('update');
        }
    }
    public function delete($record_id){
        $this->load->model('Customer');
        if ($this->Customer->deleteRecords($record_id)) {
            $this->session->set_flashdata('response', 'Record Deleted successfully');
        } else {
            $this->session->set_flashdata('response', ' Failed to Delete record');
        }
        return redirect('home');
}}
?>
