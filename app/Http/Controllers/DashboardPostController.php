<?php

namespace App\Http\Controllers;

use App\Models\Wst;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Wst::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:wsts',
            'alamat' => 'required',
            'desc' => 'required'
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:wsts',
            'image' => 'required|image|file|max:3072',
            'alamat' => 'required',
            'desc' => 'required'
        ]);
        
    }
    else{
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:wsts',
            'link' => 'required|max:255|url',
            'alamat' => 'required',
            'desc' => 'required'
        ]);
    }
    
    if ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
        Wst::create($validatedData);

        return redirect('dashboard/posts')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wst  $wst
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wst= Wst::where('slug', $id)->first();
        return view('dashboard.posts.show', [
            'post' => $wst
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Wst $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            // 'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wst $post)
    {
        // dd($request);
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:wsts',
            'alamat' => 'required',
            'desc' => 'required'
        ];


        // if($post->link != null && $request->file('image') != null) {
        //     $rules = [
        //         'image' => 'same:link',
        //         'link' => 'same:image',
        //     ];
        // }
        if($request->link == null && $request->file('image') == null) {
            $rules = [
            'image' => 'required',
            'link' => 'required',
        ];
        }
        
    elseif($request->image == null && $request->link != null){
       $rules = [
            'name' => 'required|max:255',
            // 'slug' => 'required|unique:wsts',
            'link' => 'required|max:255|url',
            'alamat' => 'required',
            'desc' => 'required'
        ];
        
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:wsts';
        }
        
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:wsts';
        }
        $validatedData = $request->validate($rules);
        $validatedData['image'] = '';
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }    
        
            Wst::where('id', $post->id)
            ->update($validatedData); 
    
            
    }
    else {
        $rules = [
         'name' => 'required|max:255',
         // 'slug' => 'required|unique:wsts',
         'image' => 'required|image|file|max:3072',
         'alamat' => 'required',
         'desc' => 'required'
     ];  
     if ($request->slug != $post->slug) {
         $rules['slug'] = 'required|unique:wsts';
        }
        $validatedData = $request->validate($rules);
        $validatedData['link'] = '';
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
     }    
     
         Wst::where('id', $post->id)
         ->update($validatedData); 
     
    }
        return redirect('dashboard/posts')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wst $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Wst::destroy($post->id);
        return redirect('dashboard/posts')->with('success', 'Data berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Wst::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
