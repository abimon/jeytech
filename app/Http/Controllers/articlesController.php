<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class articlesController extends Controller
{
    public function index()
    {
        // return 'Success';
        $articles = Article::all();
        return view('articles.index', compact('articles'))->with('likes','comments');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $tags = json_encode(explode(',', request()->tags));

        $data = $this->validate(request(), [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'except' => 'required|max:400',
            'cover' => 'required|image',
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/blog', $filename);
        }
        $art = Article::create([
            'title' => $data['title'],
            'category' => $data['category'],
            'content' => $data['content'],
            'except' => $data['except'],
            'cover' => $filename,
            'tags' => $tags,
            'slag' => Str::slug(request()->title, '-'),
            'author' => Auth()->user()->id
        ]);
        return redirect('/dashboard');
    }

    public function show($id)
    {
        $articles = Article::all();
        $article = Article::find($id);
        return view('articles.show', compact('articles'))->with('likes','comments');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update( $id)
    {
        $art = Article::findOrFail($id);
        $tags = json_encode(explode(',', request()->tags));

        $data = $this->validate(request(), [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'except' => 'required|max:400',
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/blog', $filename);
        }
        else{
            $filename= $art->cover;
        }
        $art = Article::where('id',$id)->update([
            'title' => $data['title'],
            'category' => $data['category'],
            'content' => $data['content'],
            'except' => $data['except'],
            'cover' => $filename,
            'tags' => $tags,
            'slag' => Str::slug(request()->title, '-'),
            'author' => Auth()->user()->id
        ]);
        return redirect()->route('article.index', $id)->with('message', 'Article updated successfully!');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('article.index')->with('message', 'Article deleted successfully!');
    }

}

