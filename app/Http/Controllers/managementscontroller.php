<?php

namespace App\Http\Controllers;
use App\managements;
use Illuminate\Http\Request;
use DB;
class managementscontroller extends Controller {

	public function index(managements $man) {

		$manage = $man->paginate(3);

		return view('admin.managements.index', compact('manage'));
	}

	public function destroy($id, managements $nam) {

		$nam->find($id)->delete();

		return redirect('/adminpanel/managements')->withFlashMessage('تم الحذف بنجاح  ');

	}

	public function edit($id, managements $mang) {

		$data = $mang->find($id);

		return view('admin.managements.edit', compact('data'));

	}
	public function create(managements $mang) {

		return view('admin.managements.create');
	}

	public function add(Request $request) {

		$request->validate([
			'manage_name' => 'required|max:255|min:1',
			'manage_email' => 'required|max:255|min:1',
			'manage_phone' => 'required|max:255|min:1',

		]);

		$data = [
			'manage_name' => $request->manage_name,
			'manage_email' => $request->manage_email,
			'manage_phone' => $request->manage_phone,

		];

		$manage = new managements;
		$manage->create($data);
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم اضافه الادارة   بنجاح');

	}

	public function update(Request $request, $id) {
		//echo $id . "<br>";
		//print_r($request->all());
		$request->validate([
			'manage_name' => 'max:255|min:1',
			'manage_email' => 'max:2000|min:1',
			'manage_phone' => 'max:2000|min:1',

		]);

		$manage = managements::find($id);
		$manage->manage_name = $request->manage_name;
		$manage->manage_email = $request->manage_email;
		$manage->manage_phone = $request->manage_phone;

		$manage->save();
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم تعديل  االادارةبنجاح');
	}
	// function to return request view for all managements
	public function request($value, $id ) {

		$mains =DB::table('direct_meet_request')->find($id) ;
		$mains =DB::table('main_meet_request')->find($id) ;
		$mains =DB::table('rent_meet_request')->find($id) ;
		$mains =DB::table('fin_meet_request')->find($id) ;
		$mains =DB::table('t_request')->find($id) ;
		$mains =DB::table('col_meet_request')->find($id) ;
		$mains =DB::table('legal_meet_request')->find($id) ;


   
		if ($value == 'المدير العام') {
			return view('request.manager_meet_request',compact('mains'));
		} elseif ($value == 'إدارة الصيانة') {
			return view('request.main_request',compact('mains'));
		} elseif ($value == 'إدارة التأجير') {
			return view('request.rent_request',compact('mains'));
		} elseif ($value == 'الادارة المالية') {
			return view('request.fin_request',compact('mains'));
		} elseif ($value == 'إدارة التحصيل') {
			return view('request.t_request',compact('mains'));
		} elseif ($value == 'إدارة المشاريع') {
			return view('request.project_request',compact('mains'));
		} elseif ($value == 'الإدارة القانونية') {
			return view('request.low_request',compact('mains'));
		}
	}

}
