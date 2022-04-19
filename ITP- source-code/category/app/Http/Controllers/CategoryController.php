<?php

namespace App\Http\Controllers;
use App\Models\department;
use App\Models\category;
use View;
use Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    




    public function store(Request $request ){
        
      
        $Category= new category();
        
        $Category->Description=$request->c_name;
        $Category->Department_idDepartment=$request->idDepartment;
        //$num=$request->get('idDepartment');
        $Category->save();


     return back()->withInput( );
    
       }
//show tabale data and serch funtion
       public function show(Request $request )
    {
        $Datad=department::all();// drow down view
     
      $search= $request['search']??"";  // search and table detais
      if($search !=null){
          $Data=category::where('Description','like',"%$search%")->get();

      }else{
            $Data=category::all();
      }
    
     return View::make('Category')->with('Data', $Data)->with('Datad', $Datad);
     //return View('Category',['Datad'=>$Datad]);

    }
    public function destroy($idCategory) //delete method
    {
       
       $data=category::find($idCategory);
        $data->delete();
        
  
       return redirect('Category');


       
    

    }
    public function update(Request $req)
    {
        
       $data=category::find($req->idCategory);
        $data->Description=$req->Description;
        $data->Department_idDepartment=$req->idDepartment;
       $data->save();
       return redirect('Category'); 

        
      

    }
    public function showc($idCategory)
    {
      
        $Datad1=department::all();// drow down view
     
        $Data1=category::find($idCategory);
       // return view ('Categoryupdate',['data'=>$data]);
       return View::make('Categoryupdate')->with('Data1', $Data1)->with('Datad1', $Datad1);

    }




    public function search_dep(){
        return view('search_dep');
    }
       








    //
}
