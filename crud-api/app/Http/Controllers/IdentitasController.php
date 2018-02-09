<?php

namespace App\Http\Controllers;

use App\Identitas;
use Illuminate\Http\Request;
use App\Http\Requests;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function manageIdentitas()
     {
       return view('web.home');
     }

    public function index()
    {
      $identitas  = Identitas::paginate(10);

    	return response()->json($identitas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $identitas = Identitas::create($request->all());

    return response()->json($identitas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $identitas = new Identitas; 
        $identitas->name =  $request->input('name');
        $identitas->adress =  $request->input('address');
        $identitas->phone =  $request->input('phone');

        $identitas->save();

        return response()->json($identitas, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $identitas=Identitas::findorFail($id);
   return response()->json($identitas);
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
      $identitas  = Identitas::find($id);
    $identitas->name = $request->input('name');
    $identitas->adress = $request->input('adress');
    $identitas->phone= $request->input('phone');
    $post->save();

    return response()->json($identitas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $identitas=Identitas::find($id);
    $identitas=delete();
    return response()->json('Hapus Berhasil');
    }

    public function view($id)
    {
      $identitas  = Identitas::find($id);
        return response()->json($identitas);
    }
}
