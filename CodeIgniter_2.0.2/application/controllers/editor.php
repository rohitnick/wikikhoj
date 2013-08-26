<?php 
class editor extends CI_Controller {
 
	public function index()
    {
    	$this->load->helper('url');
		  $this->load->library('ckeditor');
          $this->ckeditor->basePath = base_url().'asset/ckeditor/';
          $this->ckeditor-> config['toolbar'] = 'Full';
          $this->ckeditor->config['language'] = 'en';
          $this->load->view('ckeditor');

    }

}
?>