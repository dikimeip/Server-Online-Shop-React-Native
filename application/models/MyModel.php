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

	public function pemesanan_get_id($id)
	{
		$response = $this->_client->request('GET','LoginController',[
			'query' => [
				'id' => $id
			]
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['value'][0];
	}

	public function pemesanan_put()
	{
		$data = [
			'id' => $this->input->post('id_pemesanan'),
			'status' => $this->input->post('status')
		];
		
		$response = $this->_client->request('PUT','PemesananController',[
			'form_params' => $data
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['status'];

	}

	public function pemesanan_delete($id)
	{
		$response = $this->_client->request('DELETE','PemesananController',[
			'query' => [
				'id' => $id
			]
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['status'];
	}

}