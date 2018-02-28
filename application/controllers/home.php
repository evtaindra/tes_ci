<?php

    class Home extends CI_Controller{
        
        public function index(){
            $this->load->view('home/inc/header_view');
            $this->load->view('home/home_view');
            $this->load->view('home/inc/footer_view');            
        }
        
        public function register(){
            $this->load->view('home/inc/header_view');
            $this->load->view('home/register_view');
            $this->load->view('home/inc/footer_view');            
        }
        
//        public function code(){
//            
//            echo hash('sha256','custom'.SALT);
//        }
        public function test(){
            /**
             * Memangil data dari tabel dengan cara 1
             */
            //$q =$this->db->get_where('user',['user_id'=>1]);
           
            /**
             * Atau dengan cara 2
             * mengunakan clause where
             * $this->db->where(['user_id' => 2]);
             * atau dengan order by 
             *  $this->db->order_by('user_id DESC');
             * atau dengan membatasi field yang ada
             * $this->db->select('user_id, login');
             */
            
//            $this->db->select('user_id, login');
//            $this->db->order_by('user_id DESC');
//            $q =$this->db->get('user');
//            print_r($q->result());
            
            /**
             * Menggunakan method Chaining
             */
            
//            $this->db->select('user_id,login')
//                     ->from('user')
//                     ->where(['user_id '=> 2]);
//            
//            $q =$this->db->get();
//            print_r($q->result());
            
            /**
             * Insert data user
             *  $this->db->insert('user',['login'=>'April']);
             */
           
            /**
             * Update data user
             * $this->db->where(['user_id'=>4]);
             * $this->db->update('user',['login'=>'Okta']);
             */
            
            /**
             * Delete Data
             *  $this->db->where(['user_id'=>4]);
             *  $this->db->delete('user');
             * 
             * atau dengan cara ke2
             * $this->db->delete('user',['user_id'=>4]);
             */
           
        }
    }