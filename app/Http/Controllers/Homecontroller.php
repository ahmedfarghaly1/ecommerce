<?php

namespace App\Http\Controllers;
use App\abouts;
use App\abouts_ar;
use App\contacts;
use App\managements;
use App\news;
use App\news_ar;
use App\our_projects;
use App\our_projects_ar;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		return view('home');
	}
	public function home() {

		//en
		$about = new abouts;
		$abouts = $about->all();

		$con = new contacts;
		$contacts = $con->all();
		$man = new managements;
		$manage = $man->all();
		$news = new news;
		$allnews = news::all();
		$pro = new our_projects;
		$our_projects = $pro->all();
		return view('welcome', compact('manage', 'allnews', 'our_projects', 'abouts', 'contacts'));
	}
	public function home2() {

		$abo = new abouts_ar;
		$abo = $abo->all();
		$con = new contacts;
		$contacts = $con->all();
		$man = new managements;
		$manage = $man->all();
		$news = new news_ar;
		$allnews = news_ar::all();
		$pro = new our_projects_ar;
		$our_projects = $pro->all();
		return view('welcome_ar', compact('manage', 'allnews', 'our_projects', 'abo', 'contacts'));
	}

		public function adminhome2() {

		$abo = new abouts_ar;
		$abo = $abo->all();
		$con = new contacts;
		$contacts = $con->all();
		$man = new managements;
		$manage = $man->all();
		$news = new news_ar;
		$allnews = news_ar::all();
		$pro = new our_projects_ar;
		$our_projects = $pro->all();
		return view('admin/layouts/layout_request', compact('manage', 'allnews', 'our_projects', 'abo', 'contacts'));
	}

	public function adminhome3() {

		$abo = new abouts_ar;
		$abo = $abo->all();
		$news = new news_ar;
		$allnews = news_ar::all();
		$pro = new our_projects_ar;
		$our_projects = $pro->all();
		return view('admin/layouts/layout_request_ar', compact( 'allnews', 'our_projects', 'abo'));
	}
}
