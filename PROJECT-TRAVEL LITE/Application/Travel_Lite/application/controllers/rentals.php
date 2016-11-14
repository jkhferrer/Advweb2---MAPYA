<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentals extends CI_Controller {

    public function view($page = 'rentals')
    {
        $this->load->helper('url');
<<<<<<< HEAD

=======
>>>>>>> parent of a9ff68c... Revert "qwe"
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
<<<<<<< HEAD

        if ( !isset($this->session->userdata['logged_in']))
        {
            $this->load->view('travel/login_form');

        }

        else
        {
            $data['page'] = "Rentals";
            $this->load->view('templates/header', $data);
            $this->load->view('travel/'.$page);
            $this->load->view('templates/footer');
        }
    }
=======
        $this->load->view('templates/header');
        $this->load->view('travel/'.$page);
        $this->load->view('templates/footer');
    }

>>>>>>> parent of a9ff68c... Revert "qwe"
}
