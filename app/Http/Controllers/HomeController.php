<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function team(){
        $users=User::where('role','!=', 'Guest')->where('role','!=', 'Admin')->get();
        return view('team',compact('users'));
    }
    public function insights(){
        $articles=Article::all();
        return view('articles',compact('articles'))->with('comments','likes');
    }
    public function dashboard(){
        $posts=Article::all();
        return view('admin.index',compact('posts'))->with('comments','likes');
    }
    public function insight($slug){
        $articles=Article::all();
        $article = Article::where('slag',$slug)->join('users','users.id','=','articles.author')->first();
        return view('article',compact('articles','article'))->with('comments','likes');
    }
}
