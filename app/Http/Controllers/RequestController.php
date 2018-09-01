<?php

namespace App\Http\Controllers;
use App\fin_meet_request;
use App\fin_request;
use App\t_request;
use App\main_meet_request;
use App\main_request;
use App\rent_meet_request;
use App\col_meet_request;
use App\rent_request;
use App\managements;
use App\legal_meet_request;
use App\direct_meet_request;
use Illuminate\Http\Request;
use DB;
class RequestController extends Controller {
  
  //finance
     
      public function fin($id)
    {
    	
		$fin =DB::table('fin_meet_request')->find($id) ;

		return view('request.fin_more', compact('fin'));
    }

	 public function indexfin(fin_meet_request $fin) {

		$fin = $fin->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_fin', compact('fin'));
	}

	public function destroyfin($id, fin_meet_request $fin) {

		$fin->find($id)->delete();

		return redirect('/request/fins')->withFlashMessage('deleted correctly');

	}
	public function fin_meet() {

		return view('request.fin_meet_form');
	}

	public function fin_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'required|max:25',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		];

		$fin_meet_request = new fin_meet_request;
		$fin_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//inquiry


	 public function indexinquiry(fin_request $fin) {

		$fins = $fin->orderByRaw('created_at DESC')->paginate(3);

		return view('request.inquiry', compact('fins'));
	}

	public function destroyinquiry($id, fin_request $fin) {

		$fin->find($id)->delete();

		return redirect('/request/fin')->withFlashMessage('deleted correctly ');

	}
	public function fin_inquiry() {

		return view('request.fin_inquiry_form');
	}

	public function fin_inquiry_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'cheek_name' =>'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'manage_id' => 'required|max:25',
			
		
		]);

		$data = [

			'name' => $request->name,
			'cheek_name' => $request->cheek_name,
			'phone' => $request->phone,
			'manage_id' => $request->manage_id,
			
			
		];

		$fin_request = new fin_request;
		$fin_request->create($data);
		return Redirect()->back()->withFlashMessage('user added correctly');;
	}


	//end fin
	//pro request


    public function pros($id)
    {
    	
		$pro =DB::table('t_request')->find($id) ;

		return view('request.pros', compact('pro'));
    }
	 public function pro(t_request $pro) {

		$pro = $pro->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_pro', compact('pro'));
	}

	public function destroypro($id, t_request $pro) {

		$pro->find($id)->delete();

		return redirect('/request/pro')->withFlashMessage('deleted correctly ');

	}
	public function t_meet() {

		return view('request.t_meet_form');
	}

	public function t_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'area' => 'required|max:255',
			'manage_id' => 'max:10',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'area' => $request->area,
			'manage_id' => $request->manage_id,
		];
		
		$t_meet_request = new t_request;
		$t_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('request added correctly');
	}

	//rent
    
       public function rents($id)
    {
    	
		$rent =DB::table('rent_meet_request')->find($id) ;

		return view('request.rents', compact('rent'));
    }

	 public function rent(rent_meet_request $rent) {

		$rent = $rent->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_rent', compact('rent'));
	}

	public function destroyrent($id, rent_meet_request $rent) {

		$rent->find($id)->delete();

		return redirect('/request/rents')->withFlashMessage('deleted correctly ');

	}
	public function rent_meet() {

		return view('request.rent_meet_form');
	}

	public function rent_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'max:10',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		];

		$rent_meet_request = new rent_meet_request;
		$rent_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//request renting
        public function rent2($id)
    {
    	
		$rent =DB::table('rent_request')->find($id) ;

		return view('request.rent2', compact('rent'));
    }


     public function renting(rent_request $rent) {

		$rent = $rent->orderByRaw('created_at DESC')->paginate(3);

		return view('request.renting', compact('rent'));
	}

	public function destroyrenting($id, rent_request $rent) {

		$rent->find($id)->delete();

		return redirect('/request/rent')->withFlashMessage('تdeleted correctly');

	}
	public function rent_request() {

		return view('request.renting_form');
	}

	public function rent_request_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
		     'activity' => 'required|max:255|min:1',
			'description' => 'required|max:255',
			'manage_id' => 'required|max:25',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
		    'activity' => $request->activity,
			'description' => $request->description,
			'manage_id' => $request->manage_id,
		
		];

		$rent_request = new rent_request;
		$rent_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}


	//main_meeting

	   public function mains($id)
    {
    	
		$asd =DB::table('main_meet_request')->find($id) ;

		return view('request.mains', compact('asd'));
    }

	 public function index(main_meet_request $main) {

		$asd = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.main', compact('asd'));
	}

	public function destroy($id, main_meet_request $main) {

		$main->find($id)->delete();

		return redirect('/request/main')->withFlashMessage('deleted correctly');

	}

	public function main_meet() {

		return view('request.main_meet_form');
	}

		public function main_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'required|max:25',
		
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		
		];
		
		$main_meet_request = new main_meet_request;
		$main_meet_request->create($data);
		return Redirect()->back()->withFlashMessage('request added correctly');
	}

	//maintance request
      public function maint($id)
    {
    	
		$mains =DB::table('main_request')->find($id) ;

		return view('request.maint', compact('mains'));
    }
   
    public function indexm(main_request $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_main', compact('mains'));
	}

	public function destroym($id, main_request $mains) {

		$mains->find($id)->delete();

		return redirect('/request/main')->withFlashMessage('تdeleted correctly ');

	}
	public function main_request() {

		return view('request.main_form');
	}

	public function main_request_submit(Request $request) {

		$request->validate([

			'area' => 'required|max:255|min:1',
			'group' => 'required|max:255|min:1',
			'q_number' => 'required|max:255',
			'm_number' => 'required|max:255',
			'type' => 'required|max:255',
			'description' => 'max:1000',
			'manage_id' => 'required|max:25',
		]);
		$data = [

			'area' => $request->area,
			'group' => $request->group,
			'q_number' => $request->q_number,
			'm_number' => $request->m_number,
			'type' => $request->type,
			'description' => $request->description,
			'manage_id' => $request->manage_id,
		];

		if ($request->type == 'Electricity') {
			$data['Electricity'] = 1;
		} elseif ($request->type == 'water') {
			$data['water'] = 2;
		} elseif ($request->type == 'healthy') {
			$data['healthy'] = 3;
		
		} elseif ($request->type == 'Firefighting') {
			$data['Firefighting'] = 4;
		}elseif ($request->type == 'others') {
			$data['others'] = 5;
		}


		$main_request = new main_request;
		$main_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
	//manager

	public function directs($id)
    {
    	
		$mains =DB::table('direct_meet_request')->find($id) ;

		return view('request.directs', compact('mains'));
    }
      public function direct(direct_meet_request $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_direct', compact('mains'));
	}

	public function destroydirect($id, direct_meet_request $mains) {

		$mains->find($id)->delete();

		return redirect('/request/direct')->withFlashMessage('تdeleted correctly ');

	}
	public function manager_meet() {

		return view('request.manager_meet_form');
	}

	public function manager_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'max:50',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		];

		$manager_request = new direct_meet_request;
		$manager_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}

	//legal 

	public function legals($id)
    {
    	
		$mains =DB::table('legal_meet_request')->find($id) ;

		return view('request.legals', compact('mains'));
    }
     public function legal(legal_meet_request $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_legal', compact('mains'));
	}

	public function destroylegal($id, legal_meet_request $mains) {

		$mains->find($id)->delete();

		return redirect('/request/legal')->withFlashMessage('deleted correctly ');

	}
	public function low_meet() {

		return view('request.low_meet_form');
	}

	public function low_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'max:10',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		];

		$low_request = new legal_meet_request;
		$low_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
   //projects

    public function project1($id)
    {
    	
		$mains =DB::table('col_meet_request')->find($id) ;

		return view('request.project1', compact('mains'));
    }
    public function project(col_meet_request $main) {

		$mains = $main->orderByRaw('created_at DESC')->paginate(3);

		return view('request.index_project', compact('mains'));
	}

	public function destroyproject($id, col_meet_request $mains) {

		$mains->find($id)->delete();

		return redirect('/request/project')->withFlashMessage('تdeleted correctly ');

	}
  

	public function projects_meet() {

		

		return view('request.projects_meet_form');
	}

	public function projects_meet_submit(Request $request) {

		$request->validate([

			'name' => 'required|max:255|min:1',
			'phone' => 'required|max:255|min:1',
			'prod_name' => 'required|max:255',
			'cause' => 'max:1000',
			'manage_id' => 'max:10',
		]);
		$data = [

			'name' => $request->name,
			'phone' => $request->phone,
			'prod_name' => $request->prod_name,
			'cause' => $request->cause,
			'manage_id' => $request->manage_id,
		];

		$pro_request = new col_meet_request;
		$pro_request->create($data);
		return Redirect()->back()->withFlashMessage('تم تسجيل المقابله بنجاح ');
	}
}
