<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permasalahan;
use App\Photo;

class PermasalahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permasalahan = Permasalahan::all();
        return view('admin.permasalahan.index', compact('permasalahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permasalahan = permasalahan::all();
        return view('admin.permasalahan.create', compact('permasalahan'));
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

    permasalahan::create($input);

     return redirect('/admin/permasalahan');

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
        $permasalahan = permasalahan::find($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.permasalahan.edit', compact('permasalahan','roles'));
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

     return redirect('/admin/permasalahan');


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
