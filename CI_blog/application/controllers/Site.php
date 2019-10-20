<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index()
	{
		//stockage d'une variable de test
		$data = array('nom' => 'IDBerry');
		//Stockage de la page dans une variable $page, true permet de stocker et non d'afficher
		$header = $this->load->view('header', $data, true);
		$page = $this->load->view('index', $data, true);
		$footer = $this->load->view('footer', $data, true);
		//Affichage de la page avec un template
		$this->load->view('template', array('header' => $header, 'page' => $page, 'footer' => $footer));
	}
}
