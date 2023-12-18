<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Message;
use App\Models\User;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Updates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        $tests=Testimonial::latest()->take(5)->get();
        $updates = Updates::latest()->take(3)->get();
        $partners = Partner::all();
        return view('home',compact('articles','tests','updates','partners'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function portfolio(){
        $items = Portfolio::all();
        return view('portfolio',compact('items'));
    }
    public function team(){
        $users=User::where('role','!=', 'Guest')->where('role','!=', 'Admin')->get();
        return view('team',compact('users'));
    }
    public function insights(){
        $articles=Article::all();
        return view('articles',compact('articles'))->with('comments','likes');
    }
    public function insight($slug){
        $articles=Article::all();
        $article = Article::where('slag',$slug)->join('users','users.id','=','articles.author')->first();
        return view('article',compact('articles','article'))->with('comments','likes');
    }
    public function ups(){
        $updates=Updates::all();
        return view('updates',compact('updates'));
    }
    public function up($id){
        $update= Updates::find($id);
        $updates=Updates::all();
        return view('update',compact('updates','update'));
    }
    public function dashboard(){
        $posts=Article::all();
        $messages= Message::where('isread',false)->get();
        return view('admin.index',compact('posts','messages'))->with('comments','likes');
    }
}
