<?php  

/**
 * 
 */
use GuzzleHttp\Client;

class MyModel extends CI_Model
{
	
	public function login_admin($username,$password)
	{
		$client = new Client();
		$response = $client->request('POST','localhost/server_dc-shop/api/AdminController',[
			'form_params' => [
				'username' => $username,
				'password' => $password
			],
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['status'];
	}
}