<?php
class Books extends CI_Controller {
    
      function __construct() {
    
        parent::__construct();
    
        $this->load->helper('url');
    
        $this->load->database();
    
      }
    
      function index() {
    
        // load pagination class
    
        $this->load->library('pagination');
    
        $config['base_url'] = site_url('books/index');
    
        $config['total_rows'] = $this->db->count_all('news');
    
        $config['per_page'] = 4;
    
        $config['uri_segment'] = 3;  // 表示第 3 段 URI 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URI 段不是第 3 段，请修改成需要的数值。

        //$config['use_page_numbers'] = TRUE;
    
     
    
        $config['full_tag_open'] = '';
    
        $config['full_tag_close'] = '';
    
     
    
        $this->pagination->initialize($config);
    
                    
    
        //load the model and get results
    
        $this->load->model('books_model');
    
        $data['results'] = $this->books_model->get_books($config['per_page'], $this->uri->segment(3));
    
                    
    
        // load the HTML Table Class
    
        $this->load->library('table');
    
        $this->table->set_heading('id', 'title', 'slug', 'text');
    
                    
    
        // load the view
    
        $this->load->view('books_view', $data);
    
      }
    
    }