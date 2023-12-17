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
            'except' => 'required|max:200',
            'cover' => 'required|image',
            'tags' => 'required'
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
        //
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
            'except' => 'required|max:200',
            'tags' => 'required'
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

    function smsB($phone, $message)
    {
        $data = json_encode(["data" => [
            "addresses" => [$phone],
            "message" => $message,
            "target_device_iden" => "ujxEeGElrMasjCuudUDB92",
        ]]);
        $token = 'o.F857d9ueES4ptumrrnCVTfOmxiWwgGbr';
        $response = Http::withBody($data, 'application/json')->withHeaders(['Access-Token' => $token])->post('https://api.pushbullet.com/v2/texts');
        $result = json_decode($response);
        return $result;
    }
    function MakinduCM()
    {
        $message=[];
        $messages = [$message];
        $names = [
            ["contact"=>"+254112228252","name"=>'Pauline Akinyi'],
            ["contact"=>"+254757694451","name"=>'Purity Kefa'],
            ["contact"=>"+254707928699","name"=>'Sharon Monyenye'],
            ["contact"=>"+254743536389","name"=>'Ian Musah'],
            ["contact"=>"+254758813342","name"=>'Fidel Castro'],
            ["contact"=>"+254740510174","name"=>"Calton Ochieng'"],
            ["contact"=>"+254707928699","name"=>'Joan Okumu'],
            ["contact"=>"+254759493394","name"=>'Christine James'],
            ["contact"=>"+254796885850","name"=>'Brenda Sophie'],
            ["contact"=>"+254700712666","name"=>'Elizabeth Makori'],
            ["contact"=>"+254716733298","name"=>'Rael Beneti'],
            ["contact"=>"+254782605068","name"=>'Mackline Akinyi'],
            ["contact"=>"+254740910920","name"=>'Joy Obala'],
            ["contact"=>"+254757480895","name"=>'Sandra Nekesa'],
            ["contact"=>"+254742761211","name"=>'Lilian Kambua'],
            ["contact"=>"+254759349604","name"=>'Emma Bitengo'],
            ['contact'=>"+254722298467","name"=>"Nicole Chepngetich"],
            ["contact"=>"+254701583807","name"=>'Edimon Ombati'],
        ];
        foreach ($names as $name) {
            $message = "Good morning " . $name['name'] . ". Thank you for enrolling for the AUSAA Makindu Mission 2023/24. We are glad to inform you that you have been selected to serve in the children ministries for the mission. Kindly join the group using this link for further communication. https://chat.whatsapp.com/GmR2Hx031TKIZml8zWC6mS";
            $result = $this->smsB($name['contact'], $message);
            array_push($messages, json_encode($result));
        }

        return $messages;
    }
}

