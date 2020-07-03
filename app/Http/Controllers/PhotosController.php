<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos  = Photos::all();
        return view ('photos.tampil', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('photos.add');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'date' => 'bail|required|unique:photos',
            'title' => 'required'
        ],
        [
            'date.required' => 'NAMA wajib diisi',
            'date.unique' => 'Nama Barang Sudah ada',
            'title.required' => 'Text wajib diisi'
        ]);
        
        Photos::create([
            'date' => $request->date,
            'title' => $request->title,
            'text' => $request->text,
            'post_id' => $request->post_id

            
        ]);

        return redirect('photos');
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
         $photos= Photos::findOrFail($id);
            return view ('photos.edit', compact('photos'));
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
         $request->validate([
            'date' => 'bail|required|unique:photos',
            'title' => 'required'
        ],
        [
            'date.required' => 'Tanggal wajib diisi',
            'date.unique' =>'Tanggal Sudah ada',
            'title.required' => 'Title wajib diisi'
        ]);

        $photos = Photos::findOrFail($id);
        $photos->update([
            'date' => $request->date,
            'title' => $request->title,
            'text' => $request->text,
            'post_id' => $request->post_id
        ]);

        return redirect('photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $photos = Photos::findOrFail($id);
        $photos->delete();

        return redirect ('photos');
    }
}
