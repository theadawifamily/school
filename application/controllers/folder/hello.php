<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function query()
        {
            $this->load->database();
            $sql = 'SELECT id,first_name FROM users WHERE status = ?';
            $parArray = array('1');
            $query = $this->db->query($sql,$parArray);

            foreach ($query->result() as $row)
            {
               echo $row->id.'<br />';
               echo $row->first_name.'<br />';
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */