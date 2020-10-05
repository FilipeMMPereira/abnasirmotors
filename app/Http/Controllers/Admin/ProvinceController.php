<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Province;
class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces=Province::paginate(25);
        return view('admin/province/index',compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/province/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'province'=>'required|unique:provinces'
        ]);

        $minuscula=strtolower($data['province']);
       $slug=str_slug($minuscula);

        Province::create([
            'province'=>$data['province'],
            'slug'=>$slug
        ]);
        
        return redirect()->route('province.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $province=Province::find($id);
        return view('admin.province.edit',compact('province'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->validate([
            'province'=>'required|unique:provinces'
        ]);

        $minuscula=strtolower($data['province']);
        $slug=str_slug($minuscula);

        $province=Province::find($id);
        
        $province->update([
            'province'=>$data['province'],
            'slug'=>$slug
        ]);
        
        return redirect()->route('province.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Province::find($id)->delete();
        return redirect()->route('province.index');
    }
}
