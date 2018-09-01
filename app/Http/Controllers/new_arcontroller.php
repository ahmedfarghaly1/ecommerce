<?php

namespace App\Http\Controllers;

use App\news_ar;
use Illuminate\Http\Request;

class new_arcontroller extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(news_ar $new) {
		$news = $new->paginate(3);

		return view('admin.news.index_ar', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id, news_ar $new) {

		$new->find($id)->delete();

		return redirect('/adminpanel_ar/news')->withFlashMessage('تم الحذف بنجاح  ');

	}

	public function edit($id, news_ar $pro) {

		$data = $pro->find($id);

		return view('admin.news.edit_ar', compact('data'));

	}
	public function create() {

		return view('admin.news.create_ar');
	}

	public function add(Request $request) {

		$request->validate([
			'new_tittle' => 'required|max:255|min:1',
			'new_body' => 'required|max:255|min:1',

			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',

		]);

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$imagePath = $destinationPath . "/" . $name;
			$image->move($destinationPath, $name);
		}

		$data = [
			'new_tittle' => $request->new_tittle,
			'new_body' => $request->new_body,
			'image' => "images/" . $name,

		];

		$new = new news_ar;
		$new->create($data);
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('ام اضافة الخبر بنجاح');

	}

	public function update(Request $request, $id) {
		//echo $id . "<br>";
		//print_r($request->all());
		$request->validate([
			'new_tittle' => 'max:255|min:1',
			'new_body' => 'max:2000|min:1',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048',

		]);
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$imagePath = $destinationPath . "/" . $name;
			$image->move($destinationPath, $name);
		}

		$new = news_ar::find($id);
		$new->new_tittle = $request->new_tittle;
		$new->new_body = $request->new_body;
		$new->image = $request->image;

		$new->save();
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم تعديل الخبر بنجاح ');
	}

}
