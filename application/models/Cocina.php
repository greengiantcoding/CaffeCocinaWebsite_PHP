<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cocina extends CI_Controller {

// LOGIN QUERIES //

	public function getLoginInfo(){
		$query = "SELECT * FROM admin WHERE id = 1";
		$loginInfo = $this->db->query($query)->row_array();
		return $loginInfo;
	}

// REVIEW QUERIES //

	public function addReview($review){
		$query = "INSERT INTO reviews (author, content, rating, visible, created_at) VALUES (?,?,?,?, NOW())";
		$reviewAdded = $this->db->query($query, array('author' => $review['author'], 'content' => $review['content'], 'rating' => $review['rating'], 'visible' => $review['visible']));
	}

	public function getAllReviews(){
		$query = "SELECT * FROM reviews WHERE visible = 'Yes'";
		$allReviews = $this->db->query($query)->result_array();
		return $allReviews;
	}

// PHOTO ALBUM QUERIES //

	public function getAllPhotos(){
		$query = "SELECT * FROM photo";
		$allPhotos = $this->db->query($query)->result_array();
		return $allPhotos;
	}

	public function addPhoto($photoInfo){
		$query = "INSERT INTO photo (file_name, created_at) VALUES (?, NOW())";
		$photoAdded = $this->db->query($query, array('file_name' => $photoInfo['file_name']));
		return;
	}

	public function deletePhoto($photoID){
		$query = "DELETE FROM photo WHERE id = ?";
		$photoDeleted = $this->db->query($query, array('id' => $photoID['id']));
		$photoQuery = "SELECT * FROM photo";
		$remainingPhotos = $this->db->query($photoQuery)->result_array();
		return $remainingPhotos;
	}

// MENU QUERIES // 

	public function getAllHotDrinks(){
		$query = "SELECT * FROM hot_drink";
		$allHotDrinks = $this->db->query($query)->result_array();
		return $allHotDrinks;
	}	
	
	public function getAllTreats(){
		$query = "SELECT * FROM treat";
		$allTreats = $this->db->query($query)->result_array();
		return $allTreats;
	}

	public function addTreat($treatInfo){
		$query = "INSERT INTO treat (title, description) VALUES (?,?)";
		$treatAdded = $this->db->query($query, array('title' => $treatInfo['title'], 'description' => $treatInfo['description']));
		return;
	}

	public function getAllSpecialties(){
		$query = "SELECT * FROM specialties ORDER BY title";
		$allSpecialties = $this->db->query($query)->result_array();
		return $allSpecialties;
	}

	public function addSpecialty($specialtyInfo){
		$query = "INSERT INTO specialties (title, description, price) VALUES (?,?,?)";
		$specialtyAdded = $this->db->query($query, array('title' => $specialtyInfo['title'], 'description' => $specialtyInfo['description'], 'price' => $specialtyInfo['price']));
		return;
	}

	public function getAllBreakfast(){
		$query = "SELECT * FROM breakfast";
		$allBreakfast = $this->db->query($query)->result_array();
		return $allBreakfast;
	}

	public function addBreakfast($breakfastInfo){
		$query = "INSERT INTO breakfast (title, description, price) VALUES (?,?,?)";
		$breakfastAdded = $this->db->query($query, array('title' => $breakfastInfo['title'], 'description' => $breakfastInfo['description'], 'price' => $breakfastInfo['price']));
		return;
	}

	public function addhotDrink($hotDrinkInfo){
		$query = "INSERT INTO hot_drink (title, description, price_8oz, price_12oz, price_16oz, price_20oz) VALUES (?,?,?,?,?,?)";
		$hotDrinkAdded = $this->db->query($query, array('title' => $hotDrinkInfo['title'], 'description' => $hotDrinkInfo['description'], 'price_8oz' => $hotDrinkInfo['price_8oz'], 'price_12oz' => $hotDrinkInfo['price_12oz'], 'price_16oz' => $hotDrinkInfo['price_16oz'], 'price_20oz' => $hotDrinkInfo['price_20oz']));
		return;
	}

	public function getAllSalads(){
		$query = "SELECT * FROM salad";
		$allSalads = $this->db->query($query)->result_array();
		return $allSalads;
	}

	public function addSalad($saladInfo){
		$query = "INSERT INTO salad (title, description, full_price, half_price) VALUES (?,?,?,?)";
		$saladAdded = $this->db->query($query, array('title' => $saladInfo['title'], 'description' => $saladInfo['description'], 'full_price' => $saladInfo['full_price'], 'half_price' => $saladInfo['half_price']));
	}

	public function getAllSoups(){
		$query = "SELECT * FROM soup";
		$allSoups = $this->db->query($query)->result_array();
		return $allSoups;
	}

	public function addSoup($soupInfo){
		$query = "INSERT INTO soup (title, description, full_price, half_price) VALUES (?,?,?,?)";
		$soupAdded = $this->db->query($query, array('title' => $soupInfo['title'], 'description' => $soupInfo['description'], 'full_price' => $soupInfo['full_price'], 'half_price' => $soupInfo['half_price']));
		return;
	}

	public function getAllBurgers(){
		$query = "SELECT * FROM burger";
		$allBurgers = $this->db->query($query)->result_array();
		return $allBurgers;
	}

	public function addBurger($burgerInfo){
		$query = "INSERT INTO burger (title, description, price) VALUES (?,?,?)";
		$burgerAdded = $this->db->query($query, array('title' => $burgerInfo['title'], 'description' => $burgerInfo['description'], 'price' => $burgerInfo['price']));
		return;
	}

	public function getAllFixings(){
		$query = "SELECT * FROM sandwich_fixings";
		$allFixings = $this->db->query($query)->result_array();
		return $allFixings;
	}

	public function addFixing($fixingInfo){
		$query = "INSERT INTO sandwich_fixings (category, type) VALUES (?,?)";
		$fixingAdded = $this->db->query($query, array('category' => $fixingInfo['category'], 'type' => $fixingInfo['type']));
		return;
	}

	public function getAllKids(){
		$query = "SELECT * FROM kid_items";
		$allKids = $this->db->query($query)->result_array();
		return $allKids;
	}

	public function addKid($kidInfo){
		$query = "INSERT INTO kid_items (title, description, price) VALUES (?,?,?)";
		$kidAdded = $this->db->query($query, array('title' => $kidInfo['title'], 'description' => $kidInfo['description'], 'price' => $kidInfo['price']));
		return;
	}
}
