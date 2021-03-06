<?php

 class Posts_model extends CI_Model{
     public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){

        if($limit){
            $this->db->limit($limit, $offset);
        }


         if($slug == FALSE){
             $this->db->order_by('id', 'DESC');
             $query = $this->db->get('posts');
             return $query->result_array();

         }

         $query = $this->db->get_where('posts', array('slug' => $slug));
         return $query->row_array();
     }

     public function create_post(){

        $slug = url_title($this->input->post('title'));
        $email=$this->session->userdata('email');

        if($this->session->userdata('logged_in')){
         $query=$this->db->select('name')
                ->where('email', $email)
                ->get('info');

        
        $row = $query->row();
    
        $user_name= $row->name;
        }
        if($this->session->userdata('doctor_logged_in')){
            $query=$this->db->select('name')
                ->where('email', $email)
                ->get('doctor_info');

        
        $row = $query->row();
    
        $user_name= $row->name;

        }
        

        $data =array(
            
            
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),

            'user_email' => $this->session->userdata('email'),
            'user_name' => $user_name

        );

        return $this->db->insert('posts', $data);
     }

     public function delete_post($id){
         $this->db->where('id', $id);
         $this->db->delete('posts');
         return true;
     }

     public function update_post(){
         

         $slug = url_title($this->input->post('title'));

         $data =array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')

        );
        $this->db->where('id', $this->input->post('id'));

        return $this->db->update('posts', $data);
     }
 }
?>