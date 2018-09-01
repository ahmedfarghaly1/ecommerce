<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class newcontroller extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(news $new) {
		$news = $new->paginate(3);

		return view('admin.news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id, news $new) {

		$new->find($id)->delete();

		return redirect('/adminpanel/news')->withFlashMessage('تم الحذف بنجاح  ');

	}

	public function edit($id, news $pro) {

		$data = $pro->find($id);

		return view('admin.news.edit', compact('data'));

	}
	public function create() {

		return view('admin.news.create');
	}

	public function add(Request $request) {

		$request->validate([
			'new_tittle' => 'required|max:255|min:1',
			'new_body' => 'required|max:10000|min:1',

			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048',

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

		$new = new news;
		$new->create($data);
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('new added correctly');

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

		$new = news::find($id);
		$new->new_tittle = $request->new_tittle;
		$new->new_body = $request->new_body;
		$new->image = $request->image;

		$new->save();
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('new updated correctly');
	}

}
