<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryFormRequest;

use App\Models\department;
use App\Models\category;
use App\Models\subcategory;
use App\Models\size;
use View;
use Session;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{


    




    public function store(CategoryFormRequest $request ){
        
      
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
    public function destroy($id) //delete method
    {
       
       $data=category::findOrFail($id);
        $data->delete();
        
        return response()->json(['states'=>'Category Deleted successfully']);
      // return redirect('Category');


       
    

    }
    public function update( Request $req  )
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



    public function reportcategory()
    {   
        // $post=DB::select(DB::raw("select Count(idCategory) as NO_of_categories,Department_idDepartment from category  GROUP BY Department_idDepartment;"));
          
      
        //    $data.="['".$val->Department_idDepartment."',".$val->NO_of_categories."],";

        // }
        //  $chartData=$data;
        //  return view('Category_report',compact('chartData'));

        
     $countD=department::count('Description');
     $countC=category::count('Description');
     $countS=subcategory::count('Description');
     $countM=size::count('Description');

/// return $tatol;
      return view('Category_report')->with('countD',$countD)->with('countC',$countC)->with('countS',$countS)->with('countM',$countM);
    
         

    }


}
