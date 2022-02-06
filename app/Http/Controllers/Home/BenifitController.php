<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Benifit;
class BenifitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $benifits= Benifit::orderBy('created_at', 'DESC')->paginate(20);
      return view('admin.benifit.index',compact('benifits'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benifits= Benifit::all();;
        return view('admin.benifit.create',compact('benifits'));
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
        'description'=>'string|nullable',


      ]);
      // dd($request->all());
      $benifits = Benifit::create([
        'title'=>$request->title,

        'image'=>'image.png',
        'description'=>$request->description,

      ]);

      // $post->tags()->attach($request->tags);
        // $post->postTags()->attach($request->tags);

      if($request->has('image')){
        $image=$request->image;
        $image_new_name = time().'.'.$image->getClientOriginalName();
        // return $image_new_name;
        $image->move('storage/benifit/',$image_new_name);
        $benifits->image='/storage/benifit/'.$image_new_name;
        $benifits->save();
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
