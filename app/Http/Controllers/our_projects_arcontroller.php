<?php

namespace App\Http\Controllers;

use App\our_projects_ar;
use Illuminate\Http\Request;

class our_projects_arcontroller extends Controller {

	public function index(our_projects_ar $pro) {

		$projects = $pro->paginate(5);

		return view('admin.projects.index_ar', compact('projects'));
	}

	public function destroy($id, our_projects_ar $pro) {

		$pro->find($id)->delete();

		return redirect('/adminpanel_ar/projects')->withFlashMessage('تم الحذف بنجاح  ');

	}
	public function edit($id, our_projects_ar $pro) {

		$data = $pro->find($id);

		return view('admin.projects.edit_ar', compact('data'));

	}
	public function create() {
		return view('admin.projects.create_ar');
	}
	public function add(Request $request) {
		$request->validate([
			'project_name' => 'required|max:255|min:1',
			'project_desc' => 'required|max:2000|min:1',
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
			'project_name' => $request->project_name,
			'project_desc' => $request->project_desc,
			'project_image' => "images/" . $name,
		];

		$project = new our_projects_ar;
		$project->create($data);
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم اضافه المشروع  بنجاح');

	}
	public function update(Request $request, $id) {
		//echo $id . "<br>";
		//print_r($request->all());
		$request->validate([
			'project_name' => 'max:255|min:1',
			'project_desc' => 'max:2000|min:1',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048',

		]);
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$imagePath = $destinationPath . "/" . $name;
			$image->move($destinationPath, $name);
		}

		$project = our_projects_ar::find($id);
		$project->project_name = $request->project_name;
		$project->project_desc = $request->project_desc;
		$project->project_image = "images/" . $name;
		$project->save();
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم تعديل  المشروع  بنجاح');
	}
}
