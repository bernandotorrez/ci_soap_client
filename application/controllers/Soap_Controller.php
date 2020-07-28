<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soap_Controller extends CI_Controller {

	private $soap_url;

	public function __construct(){
		parent::__construct();

		$this->soap_url = SOAP_URL;
		// SOAP_URL merupakan constant variable, berada pada folder config->constants.php

		// silahkan akses ke URL : http://localhost/ci_soap/soap/index/BD (BD dapat diubah menjadi ID / Iso Code country)
	}

	public function index($id='ID'){
		$country = $this->soapFullCountryInfo($id);

		echo '<pre>';print_r($country);

		echo '<br>';

		echo $country->FullCountryInfoResult->sCapitalCity;
	}

	private function soapFullCountryInfo($iso_code) { // use soapClient Class
		$param = array('sCountryISOCode' => $iso_code);

		$client = new SoapClient($this->soap_url);

		// FullCountryInfo merupakan WebService yang tersedia, dapat kita lihat menggunakan SoapUI
		$response = $client->FullCountryInfo($param);
		
		return $response;
	}
}
