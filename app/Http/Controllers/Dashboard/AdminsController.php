<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index( ) 
    {
 
    $user = $user->paginate(3);

    return view('Dashboardadmin.admin.user_index', compact('user'));
   }

public function Createuser( ) {
    
    return view('Dashboardadmin.adminuser.add_user');
}

public function add(Request $request) {
    $request->validate([
        'name' => 'required|max:255|min:1',
        'email' => 'unique:users|max:255|min:1',
        'password' => 'required|max:255',
    ]);
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'manage_id' => $request->manage_id,
        'password' => Hash::make($request->password),
    ];
    if ($request->auth == 'admin') {
        $data['admin'] = 1;
    } elseif ($request->auth == 'manager') {
        $data['admin'] = 2;
    } elseif ($request->auth == 'user') {
        $data['admin'] = 3;
    }
    $user = new user;
    $user->create($data);
    return Redirect()->back()->withFlashMessage('user added correctly');
}

public function edit($id, managements $mang) {
    $manages = $mang->pluck('manage_name', 'id');
    $user = User::find($id);
    return view('admin.user.edit', compact('user', 'manages'));
}

public function update(Request $req, $id) {

    $userupdate = User::find($id);

    $userupdate->fill($req->all())->save();

    return Redirect()->back()->withFlashMessage('updated done');
}

public function destroy($id, User $user) {

    $user->find($id)->delete();
    bu::where('user_id', $id)->delete();
    return redirect('/adminpanel/users')->withFlashMessage('user deleted correctly ');

}
}
