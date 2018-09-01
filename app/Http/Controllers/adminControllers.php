<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class adminControllers extends Controller
{

        //All users data
        public function index(User $user ) 
        {
        $user = $user->paginate(3);
        return view('Dashboardadmin.admin.user_index', compact('user'));
        }

        //create user adding form
        public function Createuser( ) {
            
            return view('Dashboardadmin.admin.add_user');
        }


//store user data
        public function add(Request $request) {


            $request->validate([
                'name' => 'required|max:255|min:1',
                'email' => 'unique:users|max:255|min:1',
                'password' => 'required|max:255',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $imagePath = $destinationPath . "/" . $name;
                $image->move($destinationPath, $name);
            }

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'image' => "images/" . $name,
                'password' => Hash::make($request->password),
            ];
            if ($request->admin == 'مدير') {
                $data['admin'] = 1;
            } elseif ($request->admin == 'تاجر') {
                $data['admin'] = 2;
            } elseif ($request->admin == 'محل') {
                $data['admin'] = 3;
            }
            $user = new user;
            $user->create($data);
            return Redirect()->back()->withFlashMessage('تم اضافة المستخدم بنجاح');
        }


        //create sdit form
        public function edit($id) {
          
            $user = User::find($id);
            return view('Dashboardadmin.admin.Edit', compact('user'));
        }


        //update user data
        public function update(Request $req, $id) {

            $userupdate = User::find($id);

            $userupdate->fill($req->all())->save();

            return Redirect()->back()->withFlashMessage(' تم تعديل بيانات المستخدم بنجاح');
        }

          //search in user
      public function search(Request $request) 
      {
          $user = User::where('name', 'LIKE', '%' . $request->s . '%')
          ->orWhere('id', 'LIKE', '%' . $request->s . '%')
          ->orWhere('email', 'LIKE', '%' . $request->s . '%')
          ->orWhere('admin', 'LIKE', '%' . $request->s . '%')
          ->orWhere('created_at', 'LIKE', '%' . $request->s . '%');
          $user =$user->get();
          return view('Dashboardadmin.admin.search_index', compact('user'));
      }


      //delete more rows
      public function deleteid(Request $request) 
      {
         $delid=$request->input('delid');
         User::whereIn('id', $delid)->delete(); 
         return redirect('/adminpanel/user')->withFlashMessage('تم حذف المستخدم بنجاح ');

      }

}
