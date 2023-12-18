<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index',compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }

    public function store()
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'country'=>'required',
            'logo' => 'required|image',
        ]);
        if (request()->hasFile('logo')) {
            $extension = request()->file('logo')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('logo')->storeAs('public/partners', $filename);
        }
        Partner::create([
            'name' => $data['name'],
            'country' => $data['country'],
            'logo' => $filename,
        ]);
        return redirect()->route('partners.index')->with('message','Partner successifully created');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $item = Partner::findOrFail($id);
        return view('admin.partners.edit',compact('item'));
    }

 
    public function update($id)
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'country'=>'required',
        ]);
        if (request()->hasFile('logo')) {
            $extension = request()->file('logo')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('logo')->storeAs('public/partners', $filename);
        }
        else{
            $filename = (Partner::where('id',$id)->first())->cover;
        }
        Partner::where('id',$id)->update([
            'name' => $data['name'],
            'country' => $data['country'],
            'logo' => $filename,
        ]);
        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect(route('partners.index'));
    }
}
