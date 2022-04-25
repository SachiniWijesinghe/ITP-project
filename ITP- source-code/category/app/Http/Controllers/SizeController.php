<?php

namespace App\Http\Controllers;
use App\Http\Requests\SizeFormRequest;
use App\Models\size;
use App\Models\department;
use Illuminate\Http\Request;
use View;

class SizeController extends Controller
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
    public function store(SizeFormRequest $request)
    {
        //
        $size= new size();
        $size->Description=$request->c_name;
        $size->save();



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
          $Data=size::where('Description','like',"$search")->get();

      }else{
            $Data=size::all();
      }
     
      
     return View::make('Size')->with('Data', $Data);


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
    public function shows($idSize)
    {
       // return department::find($idDepartment);
        
        $data=size::find($idSize);
        return view ('SizeUpdate',['data'=>$data]);

    }
    public function update2(Request $req)
    {
        
        $data=size::find($req->idSize);
        $data->Description=$req->Description;
       $data->save();
       return redirect('Size'); 

        
      

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSize)
    {
        //
        $data=size::find($idSize);
        $data->delete();
        return redirect('Size');

    }
    
}
