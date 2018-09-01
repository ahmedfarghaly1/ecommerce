<?php

namespace App\Http\Controllers;

use Auth;
use App\abouts;
use App\User;
use App\managements_ar;
use App\transactions_ar;
use Illuminate\Http\Request;
use App\Notifications\transactions;
use Carbon\Carbon ;


class transactionsController extends Controller {
	public function index_ar() {

			$transactions = transactions_ar::where('department_sender',Auth::user()->manage_id)->get();
			return view('admin.transactions.index_ar',compact('transactions'));
	}

	public function get_accounts()
	{
			dd('assd');
	}

	public function destroy($id) {
			transactions_ar::findOrFail($id)->delete();
			return back();
	}

	public function edit($id, abouts $pro) {



	}
	public function create_transaction_in_ar($id=null) {
			$managemnts = managements_ar::all();
			if($id !=null)
			{
				// edit page
				$managemnts_out = transactions_ar::where('type','out')->get();
				$transaction = transactions_ar::findOrFail($id);
				$transactions = transactions_ar::where('department_sender',Auth::user()->manage_id)->get();
				return view('admin.transactions.in.create_ar',compact('managemnts_out','transaction','transactions','managemnts'));

			}
			else
			{  // create page
				$managemnts_out = transactions_ar::where('type','out')->get();
				$transactions = transactions_ar::all();
				return view('admin.transactions.in.create_ar',compact('managemnts','transactions','managemnts_out'));

			}
	}
	public function create_transaction_out_ar() {
			$managemnts = managements_ar::all();
			$managemnts_out = transactions_ar::where('type','out')->get();
			return view('admin.transactions.out.create_ar',compact('managemnts','managemnts_out'));

	}

	public function add_in_transaction(Request $request) {

				if(isset($request->exit))
				{
						return redirect('adminpanel_ar/Transactions');
				}


					$request->validate([
						'department_number' => 'required|integer',
						'receive_type' => 'required',
						'transaction_date' => 'required|date',
						'transaction_topic' => 'required|string|max:2000|min:1',
						'department_receive' => 'required|string|max:255|min:1',


					]);


				if ($request->hasFile('file')) {
					$file = $request->file('file');
					$name = 'attached_file'. str_slug(time()) . '.' . $file->getClientOriginalExtension();
					$destinationPath = public_path('/attached_files');
					$filePath = '/attached_files' . "/" . $name;
					$file->move($destinationPath, $name);
				}
				/////////////////////////// edit action ////////////////////////
				if(isset($request->edit))
				{

					$transaction = transactions_ar::findOrFail($request->edit);
					$transaction->department_sender = Auth::user()->manage_id;
					$transaction->department_number = $request->department_number;
					$transaction->transaction_date = $request->transaction_date;
					$transaction->transaction_topic = $request->transaction_topic;
					$transaction->notes = $request->notes;
					if(isset($filePath))
					{
						$transaction->file = $filePath;
					}
					$transaction->admin_id = Auth::user()->id;
					$transaction->save();

					//print_r($request->all());
					//Auth::user()->notify(new transactions(Auth::user()));
					return Redirect()->back()->withFlashMessage('تم تعديل المعاملة بنجاح');
				}

				//////////////////////// create transaction reply /////////////
				elseif (isset($request->create_reply))
				{

					// register transaction in db
					$transaction = new transactions_ar();
					if($request->receive_type == '0')
					{
							// in
							$transaction->department_sender = Auth::user()->manage_id;
							$transaction->department_number = $request->department_number;
							$transaction->transaction_date = $request->transaction_date;
							$transaction->transaction_topic = $request->transaction_topic;
							$transaction->department_receive = $request->department_receive;
							$transaction->parent =$request->create_reply;
							$transaction->type = 'in';
							$transaction->notes = $request->notes;
							$transaction->file =isset($filePath)?$filePath:null;
							$transaction->admin_id =Auth::user()->id;
							$transaction->save();


							// notification
							$managemnt = managements_ar::findOrFail($transaction->department_sender);
							$admin = User::where('admin','1')->where('manage_id',$transaction->department_receive)->first();
							$sender_admin = User::findOrFail($transaction->admin_id);
							if(isset($admin))
							{
								$admin->notify(new transactions($transaction->id,$sender_admin,$managemnt));

							}
							/*$transaction->create([
									'department_sender' => Auth::user()->manage_id,
									'department_number' => $request->department_number,
									'transaction_date' => $request->transaction_date,
									'transaction_topic' => $request->transaction_topic,
									'department_receive'=>$request->department_receive,
									'parent' => $request->create_reply,
									'type' => 'in',
									'notes' => $request->notes,
									'file' => isset($filePath)?$filePath:null,
									'admin_id' => Auth::user()->id,
							]);*/
					}
					elseif ($request->receive_type == '1')
					{
						// out
						$transaction->department_sender = $request->department_send;
						$transaction->department_number = $request->department_number;
						$transaction->transaction_date = $request->transaction_date;
						$transaction->transaction_topic = $request->transaction_topic;
						$transaction->department_receive = $request->department_receive;
						$transaction->parent =$request->create_reply;
						$transaction->type = 'out';
						$transaction->notes = $request->notes;
						$transaction->file =isset($filePath)?$filePath:null;
						$transaction->admin_id =Auth::user()->id;
						$transaction->save();
						// notification
						$managemnt = $transaction->department_sender;
						$admin = User::where('admin','1')->where('manage_id',$transaction->department_receive)->first();
						$sender_admin = User::findOrFail($transaction->admin_id);
						if(isset($admin))
						{
							$admin->notify(new transactions($transaction->id,$sender_admin,$managemnt));
						}
						/*$transaction->create([
								'department_sender' => $request->department_send,
								'department_number' => $request->department_number,
								'transaction_date' => $request->transaction_date,
								'transaction_topic' => $request->transaction_topic,
								'department_receive'=>$request->department_receive,
								'parent' => $request->create_reply,
								'type' => 'out',
								'notes' => $request->notes,
								'file' => isset($filePath)?$filePath:null,
								'admin_id' => Auth::user()->id,
						]);*/
					}
					elseif ($request->receive_type == '2')
					{
						//employer
						$transaction->department_sender = Auth::user()->manage_id;
						$transaction->department_number = $request->department_number;
						$transaction->transaction_date = $request->transaction_date;
						$transaction->transaction_topic = $request->transaction_topic;
						$transaction->department_receive = $request->department_receive;
						$transaction->parent =$request->create_reply;
						$transaction->type = 'employer';
						$transaction->notes = $request->notes;
						$transaction->file =isset($filePath)?$filePath:null;
						$transaction->admin_id =Auth::user()->id;
						$transaction->save();

						// notification

						$managemnt = managements_ar::findOrFail($transaction->department_sender);
						$admin = User::findOrFail($transaction->department_receive);
						$sender_admin = User::where('admin','1')->where('manage_id',$transaction->department_sender)->first();
						if(isset($admin))
						{
							$admin->notify(new transactions($transaction->id,$sender_admin,$managemnt));
						}

						/*$transaction->create([
								'department_sender' => Auth::user()->manage_id,
								'department_number' => $request->department_number,
								'transaction_date' => $request->transaction_date,
								'department_receive'=>$request->department_receive,
								'transaction_topic' => $request->transaction_topic,
								'parent' => $request->create_reply,
								'type' => 'employer',
								'notes' => $request->notes,
								'file' => isset($filePath)?$filePath:null,
								'admin_id' => Auth::user()->id,
						]);*/
					}
					// send notifyication
				}
				///////////////////////// add action  //////////////////////////
				else
				{
					$transaction = new transactions_ar();
					if($request->receive_type == '0')
					{
							// in
							$transaction->create([
									'department_sender' => Auth::user()->manage_id,
									'department_number' => $request->department_number,
									'transaction_date' => $request->transaction_date,
									'transaction_topic' => $request->transaction_topic,
									'department_receive'=>$request->department_receive,
									'type' => 'in',
									'notes' => $request->notes,
									'file' => isset($filePath)?$filePath:null,
									'admin_id' => Auth::user()->id,
							]);
					}
					elseif ($request->receive_type == '1')
					{
						// out
						$transaction->create([
								'department_sender' => $request->department_send,
								'department_number' => $request->department_number,
								'transaction_date' => $request->transaction_date,
								'transaction_topic' => $request->transaction_topic,
								'department_receive'=>$request->department_receive,
								'type' => 'out',
								'notes' => $request->notes,
								'file' => isset($filePath)?$filePath:null,
								'admin_id' => Auth::user()->id,
						]);
					}
					elseif ($request->receive_type == '2')
					{
						//employer
						$transaction->create([
								'department_sender' => Auth::user()->manage_id,
								'department_number' => $request->department_number,
								'transaction_date' => $request->transaction_date,
								'department_receive'=>$request->department_receive,
								'transaction_topic' => $request->transaction_topic,
								'type' => 'employer',
								'notes' => $request->notes,
								'file' => isset($filePath)?$filePath:null,
								'admin_id' => Auth::user()->id,
						]);
					}
					//print_r($request->all());
					//Auth::user()->notify(new transactions(Auth::user()));
					return Redirect()->back()->withFlashMessage('تم اضافه المعاملة  بنجاح');
				}

	}

	public function send_transaction($id)
	{
			$admin = Auth::user();
			$employers = User::where('manage_id',$admin->manage_id)->whereNotIn('id',[$admin->id])->get();
			$managemnts = managements_ar::all();
			return view('admin.transactions.in.send_transaction',compact('managemnts','employers','id'));
	}

	public function markAsRead()
	{
			$notifications = Auth::user()->unreadNotifications;
			foreach ($notifications as $key => $notification) {
					$transaction_id = $notification->data['transaction'];
					$transaction = transactions_ar::findOrFail($transaction_id);
					$transaction->seen = Carbon::now();
					$transaction->save();
			}

			Auth::user()->unreadNotifications->markAsRead();
	}
	public function send_transaction_post1(Request $request,$id)
	{
			if(isset($request->employer))
			{
					$transaction = transactions_ar::findOrFail($id);
					$user = User::findOrFail($request->employer);
					$transaction->department_receive = $user->manage_id;
					$transaction->type = 'in';
					$transaction->save();
					$managemnt = managements_ar::findOrFail($user->manage_id)->manage_name;
					User::findOrFail($request->employer)->notify(new transactions($id,Auth::user(),$managemnt));
					//Auth::user()->notify(new transactions($id,Auth::user(),$managemnt));

			}
			if(isset($request->managment))
			{
					$admin = User::where('manage_id',$id)->where('admin','1')->first();
					if(count($admin) == 1)
					{
						$admin->notify(new transactions($id,Auth::user()));
					}
					$transaction = transactions_ar::findOrFail($id);
					$transaction->department_receive = $admin->manage_id;
					$transaction->type = 'out';
					$transaction->save();
			}
			return back();
	}
	public function show_transaction_body($id)
	{
			$transaction = transactions_ar::findOrFail($id);
			return view('admin.transactions.show_notification_body',compact('transaction'));
	}

	public function add_out_transaction(Request $request) {

				$request->validate([
					'department_receive' => 'required|string|max:255|min:1',
					'department_send' => 'required|string|max:255|min:1',
					'department_number' => 'required|integer',
					'transaction_date' => 'required|date',
					'transaction_topic' => 'required|string|max:2000|min:1',

				]);
				if ($request->hasFile('file')) {
					$file = $request->file('file');
					$name = 'attached_file'. str_slug(time()) . '.' . $file->getClientOriginalExtension();
					$destinationPath = public_path('/attached_files');
					$filePath = $destinationPath . "/" . $name;
					$file->move($destinationPath, $name);
				}

				$transaction = new transactions_ar();
				$transaction->create([
						'department_receive' => $request->department_receive,
						'department_sender' => $request->department_send,
						'department_number' => $request->department_number,
						'transaction_date' => $request->transaction_date,
						'transaction_topic' => $request->transaction_topic,
						'notes' => $request->notes,
						'file' => isset($filePath)?$filePath:null,
						'type' => 'out',
						'admin_id' => Auth::user()->id,

				]);
				//print_r($request->all());
				return Redirect()->back()->withFlashMessage('تم اضافه المعاملة  بنجاح');
	}

	public function search_transaction(Request $request)
	{
			if(isset($request->department_receive))
			{
			}
			$transactions = transactions_ar::where('department_number',$request->department_number)
			->orwhere('transaction_date',$request->transaction_date)
			->orwhere('department_receive',$request->department_receive)
			->orwhere('transaction_topic', 'like', '%' . $request->transaction_topic . '%')
			->orwhere('notes','like', '%' . $request->notes . '%')
			->get();
			return view('admin.transactions.index_ar',compact('transactions'));
	}

	public function update(Request $request, $id) {

	}

	public function get_received_dynamic_data(Request $request)
	{
			if($request->option == '0')
			{
				$admin = Auth::user();
				$managemnts = managements_ar::where('id','!=',$admin->manage_id)->get();
				return response(['managements'=>$managemnts]);
			}
			elseif($request->option == '1')
			{
				$managemnts = managements_ar::all();
				$managemnts_out = transactions_ar::where('type','out')->get();
				return response(['managements'=>$managemnts,'managemnts_out'=>$managemnts_out]);

			}
			elseif($request->option == '2')
			{
				$admin = Auth::user();
				$employers = User::where('manage_id',$admin->manage_id)->where('id','!=',$admin->id)->get();
				return response(['employers'=>$employers]);
			}
	}

	public function reply_need(Request $request)
	{
			$transaction = transactions_ar::findOrFail($request->transaction_id);
			$transaction->action_need = 'replyNeed';
			$transaction->save();
			return response(['id'=>$transaction]);
	}

	public function send_transaction_ajax(Request $request)
	{
		$transaction = transactions_ar::findOrFail($request->transaction_id);
		// in
		if($transaction->type =='in')
		{
			$managemnt = managements_ar::findOrFail($transaction->department_sender);
			$admin = User::where('admin','1')->where('manage_id',$transaction->department_receive)->first();
			$sender_admin = User::findOrFail($transaction->admin_id);
			if(isset($admin))
			{
				$admin->notify(new transactions($request->transaction_id,$sender_admin,$managemnt));

			}
		}
		// out
		elseif($transaction->type =='out')
		{
			$managemnt = $transaction->department_sender;
			$admin = User::where('admin','1')->where('manage_id',$transaction->department_receive)->first();
			$sender_admin = User::findOrFail($transaction->admin_id);
			if(isset($admin))
			{
				$admin->notify(new transactions($request->transaction_id,$sender_admin,$managemnt));
			}
		}
		// employer
		elseif($transaction->type =='employer')
		{
			$managemnt = managements_ar::findOrFail($transaction->department_sender);
			$admin = User::findOrFail($transaction->department_receive);
			$sender_admin = User::where('admin','1')->where('manage_id',$transaction->department_sender)->first();
			if(isset($admin))
			{
				$admin->notify(new transactions($request->transaction_id,$sender_admin,$managemnt));
			}
		}
		//Auth::user()->notify(new transactions($id,Auth::user(),$managemnt));

		$transaction = transactions_ar::findOrFail($request->transaction_id);
		return response(['id'=>$transaction]);
	}
}
