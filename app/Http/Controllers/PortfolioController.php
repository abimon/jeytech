<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Portfolio::all();

        return view('admin.portfolios.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'title' => 'required',
            'cover'=>'required|image',
            'details'=>'required',
            'category' => 'required',
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/projects', $filename);
        }
        Portfolio::create([
            'title' => $data['title'],
            'details' => $data['details'],
            'category' => $data['category'],
            'cover' => $filename,
        ]);
        return redirect()->route('portfolio.index')->with('message','Project successifully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portifolio = Portfolio::find($id);
        return view('admin.portfolios.edit',compact('portifolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = $this->validate(request(), [
            'title' => 'required',
            'details'=>'required',
            'category' => 'required',
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/projects', $filename);
        }
        else{
            $filename=(Portfolio::find($id))->cover;
        }
        Portfolio::where('id',$id)->update([
            'title' => $data['title'],
            'details' => $data['details'],
            'category' => $data['category'],
            'cover' => $filename,
        ]);
        return redirect()->route('portfolio.index')->with('message','Project successifully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::destroy($id);
        return redirect()->route('portfolio.index');
    }
}
