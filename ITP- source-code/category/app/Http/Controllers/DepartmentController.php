<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;
use View;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Department= new department();
        $Department->Description=$request->c_name;
        $Department->save();



       return back()->withInput();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
      $search= $request['search']??"";
      if($search !=null){
          $Data=department::where('Description','like',"%$search%")->get();

      }else{
            $Data=department::all();
      }
     
      
     return View::make('Department')->with('Data', $Data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    //public function edit(department $idDepathrtment)
  //  {                  //tabelname
       // $Eddepartment= department:: select('select * from Department where idDepartment=?',[$idDepartment]);
       // return view('DepartmentEdit',['department'=>$Eddepartmen]);
    //}
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function showd($idDepartment)
    {
       // return department::find($idDepartment);
        
        $data=department::find($idDepartment);
        return view ('Departmentupdate',['data'=>$data]);

    }
    public function update(Request $req)
    {
        
       $data=department::find($req->idDepartment);
        $data->Description=$req->Description;
       $data->save();
       return redirect('Department'); 

        
      

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($idDepartment)
    {
        //
        $data=department::find($idDepartment);
        $data->delete();
        return redirect('Department');

    }
    public function search_dep(){
        return view('search_dep');
    }
}
