<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Penjelasan;
use App\Photo;

class PenjelasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjelasan = Penjelasan::all();
        return view('admin.penjelasan.index', compact('penjelasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $penjelasan = penjelasan::all();
        return view('admin.penjelasan.create', compact('penjelasan'));
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

    penjelasan::create($input);

     return redirect('/admin/penjelasan');

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
        $penjelasan = penjelasan::find($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.permasalahan.edit', compact('penjelasan','roles'));
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

     return redirect('/admin/penjelasan');


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
