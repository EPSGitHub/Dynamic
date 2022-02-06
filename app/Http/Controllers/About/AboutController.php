<?php

namespace App\Http\Controllers\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $abouts= About::orderBy('created_at', 'DESC')->paginate(20);
      return view('admin.HomeAbout.index',compact('abouts'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $abouts = About::all();
        return view('admin.HomeAbout.create',compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'title'=>'required|string',
        'image'=>'required|image',
        'description1'=>'string|nullable',
        'description2'=>'string|nullable',


      ]);
      // dd($request->all());
      $abouts = About::create([
        'title'=>$request->title,

        'image'=>'mimes:jpeg,png,bmp,tiff |max:4096',
        'description1'=>$request->description1,
        'description2'=>$request->description2,

      ]);

      // $post->tags()->attach($request->tags);
        // $post->postTags()->attach($request->tags);

      if($request->has('image')){
        $image=$request->image;
        $image_new_name = time().'.'.$image->getClientOriginalName();
        // return $image_new_name;
        $image->move('storage/about/',$image_new_name);
        $abouts->image='/storage/about/'.$image_new_name;
        $abouts->save();
      }

     return redirect()->back();
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
        //
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
