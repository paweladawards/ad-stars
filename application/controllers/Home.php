<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
	}

	public function index() {
		$data = loadDefaultDataFront();
		$data['baners'] = $this->back_m->get_all('glowna_baner');
		$data['baner_1'] = $this->back_m->get_active('glowna_baner', 1);
		$data['baner_2'] = $this->back_m->get_active('glowna_baner', 2);
		$data['baner_3'] = $this->back_m->get_active('glowna_baner', 3);
		$data['oferta_active'] = $this->back_m->all_active('oferta');
		$data['blog_active'] = $this->back_m->all_active('blog');
		echo loadViewsFront('index', $data);
	}

	public function ofirmie() {
		$data = loadDefaultDataFront();
		$data['ikony'] = $this->back_m->get_all('ofirmie_ikony');
		$data['sekcja_1'] = $this->back_m->get_all('ofirmie_sekcja_1');
		$data['sekcja_2'] = $this->back_m->get_all('ofirmie_sekcja_2');
		$data['sekcja_3'] = $this->back_m->get_one('ofirmie_sekcja_3', 1);
		echo loadViewsFront('ofirmie', $data);
	}
		public function ofirmie_wpis($slug, $id) {
			$data = loadDefaultDataFront();
			$data['value'] = $this->back_m->get_one('ofirmie_sekcja_2', $id);
			$data['gallery'] = $this->back_m->get_images('gallery', 'ofirmie_sekcja_2', $id);
			echo loadViewsFront('ofirmie_wpis', $data);
		}

	public function oferta() {
		$data = loadDefaultDataFront();
		$data['rows'] = $this->back_m->get_all('oferta');
		echo loadViewsFront('oferta', $data);
	}
		public function oferta_wpis($slug, $id) {
			$data = loadDefaultDataFront();
			$data['value'] = $this->back_m->get_one('oferta', $id);
			$data['gallery'] = $this->back_m->get_images('gallery', 'oferta', $id);
			echo loadViewsFront('oferta_wpis', $data);
		}

	public function blog() {
		$data = loadDefaultDataFront();
		$data['rows'] = $this->back_m->get_all('blog');
		echo loadViewsFront('blog', $data);
	}
		public function blog_wpis($slug, $id) {
			$data = loadDefaultDataFront();
			$data['value'] = $this->back_m->get_one('blog', $id);
			$data['gallery'] = $this->back_m->get_images('gallery', 'blog', $id);
			echo loadViewsFront('blog_wpis', $data);
		}

	public function galeria() {
		$data = loadDefaultDataFront();
		// $data['gallery'] = $this->back_m->get_images('gallery', 'galeria', 1);
		$data['gallery'] = $this->back_m->get_images('gallery', 'galeria', 1);
		echo loadViewsFront('galeria', $data);
	}

	public function kontakt() {
		$data = loadDefaultDataFront();
		echo loadViewsFront('kontakt', $data);
	}
}