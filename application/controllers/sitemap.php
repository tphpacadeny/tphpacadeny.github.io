<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SiteMap extends Controller_Base {

	public $__load_default = true;
	
	public function index() {
		
		$this->data['content_arr'] = $this->db->query("SELECT it_content.*
															FROM it_content 
															ORDER BY content_id DESC
															")->result_array();
		
		$this->data['page_center'] = 'sitemap';
		
		$this->data['seo_title'] = 'Сайт визитка. Карта сайта';
		$this->data['seo_description'] = 'Сайт визитка. Карта сайта';
		$this->data['seo_keywords'] = 'Сайт визитка. Карта сайта';

        $this->output->cache(1);

		$this->__render();	
	}

    public function flush1() {
        $this->delete_cache('sitemap'); echo "Delete Cache!";
    }
	public function xml() {

        $this->output->cache(1);

		$this->data['content_arr'] = $this->db->query("SELECT it_content.*
															FROM it_content 
															ORDER BY content_id DESC
															")->result_array();
		$this->load->view('/outside/xml/sitemap.php', $this->data);



	}

    function delete_cache($uri_string=null)
    {
        $CI =& get_instance();
        $path = $CI->config->item('cache_path');
        $path = rtrim($path, DIRECTORY_SEPARATOR);

        $cache_path = ($path == '') ? APPPATH.'cache/' : $path;

        $uri =  $CI->config->item('base_url').
            $CI->config->item('index_page').
            $uri_string;

        $cache_path .= md5($uri);

        return unlink($cache_path);
    }


}
	