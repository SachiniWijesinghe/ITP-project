<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubCategoryFormRequest;
use App\Models\department;
use App\Models\category;
use App\Models\subcategory;
use DB;
use View;
use Session;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{



    public function store(SubCategoryFormRequest $request ){
        
      
        $Subcategory= new subcategory();
        
        $Subcategory->Description=$request->c_name;
        $Subcategory->Category_idCategory=$request->idCategory;
     
        $Subcategory->save();


     return back()->withInput( );
    
       }
//show tabale data and serch funtion
       public function show(Request $request )
    {
        $Datad=category::all();// drow down view
     
      $search= $request['search']??"";  // search and table detais
      if($search !=null){
          $Data=subcategory::where('Description','like',"%$search%")->get();

      }else{
            $Data=subcategory::all();
      }
    
     return View::make('Subcategory')->with('Data', $Data)->with('Datad', $Datad);
     //return View('Category',['Datad'=>$Datad]);

    }
    

    public function destroy($id) //delete method
    {
        $data=subcategory::findOrFail($id);
        $data->delete();
        
        return response()->json(['states'=>'Sub Category Deleted successfully']);
      
    
        
  
     //  return redirect('Subcategory');


    }
    public function update1(Request $req)
    {
        
       $data=Subcategory::find($req->idSubcategory);
        $data->Description=$req->Description;
        $data->Category_idCategory=$req->idCategory;
       $data->save();
       return redirect('Subcategory'); 

        
      

    }
    public function shows($idSubcategory)
    {
      
        $Datad1=category::all();// drow down view
     
        $Data1=subcategory::find($idSubcategory);
       // return view ('Categoryupdate',['data'=>$data]);
       return View::make('SubCategoryupdate')->with('Data1', $Data1)->with('Datad1', $Datad1);

    }

  
    public function reportcategorys()
    {   
       
      
      return view('Category_report');
    }









    //
}
