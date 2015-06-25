<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigate extends CI_Controller {

	public function index(){
		$this->load->view('landing_page');
	}

	public function ourstory(){
		$this->load->view('our_story');
	}

	public function events(){
		$this->load->view('events');
	}

	public function contact(){
		$this->load->view('contact');
	}

	public function merchandise(){
		$this->load->view('merchandise');
	}

	public function catering(){
		$this->load->view('catering');
	}

	public function review(){
		$allReviews = $this->Cocina->getAllReviews();
		$this->load->view('review', array('allReviews' => $allReviews));
	}

	public function photo_album(){
		$allPhotos = $this->Cocina->getAllPhotos();
		$this->load->view('photo_album', array('allPhotos' => $allPhotos));
	}

	public function menu(){
		$allHotDrinks = $this->Cocina->getAllHotDrinks();
		$allTreats = $this->Cocina->getAllTreats();
		$allSpecialties = $this->Cocina->getAllSpecialties();
		$allBreakfast = $this->Cocina->getAllBreakfast();
		$allSalads = $this->Cocina->getAllSalads();
		$allSoups = $this->Cocina->getAllSoups();
		$allBurgers = $this->Cocina->getAllBurgers();
		$allFixings = $this->Cocina->getAllFixings();
		$allKids = $this->Cocina->getAllKids();
		$allFixingCategories = ['Breads', 'Meats', 'Veggies', 'Cheeses', 'Spreads'];
		$this->load->view('menu', array('allHotDrinks' => $allHotDrinks, 'allTreats' => $allTreats, 'allSpecialties' => $allSpecialties, 'allBreakfast' => $allBreakfast, 'allSalads' => $allSalads, 'allSoups' => $allSoups, 'allBurgers' => $allBurgers, 'allFixingCategories' => $allFixingCategories, 'allFixings' => $allFixings, 'allKids' => $allKids));
	}

}
