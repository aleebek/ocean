<?php

namespace App\Http\Controllers;



class PagesController extends Controller {
    
    public function getIndex() {
		return view('pages.welcome');
	}
	
	public function getMenu() {
		return view('pages.menu');
	}
	
	public function getRestaurants() {
		return view('pages.restaurants');
	}
	
	public function getContact() {
		return view('pages.contact');
	}
	
	public function getStory() {
		return view('pages.story');
	}
	
}
