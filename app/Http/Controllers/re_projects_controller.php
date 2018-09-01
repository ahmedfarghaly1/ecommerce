<?php

namespace App\Http\Controllers;
use App\col_meet_request;
use Illuminate\Http\Request;

class re_projects_controller extends Controller
{
   
	public function index(col_meet_request $col) {

		$cols = $col->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_project', compact('cols'));
	}

	public function destroy($id, col_meet_request $col) {

		$col->find($id)->delete();

		return redirect('/request/projects')->withFlashMessage('تم الحذف بنجاح  ');

	}
}
