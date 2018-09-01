<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bu;

class bucontroller extends Controller
{

	//return all information
    public function index(bu $bu)
    {
      $bu=$bu->all();
    	return view ('admin.bu.index',compact('bu'));
    }

     public function create()
    {

    	
    	return view('admin.bu.add');
    }


   public function edit($id) 

   {

    $bu = bu::find($id);

    return view('admin.bu.edit' , compact('bu'));
    }
    //upsate information

    public function update($id ) 
    {

      $buupdate = bu::find($id);

      $buupdate->fill(Request::all())->save();

      return Redirect::back()->withFlashMessage('تمت الاضافه بنجاح ');
    }

    //delete

     public function destroy($id ,bu $bu)

     {

    $bu->find($id)->delete();
    
    return redirect('/adminpanel/bu')->withFlashMessage('تم الحذف بنجاح  ');

     }

    public function store(Requests\burequest $burequest ,bu $bu)
    {

        $user=Auth::user();
        $data=[
           'bu_name'=>$burequest->bu_name,
           'bu_price'=>$burequest->bu_price,
           'bu_rent'=>$burequest->bu_rent,
           'bu_square'=>$burequest->bu_square,
           'bu_type'=>$burequest->bu_type, 
           'bu_small_dis'=>$burequest->bu_small_dis,
           'bu_meta'=>$burequest->bu_meta,
           'bu_langtuide'=>$burequest->bu_langtuide,
           'bu_latitude'=>$burequest->bu_latitude, 
           'bu_larg_dis'=>$burequest->bu_larg_dis, 
           'bu_status'=>$burequest->bu_status, 
           'user_id'=>$user->id,
           'rooms'=>$burequest->rooms,

        ];
        $bu->create($data);
    	return Redirect('/adminpanel/bu')->withFlashMessage('success');
    }
     
     //showall products
    public function showall_enables( bu $bu)
    {

    	$buall=$bu->where('bu_status' ,1)->orderBy ('id','desc')->get();

    	return view ('website.bu.all',compact('buall'));	
    }

    
}
