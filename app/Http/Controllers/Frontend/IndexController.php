<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogpost;
use App\Models\Benifit;
use App\Models\About;
// use App\Models\MenuItem;
use App\Models\postCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function home(){

      $benifits=Benifit::orderBy('id','DESC')->limit('4')->get();
    $abouts=About::orderBy('id','DESC')->limit('2')->get();

    return view('frontend.index',compact(['benifits','abouts']));
  }



    public function post($slug)
    {
      $post = Blogpost::with('category', 'user')->where('slug', $slug)->first();

       $recentPosts = Blogpost::with('category', 'user')->inRandomOrder()->limit(3)->get();

       // More related posts
       $relatedPosts = Blogpost::orderBy('category_id', 'desc')->inRandomOrder()->take(4)->get();
       $firstRelatedPost = $relatedPosts->splice(0, 1);
       $firstRelatedPosts2 = $relatedPosts->splice(0, 2);
       $lastRelatedPost = $relatedPosts->splice(0, 1);

       $categories = postCategory::all();
       // $tags = Tag::all();

       if($post){
           return view('frontend.layouts.blogpost', compact(['post', 'recentPosts','categories', 'firstRelatedPost', 'firstRelatedPosts2', 'lastRelatedPost']));
       }else {
           return redirect('/');
       }
    }

      // $data = Blogpost::orderBy('created_at', 'DESC')->take(5)->get();
      // $recentPost = Blogpost::orderBy('created_at','DESC')->paginate(9);
      // return view('website.home',compact(['posts','recentPost ']));
      // $posts = Blogpost::with('category', 'user')->orderBy('created_at', 'DESC')->take(5)->get();
      // $firstPosts2 = $posts->splice(0, 2);
      // $middlePost = $posts->splice(0, 1);
      // $lastPosts = $posts->splice(0);
      //
      // $footerPosts = Blogpost::with('category', 'user')->inRandomOrder()->limit(4)->get();
      // $firstFooterPost = $footerPosts->splice(0, 1);
      // $firstfooterPosts2 = $footerPosts->splice(0, 2);
      // $lastFooterPost = $footerPosts->splice(0, 1);
      //
      // $recentPosts = Blogpost::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(9);
      // return view('website.post', compact(['posts', 'recentPosts', 'firstPosts2', 'middlePost', 'lastPosts', 'firstFooterPost', 'firstfooterPosts2', 'lastFooterPost']));
      public function contact(){
      return view('frontend.layouts.contactus');

      }

    }
