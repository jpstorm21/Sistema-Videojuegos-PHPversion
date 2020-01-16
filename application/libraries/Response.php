<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Response {

    private $CI;

	public function __construct() {
		$this->CI =& get_instance();
	}

    public function sendJSONResponse($data, $code = 200){
        $this->CI->output
            ->set_status_header($code)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

}
?>