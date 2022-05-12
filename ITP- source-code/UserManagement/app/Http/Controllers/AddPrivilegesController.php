<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_Privilege;
use View;

class AddPrivilegesController extends Controller
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
        //dd($request->all());

        $admin_Privilege = new Admin_Privilege;
        $admin_Privilege->role=$request->role;
        $admin_Privilege->addAdmin=$request->pv1;
        $admin_Privilege->addAdminPrivileges=$request->pv2;
        $admin_Privilege->addItems=$request->pv3;
        $admin_Privilege->addCategory=$request->pv4;
        $admin_Privilege->deliveryManagement=$request->pv5; 
        $admin_Privilege->save();
        return redirect('addPrivileges');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Admin_Privilege::all();
        return View::make('addAdminPrivileges')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Admin_Privilege::find($id);
        return view('updatePrivileges',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=Admin_Privilege::find($request->id);
        $data->role=$request->role;
        $data->addAdmin=$request->pv1;
        $data->addAdminPrivileges=$request->pv2;
        $data->addItems=$request->pv3;
        $data->addCategory=$request->pv4;
        $data->deliveryManagement=$request->pv5;
        $data->save();
        return redirect('addPrivileges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Admin_Privilege::find($id);
        $data->delete();
        return redirect('addPrivileges');
    }
}
