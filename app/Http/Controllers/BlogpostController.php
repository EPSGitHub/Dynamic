<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blogpost;
use App\Models\post_tag;
use App\Models\postCategory;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blogpost::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.post.Blogpost.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $post_tag= post_tag::all();
      $categories = postCategory::all();
      return view('admin.post.Blogpost.create',compact(['categories','post_tag']));
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
          'title'=>'required|unique:posts,title',
          'image'=>'required|image',
          'description'=>'required',
          'category'=>'required',
        ]);
        // dd($request->all());
        $post = Blogpost::create([
          'title'=>$request->title,
          'slug'=>Str::slug($request->title),
          'image'=>'image.jpg',
          'description'=>$request->description,
          'user_id'=>auth()->user()->id,
          'category_id'=>$request->category,
          'published_at'=>Carbon::now(),
        ]);

        // $post->tags()->attach($request->tags);
          // $post->postTags()->attach($request->tags);

        if($request->has('image')){
          $image=$request->image;
          $image_new_name = time().'.'.$image->getClientOriginalName();
          // return $image_new_name;
          $image->move('storage/blogpost/',$image_new_name);
          $post->image='/storage/blogpost/'.$image_new_name;
          $post->save();
        }

       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   //   public function show(Blogpost $post)
   // {
   //     return view('admin.post.Blogpost.show', compact('post'));
   // }
    public function show($id)
    {
        $post= Blogpost::find($id);
        return view('admin.post.Blogpost.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
      $post= Blogpost::find($id);
     $categories= postCategory::all();
     // $post_tag= post_tag::all();
     return view('admin.post.Blogpost.edit',[
         'post' => $post,
         'categories' => $categories,
         // 'post_tags' => $post_tag,
     ]);
        // $categories = postCategory::all();
        // return view('admin.post.Blogpost.edit',compact(['post','categories']));
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
       $this->validate($request, [
           'title' => "required|unique:posts,title",
           'description' => 'required',
           'category' => 'required',
       ]);

         $post = $id;
         $post=Blogpost::find($post);
         $post -> title = $request->title;
         $post-> slug=Str::slug($request->title);
         $post->description = $request->description;
         $post->category_id = $request->category;

         // $edit_data->postCategories()->sync($request->checkbox);
         // $edit_data->postTags()->sync($request->tag);
         if($request->hasFile('image')){
             $image = $request->image;
             $image_new_name = time() . '.' . $image->getClientOriginalExtension();
             $image->move('storage/blogpost/', $image_new_name);
             $post->image = '/storage/blogpost/' . $image_new_name;
         }

         $post->save();

         $post->update();

         return redirect()->route('blogpost.index');
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Blogpost::find($id);
      $post ->delete();
      return redirect()->back();
    }
}
