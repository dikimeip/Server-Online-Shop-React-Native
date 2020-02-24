<?php  

/**
 * 
 */
use GuzzleHttp\Client;

class MyModel extends CI_Model
{  
	private $_client;
	function __construct()
	{
		$this->_client = new Client([
			'base_uri' => 'localhost/server_dc-shop/api/'
		]);
	}


	public function login_admin($username,$password)
	{
		$response = $this->_client->request('POST','AdminController',[
			'form_params' => [
				'username' => $username,
				'password' => $password
			],
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['status'];
	}

	public function pemesanan_get()
	{
		$response = $this->_client->request('GET','PemesananController');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['value'];
	}
}