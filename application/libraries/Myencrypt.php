<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myencrypt {
    var $CI;
    public function __construct($params = array())
    {
        $this->CI =& get_instance();

        $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        $this->CI->load->database();
        $this->CI->load->library('encryption');

        $this->CI->encryption->initialize(
        array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => $this->CI->config->config['encryption_key']
            )
        ); 
        
    }

    public function encrypt_data($text){
           

        return $this->CI->encryption->encrypt($text);
    }

    public function decrypt_data($text){
        return $this->CI->encryption->decrypt($text);
    }
}