<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sitesetting;


class sitesettingcontroller extends Controller
{
    public function index(sitesetting $sitesetting)
    {
        
         $sitesetting=$sitesetting->all();
    	return view('admin.sitesetting.index',compact('sitesetting'));
    }

    public function store( Request $request ,sitesetting $sitesetting)
    {
        
       foreach (array_except($request->toArray(),['_token','submit']) as $key => $req) {
        $sitesettingupdate=$sitesetting->where('namesetting',$key)->get();
          $sitesettingupdate->fill(['value'=>$req])->save();

       }
       return Redirect::back()->withFlashMessage('success');
    }
}
