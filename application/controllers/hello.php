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
        public function message($to = 'World')
	{
		echo "Hello {$to}!".PHP_EOL;
	}
        public function mylibrary()
        {
            $this->load->library('Fadi');
            echo $this->fadi->number;
        }
        public function myhelper()
        {
            $this->load->helper('new_helper');

            echo test_method('Hello World');
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function mysmarty()
        {
            echo $this->config->item('base_url').'<br />';
            $this->template->assign('Father','Fadi');
            $this->template->assign('Son','Ahmad');
            $this->template->assign('Son2','Hibah Haboosh');
            $this->template->load();
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