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
			$allPhotos = $this->Cocina->allPhotos();
			$this->load->view('admin_dashboard', array('allPhotos' => $allPhotos));
		}
	}

	public function photo_uploaded(){
		$allPhotos = $this->Cocina->allPhotos();
		$this->load->view('admin_dashboard', array('allPhotos' => $allPhotos));
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
		$photoInfo['photo'] = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$photoAdded = $this->Cocina->addPhoto($photoInfo);
		redirect ('/');
	}

	public function admin_dashboard(){
		$allPhotos = $this->Cocina->allPhotos();
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

}
