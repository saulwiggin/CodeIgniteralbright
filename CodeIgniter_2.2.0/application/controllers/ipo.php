<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo extends CI_Controller {

	public function index(){

	$this->load->model('ipo_model');

	//$this->load->library('curl');
	//echo $this->curl->simple_ftp_get('http://example.com/');

	//echo "Hello World";
	//$result = array("30/07/1987" => 'filing_date',
	//						 "06/12/2014" => 'priority_date');
	$result['data'] = $this->ipo_model->get_records();

	// echo print_r($result);

	$this->load->view('albright', $result);
}

public function read_IPO(){

	$number = $this->input->post("numbers");
	$IPO = $this->input->post("application_number");

	$result['data'] = "Got Data";

	$this->load->view('albright', $result);
}

public function curl_request(){

	$this->load->library('curl');

	$url='http://remote-site.com/the-page.html';

	$curl = curl_int();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$html .= curl_exec($curl);
	curl_close($curl);

	echo $html;

	// Simple call to remote URL
echo $this->curl->simple_get('http://example.com/');

// Simple call to CI URI
$this->curl->simple_post('controller/method', array('foo'=>'bar'));

// Set advanced options in simple calls
// Can use any of these flags http://uk3.php.net/manual/en/function.curl-setopt.php

$this->curl->simple_get('http://example.com', array(CURLOPT_PORT => 8080));
$this->curl->simple_post('http://example.com', array('foo'=>'bar'), array(CURLOPT_BUFFERSIZE => 10)); 
	//echo $this->curl->simple_get('www.google.com');
// Start session (also wipes existing/previous sessions)
$this->curl->create('http://example.com/');

// Option & Options
$this->curl->option(CURLOPT_BUFFERSIZE, 10);
$this->curl->options(array(CURLOPT_BUFFERSIZE => 10));

// More human looking options
$this->curl->option('buffersize', 10);

// Login to HTTP user authentication
$this->curl->http_login('username', 'password');

// Post - If you do not use post, it will just run a GET request
$post = array('foo'=>'bar');
$this->curl->post($post);

// Cookies - If you do not use post, it will just run a GET request
$vars = array('foo'=>'bar');
$this->curl->set_cookies($vars);

// Proxy - Request the page through a proxy server
// Port is optional, defaults to 80
$this->curl->proxy('http://example.com', 1080);
$this->curl->proxy('http://example.com');

// Proxy login
$this->curl->proxy_login('username', 'password');

// Execute - returns responce
echo $this->curl->execute();

// Debug data ------------------------------------------------

// Errors
$this->curl->error_code; // int
$this->curl->error_string;

// Information
$this->curl->info; // array
}

}