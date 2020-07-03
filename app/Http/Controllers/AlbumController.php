<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album  = Album::all();
        return view ('album.tampil', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('album.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'bail|required|unique:text',
            'text' => 'required'
        ],
        [
            'name.required' => 'NAMA wajib diisi',
            'name.unique' => 'Nama Barang Sudah ada',
            'text.required' => 'Text wajib diisi'
        ]);
        
        Post::create([
            'name' => $request->date,
            'text' => $request->text,
            'photos_id' => $request->photos_id
            
        ]);

        return redirect('album');
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
         $album= Album::findOrFail($id);
            return view ('album.edit', compact('album'));
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
            'name' => 'bail|required|unique:album',
            'text' => 'required'
        ],
        [
            'name.required' => 'Nama wajib diisi',
            'name.unique' =>'Nama Tahun Sudah ada',
            'text.required' => 'Text wajib diisi'
        ]);

        $album = Album::findOrFail($id);
        $album->update([
            'name' => $request->name,
            'text' => $request->text,
            'photos_id' => $request->photos_id,
           
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect ('album');
    }
}
