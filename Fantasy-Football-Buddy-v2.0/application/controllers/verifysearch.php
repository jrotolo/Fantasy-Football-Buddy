<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifySearch extends CI_Controller {

   function __construct()
   {
     parent::__construct();
     $this->load->model('player_model','',TRUE);
   }

   function index()
   {
     //This method will have the credentials validation
     $this->load->library('form_validation');
    redirect('player/view/'.$this->input->post('search_term'), 'refresh');
     
   }
}