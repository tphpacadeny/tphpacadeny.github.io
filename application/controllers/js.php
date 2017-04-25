<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class JS extends Controller_Base {

    public $__load_default = true;

    public function index() {

        $this->data['page_center'] = 'js/index';

        $this->data['seo_title'] = 'JS';
        $this->data['seo_description'] = '';
        $this->data['seo_keywords'] = '';

        $this->__render();
    }

    public function table() {

        $this->load->view('outside/pages/js/table', $this->data);
    }

    public function add_form() {

        $this->load->view('outside/pages/js/add_form', $this->data);
    }

    public function edit_form($id = 0) {

        // GET ROW
        $this->load->view('outside/pages/js/add_form', $this->data);
    }

    public function save() {

        echo 'Data Saved! | '.print_r($_GET, true);

    }

    public function add_request() {

        echo 'Data Saved! | '.print_r($_GET, true);

    }


    public function add() {

        echo 'Data Saved! | '.print_r($_GET, true);

    }

    public function sorting_save() {

        echo 'Data Saved! | '.print_r($_GET, true);

    }

    public function get_children($id = 1) {

        // GET ROW
        $this->data['id'] = $id;
        $this->load->view('outside/pages/js/table_children', $this->data);

    }



}