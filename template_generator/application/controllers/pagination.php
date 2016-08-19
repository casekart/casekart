<?php 
    public function pagination_code() {
		
    $this->load->model('pagination');		
                    
    //pagination		
    $page_number = $this->uri->segment(2);		
    $page_url = $config['base_url'] = base_url().'jQueryPagination/';
    $config['uri_segment'] = 2;		
            
    $config['per_page'] = 5;
    $config['num_links'] = 5;
    if(empty($page_number)) $page_number = 1;
    $offset = ($page_number-1) * $config['per_page'];
    
    $config['use_page_numbers'] = TRUE;		
    $data["countriesdata"] = $this->site_model->jQuerypagination_countriesdata($config['per_page'],$offset);		
    $config['total_rows'] = $this->db->count_all('tbl_countries');		
    
    $page_url = $page_url.'/'.$page_number;
    
    $config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="current"><a href="'.$page_url.'">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
 
    $config['first_link'] = '&lt;&lt;';
    $config['last_link'] = '&gt;&gt;';		
    
    $this->pagination->cur_page = $offset;
            
    $this->pagination->initialize($config);
    $data['page_links'] = $this->pagination->create_links();
    
    return $data;		
}
 
public function jQuery_Pagination($page_num=1) {			
    $data = $this->pagination_code();			
    $this->load->view('jQuerypagination_countriespage',$data);
}
 
 
 
public function jQueryPagination($page_num=1) {			
    $data = $this->pagination_code();
    $this->load->view('jQuerypagination',$data);
}