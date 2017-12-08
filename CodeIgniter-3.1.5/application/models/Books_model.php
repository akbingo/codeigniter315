<?php
class Books_model extends CI_Model {
    
      function __construct(){
    
        parent::__construct();
    
      }
    
     
    
      function get_books($num, $offset) {
    
        $query = $this->db->get('news', $num, $offset);        
    
        return $query;
    
      }
    
    }