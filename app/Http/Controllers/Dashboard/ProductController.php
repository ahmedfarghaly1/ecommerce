<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Categories;
class ProductController extends Controller
{
      //show product informations 
      public function index(Products $product) 
      {
      
          $products = $product->paginate(8);
      
          return view('Dashboardadmin.Seller.product_index', compact('products'));
      }

      //search in product
      public function search(Request $request) 
      {
      
          $product = Products::where('name', 'LIKE', '%' . $request->s . '%')
      
          ->orWhere('id', 'LIKE', '%' . $request->s . '%')
          ->orWhere('price', 'LIKE', '%' . $request->s . '%')
          ->orWhere('type', 'LIKE', '%' . $request->s . '%')
          ->orWhere('created_at', 'LIKE', '%' . $request->s . '%')
          ->orWhere('size', 'LIKE', '%' . $request->s . '%')
          ->orWhere('countities', 'LIKE', '%' . $request->s . '%');
      
          $product =$product->get();
      
      
          return view('Dashboardadmin.Seller.search_index', compact('product'));
      }





      //delete more rows
      public function deleteid(Request $request) 
      {
          

         $delid=$request->input('delid');

        $userid=Products::wherein('id',$delid)->select('category_id')->get();
     
        Categories::whereIn('id', $userid)->delete();
        Products::whereIn('id', $delid)->delete(); 
    
         return redirect('/adminpanel/product')->withFlashMessage('تم حذف المنتج بنجاح ');

      }


     
       //create seller form 
       public function CreateProduct(Request $request)
       {
           return view('Dashboardadmin.Seller.add_product');
       }

       


      //store products
      public function add(Request $request)
      {
      
      try
      {  
          $request->validate([
              'name' => 'max:255|min:1',
              'price' => 'max:255|min:1',
              'category_name' => 'max:255|min:1',
              'image' => 'max:255|min:1',
             
          ]);

          
          $category = [
            'category_name' => $request->category_name,
            'parent' => $request->parent,
        ];
    
        $cat = new Categories;
        $cat=Categories::create($category);


        if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$imagePath = $destinationPath . "/" . $name;
			$image->move($destinationPath, $name);
		}

          //dd($usernew->id);
          if($cat)
          {
          $product = [
              'name' => $request->name,
              'price' => $request->price,
              'type' => $request->type,
              'image' => "images/" . $name,
              'countities'=>$request->countities,
              'category_id'=>$cat->id,
              'size'=>$request->size,];
            
          }
          $products = new Products;
          $products->create($product);
        
          return Redirect()->back()->withFlashMessage('تم أضافة المنتج بنجاح');
      }    
      catch(Exception $e) 
          {
          return redirect('/');
          }
      }


      
      //edite form
      public function edit($id)
       {
          $data = Products::find($id);
        
          return view('Dashboardadmin.Seller.edit', compact('data'));

      }


      //update product information 
      public function update(Request $request, $id) 
      {
      
      try
      {

          $catid=Products::where('id',$id)->select('category_id')->first();
          $cid=$catid->category_id;
         // dd($cid);
         
          

          $cat = Categories::find($cid);
          //dd($user);
          $cat->category_name = $request->category_name;
          $cat->parent = $request->parent;
     
          $cat->save();
          
          
          if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = str_slug($request->project_desc) . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$imagePath = $destinationPath . "/" . $name;
			$image->move($destinationPath, $name);
        }
        
          $product = Products::find($id);
      
          $product->name = $request->name;
          $product->price = $request->price;
          $product->type = $request->type;
          $product->image = $request->image;
          $product->countities = $request->countities;
          $product->size = $request->size;
          $product->category_id = $cid;
     
          
          $product->save();
          
     

          return Redirect()->back()->withFlashMessage('تم تعديل المنتج بنجاح');
          
      }    
      catch(Exception $e) 
          {
          return redirect('/');
          }
      }

    

     

}
