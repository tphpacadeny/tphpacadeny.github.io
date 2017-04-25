<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Zip extends Controller_Base {

    public $__load_default = true;

    public function index() {

        $this->load->library('zip');

        $data = Array(
        'mydata1.png' => file_get_contents('aaaa.png'),
        'mydata2.txt' => 'Another Data String!'
        );

        $this->zip->add_data($data);

        $this->zip->download('my_backup.zip');

    }

}
