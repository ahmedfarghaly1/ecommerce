<?php

namespace App\Http\Controllers;

use App\contacts;
use Illuminate\Http\Request;

class contactscontroller extends Controller {
	public function index(contacts $con) {
		$contacts = $con->paginate(3);

		return view('admin.contacts.index', compact('contacts'));
	}

	public function destroy($id, contacts $con) {

		$con->find($id)->delete();

		return redirect('/adminpanel/contacts')->withFlashMessage('تم الحذف بنجاح  ');

	}

	public function edit($id, contacts $con) {

		$data = $con->find($id);

		return view('admin.contacts.edit', compact('data'));

	}

	public function create() {

		return view('admin.contacts.create');
	}

	public function update(Request $request, $id) {
		//echo $id . "<br>";
		//print_r($request->all());
		$request->validate([

			'Telephone' => 'max:255|min:1',
			'Email' => 'max:255|min:1',
			'fax' => 'max:255|min:1',
			'Service_Hotline' => 'max:255|min:1',
			'fb' => 'max:255|min:1',
			'tw' => 'max:255|min:1',
			'insta' => 'max:255|min:1',

		]);

		$con = contacts::find($id);
		$con->Telephone = $request->Telephone;
		$con->Email = $request->Email;
		$con->fax = $request->fax;
		$con->Service_Hotline = $request->Service_Hotline;
		$con->fb = $request->fb;
		$con->tw = $request->tw;
		$con->insta = $request->insta;

		$con->save();
		//print_r($request->all());
		return Redirect()->back()->withFlashMessage('تم تعديل  المشروع  بنجاح');
	}

}
