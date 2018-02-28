<?php

class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function login(){
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        
        $result = $this->user_model->get([
           'login'=> $login,
           'password'=>hash('sha256',$password.SALT)
        ]);
        
        $this->output->set_content_type('application_json');
        if($result){
           $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
           $this->output->set_output(json_encode(['result' => 1]));
           return false;
        }    
        $this->output->set_output(json_encode(['result'=>0]));        
    }
     public function register(){
         
         $this->output->set_content_type('application_json');
         
         $this->form_validation->set_rules('login','Login Name','required|min_length[4]|max_length[16]|is_unique[user.login]');
         $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
         $this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[16]|matches[comfirm_password]');
        
//         $this->form_validation->set_message('required','Data tidak boleh kosong');
//         $this->form_validation->set_message('valid_email','Email anda masih belum pas');
         
         if($this->form_validation->run()==false){
             $this->output->set_output(json_encode(['result'=>0,'error'=>  $this->form_validation->error_array()]));  
             return false;
         }
         
        $login = $this->input->post('login');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $comfirm_password = $this->input->post('comfirm_password');
        
        $user_id = $this->user_model->insert([
            'login'=>$login,
            'email'=>$email,
            'password'=>hash('sha256',$password.SALT)
        ]);
        //echo $user_id;
        //die('not yet ready');
        
        if($user_id){
           $this->session->set_userdata(['user_id' => $user_id]);
           $this->output->set_output(json_encode(['result' => 1]));
           return false;
        }    
        $this->output->set_output(json_encode(['result'=>0,'error'=>'User Not Created.']));        
    }
    public function tes_get(){
       $data = $this->user_model->get(2);
       print_r($data);
       
       $this->output->enable_profiler(true);
    }
    
    public function tes_insert(){
        $result = $this->user_model->insert([
             'login' => 'jaksparo'
        ]);
        print_r($result);
    }
    
    public function tes_update(){
        $result = $this->user_model->update([
            'login' => 'dodo'
        ],2);
        print_r($result);
    }
    
    public function tes_delete($user_id){
        $result = $this->user_model->delete($user_id);
        print_r($result);
    }
}

