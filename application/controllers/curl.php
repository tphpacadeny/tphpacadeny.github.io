<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Curl extends Controller_Base {

    public $__load_default = true;

    public function index() {

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "meta.ua");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        header('Content-Type: text/html; charset=windows-1251');
        // echo $output;

        echo file_get_contents('http://meta.ua/');

        // close curl resource to free up system resources
        curl_close($ch);
}
}
