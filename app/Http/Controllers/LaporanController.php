<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Laporan;
use App\Photo;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporan = laporan::all();
        return view('admin.laporan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $laporan = laporan::all();
        return view('admin.laporan.create', compact('laporan'));
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

        $input = $request->all();

        if($file = $request->file('photo_id')){

        $name = time() . $file->getClientOriginalName();

        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);

        $input['photo_id'] = $photo->id;

    }

    //$input['password'] = bcrypt($request->password);

    Laporan::create($input);

     return redirect('/admin/laporan');

  //      return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $laporan = laporan::find($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.laporan.edit', compact('laporan','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::find($id);

        $input = $request->all();

        if($file = $request->file('photo_id')){

        $name = time() . $file->getClientOriginalName();

        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);

        $input['photo_id'] = $photo->id;

    }

    $user->update($input);

     return redirect('/admin/Laporan');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
