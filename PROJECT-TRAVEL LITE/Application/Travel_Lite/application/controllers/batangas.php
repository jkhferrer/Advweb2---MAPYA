<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batangas extends CI_Controller {
	
	 public function view($page = '1')
        {
			$this->load->helper('url');
			 if ( !file_exists('application/views/travel/'.$page.'.php'))
			{
                // Whoops, we don't have a page for that!
                show_404();
			}
		
				$this->load->view('travel/'.$page);
				
		}
	
}
