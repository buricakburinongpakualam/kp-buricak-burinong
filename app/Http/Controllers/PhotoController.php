<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Wst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.photo.index', [
            'posts' => Photo::paginate(3),
            'wsts' => Wst::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $wst= Wst::where('slug', $id)->first();
        return view('dashboard.photo.create', [
            'wst' => $wst
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_wst' => 'required|max:255',
            'name' => 'required|max:255',
            'slug' => 'required',
        ]);
        $validatedData['link'] = 'required|max:1024';
        
        if($request->link != null && $request->file('image') != null) {
            // dd($request->link);
            $validatedData = $request->validate([
                'image' => 'same:link',
                'link' => 'same:image',
            ]);

        }
        elseif($request->link == null && $request->file('image') == null) {
            $validatedData = $request->validate([
            'image' => 'required',
            'link' => 'required',
        ]);
        }
        elseif($request->link == null) {
            $validatedData = $request->validate([
            'id_wst' => 'required|max:255',
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required|image|file|max:3072',
        ]);
        
    }
    else{
        $validatedData = $request->validate([
            'id_wst' => 'required|max:255',
            'name' => 'required|max:255',
            'slug' => 'required',
            'link' => 'required|max:255|url',
        ]);
    }
    
    if ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
        Photo::create($validatedData);

        return redirect('dashboard/photoss')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('dashboard.photo.edit', [
            'wst' => $photo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required',

        ];


        if($request->link == null && $request->file('image') == null) {
            $rules = [
            'image' => 'required',
            'link' => 'required',
        ];
        }
        elseif($request->image == null && $request->link != null){
            $rules = [
            'link' => 'required',
        ];
        if ($request->slug != $photo->slug) {
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);
        $validatedData['image'] = '';


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        Photo::where('id', $photo->id)
            ->update($validatedData);
        }
    else{
       $rules = [
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required|image|file|max:3072',
        ];


        if ($request->slug != $photo->slug) {
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);
        $validatedData['link'] = '';

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        Photo::where('id', $photo->id)
            ->update($validatedData);
    }

        return redirect('dashboard/photos')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if ($photo->image) {
            Storage::delete($photo->image);
        }
        Photo::destroy($photo->id);
        return redirect('dashboard/photos')->with('success', 'Data berhasil dihapus!');
    }
}
