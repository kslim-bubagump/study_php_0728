<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function request()
	{

        #echo $_GET["id"];
        #echo $this->input->get("id");
        #echo $_POST["id"];
        #echo $this->input->post("id");

        print_r(json_decode($this->input->raw_input_stream, true));

        $arr = json_decode($this->input->raw_input_stream, true);

        print_r($arr['id']);

        if (empty($arr)) {
            echo "empty";
        } else {
            echo "not empty";
        }

        for ($i = 0; $i<5; $i++) {
            echo "{$i}";
        }

        
	}
}
