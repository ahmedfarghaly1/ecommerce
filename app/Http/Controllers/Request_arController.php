<?php

namespace App\Http\Controllers;
use App\fin_meet_request_ar;
use App\fin_request_ar;
use App\t_request_ar;
use App\main_meet_request_ar;
use App\main_request_ar;
use App\rent_meet_request_ar;
use App\col_meet_request_ar;
use App\rent_request_ar;
use App\legal_meet_request_ar;
use App\direct_meet_request_ar;

use Illuminate\Http\Request;
use DB;
class Request_arController extends Controller {
  
  //finance
	 public function fin($id)
    {
    	
		$fin =DB::table('fin_meet_request_ar')->find($id) ;

		return view('request.fin_more_ar', compact('fin'));
    }

	 public function indexfin(fin_meet_request_ar $fin) {

		$fin = $fin->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_fin_ar', compact('fin'));
	}

	public function destroyfin($id, fin_meet_request_ar $fin) {

		$fin->find($id)->delete();

		return redirect('/request/fins_ar')->withFlashMessage('deleted correctly');

	}
	public function fin_meet() {

		return view('request.fin_meet_form_ar');
	}

	public function fin_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		];

		$fin_meet_request = new fin_meet_request_ar;
		$fin_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//inquiry


	 public function indexinquiry(fin_request_ar $fin) {

		$fins = $fin->orderByRaw('created_at DESC')->paginate(3);

		return view('request.inquiry_ar', compact('fins'));
	}

	public function destroyinquiry($id, fin_request_ar $fin) {

		$fin->find($id)->delete();

		return redirect('/request/fin_ar')->withFlashMessage('deleted correctly ');

	}

	public function fin_inquiry() {

		return view('request.fin_inquiry_form_ar');
	}

	public function fin_inquiry_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'cheek_name' =>'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			
		
		]);

		$data = [

			'name' => $request->name,
			'cheek_name' => $request->cheek_name,
			'phone' => $request->phone,
			
			
		];

		$fin_request = new fin_request_ar;
		$fin_request->create($data);
		return Redirect()->back()->withFlashMessage('user added correctly');;
	}


	//end fin
	//t request

	 public function pros($id)
    {
    	
		$pro =DB::table('t_request_ar')->find($id) ;

		return view('request.pros_ar', compact('pro'));
    }
	 public function pro(t_request_ar $pro) {

		$pro = $pro->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_pro_ar', compact('pro'));
	}

	public function destroypro($id, t_request_ar $pro) {

		$pro->find($id)->delete();

		return redirect('/request/pro_ar')->withFlashMessage('deleted correctly ');

	}
	public function t_meet() {

		return view('request.t_meet_form_ar');
	}

	public function t_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'area' => 'required|max:255',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'area' => $request->area,
		];
		
		$t_meet_request = new t_request_ar;
		$t_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('request added correctly');
	}
	


	//rent

	   public function rents($id)
    {
    	
		$rent =DB::table('rent_meet_request_ar')->find($id) ;

		return view('request.rents_ar', compact('rent'));
    }

	 public function rent(rent_meet_request_ar $rent) {

		$rent = $rent->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_rent_ar', compact('rent'));
	}

	public function destroyrent($id, rent_meet_request_ar $rent) {

		$rent->find($id)->delete();

		return redirect('/request/rents_ar')->withFlashMessage('deleted correctly ');

	}
	public function rent_meet() {

		return view('request.rent_meet_form_ar');
	}

	public function rent_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		];

		$rent_meet_request = new rent_meet_request_ar;
		$rent_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//request renting

	      public function rent2($id)
    {
    	
		$rent =DB::table('rent_request_ar')->find($id) ;

		return view('request.rent2_ar', compact('rent'));
    }


     public function renting(rent_request_ar $rent) {

		$rent = $rent->orderByRaw('created_at DESC')->paginate(3);

		return view('request.renting_ar', compact('rent'));
	}

	public function destroyrenting($id, rent_request_ar $rent) {

		$rent->find($id)->delete();

		return redirect('/request/rent_ar')->withFlashMessage('تdeleted correctly');

	}

	public function rent_request() {

		return view('request.renting_form_ar');
	}

	public function rent_request_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
		     'activity' => 'required|max:255|min:1',
			'description' => 'required|max:255',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
		     'activity' => $request->activity,
			 'description' => $request->description,
		
		];

		$rent_request = new rent_request_ar;
		$rent_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}


	//main_meeting

	   public function mains($id)
    {
    	
		$asd =DB::table('main_meet_request_ar')->find($id) ;

		return view('request.mains_ar', compact('asd'));
    }

	 public function index(main_meet_request_ar $main) {

		$asd = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.main_ar', compact('asd'));
	}

	public function destroy($id, main_meet_request_ar $main) {

		$main->find($id)->delete();

		return redirect('/request/main_ar')->withFlashMessage('deleted correctly');

	}

	public function main_meet() {

		return view('request.main_meet_form_ar');
	}

		public function main_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		
		];
		
		$main_meet_request = new main_meet_request_ar;
		$main_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('request added correctly');
	}

	//maintance request


	  public function maint($id)
    {
    	
		$mains =DB::table('main_request_ar')->find($id) ;

		return view('request.maint_ar', compact('mains'));
    }
   
    public function indexm(main_request_ar $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_main_ar', compact('mains'));
	}

	public function destroym($id, main_request_ar $mains) {

		$mains->find($id)->delete();

		return redirect('/request/main_ar')->withFlashMessage('تdeleted correctly ');

	}

	public function main_request() {

		return view('request.main_form_ar');
	}

	public function main_request_submit(Request $request) {

		$request->validate([

			'area' => 'required|max:255|min:1',
			'group' => 'required|max:255|min:1',
			'q_number' => 'required|max:255',
			'm_number' => 'required|max:255',
			'type' => 'required|max:255',
			'description' => 'max:1000',
		]);
		$data = [

			'area' => $request->area,
			'group' => $request->group,
			'q_number' => $request->q_number,
			'm_number' => $request->m_number,
			'type' => $request->type,
			'description' => $request->description,
		];

		if ($request->type == 'كهربى') {
			$data['كهربى'] = 1;
		} elseif ($request->type == 'مياة') {
			$data['مياة'] = 2;
		} elseif ($request->type == 'صحى') {
			$data['صحى'] = 3;
		
		} elseif ($request->type == 'اطفاء') {
			$data['اطفاء'] = 4;
		}elseif ($request->type == 'اخرى') {
			$data['اخرى'] = 5;
		}


		$main_request = new main_request_ar;
		$main_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//manager
	public function directs($id)
    {
    	
		$mains =DB::table('direct_meet_request_ar')->find($id) ;

		return view('request.directs_ar', compact('mains'));
    }
      public function direct(direct_meet_request_ar $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_direct_ar', compact('mains'));
	}

	public function destroydirect($id, direct_meet_request_ar $mains) {

		$mains->find($id)->delete();

		return redirect('/request/direct_ar')->withFlashMessage('تdeleted correctly ');

	}

	public function manager_meet() {

		return view('request.manager_meet_form_ar');
	}

	public function manager_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		];

		$manager_request = new direct_meet_request_ar;
		$manager_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}

	//low
    
	public function legals($id)
    {
    	
		$mains =DB::table('legal_meet_request_ar')->find($id) ;

		return view('request.legals_ar', compact('mains'));
    }
     public function legal(legal_meet_request_ar $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_legal_ar', compact('mains'));
	}

	public function destroylegal($id, legal_meet_request_ar $mains) {

		$mains->find($id)->delete();

		return redirect('/request/legal_ar')->withFlashMessage('deleted correctly ');

	}
	public function low_meet() {

		return view('request.low_meet_form_ar');
	}

	public function low_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		];

		$low_request = new legal_meet_request_ar;
		$low_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
   //projects

	   public function project1($id)
    {
    	
		$mains =DB::table('col_meet_request_ar')->find($id) ;

		return view('request.project1_ar', compact('mains'));
    }
    public function project(col_meet_request_ar $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_project_ar', compact('mains'));
	}

	public function destroyproject($id, col_meet_request_ar $mains) {

		$mains->find($id)->delete();

		return redirect('/request/project_ar')->withFlashMessage('تdeleted correctly ');

	}

	public function projects_meet() {

		return view('request.projects_meet_form_ar');
	}

	public function projects_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
		];

		$pro_request = new col_meet_request_ar;
		$pro_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
}
