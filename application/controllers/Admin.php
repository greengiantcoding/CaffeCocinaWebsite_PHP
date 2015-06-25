<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$loginAttempt = $this->input->post();
		$loginInfo = $this->Cocina->getLoginInfo();
		$checkPW = crypt($loginAttempt['password'], $loginInfo['salt']);
		if($checkPW != $loginInfo['password'] || $loginAttempt['username'] != $loginInfo['username']){
			redirect('/navigate');
		}
		else{
			$allPhotos = $this->Cocina->getAllPhotos();
			$this->load->view('admin_dashboard', array('allPhotos' => $allPhotos));
		}
	}

	public function review(){
		$review = $this->input->post();
																				# TO DO: Add If statement for visibility per censor list (review func.)
		$review['visible'] = 'Yes';
		$reviewAdded = $this->Cocina->addReview($review);
		redirect('/navigate/review');
	}

	public function add_photo(){
		$photoInfo = $this->input->post();
		$photoAdded = $this->Cocina->addPhoto($photoInfo);
		$allPhotos = $this->Cocina->getAllPhotos();
		$this->load->view('admin_dashboard', array('allPhotos' => $allPhotos));
	}

	public function delete_photo(){
		$photoID = $this->input->post();
		$remainingPhotos = $this->Cocina->deletePhoto($photoID);
		$this->load->view('admin_dashboard', array('allPhotos' => $remainingPhotos));
	}

	public function admin_dashboard(){
		$allPhotos = $this->Cocina->getAllPhotos();
		$this->load->view('admin_dashboard', array('allPhotos' => $allPhotos));
	}

	public function admin_menus(){
		$this->load->view('admin_menus');
	}

	public function new_treat(){
		$treatInfo = $this->input->post();
		$treatAdded = $this->Cocina->addTreat($treatInfo);
		redirect ('/admin_menus');
	}

	public function new_specialty(){
		$specialtyInfo = $this->input->post();
		$specialtyAdded = $this->Cocina->addSpecialty($specialtyInfo);
		redirect ('/admin_menus');
	}

	public function new_breakfast(){
		$breakfastInfo = $this->input->post();
		$breakfastAdded = $this->Cocina->addBreakfast($breakfastInfo);
		redirect ('/admin_menus');
	}

	public function new_hot_drink(){
		$hotDrinkInfo = $this->input->post();
		$hotDrinkAdded = $this->Cocina->addHotDrink($hotDrinkInfo);
		redirect ('/admin_menus');
	}

	public function new_salad(){
		$saladInfo = $this->input->post();
		$saladAdded = $this->Cocina->addSalad($saladInfo);
		redirect ('/admin_menus');
	}

	public function new_soup(){
		$soupInfo = $this->input->post();
		$soupAdded = $this->Cocina->addSoup($soupInfo);
		redirect ('/admin_menus');
	}

	public function new_burger(){
		$burgerInfo = $this->input->post();
		$burgerAdded = $this->Cocina->addBurger($burgerInfo);
		redirect ('/admin_menus');
	}

	public function new_sandwich_fixing(){
		$fixingInfo = $this->input->post();
		$fixingAdded = $this->Cocina->addFixing($fixingInfo);
		redirect ('/admin_menus');
	}

	public function new_kid(){
		$kidInfo = $this->input->post();
		$kidAdded = $this->Cocina->addKid($kidInfo);
		redirect ('/admin_menus');
	}
}
